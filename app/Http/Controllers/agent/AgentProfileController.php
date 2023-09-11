<?php

namespace App\Http\Controllers\agent;

use App\Http\Controllers\Controller;
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
            'agent' => $agent,
        ]);
    }
}