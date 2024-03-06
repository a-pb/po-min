<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $languages = Language::with('loaded')->get();
        return view('dashboard.index', compact('languages'));
    }
}
