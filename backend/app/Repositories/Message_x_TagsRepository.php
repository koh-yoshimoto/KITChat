<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use App\Models\Message_x_Tags;

class Message_x_TagsRepository implements BaseRepositoryInterface
{
    public function all()
    {
        return Message_x_Tags::all();
    }

    public function show($id)
    {
        return Message_x_Tags::find($id);
    }

    public function create(array $data)
    {
        // Create the Message_x_Tags object
        $message_x_tags = new Message_x_Tags([
            'message_id' => $data['message_id'],
            'tag_id' => $data['tag_id'],
        ]);
        $message_x_tags->save();

        return $message_x_tags;

    }

    public function update(array $data, $id)
    {
        // Get the Message_x_Tags object and update the fields
        $message_x_tags = Message_x_Tags::find($id);
        $message_x_tags->message_id = $data['message_id'];
        $message_x_tags->tag_id = $data['tag_id'];

        // Save the Message_x_Tags
        $message_x_tags->save();

        return $message_x_tags;
    }

    public function delete( $id )
    {
        // Get the Message_x_Tags object
        $message_x_tags = Message_x_Tags::find($id);

        // Delete the object
        $message_x_tags->delete();
    }
}