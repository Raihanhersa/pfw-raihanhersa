<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()
            ->route('auth.login')
            ->withErors('Silahkan login terlebih dahulu');
        }

        return view('admin.dashboard');
    }
}
