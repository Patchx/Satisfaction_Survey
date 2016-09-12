<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;

class HomeController extends Controller
{
	public function getHomepage()
	{
		$year = Carbon::now()->year;
		$data['year'] = $year;

    	return view('welcome', $data);
	}
}
