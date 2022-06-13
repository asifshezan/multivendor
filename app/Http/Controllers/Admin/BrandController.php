<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;



class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all = Brand::where('brand_status',1)->orderBy('brand_id','DESC')->get();
        return view('admin.brand.index', compact('all'));
    }

    public function create(){
        return view('admin.brand.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'brand_name' => 'required',
        ],[
            'brand_name.required' => 'Enter Your Brand Name.'
        ]);

        $slug = Str::slug($request->brand_name, '-');
        $creator = Auth::user()->id;
        if($request->brand_feature == 'on'){
            $brand_feature = 1;
        }else{
            $brand_feature = 0;
        }
        $insert = Brand::insertGetId([
            'brand_name' => $request->brand_name,
            'brand_slug' => $slug,
            'brand_remarks' => $request->brand_remarks,
            'brand_creator' => $creator,
            'brand_feature' => $brand_feature,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('brand_image')){
            $image = $request->file('brand_image');
            $imageName = $insert . time() . rand(1000,10000) . '-' . $image->getClientOriginalExtension();
            Image::make($image)->resize(200,200)->save('uploads/brand/' . $imageName);

            Brand::where('brand_id',$insert)->update([
                'brand_image' => $imageName,
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }
        if($insert){
            Session::flash('success','successfully insert partner');
            return redirect()->back();
        }else{
            Session::flash('error','Opps! Failed to insert.');
            return redirect()->back();
        }
    }
}
