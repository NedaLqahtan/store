<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Firstlogin extends Controller
{
function login(request $request ){

$data=$request->input();
$request->session()->put('user',$data['Username']);
 return redirect('Profile');


}



}
