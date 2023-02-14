<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
//fun to get user visit web site
     public function GetVisitorDetails()
     {
         $ip_address=$_SERVER['REMOTE_ADDR'];
         date_default_timezone_set("Africa/Ouagadougou");
         $visit_time=date('h:i:sa');
         $visit_date=date("d-m-y");
         //insert to data base
         $result=Visitor::insert([
            'ip_address'=>$ip_address,
            'visit_time'=>$visit_time,
            'visit_date'=>$visit_date
         ]);
         return $result;
     }
}