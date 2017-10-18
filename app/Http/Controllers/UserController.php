<?php

namespace App\Http\Controllers;

use App\commentsandphotos;
use App\commentsandvideos;
use App\photos;
use App\Session;
use App\videos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use App\trips;
use Illuminate\Http\Request;
use App\users_table;
use \Input as Input;

class UserController extends Controller
{
    public  $id = array();
    public function index()
    {
        if(\request()->session()->has('id'))
            return view('user.index');
    }

    public function profile()
    {
        if((\request()->session()->has('id')))
        {
            $user = users_table::find(\request()->session()->get('id'));
            return view('user.profile', compact('user'));
        }
    }
    public function update_profile()
    {
        if((\request()->session()->has('id'))) {
            $user = users_table::find(\request()->session()->get('id'));
            $user->username = \request('username');
            $user->fname = \request('fname');
            $user->lname = \request('lname');
            $user->profile = \request('profile');
            $user->save();
            return view('user.profile',compact('user'));
        }
    }
    public function edit_profile()
    {
        if((\request()->session()->has('id'))) {
            $user = users_table::find(\request()->session()->get('id'));
                return view('user.edit_profile',compact('user'));
        }
    }

    public function show_gallery()
    {
        return view('global.gallery');
    }
    public function show_photos()
    {
        if((\request()->session()->has('id')))
        {
            $post = new photos;
            $trip = new trips;
            $user = new users_table;
            $u_id['id'] = $post->where('user_id', \request()->session()->get('id'))->pluck('user_id');
            $uid = intval($u_id);
//            $allphotos = $post->where('user_id', \request()->session()->get('id'))->get();
            $allphotos = array(
                'photos' => $post->where('user_id', \request()->session()->get('id'))->get(),
            'trip' => $trip->find($uid),
                'user' => $user->where('id', $uid)->get(),
            );
//            dd($user->where('id', $uid)->get());
            return view('user.photos',compact('allphotos'));
        }
    }
    public function show_video_page()
    {
        if((\request()->session()->has('id')))
        {
            $post = new videos;
            $u_id['id'] = $post->where('user_id', \request()->session()->get('id'))->pluck('user_id');
            $allvideos = $post->where('user_id', \request()->session()->get('id'))->get();
//            dd($allvideos);
            return view('user.videos', compact('allvideos'));
        }
    }

    public function upload_photo_page()
    {
        if((\request()->session()->has('id')))
        {
            $post = new trips;
            $alltrips = $post->where('user_id',\request()->session()->get('id'))->get();}
            return view('user.uphoto',compact('alltrips'));
    }

    public function show_all_trip()
    {
        $post = new trips;
        if((\request()->session()->has('id')))
        {
            $alltrip = $post->all();
            return view('user.trips',compact('alltrip'));
        }
    }

    public function upload_video_page()
    {
        if((\request()->session()->has('id')))
            return view('user.uvideo');
    }

    public function show_add_trip_page()
    {
        if((\request()->session()->has('id')))
            return view('user.addtrip');
    }

    public function show_edit_trip_page()
    {
        if((\request()->session()->has('id'))) {
            $trip = trips::find(\request('id'));
            return view('user.edittrip', compact('trip'));
        }
    }

    public function logout()
    {
        if((\request()->session()->has('id')))
        {
            \request()->session()->forget('id');
            \request()->session()->flush();
            return redirect('/home');
        }
    }

    public function add_trip()
    {
        $post = new trips;
        $post->destination = \request('dest-name');
        $post->location_name = \request('dest-location');
        $post->user_id = \request()->session()->get('id');
        $post->save();
        return redirect('/user/all_trip');

    }

    public function update_trip()
    {
        $post = trips::find(\request('trip_id'));
        $post->destination = \request('dest-name');
        $post->location_name = \request('dest-location');
        $post->user_id = \request()->session()->get('id');
        $post->save();
        return redirect('/user/all_trip');

    }

    public function upload_photo()
    {
            $path = \request('id');

            $post = new photos;
            $post->photo_loc = $path;
            $post->user_id = \request()->session()->get('id');
            $post->trip_id = 1;
            $post->save();
            return redirect('/user/all_trip');
    }
    public function upload_video()
    {
            $path = \request('id');

            $post = new videos;
            $post->video_loc = $path;
            $post->user_id = \request()->session()->get('id');
            $post->trip_id = 1;
            $post->save();
            return redirect('/user/all_trip');
    }

    public function show_photo_comment_page()
    {
        $photoID = \request('id');
        $post = new commentsandphotos;
        $post_photo = new photos;
        $post_user = new users_table;
        $userd['id'] = $post_photo->where('id',$photoID)->pluck('user_id');
        $userid = intval($userd);
//        dd($post_user->where('id', $userid)->pluck('email'));
        $allcomments = array(
           'comment' => $post->where([['photo_id', $photoID],['status', 1]])->get(),
            'user' => $post_user->where('id', $userid)->get()
    );
//        echo $allcomments['user'];
        return view('user.photocomments', compact('allcomments'));
    }

    public function show_video_comment_page()
    {
        $videoID = \request('id');
        $post = new commentsandvideos;
        \request()->session()->put('videoid', $videoID);
        $allcomments = $post->where([['video_id', $videoID],['status', 1]])->get();
        \request()->session()->save();
        return view('user.videocomments', compact('allcomments'));
    }

    public function post_photo_comment()
    {
        $comment = \request('comment');
        $photoid = \request('photo_id');
        $post = new commentsandphotos;
        $post->comment = $comment;
        $post->photo_id = $photoid;
        $post->save();
        return redirect('/user/photos');
    }

    public function post_video_comment()
    {
        $comment = \request('comment');
        $videoid = \request('video_id');
        $post = new commentsandvideos;
        $post->comment = $comment;
        $post->video_id = $videoid;
        $post->save();
        return redirect('/user/videos/');
    }


}
