<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use App\Models\Message;

class MessageRepository implements BaseRepositoryInterface
{
    public function all()
    {
        return Message::all()->sortByDesc('created_at');
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
}