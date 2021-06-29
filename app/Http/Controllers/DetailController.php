<?php

namespace App\Http\Controllers;
use App\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
public function index(Request $request)
{
        $keyword = $request->input('keyword');
        $keyword1 = $request->input('keyword1');
        $keyword2 = $request->input('keyword2');
        $keyword3 = $request->input('keyword3');
        $keyword4 = $request->input('keyword4');
            if (!empty($keyword)||!empty($keyword1)||!empty($keyword2)||!empty($keyword3)||!empty($keyword4)) {
                $details=DB::table('details')->join('shops','shops.id','=','details.shop_id')->join('places','places.id','=','shops.place_id')->join('plans','plans.id','=','shops.plan_id')
                    ->Where('plan', 'LIKE', "%{$keyword}%")
                    ->where('place', 'LIKE', "%{$keyword1}%")
                    ->where('course', 'LIKE', "%{$keyword2}%")
                    ->where('name', 'LIKE', "%{$keyword3}%")
                    ->where('price', 'LIKE', "%{$keyword4}%")
                
                    ->get();
            }else{
                $details=DB::table('details')->join('shops','shops.id','=','details.shop_id')->join('places','places.id','=','shops.place_id')->join('plans','plans.id','=','shops.plan_id')
                ->get();
            }
     return view('index',compact('details', 'keyword', 'keyword1', 'keyword2', 'keyword3', 'keyword4' ));
    
    }
public function meet(Request $request)
{
        $keyword = $request->input('keyword0');
        $keyword1 = $request->input('keyword01');
        $keyword2 = $request->input('keyword02');
        $keyword3 = $request->input('keyword03');
        $keyword4 = $request->input('keyword04');
            if (!empty($keyword)||!empty($keyword1)||!empty($keyword2)||!empty($keyword3)||!empty($keyword4)) {
                $details=DB::table('details')->join('shops','shops.id','=','details.shop_id')->join('places','places.id','=','shops.place_id')->join('plans','plans.id','=','shops.plan_id')
                    ->Where('plan', 'LIKE', "%{$keyword}%")
                    ->where('place', 'LIKE', "%{$keyword1}%")
                    ->where('course', 'LIKE', "%{$keyword2}%")
                    ->where('name', 'LIKE', "%{$keyword3}%")
                    ->where('price', 'LIKE', "%{$keyword4}%")
                    ->get();
            }else{
                $details=DB::table('details')->join('shops','shops.id','=','details.shop_id')->join('places','places.id','=','shops.place_id')->join('plans','plans.id','=','shops.plan_id')
                ->get();
            }
      return view('index',compact('details', 'keyword', 'keyword1', 'keyword2', 'keyword3', 'keyword4' ));
        
    }
public function shop(Request $request)
{
        $keyword = $request->input('keyword00');
        $keyword1 = $request->input('keyword001');
        $keyword2 = $request->input('keyword002');
        $keyword3 = $request->input('keyword003');
        $keyword4 = $request->input('keyword004');
            if (!empty($keyword)||!empty($keyword1)||!empty($keyword2)||!empty($keyword3)||!empty($keyword4)) {
                $details=DB::table('details')->join('shops','shops.id','=','details.shop_id')->join('places','places.id','=','shops.place_id')->join('plans','plans.id','=','shops.plan_id')
                    ->Where('plan', 'LIKE', "%{$keyword}%")
                    ->where('place', 'LIKE', "%{$keyword1}%")
                    ->where('course', 'LIKE', "%{$keyword2}%")
                    ->where('name', 'LIKE', "%{$keyword3}%")
                    ->where('price', 'LIKE', "%{$keyword4}%")
                
                    ->get();
            }else{
                $details=DB::table('details')->join('shops','shops.id','=','details.shop_id')->join('places','places.id','=','shops.place_id')->join('plans','plans.id','=','shops.plan_id')
                ->get();
            }
      return view('index',compact('details', 'keyword', 'keyword1', 'keyword2', 'keyword3', 'keyword4' ));
    }
}
 