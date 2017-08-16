<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class MobileWebController extends Controller
{
    public function index(){
        $sliders = $this->getHomePagedata();
       return view('index')->with(['sliders'=>$sliders]);
    }

   function getHomePagedata(){
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
