<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $data['wishlists'] =  Wishlist::where('id_user', Auth::id())->paginate(3);

        return view('wisata.wishlist', $data);
    }

    public function store(Request $request)
    {
        $wishlistExists = Wishlist::where('id_user', Auth::id())
            ->where('id_wisata', $request->id_wisata)
            ->first();

        if ($wishlistExists) {
           $wishlistExists->delete();
        } else {
            Wishlist::create([
                'id_user' => Auth::id(),
                'id_wisata' => $request->id_wisata
            ]);
        }

        return redirect()->route('wisata.show', $request->id_wisata);
    }
}
