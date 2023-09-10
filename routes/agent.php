<?php
use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
});
