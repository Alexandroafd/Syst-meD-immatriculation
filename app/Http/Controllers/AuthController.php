<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth:web', ['except' => ['login', 'register']]);
    }*/

    public function register()
    {
        return view('auth.register');
    }

    public function doregister(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|email|max:150',
            'password' => 'required|string|min:4'
        ]);

        if($validation->passes())
        {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return redirect()->route('login')->with('success','Inscription réussie');
        } else {
            return back()->withErrors($validation);
        }
    }
    public function login ()
    {
        /*User::create([
            'name' => 'jacky',
            'email' => 'jacky@doe.fr',
            'password' => Hash::make('12345')
        ]);*/
        return view ('auth.login');
    }

    public function dologin (LoginRequest $request)
    {
        /*$validation = Validator::make($request->all(), [
            'email' => 'required|email|max:150',
            'password' => 'required|string|min:4'
        ]);*/

        $credentials = $request->validated();
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.plaque.index'));
        }
        return back()->withErrors([
            'email' => 'Identifiants incorrect'
        ])->onlyInput('email');
    }

    public function logout ()
    {
        Auth::logout();
        return to_route('login')->with('success', 'Déconnecté');
    }

    public function profile ()
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();
        return view ('admin.users.profile', [
            'user' => $user
        ]);
    }

    public function doprofile(ProfileRequest $request)
{
    $id = Auth::user()->id;
    $user = User::find($id);

    $data = $request->only(['name', 'email', 'phone', 'profession', 'state', 'firstname']);

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/images'), $filename);
        $data['image'] = 'uploads/images/' . $filename;
    }

    $user->update($data);

    return back()->with('success', 'Profil modifié avec succès');
}


    public function changePassword ()
    {
        return view ('admin.users.changePassword');
    }

    public function updatePassword (Request $request)
    {
        $validation = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|min:4',
            'confirm_password' => 'required|same:new_password'
        ]);

        if ($validation->fails())
        {
            return redirect()->route('admin.changePassword')
            ->withErrors($validation);
        }

        if (Hash::check($request->old_password, Auth::user()->password) == false)
        {
           session()->flash('error', 'L\'ancien mot de passe est incorret');
           return back()->with('error', 'L\'ancien mot de passe est incorret');
        }

        $user = User::find(Auth::user()->id);
        $user ->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Le mot de passe a été changé avec success');
    }
}
