<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardsController extends Controller
{
  public function show(): View
  {
    return view('app.admin.dashboards.show');
  }
}
