<?php

namespace App\Http\Controllers;


use App\Models\Requestlist;
use App\Models\User;

use Illuminate\Http\Request;


class MtncoController extends Controller
{
    public function jeeplist()
    {
        $data=user::all();
        return view("mtnco.jeeplist",compact("data"));
    }

    public function ton()
    {
        $data=user::all();
        return view("mtnco.ton",compact("data"));
    }

    public function pickup()
    {
        $data=user::all();
        return view("mtnco.pickup",compact("data"));
    }

    public function jeep1()
    {
        $data=user::all();
        return view("mtnco.jeep1",compact("data"));
    }

    public function addjeep()
    {
        $data=user::all();
        return view("mtnco.addjeep",compact("data"));
    }

    public function drivers()
    {
        $data=user::all();
        return view("mtnco.drivers",compact("data"));
    }

    public function requestlist()
    {
        $data=user::all();
        return view("mtnco.requestlist",compact("data"));
    }

    public function adddriver()
    {
        $data=user::all();
        return view("mtnco.adddriver",compact("data"));
    }

    public function addrequest()
    {
        $data=user::all();
        return view("mtnco.addrequest",compact("data"));
    }

    
    
    public function upload(Request $request)
    {
        $data= new requestlist;

        $data->date =$request->date;
        $data->v_id =$request->v_id;
        $data->drivers_name =$request->drivers_name;
        $data->second_seatrers_name =$request->second_seaters_name;
        $data->authority =$request->authority;
        $data->destination =$request->destination;
        $data->km_reading =$request->km_reading;
        $data->start_time =$request->start_time;
        $data->probable_end_time =$request->probable_end_time;
        $data->last_maintenace_date =$request->last_maintenance_date;
        $data->comment =$request->comment;
        $data->save();
        return redirect() ->back() ;
    }

     
     

   

    
}
