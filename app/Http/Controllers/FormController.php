<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Form;

class FormController extends Controller
{
    public function getStep($type, $year, $step)
    {
    	$folderName = (new Form)->getFolderName($type);
    	$data['year'] = $year;
    	
    	return view('forms.' . $folderName . '.step' . $step, $data);
    }
}
