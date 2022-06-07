<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;


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

    public function create(){
        return view('admin.partner.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'partner_title' => 'required',
            'partner_url' => 'required',
            // 'partner_logo' => 'required',
        ],[
            'partner_title' => 'Please enter title',
            // 'partner_logo' => 'Please enter logo',
        ]);

        $slug = Str::slug($request['partner_title']);
        $creator = Auth::user()->id;
        $insert = Partner::insertGetId([
            'partner_title' => $request->partner_title,
            'partner_slug' => $slug,
            'partner_url' => $request['partner_url'],
            'partner_order' => $request['partner_order'],
            'partner_creator' => $creator,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        // if($request->hasFile('partner_logo')){
        //     $image = $request->file('partner_logo');
        //     $imageName = time() . '-' . rand(10000,1000000) . $image->getClientOriginalExtension();
        //     Image::make('$image')->resize(150,150)->save('uploads/partner/' . $imageName);

        //     Partner::where('partner_id',$insert)->update([
        //         'partner_logo' => $imageName,
        //         'created_at' => Carbon::now()->toDateTimeString()
        //     ]);

            if($insert){
                Session::flash('success','successfully insert partner');
                return redirect()->back();
            }else{
                Session::flash('error','Opps! Failed to insert.');
                return redirect()->back();
            }

        }
    }
