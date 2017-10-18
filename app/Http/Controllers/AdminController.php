<?php

namespace App\Http\Controllers;

use App\commentsandphotos;
use App\commentsandvideos;
use App\users_table;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if((\request()->session()->has('admin_id'))) {
            return view('admin.index');
        }
    }

    public function logout()
    {
        if((\request()->session()->has('admin_id')))
        {
            \request()->session()->forget('id');
            \request()->session()->flush();
            return redirect('/home');
        }
    }

    public function show_all_users()
    {
        if((\request()->session()->has('admin_id'))) {
            $post = new users_table;
            $allusers = $post->all();
            return view('admin.users', compact('allusers'));
        }
    }

    public function show_all_photo_comments()
    {
        if((\request()->session()->has('admin_id'))) {
            $post = new commentsandphotos;
            $allcomments = $post->all();
            return view('admin.photocomments',compact('allcomments'));
        }
    }

    public function show_all_video_comments()
    {
        if((\request()->session()->has('admin_id'))) {
            $post = new commentsandvideos;
            $allcomments = $post->all();
            return view('admin.videocomments', compact('allcomments'));
        }
    }

    public function delete_user()
    {
        if((\request()->session()->has('admin_id'))) {
            return redirect('/deleteuser');
        }
    }

    public function delete_p_comment()
    {
        if((\request()->session()->has('admin_id'))) {
            $id = \request('id');
            $post = commentsandphotos::find($id);
//            $post->comment = 'Dead';
//            $post->save();
            return redirect('/admin/allpcomments');
        }
    }

    public function delete_v_comment()
    {
        if((\request()->session()->has('admin_id'))) {
            $id = \request('id');
            $post = commentsandvideos::find($id);
//            $post->comment = 'Dead';
//            $post->save();
            return redirect('/admin/allvcomments');
        }
    }
}
