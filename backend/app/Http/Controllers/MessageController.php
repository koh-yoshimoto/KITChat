<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MessageRepository;
use App\Repositories\TagsRepository;
use App\Repositories\Message_x_TagsRepository;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @param  MessageRepository  $messageRepository
     * @return void
     */
    public function __construct(MessageRepository $messageRepository, TagsRepository $tagsRepository, Message_x_TagsRepository $message_x_tagsRepository)
    {
        $this->repo = $messageRepository;
        $this->tags = $tagsRepository;
        $this->m_x_t = $message_x_tagsRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all the messages
        $messages = $this->repo->all();
        // Get all the tags that is academiac_year
        $academiac_years = $this->tags->where('type', 'academiac_year');
        // Get all the tags that is gender
        $genders = $this->tags->where('type', 'gender');
        // Get all the tags that is age
        $ages = $this->tags->where('type', 'age');
        // Get all the tags that is faculty
        $facultys = $this->tags->where('type', 'faculty');
        // Get all the tags that is department1
        $department1s = $this->tags->where('type', 'department1');

        // Load the view and pass the question types
        return view('home.index', compact('messages', 'academiac_years', 'genders', 'ages', 'facultys', 'department1s'));
    }

    public function postTweet(Request $request)
    {
        $validator = $request->validate([
            'content' => ['required', 'string'],
        ]);
        //message と message_x_tags に追加する処理
        $this->repo->create([
            'content' => $request->content,
            'sender' => Auth::id(),
            'tags' => "0",
        ]);
        $latest_message = $this->repo->latest_message();
        $req = $request->all();
        foreach($req as $key => $value){
            if ($key == "academicYear" or $key == "gender" or $key == "faculty" or $key == "department" or $key == "club"){
                if ($value == 0){
                    continue;
                }
                $this->m_x_t->create([
                    'message_id' => $latest_message->id,
                    'tag_id' => $value,
                ]);
            }
        }
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Set the require fields
        $request->validate([
            'content'=>'required',
            'tags'=>'required',
            'sender'=>'required',
        ]);

        // Create the tag object
        $data = array(
            'content' => $request->get('content'),
            'tags' => $request->get('tags'),
            'sender' => $request->get('sender')
        );
        
        $message = $this->repo->create($data);
        $messages = $this->repo->all();
        $tags = config('kitchat_tags.clubs');

        return redirect('/home')->with(['tags' => $tags, 'messages' => $messages]);
    }
}
