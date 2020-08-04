<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //
    protected $fillable = ['name', 'type' ];

    /**
     * Get the messages that belogngs to the tag.
     */
    public function messages()
    {
        return $this->belongsToMany('App\Models\Message', 'message_x__tags', 'tag_id', 'message_id');
    }
}
