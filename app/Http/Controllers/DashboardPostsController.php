<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\wisata;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;



class DashboardPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $wisata = Wisata::latest()->get();
      $user = UserModel::latest()->get();

      return view('Mitra.dashboard.index', compact('wisata'), compact('user'));
    }

    public function create()
    {
     return view('Mitra.TambahWisata');
   }


   public function store(Request $request)
   {

    $validatedData = $request->validate([
      'title' => 'required',
      'categorie' => 'required',
      'location' => 'required',
      'maps'=> 'required',
      'desc' => 'required',
      'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

    ]);

    //upload picture
    $file= $request->file('picture');
    $fileNameToStore = $request->file('picture')->getClientOriginalName();

    $file->move(public_path('images'), $fileNameToStore);

    $insertwisata = wisata::create([
      'title' => $request->title,
      'categorie' => $request->categorie,
      'location' => $request->location,
      'maps'=> $request->maps,
      'desc' => $request->desc,
      'picture'     => $fileNameToStore
    ]);

    if($insertwisata){
      return redirect('/dashboard');
    }else{
      return redirect('/dashboard');
    }
  }


  public function show($id)
  {
    $wisata = wisata::find($id);

    return view('Mitra.Detail')->with([
      'data' => $wisata
    ]);
  }


  public function edit($id)
  {
    $wisata = wisata::find($id);
    return view('Mitra/EditWisata',['dt' => $wisata]);

  }

  public function update(Request $request, wisata $wisata){
    $validatedData = $request->validate([
      'title' => 'required',
      'categorie' => 'required',
      'location' => 'required',
      'maps'=> 'required',
      'desc' => 'required'
    ]);

    //get data wisata by ID
    $id_wisata = $request->id_wisata;
    $wisata = wisata::findOrFail($id_wisata);

    if($request->file('picture') == "") {

      $wisata->update([
        'title' => $request->title,
        'categorie' => $request->categorie,
        'location' => $request->location,
        'maps'=> $request->maps,
        'desc' => $request->desc
      ]);

    } else {

      //upload picture
      $file= $request->file('picture');
      $fileNameToStore = $request->file('picture')->getClientOriginalName();

      $file->move(public_path('images'), $fileNameToStore);

      $wisata->update([
        'title' => $request->title,
        'categorie' => $request->categorie,
        'location' => $request->location,
        'maps'=> $request->maps,
        'desc' => $request->desc,
        'picture'     => $fileNameToStore
      ]);

    }

    if($wisata){
      return redirect('/dashboard');
    }else{
      return redirect('/dashboard');
    }
  }


  public function delete($id){

    $wisata = wisata::find($id);
    $wisata->delete();
    return redirect('/dashboard');
  }

  public function dashboardMitra()
    {
      // $wisata = Wisata::where('id_user', Auth::user()->id)->get();
      $wisata = DB::table("wisatas")
                        ->select("categorie", DB::raw("count(*) as total"))
                        ->where('id_user', Auth::user()->id)
                        ->groupBy("categorie")
                        ->get();
      // $user = UserModel::latest()->get();
      // $favorit = DB::table("wisatas")
      //                   ->select("title", DB::raw("count(*) as total"))
      //                   ->leftJoin('wishlists', 'wishlists.id_wisata', '=', 'wisatas.id_wisata')
      //                   ->where('wisatas.id_user', Auth::user()->id)
      //                   ->groupBy('title')
      //                   ->get();
      $favorit = DB::table("wisatas")
                        ->select("title", DB::raw('count(*) as total'))
                        ->rightJoin('wishlists', 'wishlists.id_wisata', '=', 'wisatas.id_wisata')
                        ->where('wisatas.id_user', Auth::user()->id)
                        ->groupBy('title')
                        ->orderBy('total')
                        ->get();
      $rating = DB::table("wisatas")
                        ->select("title", DB::raw('count(*) as total'))
                        ->rightJoin('reviews', 'reviews.id_wisata', '=', 'wisatas.id_wisata')
                        ->where('wisatas.id_user', Auth::user()->id)
                        ->groupBy('title')
                        ->orderBy('total')
                        ->get();
      return view('Mitra.dashboard.dashboard', compact('wisata', 'rating', 'favorit'));
    }


}
