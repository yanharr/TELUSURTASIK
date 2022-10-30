<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelpController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');        
    }
    
    public function create()
    {
     return view('TambahBantuan')->with([
            'title' => 'Tambah FaQ'
        ]);
    }

    public function store(Request $request)
   {

    $validatedData = $request->validate([
      'title' => 'required',
      'categories' => 'required',
      'desc' => 'required',

    ]);

    $inserthelp = help::create([
      'title' => $request->title,
      'categories' => $request->categories,
      'desc' => $request->desc,
    ]);

      return redirect(url('/Help'));
  }



    public function showHelpData() {

        $help = DB::table('helps')
        ->select('*')
        ->get();
        return view('Help')->with([
            'title' => 'Frequently Asked Question',
            'data' => $help
    ]);

    }

    public function edit($id) {

        $help = Help::find($id);

        return view('EditBantuan')->with([
            'title' => 'Edit Data FaQ',
            'data' => $help
        ]);
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'title' => 'required',
            'categories' => 'required',
            'desc' => 'required',      
        ]);
    
        //get data wisata by ID
        // $id_wisata = $request->id_wisata;
        $help = Help::findOrFail($id);
    
          $help->update([
            'title' => $request->title,
            'categories' => $request->categories,
            'desc' => $request->desc
          ]);
    
          return redirect(url('/Help')); 
      }
        
    public function delete($id) {

        DB::table('helps')->where('id_question',$id)->delete();

        return redirect(url('/Help')); 
    }


}
