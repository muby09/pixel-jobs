<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(Tag $tag)
    {
        return view('results', ['jobs' => $tag->jobs]);
    }
}
