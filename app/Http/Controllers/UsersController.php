<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
  public function show()
    {
        return view('users.show');
    }
    //
}
