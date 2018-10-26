<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAccountsModel;
use App\CompInfo;

class UserAccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);
        $pass = bcrypt($request->get('password'));
        $uacc = new UserAccountsModel([
            'fullname' => $request->get('fullname'),
            'company' => $request->get('company'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => $pass
        ]);
        $uacc->save();
        $ucomp = new CompInfo([
            'u_id' => $uacc->id,
            'comp_name' => $request->get('company'),
            'comp_email' => $request->get('email')
        ]);
        $ucomp->save();
        return response()->json(['success'=>'Registered successfully!']);
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
     * @param  int  $idate(format)
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function autocomplete(Request $request)
    {
        // $data = UserAccountsModel::select("company")
        //         ->where("company","LIKE","%{$request->input('query')}%")
        //         ->get();

        // $datas = array();
        // foreach ($data as $hsl)
        //     {
        //         $datas[] = $hsl->company;
        //     }
        // echo json_encode($datas);
   
        // return response()->json($datas);
        if($request->get('query'))
             {
              $query = $request->get('query');
              $data = CompInfo::select("comp_name")
                ->where('comp_name', 'LIKE', "%{$query}%")
                ->get();
              $output = '<ul class="dropdown-menu" style="display:block;position: relative;
    background: white;
    width: auto;">';
              if(!count($data)){
                echo "No Result Found";
              }
              else{
                foreach($data as $row)
                {   
                 $output .= '
                 <li class="chos">'.$row->comp_name.'</li>
                 ';
                }
                $output .= '</ul>';
                echo $output;
              }
              
             }
    }

    public function ind(Request $request)
    {
   
        return view('searching');
    }
}
