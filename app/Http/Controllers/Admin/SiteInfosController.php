<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteInfos;

class SiteInfosController extends Controller
{
    public function Allsiteinfo(Request $request)
    {
        $result=SiteInfos::get();
        return $result;
    }
}
