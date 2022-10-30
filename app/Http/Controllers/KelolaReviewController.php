<?php

namespace App\Http\Controllers;
use App\Models\review;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KelolaReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');        
    }
    
    public function showManageReviewData() {

        $managereview = DB::table('reviews')
        ->select('users.name', 'reviews.id_user',
         'wisatas.title', 'reviews.id_wisata', 'reviews.desc', 'reviews.created_at' , 'reviews.id', 'reviews.status')
        ->join('users', 'users.id', '=', 'reviews.id_user')
        ->join('wisatas', 'wisatas.id_wisata', '=', 'reviews.id_wisata')
        ->get();
        return view('KelolaReview')->with([
            'title' => 'Ulasan Pengguna',
            'data' => $managereview
    ]);
    }
    public function testimoniShow($id)
    {
        $feedback = review::find($id);
        $feedback->status = "yes";
        $feedback->save();
        return redirect('/KelolaReview');
    }

    public function testimoniHide($id)
    {
        $feedback = review::find($id);
        $feedback->status = "no";
        $feedback->save();
        return redirect('/KelolaReview');
    }

    public function delete($id) {

        DB::table('reviews')->where('id',$id)->delete();

        return redirect(url('/KelolaReview')); 
    }
}
