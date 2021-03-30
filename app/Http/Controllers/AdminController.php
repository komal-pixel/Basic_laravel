<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
use App\students;
use App\member;

class AdminController extends Controller
{
    //

    function index(){
    	
    	return view('admin/dashboard');
    }

    function checkDB(){
    	// return DB::connection()->getDatabaseName();
    	return students::all();
    }

    function Login(Request $req){
    	 $data1 =  $req->input('name');
    	 //$req->session()->put('name',$data1);
    	 $req->session()->flash('name',$data1);

    	return  redirect('/admin');
    }

    function upload(Request $req ){
    	return $req->file('file')->store('docs');
    }

    function add_member(Request $req){
    	$data = $req->input();

    	 $member = new member();

    	 $member->name = $req->name;
    	 $member->email = $req->email;
    	 $member->mobile_no = $req->mobile_no;
    	 $member->address = $req->address;

    	 $member->save();
    	 return redirect('add_member');
    }

    function showMember(){
    	$device = member::paginate(5);
    	return view('admin.add_member',['members'=>$device]);
    }

     function show($id){
     $data = member::find($id);
     return view('admin.edit_member',['edit_member'=>$data]);
    }

    function delete($id){

    	$data = member::find($id);
    	$data->delete();
    	return redirect('add_member');
    }

     function update(Request $req){
    	$data = member::find($req->id);

    	$data->name = $req->name;
    	$data->email = $req->email;
    	$data->mobile_no = $req->mobile_no;
    	$data->address = $req->address;

    	$data->save();
    	return redirect('add_member');

    }
}