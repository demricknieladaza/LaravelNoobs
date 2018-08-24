<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\First_block_model;

class Useradd extends Controller
{
    public function addCountry(Request $request)
    {
        $this->validate($request, [
            'data_name' => 'required',
            'uid' => 'required',
            'status' => 'required',
        ]);
        $uacc = new First_block_model([
            'data_name' => $request->get('data_name'),
            'uid' => $request->get('uid'),
            'status' => 'active'
        ]);
        $uacc->save();
        return response()->json(['success'=>'Registered successfully!']);
    }
}
