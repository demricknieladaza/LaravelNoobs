<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\ProjectInformations;
use App\Tender;
use App\TypeOfUse;
use App\TransportLink;
use App\AreaSpecificInformation;
use App\Constraints;
use App\Milestones;
use App\Meetings;
use App\UserAccountsModel;
use App\ProjectTeam;
use App\SavedTenders;
use App\TenderQuery;

class WinWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // $sub = DB::table('type_of_use_tbl')
        //             ->leftJoin('project_information_tbl as pj', 'type_of_use_tbl.project_record_id', '=', 'pj.project_record_id')
        //             ->get()
        //             ->groupBy('project_record_id');

        $work = DB::table('project_information_tbl')
                ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
                ->where('status', '=', 'Active')
                ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
                ->orderBy('project_information_tbl.created_at', 'desc')
                // ->get();
                ->paginate(5);
                // ->unique('project_record_id');

        // $type = array();
        // foreach($work as $wo){
        //     $use = TypeOfUse::where('project_record_id', $wo->project_record_id)->first();
        //     array_push($type,$use);
        // }

        $user = $request->session()->get('id');
        $liked = SavedTenders::where('user_id', $user)->get();
        $saved = array();
        foreach($liked as $wo){
            array_push($saved,$wo->tender_id);
        }
        
        // $new = json_encode($type);
        // return $type;
        // return $work; 
        // return count($type);         
        // return $work;
        // return $sub;
        // echo count($work);
        return view('winwork')->with([
            'project' => $work,
            'saved'   => $saved
        ]);
        // echo $work;
        // return $saved;

        

        // return $work;
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
        //
    }

    public function moveToSavedOps(Request $request){

        $id = $request->get('idd');
        $tender = $request->get('tenid');

        $sv = new SavedTenders;
        $sv->user_id = $request->session()->get('id');
        $sv->project_record_id = $id;
        $sv->tender_id = $tender;
        $sv->save();

        return ('SAVED');

    }

    public function searchFilters(Request $request){
        $s_filters = $request->service_filter;
        $u_filters = $request->use_filter;
        $from_filter = $request->from;
        $to_filter = $request->to;
        $loc_filter = $request->location;

        if(count($s_filters) != 0 AND count($u_filters) != 0 AND count($from_filter) != 0 AND count($to_filter) != 0 AND count($loc_filter) != 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            ->Where(function($query) use($u_filters){
                for($i = 0; $i < count($u_filters); $i++){
                    $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
                }
            })
            ->whereIn('services',$s_filters)
            ->where('location', $loc_filter)
            ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) != 0 AND count($u_filters) != 0 AND count($from_filter) != 0 AND count($to_filter) != 0 AND count($loc_filter) == 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            ->Where(function($query) use($u_filters){
                for($i = 0; $i < count($u_filters); $i++){
                    $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
                }
            })
            ->whereIn('services',$s_filters)
            // ->where('location', $loc_filter)
            ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) != 0 AND count($u_filters) != 0 AND count($from_filter) == 0 AND count($to_filter) == 0 AND count($loc_filter) == 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            ->Where(function($query) use($u_filters){
                for($i = 0; $i < count($u_filters); $i++){
                    $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
                }
            })
            ->whereIn('services',$s_filters)
            // ->where('location', $loc_filter)
            // ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) != 0 AND count($u_filters) == 0 AND count($from_filter) == 0 AND count($to_filter) == 0 AND count($loc_filter) == 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            // ->Where(function($query) use($u_filters){
            //     for($i = 0; $i < count($u_filters); $i++){
            //         $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
            //     }
            // })
            ->whereIn('services',$s_filters)
            // ->where('location', $loc_filter)
            // ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) != 0 AND count($u_filters) == 0 AND count($from_filter) == 0 AND count($to_filter) == 0 AND count($loc_filter) != 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            // ->Where(function($query) use($u_filters){
            //     for($i = 0; $i < count($u_filters); $i++){
            //         $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
            //     }
            // })
            ->whereIn('services',$s_filters)
            ->where('location', $loc_filter)
            // ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) != 0 AND count($u_filters) == 0 AND count($from_filter) != 0 AND count($to_filter) != 0 AND count($loc_filter) != 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            // ->Where(function($query) use($u_filters){
            //     for($i = 0; $i < count($u_filters); $i++){
            //         $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
            //     }
            // })
            ->whereIn('services',$s_filters)
            ->where('location', $loc_filter)
            ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) != 0 AND count($u_filters) == 0 AND count($from_filter) != 0 AND count($to_filter) != 0 AND count($loc_filter) == 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            // ->Where(function($query) use($u_filters){
            //     for($i = 0; $i < count($u_filters); $i++){
            //         $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
            //     }
            // })
            ->whereIn('services',$s_filters)
            // ->where('location', $loc_filter)
            ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) == 0 AND count($u_filters) != 0 AND count($from_filter) != 0 AND count($to_filter) != 0 AND count($loc_filter) != 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            ->Where(function($query) use($u_filters){
                for($i = 0; $i < count($u_filters); $i++){
                    $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
                }
            })
            // ->whereIn('services',$s_filters)
            ->where('location', $loc_filter)
            ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) == 0 AND count($u_filters) != 0 AND count($from_filter) == 0 AND count($to_filter) == 0 AND count($loc_filter) != 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            ->Where(function($query) use($u_filters){
                for($i = 0; $i < count($u_filters); $i++){
                    $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
                }
            })
            // ->whereIn('services',$s_filters)
            ->where('location', $loc_filter)
            // ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) == 0 AND count($u_filters) != 0 AND count($from_filter) == 0 AND count($to_filter) == 0 AND count($loc_filter) == 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            ->Where(function($query) use($u_filters){
                for($i = 0; $i < count($u_filters); $i++){
                    $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
                }
            })
            // ->whereIn('services',$s_filters)
            // ->where('location', $loc_filter)
            // ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) == 0 AND count($u_filters) != 0 AND count($from_filter) != 0 AND count($to_filter) != 0 AND count($loc_filter) == 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            ->Where(function($query) use($u_filters){
                for($i = 0; $i < count($u_filters); $i++){
                    $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
                }
            })
            // ->whereIn('services',$s_filters)
            // ->where('location', $loc_filter)
            ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) == 0 AND count($u_filters) == 0 AND count($from_filter) != 0 AND count($to_filter) != 0 AND count($loc_filter) != 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            // ->Where(function($query) use($u_filters){
            //     for($i = 0; $i < count($u_filters); $i++){
            //         $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
            //     }
            // })
            // ->whereIn('services',$s_filters)
            ->where('location', $loc_filter)
            ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) == 0 AND count($u_filters) == 0 AND count($from_filter) != 0 AND count($to_filter) != 0 AND count($loc_filter) == 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            // ->Where(function($query) use($u_filters){
            //     for($i = 0; $i < count($u_filters); $i++){
            //         $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
            //     }
            // })
            // ->whereIn('services',$s_filters)
            // ->where('location', $loc_filter)
            ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) == 0 AND count($u_filters) == 0 AND count($from_filter) == 0 AND count($to_filter) == 0 AND count($loc_filter) != 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            // ->Where(function($query) use($u_filters){
            //     for($i = 0; $i < count($u_filters); $i++){
            //         $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
            //     }
            // })
            // ->whereIn('services',$s_filters)
            ->where('location', $loc_filter)
            // ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }
        elseif(count($s_filters) == 0 AND count($u_filters) != 0 AND count($from_filter) == 0 AND count($to_filter) == 0 AND count($loc_filter) != 0){
            $work = DB::table('project_information_tbl')
            ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
            ->where('status', '=', 'Active')
            ->leftJoin('type_of_use_tbl as tb', 'project_information_tbl.project_record_id', '=', 'tb.project_record_id')
            ->Where(function($query) use($u_filters){
                for($i = 0; $i < count($u_filters); $i++){
                    $query->orwhere('use_name', 'like', '%' . $u_filters[$i] . '%');
                }
            })
            // ->whereIn('services',$s_filters)
            ->where('location', $loc_filter)
            // ->whereBetween('project_information_tbl.construction_value', array($from_filter, $to_filter))
            ->orderBy('project_information_tbl.created_at', 'desc')
            // ->get();
            ->paginate(5);
    
            $user = $request->session()->get('id');
            $liked = SavedTenders::where('user_id', $user)->get();
            $saved = array();
            foreach($liked as $wo){
                array_push($saved,$wo->tender_id);
            }
    
            return view('winwork')->with([
                'project' => $work,
                'saved'   => $saved
            ]);
        }



        

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
        $tenders = Tender::where('project_record_id', $id)
                         ->where('status', 'Active')
                         ->get();
                         
        $project = ProjectInformations::find($id);
        //This the sub models
        $transport = TransportLink::where('project_record_id', $id)->first();

        //$area = AreaSpecificInformation::where('project_record_id', $id)->get();
        $area = AreaSpecificInformation::where('project_record_id', $id)->first();

        $constraints = Constraints::where('project_record_id', $id)->get();

        $type = TypeOfUse::where('project_record_id', $id)->get();

        $milestones = Milestones::where('project_record_id', $id)->get();

        $meetings = Meetings::where('project_record_id', $id)->first();

        $team = ProjectTeam::where('project_record_id', $id)->get(); 

        $questions = TenderQuery::where('project_record_id', $id)->get();
        return view('pds')->with([
            'tenders'=> $tenders,
            'project' => $project,
            'transport' => $transport,
            'area' => $area,
            'constraints' => $constraints,
            'type' => $type,
            'milestones' => $milestones,
            'meetings' => $meetings,
            'team' => $team,
            'question' => $questions
            ]);
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
