<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function  index(){

        //one to one
        // $user = User::with('contact')->get();
        // dd($user->toArray());




        // one to many
        //      $user = User::with('contact' , 'posts')->get();
        //    dd($user->toArray());

        // $post = post::with('user')->find(1);
        // dd($post->toArray());
 



        //mant to many
        //  $categories = category::all();

        $post = post::with('categories')->first();
        // $post->categories()->attach($categories);
         $post->categories()->sync([1 , 2]);

        $post = post::with('categories')->get();

        dd($post->toArray());





    }
}
