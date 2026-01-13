<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardsController;

Route::middleware('auth')->prefix('admin')->as('admin.')->group(function () {
  Route::get('dashboard', [DashboardsController::class, 'show'])->name('dashboards.show');
});
