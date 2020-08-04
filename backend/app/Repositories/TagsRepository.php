<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use App\Models\Tags;

class TagsRepository implements BaseRepositoryInterface
{
    public function all()
    {
        return Tags::all();
    }

    public function where($type, $data)
    {
        return Tags::where($type, $data)->get();
    }

    public function show($id)
    {
        return Tags::find($id);
    }

    public function create(array $data)
    {
        // Create the tags object
        $tags = new tags([
            'content' => $data['content'],
            'sender' => $data['sender'],
            'tags' => $data['tags'],
        ]);
        $tags->save();

        return $tags;

    }

    public function update(array $data, $id)
    {
        // Get the tags object and update the fields
        $tags = tags::find($id);
        $tags->content = $data['content'];
        $tags->sender = $data['sender'];
        $tags->tags = $data['tags'];

        // Save the tags
        $tags->save();

        return $tags;
    }

    public function delete( $id )
    {
        // Get the tags object
        $tags = tags::find($id);

        // Delete the object
        $tags->delete();
    }
}