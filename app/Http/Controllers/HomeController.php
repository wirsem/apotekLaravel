<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Drug, User};

class HomeController extends Controller
{
    public function index()
    {
    	return view('home/index', [
    		'drug' => Drug::count(),
    		'user' => User::count()
    	]);
    }
}
