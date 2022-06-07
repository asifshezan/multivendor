<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all = Partner::where('partner_status',1)->orderBy('partner_id','DESC')->get();
        return view('admin.partner.index', compact('all'));
    }
}
