<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Profile;
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   //   public function profile()
   //   {
   //       return view('profile', array('user' => Auth::user()));
   //   }
   //
   //   public function update_avatar(Request $request){
   //     // Handle the user upload of avatar
   //     if($request->hasFile('avatar')){
   //         $avatar = $request->file('avatar');
   //         $filename = time() . '.' . $avatar->getClientOriginalExtension();
   //         Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
   //         $user = Auth::user();
   //         $user->avatar = $filename;
   //         $user->save();
   //     }
   //     return view('profile', array('user' => Auth::user()) );
   // }


    public function index()
    {
        // $user = auth()->user()->with('profile')->firstOrFail();
        $user = User::where('username', Auth::user()->username)->first();
        return view('profile.index', compact('users'));

        // $user = User::where('username', Auth::user()->username)->first();
        // return view('profile.profile')
        //     ->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate ($r, ['full_name' => 'required']);
        // $this->validate ($r, ['telephone_no' => 'required']);
        // $this->validate ($r, ['jawatan' => 'required']);
        // $this->validate ($r, ['jabatan' => 'required']);
        //
        // $profile = Profile::findOrFail($id);
        // $profile->full_name = $r->full_name;
        // $profile->telephone_no = $r->telephone_no;
        // $profile->jawatan = $r->jawatan;
        // $profile->jabatan = $r->jabatan;
        // $profile->save();
        //
        // return redirect()->action('ProfilesController@store')->withMessage('Profile has been successfully added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $profile = Profile::findOrFail($id);
        // return view('profile.edit', compact('profile'));
        $profile = Profile::findOrFail($id);
        return view('profile.edit')->with('profile', Auth::user()->profile);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {

        $this->validate ($r, ['full_name' => 'required']);
        $this->validate ($r, ['telephone_no' => 'required']);
        $this->validate ($r, ['jawatan' => 'required']);
        $this->validate ($r, ['jabatan' => 'required']);

        $profile = Profile::findOrFail($id);
        $profile->full_name = $r->full_name;
        $profile->telephone_no = $r->telephone_no;
        $profile->jawatan = $r->jawatan;
        $profile->jabatan = $r->jabatan;
        $profile->save();

        return redirect()->action('ProfilesController@index')->withMessage('Profile has been successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
