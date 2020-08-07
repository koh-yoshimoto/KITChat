<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use App\Models\Club;

class ClubRepository implements BaseRepositoryInterface
{
    public function all()
    {
        return Club::all();
    }

    public function show($id)
    {
        return Club::find($id);
    }

    public function create(array $data)
    {
        // Create the tags object
        $club = new Club([
            'club_id' => $data['club_id'],
            'clubname' => $data['clubname'],
            'member' => $data['member'],
        ]);
        $club->save();

        return $club;

    }

    public function update(array $data, $id)
    {
        // Get the tags object and update the fields
        $club = Club::find($id);
        $club->club_id = $data['club_id'];
        $club->clubname = $data['clubname'];
        $club->member = $data['member'];

        // Save the tags
        $club->save();

        return $club;
    }

    public function delete( $id )
    {
        // Get the tags object
        $club = Club::find($id);

        // Delete the object
        $club->delete();
    }
}