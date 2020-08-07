<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MessageRepository;
use App\Repositories\TagsRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        MessageRepository $messageRepository, 
        TagsRepository $tagsRepository )
    {
        $this->middleware('auth');
        $this->messageRepo = $messageRepository;
        $this->tags = $tagsRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tags = config('kitchat_tags.clubs');
        $messages = $this->messageRepo->all();

        // Get all the messages
        $messages = $this->messageRepo->all();
        // Get all the tags that is academiac_year
        $academiac_years = $this->tags->where('type', 'academiac_year');
        // Get all the tags that is gender
        $genders = $this->tags->where('type', 'gender');
        // Get all the tags that is age
        $ages = $this->tags->where('type', 'age');
        // Get all the tags that is faculty
        $facultys = $this->tags->where('type', 'faculty');
        // Get all the tags that are clubs
        $clubs = $this->tags->where('type', 'club');

        return view('home', compact('messages', 'academiac_years', 'genders', 'ages', 'facultys', 'clubs', 'tags', 'messages'));
    }
}
