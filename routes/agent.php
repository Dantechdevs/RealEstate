<?php
use App\Http\Controllers\agent\AgentProfileController;
use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:agent'])->group(function () {

    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
    Route::controller(AgentProfileController::class)->prefix('agent')->group(function () {
        Route::get('/profile', 'agentprofile')->name('agent.profile');
        Route::patch('/update/profile', 'updateAgentProfile')->name('agent.update');


    });

});