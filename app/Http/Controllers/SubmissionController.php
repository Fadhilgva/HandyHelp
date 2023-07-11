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
                'rate_offer' => 'required',
                'comb' => 'required|unique:submissions'
            ]);
            $input['job_id'] = $job->id;
            $input['contractor_id'] = Auth::user()->id;
            $input['comb'] = $request->comb;
            $input['rate_offer'] = $request->rate_offer;
            Submission::create($input);

            return redirect()->back()->with('success', 'Your offer has been successfully submitted!');
        } else {
            return redirect()->back()->with('failed', 'Your offer has been successfully submitted!');
        }
    }

    public function contractor()
    {
        $subs = Submission::join('users', 'submissions.contractor_id', '=', 'users.id')
            ->where('submissions.contractor_id', '=', Auth::user()->id)->latest('submissions.created_at')
            ->select('submissions.*')->get();
        // dd($subs);
        return view('contractor.submission', [
            'title' => 'HandyHelp | My Submission',
            'subs' => $subs
        ]);
    }

    public function member(Jobs $job)
    {
        $subs = Submission::join('jobs', 'submissions.job_id', '=', 'jobs.id')
            ->join('users', 'jobs.user_id', '=', 'users.id')
            ->where('submissions.job_id', '=', $job->id)
            ->where('jobs.user_id', '=', Auth::user()->id)
            ->latest('submissions.created_at')
            ->select('submissions.*')->get();

        return view('member.submission', [
            'title' => 'HandyHelp | My Submission',
            'subs' => $subs
        ]);
    }
}
