<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;
//
//use Illuminate\Http\Requests;

use App\Http\Requests\StudentRequest;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
            $users = DB::table('users')->count();
            $students = DB::table('students')->count();
            return view('dashboard', compact('users', 'students'));
        
    }
}
