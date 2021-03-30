<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class mailController extends Controller
{
    function index(){
          $data = array('name'=>"Komal", 'surname'=>'Naikwadi');
   
      Mail::send('mail', $data, function($message) {
         $message->to('komalnaikwadi93@gmail.com', 'Tutorials Point')
            $message->subject('komal');
         $message->from('komalnaikwadi93@gmail.com','test');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
}
