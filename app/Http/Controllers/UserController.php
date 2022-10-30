<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function showUserData() {

        $user = DB::table('users')
            ->select('*')
            ->where('is_admin','=',0)
            ->get();
        return view('DataUser')->with([
    		'title' => 'Data User',
            'data' => $user
    	]);

    }

    public function showMitraData() {

        $user = DB::table('users')
            ->select('*')
            ->where('is_admin','=',1)
            ->get();
        return view('DataMitra')->with([
    		'title' => 'Data Mitra',
            'data' => $user
    	]);

    }

    public function UpdateUserData($id) {

        $user = userModel::find($id);

        return view('EditDataMitraUser')->with([
            'title' => 'Edit Data',
            'data' => $user
        ]);
        
    
    }

    public function EditUserData(Request $request)
    {
        
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        ]);

        return redirect('DataUser');
    }  
    
    public function DeleteDataUser($id) {

        DB::table('users')->where('id',$id)->delete();

        return redirect('DataUser');
    }

    public function DeleteDataMitra($id) {

        DB::table('users')->where('id',$id)->delete();

        return redirect('DataMitra');
    }

    //edit profile user//
    public function showProfile($id)
    {
        $user = UserModel::find($id);
        return view('customer.home.EditProfileUser', compact('user'));
    }

    public function EditProfileUser(Request $request, $id)
    {
        
        $user = UserModel::find($id);
        $user->name = $request ->input('name');
        $user->email = $request ->input('email');
        $user->no_hp = $request ->input('no_hp');
        if($request->hasfile('gambar'))
        {
            $destination = 'images/'.$user->photo_user;
            if(File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/',$filename);
            $user->photo_user = $filename;
        }

        $user->update();



        return redirect()->back()->with('message','Your profile has been updated');
    }

    public function showEditPasswordUser()
    {
        return view('customer.home.EditPasswordUser');
    }


    public function EditPasswordUser(Request $request)
    {

        if(!(Hash::check($request->get('current_password'), Auth()->user()->password))) {
            return back()->with('error','Your current password does not match with what you provided');
        }
        if(strcmp($request->get('current_password'),$request->get('password')) == 0) {
            return back()->with('error','Your current password cannot be same with the new password');
        }

        $request->validate([
            'current_password' => ['required'],
            'password' => ['required'],
        ]);
        $user = Auth()->user();
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return back()->with('message','Pasword changed succesfully');
    }
    
    //edit profile mitra//
    public function showProfileMitra($id)
    {
        $user = UserModel::find($id);
        return view('Mitra.EditProfileMitra', compact('user'));
    }

    public function EditProfileMitra(Request $request, $id)
    {

        $user = UserModel::find($id);
        $user->name = $request ->input('name');
        $user->email = $request ->input('email');
        $user->no_hp = $request ->input('no_hp');
        if($request->hasfile('gambar'))
        {
            $destination = 'images/'.$user->photo_user;
            if(File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/',$filename);
            $user->photo_user = $filename;
        }

        $user->update();



        return redirect()->back()->with('message','Your profile has been updated');
        
    }

    public function showEditPasswordMitra($id)
    {
        $user = UserModel::find($id);
        return view('Mitra.EditPasswordMitra',compact('user'));
    }

    # controller edit password mitra = edit password user
}
