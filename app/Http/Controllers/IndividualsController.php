<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Individuals;


class IndividualsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('individuals');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new Individuals;
        $new->first_name = $request->input('first_name');
        $new->sur_name = $request->input('sur_name');

        $name_of_files = "";

        if($request->hasFile('images')){
            $files = $request->file('images');
            // for($counter = 0; $counter < count($files); $counter++){
            //     $filenameWithExt = $files[$counter]->getClientOriginalName();
        
            //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            //     $extension = $files[$counter]->getClientOriginalExtension();
            
            //     $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
                
            //     $path = $files[$counter]->storeAs('public/images/', $filenameToStore); 
            //     // $new->site_plan = $filenameToStore;
                
            //     // for($counter = 0; $counter < count($three); $counter++){
            //     //     $a_three .= $three[$counter] . ",";
            //     // }
            //     $name_of_files .= $files[$counter] . ",";
            // }
            foreach($files as $file){
                $filenameWithExt = $file->getClientOriginalName();
        
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
                $extension = $file->getClientOriginalExtension();
            
                $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
                
                $path = $file->storeAs('public/images', $filenameToStore); 
                // $new->site_plan = $filenameToStore;
                $name_of_files .= $filenameToStore . "/";
            }

            // for($counter = 0; $counter < count($files); $counter++){
            //         $name_of_files .= $files[$counter] . ",";
            // }

        }

        $name_of_files = substr($name_of_files, 0, -1);

        $new->images = $name_of_files;
        $new->save();

        return $name_of_files;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
