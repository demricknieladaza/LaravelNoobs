<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class OrganisationController extends Controller
{
    public function testSave(Request $request){


        $test = $request->testField;
        
        //return $test;


            $files = $request->file('testFile');
            foreach($files as $file){
                $filenameWithExt = $file->getClientOriginalName();
        
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
                $extension = $file->getClientOriginalExtension();
            
                $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
                
                $path = $file->storeAs('public/Test', $filenameToStore); 
              
            }


        return $test;

    }
}
