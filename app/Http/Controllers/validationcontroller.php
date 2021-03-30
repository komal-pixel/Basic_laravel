<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validationcontroller extends Controller
{
    public function form_validate(Request $req){
    	$req->validate([
    		'name'  => 'required|min:2',
    		'email' => 'required|email',
    		'doc'	=>  'required|mimes:jpg,png'
    	]);
    	$req->file('doc')->store('docs');
    	return 'validation successfull';
    }
}
