<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'club';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['club_id', 'clubname', 'member' ];
}
