<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Url;
use Illuminate\Http\Request;

class ShortController extends Controller
{
    
    public function index(Request $request)
    {
        $url = Url::where([['url','https://'.$request->url],['user_id',auth()->id()]])->first();

        if($url == null){
            $inputs['url']   = 'https://'.$request->url; 
            $inputs['short'] = str_random(5); 
            $inputs['user_id']=auth::id();
            $url = url::create($inputs);

            return view('short', compact('url'));
        }
        return view('short', compact('url'));
    }
}
