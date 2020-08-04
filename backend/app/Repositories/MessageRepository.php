<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Message;
use App\Models\Tags;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Collection;
use phpDocumentor\Reflection\Types\Null_;
use PhpParser\ErrorHandler\Collecting;

class MessageRepository implements BaseRepositoryInterface
{
    public function all()
    {
        //return Message::all()->sortByDesc('created_at');
        $m = $this->get_user_timeline();
        return $m;
        //var_dump($m);
        //die;

    }

    public function show($id)
    {
        return Message::find($id);
    }

    public function latest_message()
    {
        return Message::orderBy('id', 'desc')
        ->first();
    }

    public function create(array $data)
    {
        // Create the message object
        $message = new Message([
            'content' => $data['content'],
            'sender' => $data['sender'],
            'tags' => $data['tags'],
        ]);
        $message->save();

        return $message;

    }

    public function update(array $data, $id)
    {
        // Get the message object and update the fields
        $message = Message::find($id);
        $message->content = $data['content'];
        $message->sender = $data['sender'];
        $message->tags = $data['tags'];

        // Save the message
        $message->save();

        return $message;
    }

    public function delete( $id )
    {
        // Get the message object
        $message = Message::find($id);

        // Delete the object
        $message->delete();
    }

    private function get_public_messages($only_id = FALSE){
        $messages = Message::leftJoin("message_x__tags", "messages.id", "=", "message_x__tags.message_id")
                        ->where("message_x__tags.message_id", Null)
                        ->orderBy("messages.created_at", "desc");
        if($only_id){
            $messages->select("messages.id");
        }
        return $messages->get();
    }
    private function get_list_messages_with_tags(){
        $messages_with_tags = DB::table("message_x__tags")->distinct()
                                ->select("message_id")->get();
        return $messages_with_tags;
    }

    private function get_user_timeline(){
        $all_ids = collect();
        //1) get the public messages
        $public_messages = $this->get_public_messages(TRUE)->pluck("id");
        $all_ids = $all_ids->concat($public_messages);


        //2) get the messages for the current user (according the tags)
        //    2.1) get the tags of the current tag
        $user = Auth::user();
        $user_tags = $this->get_user_tags($user);

        //    2.2) Create subquery
        $subquery = Message::join("message_x__tags", "messages.id", "=", "message_x__tags.message_id")
                        ->join("tags", "tags.id", "=", "message_x__tags.tag_id")
                        ->selectRaw("messages.id, GROUP_CONCAT(tags.id) as tags")
                        ->groupBy("messages.id");

        //    2.3) get the messages
        $messages_with_tags = DB::table(DB::raw("({$subquery->toSql()}) as sub"))
                    ->whereIn("tags", $user_tags)
                    ->select("id")
                    ->get();
        $all_ids = $all_ids->union($messages_with_tags->pluck("id"));


        //3) Get the messages created by the user.
        $my_messages = Message::where("sender", $user->id)
                        ->select("id")
                        ->get();

        $all_ids = $all_ids->union($my_messages->pluck("id"));
        $unique = $all_ids->unique();
        $all_ids = $unique->values()->all();

        $all_messages = Message::whereIn("id", $all_ids)
                        ->orderBy("messages.created_at", "desc")
                        ->get();
        return $all_messages;
    }


    /**********************************************************
     * Maybe this function should be in the UserRepository (if exists)
     */
    private function get_user_tags($user){
        $tags = array();
        $user_data = array(
            "academic_year"  => $user->academic_year,
            "age"            => $user->age,
            "gender"         => ($user->gender == 1) ? "man" : "woman",
            "faculty"        => $user->faculty,
            "department"     => $user->department,
            // club is not a tag?
        );

        // check for the tag_id in the Tags table
        foreach ($user_data as $key => $value) {
            if( !empty( $value ) ){
                $tag = Tags::where("name", $value)->first();
                if( !is_null($tag)){
                    $tags[] = $tag->id;
                }
            }
        }

        return $tags;
    }
}