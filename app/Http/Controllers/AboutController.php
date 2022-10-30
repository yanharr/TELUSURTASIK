<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');        
    }

    public function customAboutUs()
    {
        $data = AboutUs::first();

        return view('customAboutUs', compact('data'));
    }

    public function updateAboutUs(Request $request, $id)
    {
        $data = AboutUs::find($id);                           

        $data->cover = $request->cover;
        $data->judul = $request->judul;
        $data->desc = $request->desc;
        $data->develop_1 = $request->develop_1;
        $data->nim_develop_1 = $request->nim_develop_1;
        $data->develop_2 = $request->develop_2;
        $data->nim_develop_2 = $request->nim_develop_2;
        $data->develop_3 = $request->develop_3;
        $data->nim_develop_3 = $request->nim_develop_3;
        $data->develop_4 = $request->develop_4;
        $data->nim_develop_4 = $request->nim_develop_4;
        $data->develop_5 = $request->develop_5;
        $data->nim_develop_5 = $request->nim_develop_5;

        if($request->cover_new == NULL){
            $data->cover = $request->cover;
        }else{
            $cover = time().'.'.$request->cover_new->extension();
            $request->cover_new->move(public_path('images/about_us_image'), $cover);
            $data->cover = $cover;
        }   
                
        if($request->foto_develop_1_new == NULL){
            $data->foto_develop_1 = $request->foto_develop_1;
        }else{
            $foto_develop_1 = time().'.'.$request->foto_develop_1_new->extension();
            $request->foto_develop_1_new->move(public_path('images/about_us_image'), $foto_develop_1);
            $data->foto_develop_1 = $foto_develop_1;
        }       
        
        if($request->foto_develop_2_new == NULL){
            $data->foto_develop_2 = $request->foto_develop_2;
        }else{
            $foto_develop_2 = time().'.'.$request->foto_develop_2_new->extension();
            $request->foto_develop_2_new->move(public_path('images/about_us_image'), $foto_develop_2);
            $data->foto_develop_2 = $foto_develop_2;
        } 

        if($request->foto_develop_3_new == NULL){
            $data->foto_develop_3 = $request->foto_develop_3;
        }else{
            $foto_develop_3 = time().'.'.$request->foto_develop_3_new->extension();
            $request->foto_develop_3_new->move(public_path('images/about_us_image'), $foto_develop_3);
            $data->foto_develop_3 = $foto_develop_3;
        } 

        if($request->foto_develop_4_new == NULL){
            $data->foto_develop_4 = $request->foto_develop_4;
        }else{
            $foto_develop_4 = time().'.'.$request->foto_develop_4_new->extension();
            $request->foto_develop_4_new->move(public_path('images/about_us_image'), $foto_develop_4);
            $data->foto_develop_4 = $foto_develop_4;
        } 

        if($request->foto_develop_5_new == NULL){
            $data->foto_develop_5 = $request->foto_develop_5;
        }else{
            $foto_develop_5 = time().'.'.$request->foto_develop_5_new->extension();
            $request->foto_develop_5_new->move(public_path('images/about_us_image'), $foto_develop_5);
            $data->foto_develop_5 = $foto_develop_5;
        } 
        $data->save();
        
        return redirect(url('edit-about-us'));
    }
}
