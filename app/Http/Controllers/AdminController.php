<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        Log::info('Inside admin controller');
        return view('admin.dashboard');
    }

    public function livedata()
    {
        return view('livedata.livedata');
    }
}
