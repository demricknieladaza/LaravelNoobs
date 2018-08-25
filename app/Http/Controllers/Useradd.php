<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FirstBlockModel;

class Useradd extends Controller
{
    public function addCountry(Request $request)
    {
        $uacc = new First_block_model();
        $uacc->uid = $request->uid;
        $uacc->data_name = $request->data_name;
        $uacc->status = $request->status;
        $uacc->save();
        return response()->json($uacc);
    }
}
