<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TagController extends Controller
{
    public function __invoke(Tag $tag): View|Factory
    {
        return view('results', ['jobs' => $tag->jobs]);
    }
}
