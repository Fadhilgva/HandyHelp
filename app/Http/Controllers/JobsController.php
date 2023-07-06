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
            'image_1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image_2' => 'image|mimes:jpeg,png,jpg|max:2048',
            'image_3' => 'image|mimes:jpeg,png,jpg|max:2048',
            'detail' => 'required|min:100|max:10000',
            'category_id' => 'required|numeric|min_digits:1',
            'location_id' => 'required|numeric|min_digits:1',
            'rate' => 'required|numeric|min_digits:1',
            'phone' => 'required|numeric|min_digits:8|max_digits:15',
            'option_one' => 'nullable',
            'option_two' => 'nullable'
        ]);

        $image_1 = time() . '.' . $request->image_1->getClientOriginalName();
        $request->image_1->move(public_path('img/jobs'), $image_1);

        if ($request->image_2) {
            $image_2 = time() . '.' . $request->image_2->getClientOriginalName();
            $request->image_2->move(public_path('img/jobs'), $image_2);
        }

        if ($request->image_3) {
            $image_3 = time() . '.' . $request->image_3->getClientOriginalName();
            $request->image_3->move(public_path('img/jobs'), $image_3);
        }

        $job = new Jobs;
        $job->user_id = Auth::user()->id;
        $job->title = $request->title;
        $job->slug = $request->slug;
        $job->image1 = $image_1;
        $job->detail = $request->detail;
        $job->category_id = $request->category_id;
        $job->location_id = $request->location_id;
        $job->rate = $request->rate;
        $job->phone = $request->phone;

        if ($request->image_2) {
            $job->image2 = $image_2;
        }

        if ($request->image_3) {
            $job->image3 = $image_3;
        }

        if ($request->option_one) {
            $job->option_one = $request->option_one;
        }

        if ($request->option_two) {
            $job->option_two = $request->option_two;
        }

        $job->save();

        return redirect('/profile')->with('success', 'Your job offer has been successfully uploaded!');
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

    public function city(City $city)
    {
        $jobs = Jobs::join('cities', 'jobs.location_id', '=', 'cities.id')
            ->where('jobs.location_id', '=', $city->id)
            ->select('jobs.*')->get();
        // dd($jobs);

        return view('guest.city', [
            'title' => 'Jobs in ' . $city->name,
            'jobs' => $jobs
        ]);
    }
}
