<?php

namespace App\Http\Controllers\agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAgentRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function agentprofile()
    {
        $id = Auth::id();
        $agent = User::where('id', $id)->first();
        return view('agent.profile.show', [
            'profileData' => $agent,
        ]);
    }
    public function updateAgentProfile(UpdateAgentRequest $request)
    {
        $request->validated();
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('agent/images/'), $filename);

        }
        $id = Auth::id();
        $agent = User::where('id', $id)->first();
        $agent->update([
            'username' => $request->username,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'bio' => $request->bio,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'photo' => $filename,
            'address' => $request->address,
        ]);
        return back()->with('success', 'Profile Updated');
    }
}