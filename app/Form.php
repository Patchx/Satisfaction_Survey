<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    private $folderNameFromUri = [
    	'es-survey' => 'employee-satisfaction'
    ];

    public function getFolderName($uri)
    {
    	return $this->folderNameFromUri[$uri];
    }
}
