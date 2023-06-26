<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Jobs;
use App\Models\Country;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Console\View\Components\Alert;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $categories = Category::all();

        return view('member.member-posting', [
            'title' => 'HandyHelp | Posting Job',
            'cities' => $cities,
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|min:8|max:150',
            'slug' => 'required|unique:jobs,slug',
            'detail' => 'required|min:100|max:1000',
            'category_id' => 'required|min_digits:1',
            'location_id' => 'required|min_digits:1',
            'rate' => 'required|min_digits:1',
            'phone' => 'required|min_digits:8|max_digits:15'
        ]);
        // dd($request);
        $job = new Jobs;
        $job->user_id = Auth::user()->id;
        $job->title = $request->title;
        $job->slug = $request->slug;
        $job->detail = $request->detail;
        $job->category_id = $request->category_id;
        $job->location_id = $request->location_id;
        $job->rate = $request->rate;
        $job->phone = $request->phone;

        if ($request->opsi_one) {
            $job->opsi_one = $request->opsi_one;
        }

        if ($request->opsi_two) {
            $job->opsi_two = $request->opsi_two;
        }

        $job->save();

        // Alert::success('Success', "Data berhasil ditambahkan");

        return redirect('/profile');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Jobs::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function jobs()
    {
        return view('guest.jobs', [
            'title' => 'HandyHelp | Jobs',
            'jobs' => Jobs::with(['Category', 'User', 'Location'])->latest()->paginate(10),
        ]);
    }

    public function show(Jobs $job)
    {
        return view('guest.jobdetail', [
            'title' => $job->title,
            'job' => $job,
            'jobs' => $job
        ]);
    }
}
