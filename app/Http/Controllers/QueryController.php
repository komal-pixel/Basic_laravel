<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class QueryController extends Controller
{
    function insert(){
    	return DB::table('user_table')
    	->insert(
    		[
    		'emp_type' => 'clerk',
    		'username' => 'John',
    		'password' => '1234',
    		'active'   => '1'
    		]
    	);

    }

    function update(){
    	return DB:: table('user_table')
    	->where('id',9)
    	->update(
    		[
    		'emp_type' => 'manager',
    		'username' => 'John Doe',
    		'password' => '12345',
    		'active'   => '1'	
    		]
    	);
    	}

    function delete(){
    	return DB::table('user_table')->where('id',10)->delete();
    }

    function getData(){
    	return DB::table('user_table')
    	->where('id',11)
    	->get();
    }

    function show_join(){
    	return DB::table('user_table')
    	->join('students','students.id','=','user_table.id')
    	->get();
    }
}
