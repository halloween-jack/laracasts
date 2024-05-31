<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class SearchController extends Controller
{
    public function __invoke(): View|Factory
    {
        $jobs = Job::query()->with(['employer', 'tags'])->where('title', 'LIKE', '%'.request('q').'%')->get();

        return view('results', ['jobs' => $jobs]);
    }
}
