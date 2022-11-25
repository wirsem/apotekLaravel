<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Drug, User};

class HomeUserController extends Controller
{
    public function indexUser()
    {
		$drugs = Drug::paginate (20);
    	return view('home/indexUser', [            
    		'drug' => Drug::count(),
    		'user' => User::count()
    	], compact ('drugs'));
		
    }

	
}
