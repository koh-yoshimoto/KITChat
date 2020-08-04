<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sender', 'content', 'tags' ];

    /**
     * Get the user that owns the message.
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'sender');
    }

    /**
     * Get the tags that belogngs to the message.
     */
    public function message_tags()
    {
        return $this->belongsToMany('App\Models\Tags', 'message_x__tags', 'message_id', 'tag_id');
    }
}
