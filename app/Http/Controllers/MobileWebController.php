<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class MobileWebController extends Controller
{
    public function index(){
        $sliders = $this->getHomeSlider();
        $popular = $this->getPopular();
       return view('index')->with(['sliders'=>$sliders,'popular'=>$popular]);
    }

    //get lastest+most view post
   function getHomeSlider(){
    $client = new Client();
    $res = $client->request('GET', 'http://ktimez.com/api/posts/slider');
    if($res->getStatusCode() == 200){
        $sliders = json_decode($res->getBody());
    }else
    {
        $sliders = NULL;
    }
    return $sliders;
   }

   //get popular posts
   function getPopular(){
    $client = new Client();
    $res = $client->request('GET', 'http://ktimez.com/api/posts/popular');
    if($res->getStatusCode() == 200){
        $popular = json_decode($res->getBody());
    }else
    {
        $popular = NULL;
    }
    return $popular;
   }

   public function getPost($slug){
    $client = new Client();
    $res = $client->request('GET', 'http://ktimez.com/api/posts/'.$slug);
    if($res->getStatusCode() == 200){
        $post = json_decode($res->getBody());
    }
    // print_r($post);
    // handling not found exception
    return view('article')->with(['post'=>$post]);
   }
   public function getCategory($catname){
    $client = new Client();
    $res = $client->request('GET', 'http://ktimez.com/api/cats/'.$catname);
    if($res->getStatusCode() == 200){
        $catdatas = json_decode($res->getBody());
    }
    else
    {
        abort(404, "Category you are looking for not found :)");
    }

    //temporary fix :)
    if($catdatas == null){
        exit(0);
    }
    // print_r($catdatas);
    return view('category')->with(['catname'=>$catname,'categories'=>$catdatas]);
   }

}