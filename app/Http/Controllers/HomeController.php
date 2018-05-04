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
    public function index()

    {
            
            return view('home');
        }
    }
}
