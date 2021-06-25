<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Http;
use Log;
use Carbon\Carbon;

class urlsContoller extends Controller
{
    public function index()
    {
        //read urls

        $urls = DB::table('urls')->get();

        return view('welcome',compact('urls'));
    }

    public function save(Request $request)
    {
       // save new urls
        $name = $request->name;
        $url = $request->url;

        DB::table('urls')->insertORignore(['url_name'=>$name,'url'=>$url]);

        return redirect()->back();
    }


    public function checkStatus()
    {

        //selecting all urls
        $urls = DB::table('urls')->get();

        foreach($urls as $url)
        {
        
            $stat = null;

            // catching errors
            try {
                //code...
                $status = Http::retry(3, 100)->get($url->url);
                if($status)
                {
                    $stat ='Alive';
                }else{
                     $stat ='Dead';
                 }

            } catch (\Throwable $th) {
                //throw $th;
                $stat ='Unavailable';
            }
            
            DB::table('urls')->where('id',$url->id)->update(['status'=>$stat,'updated_at'=>now()]);

            log::info(json_encode($status));
        }
        
    }
}
