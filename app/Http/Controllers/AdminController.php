<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Requestlist;
use Auth;
class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function adminjeeplist()
    {
        $data=user::all();
        return view("admin.adminjeeplist",compact("data"));
    }

    public function adminjeep1()
    {
        $data=user::all();
        return view("admin.adminjeep1",compact("data"));
    }

    public function adminrequest()
    {
        $data=user::all();
        return view("admin.adminrequest",compact("data"));

    }

    public function show()
    {
        $data=requestlist::all();
        return view("mtnco.requestlist",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
}
