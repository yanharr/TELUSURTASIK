<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\WisataModel;
use App\Models\Wishlist;
use App\Models\RecentlyVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $request, Wisata $wisata)
    {
        $data['wisata'] = $wisata->load(['reviews']);

        return view('wisata.detail', $data);
    }

    public function UserLookWisata(Request $request)
    {
        $wisata = Wisata::where('status', 'Accepted')
            ->when($request->has('searchWisata') && $request->searchWisata != null, function ($query) use ($request) {
                $query->where('title', 'LIKE', '%' . $request->searchWisata . '%');
            })->when($request->has('searchCategory') && $request->searchCategory != null, function ($query) use ($request) {
                $query->where('categorie', $request->searchCategory);
            })->paginate(3);

        return view('wisata.index')->with([
            'title' => 'Data Wisata',
            'data' => $wisata
        ]);
    }

    public function UserLookDetailWisata($id)
    {
        $wisata = Wisata::find($id);
        $wishlists =  Wishlist::where('id_user', Auth::id())->get();
        $isAlreadyWishlist = false;

        foreach ($wishlists as $wishlist) {
            if ($wishlist->id_wisata == $wisata->id_wisata) {
                $isAlreadyWishlist = true;
            }
        }
        
        $recentlyVisit =  RecentlyVisit::where('id_user', Auth::user()->id)->get();
        $recentlyVisitAdded = false;

        foreach ($recentlyVisit as $recentlyVisits) {
            if ($recentlyVisits->id_wisata == $wisata->id_wisata) {
                $recentlyVisitAdded = true;
            }
        }

        $wisata = Wisata::find($id);
        $review = DB::table('reviews')
        ->join('users', 'reviews.id_user', '=', 'users.id')
        ->join('wisatas', 'reviews.id_wisata', '=', 'wisatas.id_wisata')
                ->select('reviews.*', 'users.id', 'users.name', 'wisatas.id_wisata')
        ->where('wisatas.id_wisata', $id)
        ->get();        

        $wisata = Wisata::find($id);
        $review = DB::table('reviews')
        ->join('users', 'reviews.id_user', '=', 'users.id')
        ->join('wisatas', 'reviews.id_wisata', '=', 'wisatas.id_wisata')
                ->select('reviews.*', 'users.id', 'users.name', 'wisatas.id_wisata')
        ->where('wisatas.id_wisata', $id)
        ->get();

        return view('wisata.detail')->with([
            'data' => $wisata,
            'wisata' => $wisata,
            'isAlreadyWishlist' => $isAlreadyWishlist,
            'review' => $review,
            'recentlyVisitAdded' => $recentlyVisitAdded,
        ]);
    }

    public function AddReviewWisata(Request $request){
        DB::table('reviews')->insert([
            'id_user' => Auth::user()->id,
            'id_wisata' => $request->id_wisata,
            'show' => $request->show,
            'desc' => $request ->desc,
            'created_at' => date("Y-m-d h:i:s")

        ]);

            return redirect()->route('wisata.show', $request->id_wisata);
    }


    public function showWisataDataPending()
    {

        $wisata = DB::table('wisatas')
            ->select('*')
            ->where('status', '=', 'Pending')
            ->get();
        return view('DataWisataPending')->with([
            'title' => 'Data Wisata',
            'data' => $wisata
        ]);
    }

    public function showWisataData()
    {

        $wisata = DB::table('wisatas')
            ->select('*')
            ->where('status', '=', 'Accepted')
            ->get();
        return view('DataWisata')->with([
            'title' => 'Data Wisata',
            'data' => $wisata
        ]);
    }

    public function UpdateWisataData($id)
    {

        $wisata = WisataModel::find($id);

        return view('EditDataWisata')->with([
            'title' => 'Edit Data Wisata',
            'data' => $wisata
        ]);
    }

    public function EditWisataData(Request $request)
    {

        DB::table('wisatas')->where('id_wisata', $request->id_wisata)->update([
            'title' => $request->title,
            'categorie' => $request->categorie,
            'location' => $request->location,
            'maps' => $request->maps,
            'desc' => $request->desc,
            'status' => $request->status

        ]);

        return redirect('DataWisataPending');
    }

    public function DeleteWisataData($id)
    {

        DB::table('wisatas')->where('id_wisata', $id)->delete();

        return redirect('DataWisataPending');
    }


    // kategori

    public function showKategoriWisata(Request $request)
    {
        $wisata = Wisata::where('status', 'Accepted')
            ->where('categorie', $request->searchCategory)
            ->paginate(3);

        return view('wisata.index')->with([
            'data' => $wisata
        ]);
    }

    public function addRecentlyVisit(Request $request)
    {  
        $checkRecentlyVisit = RecentlyVisit::where('id_user', $request->id_user)        
                            ->where('id_wisata', $request->id_wisata)
                            ->first();

        if ($checkRecentlyVisit) {
           $checkRecentlyVisit->delete();
        } else {
            RecentlyVisit::create([
                'id_user' => $request->id_user,
                'id_wisata' => $request->id_wisata
            ]);
        }
                    
        return redirect()->back();
    }

    public function showRecentlyVisit()
    {
        $data = DB::table('wisatas')
                ->select('wisatas.picture', 'wisatas.title', 'wisatas.desc', 'wisatas.id_wisata',
                    'recently_visit.id_user')
                ->join('recently_visit', 'wisatas.id_wisata', '=', 'recently_visit.id_wisata')                
                ->where('recently_visit.id_user', Auth::user()->id)
                ->paginate(3);        

        return view('wisata.show_recentlyVisit', compact('data'));
    }
}


