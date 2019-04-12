<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index(){
//        $client =new Client([
//            'base_url'=>'https://www.baidu.com',
//            'timeout'=>2.0
//        ]);
//        $response = $client->request('get','');
//        return $response;

//        $client =new Client();
//        $res = $client->request('GET', 'https://www.baidu.com', [
//            'auth' => ['user', 'pass']
//        ]);
//
////        echo $res->getStatusCode();
//        echo $res->getBody();
        abort();

        $app =app();
        echo $app->publicPath();
        die();
        $response = \Requests::get('http://www.baidu.com');

        return $response->body;

    }
}
