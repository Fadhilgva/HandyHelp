<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Jobs;

class CategoryController extends Controller
{
    public function index()
    {
        return view('guest.categories', [
            'title' => 'Jobs Categories',
            'categories' => Category::all()
        ]);
    }

    public function category(Category $category)
    {

        $jobs = Jobs::join('categories', 'jobs.category_id', '=', 'categories.id')
            ->where('jobs.category_id', '=', $category->id)
            ->select('jobs.*')->get();
        // dd($jobs);

        return view('guest.category', [
            'title' => 'Jobs in ' . $category->name,
            'jobs' => $jobs
        ]);
    }
}
