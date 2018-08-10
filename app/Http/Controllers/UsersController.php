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

    public function emp_dashboard_controller()
    {
        return view('emp_dashboard');
    }

    public function tend_dashboard_controller()
    {
        return view('tend_dashboard');
    }  

    public function benchmark_dashboard_controller()
    {
        return view('benchmark_dashboard');
    }  

    public function policies_controller()
    {
        return view('policies');
    }
      public function project_dashboard_controller()
    {
        return view('project_dashboard');
    }
    public function datasheet_controller()
    {
        return view('datasheet');
    }
    public function active_page_controller()
    {
        return view('active_page');
    }
    public function success_page_controller()
    {
        return view('success_page');
    }
    public function unsuccess_page_controller()
    {
        return view('unsuccess_page');
    }
    public function canada_hover_controller()
    {
        return view('canada_hover');
    }
}
