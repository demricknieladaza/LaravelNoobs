<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function welcome_controller()
    {
    	return view('welcome');
    }

     public function publish_controller()
    {
    	return view('publish');
    }

    public function winwork_controller()
    {
    	return view('winwork');
    }

    public function pds_controller()
    {
    	return view('pds');
    }

    public function bid_controller()
    {
    	return view('bid');
    }

    public function dashboard_controller()
    {
    	return view('dashboard');
    }
}
