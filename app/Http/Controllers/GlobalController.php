<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users_table;
use Illuminate\Support\Facades\Auth;

class GlobalController extends Controller
{
    public function index()
    {
        return view('global.index');
    }
    public function show_login()
    {
        return view('global.login');
    }
    public function show_signup()
    {
        return view('global.signup');
    }
    public function show_gallery()
    {
        return view('global.gallery');
    }
    public function show_photos()
    {

        return view('global.photos');
    }
    public function show_video_page()
    {
        return view('global.videos');
    }
    public function postSignup()
    {
        $post = new users_table;

//        users_table::create([
//           'name' => \request('user'),
//            'email' => \request('email'),
//            'password' => \request('password')
//
//        ]);

        $post->fname = \request('fname');
        $post->lname = \request('lname');
        $post->username = \request('user');
        $post->email = \request('email');
        $post->password = \request('password');
        $post->save();
        return redirect('/home/login');
    }

    public function postSignin()
    {
        $get = new users_table;

        $this->validate(\request(),[
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = \request('email');
        $password = \request('password');
        if($email == 'abc@abc.com' && $password=='123') {
            $role = 1;
            $id = 1;
        }
        else
        {
            $role = 0;
            $id = 1;
        }
        $id1['id'] = $get->where('email' , $email)->get()->pluck('id');
        $role['role'] = $get->where([['email' , $email],['password' , $password]])->get()->pluck('role');
//        $id2['id'] = $get->where('password' , $password)->get()->pluck('id');
//        $id0 = intval($id1);
        dd($get->where('email' , $email)->get()->pluck('id'));
//        $id_0 = intval($id2);
//        $role = intval($role);
        if ($get->where ([['email' , $email],['password' , $password]])->get() != null) {
//            $ses->add($id1['id']);
//            echo $id1;
            if ($role == 1) {
                //user
//                        dd($get->where([['email' , $email],['password' , $password]])->get());
                \request()->session()->put('id', $id);
                \request()->session()->save();
            } elseif ($role == 0) {
                \request()->session()->put('admin_id', $id);
                \request()->session()->save();
            }
            if (session('id') == $id)
                return redirect('/user/index');
            elseif (session('admin_id') == $id)
                return redirect('/admin/index');
//                }
//            }
        }
        else
        {
            return redirect('/home/login');
        }
        return 0;
    }

}
