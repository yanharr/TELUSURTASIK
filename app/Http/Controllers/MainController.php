<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AboutUs;

class MainController extends Controller
{
    public function index()
    {
        $wisata = DB::table('wisatas')
            ->select('*')
            ->where('status','=','Accepted')
            ->orderBy('wisatas.created_at', 'DESC')
            ->limit(5)
            ->get();
        $review = DB::table('reviews')
            ->join('users', 'users.id', '=', 'reviews.id_user')
            ->join('wisatas', 'wisatas.id_wisata', '=', 'reviews.id_wisata')
            ->select('users.photo_user', 'users.name', 'reviews.desc', 'wisatas.title', 'reviews.id', 'reviews.id_wisata', 'reviews.id_user')
            ->orderBy('reviews.created_at', 'DESC')
            ->where('reviews.status' , 'yes')
            ->limit(6)
            ->get();
        return view('customer.home.index', compact('wisata', 'review'));
    }

    public function showBantuanUser(){
        $help = DB::table('helps')
            ->select('*')
            ->where('categories', 'User')
            ->get();
        return view('customer.help.user', compact('help'));
    }
    public function showBantuanMitra(){
        $help = DB::table('helps')
            ->select('*')
            ->where('categories', 'Mitra')
            ->get();
        return view('customer.help.mitra', compact('help'));
    }

    public function showAboutUs()
    {
        $data = AboutUs::first();

        return view('customer.about.index', compact('data'));
    }

}
