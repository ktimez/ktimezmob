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
        $category = json_decode($res->getBody());
    }
    // handling not found exception
    return view('category')->with(['category'=>$category]);
   }

}
