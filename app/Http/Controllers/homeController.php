<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\UserInformation;
use DataTables;

class homeController extends Controller
{
    public function dynamiDatatable(){
        return view('table');
    }

   public function findData(Request $request){
  
      $userinfo = UserInformation::all();

            return Datatables::of($userinfo)
                    ->addIndexColumn()
                    ->make(true);

   }

}
