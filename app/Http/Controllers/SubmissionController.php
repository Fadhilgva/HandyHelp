<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    public function index(Request $request, $id)
    {
        if (Auth::user()->role == 'contractor') {
            $job = Jobs::findOrFail($id);
            $request->validate([
                'rate_offer' => 'required'
            ]);
            $input['job_id'] = $job->id;
            $input['contractor_id'] = Auth::user()->id;
            $input['rate_offer'] = $request->rate_offer;
            Submission::create($input);

            return redirect()->back()->with('success', 'Your offer has been successfully submitted!');
        } else {
            return redirect('/login');
        }
    }

    public function contractor()
    {
        return view('contractor.submission', [
            'title' => 'HandyHelp | My Submission'
        ]);
    }

    public function member()
    {
        return view('member.submission', [
            'title' => 'HandyHelp | My Submission'
        ]);
    }
}
