<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Shop;
use App\Slider;

use DB;

use Form;

class ShopController extends Controller
{
    public function homepage(){
        $num = 10;
        $data['sliders'] = Slider::all();
        $data['shops'] = Shop::all()->take($num);
        $data['num'] =  $num;
        $data['title'] = "Coffy - Tìm kiếm quán cafe";

        $filter["districts"] = DB::table('shops')
            ->select('district')
            ->groupBy('district')
            ->get();

        $data['filter'] = $filter;

        return view('homepage', $data);
    }

    public function getData(Request $request){
        $num = (int)$request->num;
        $new = array();
        $count = 1;
        $new_shop;
        $type = $request->type;
        $district = $request->district;

        if(!isset($district)){
            switch ((int)$type) {
                case 0:
                    $new_shop = DB::table("shops")->skip($num)->take(10)->get();
                    break;

                case 1:
                    $new_shop = DB::table("shops")->orderBy("view",'desc')->skip($num)->take(10)->get();
                    break;
                
                case 2:
                     $new_shop = DB::table("shops")->orderBy("created_at",'desc')->skip($num)->take(10)->get();
                     break;
                default:
                    return;
                    break;
            }
        }
        else{
            switch ((int)$type) {
                case 0:
                    $new_shop = DB::table("shops")->whereIn('district',$district)->skip($num)->take(10)->get();
                    break;

                case 1:
                    $new_shop = DB::table("shops")->whereIn('district',$district)->orderBy("view",'asc')->skip($num)->take(10)->get();
                    break;
                
                case 2:
                     $new_shop = DB::table("shops")->whereIn('district',$district)->orderBy("created_at",'desc')->skip($num)->take(10)->get();
                     break;
                default:
                    return;
                    break;
            }
        }
        
        $data["shop"] = $new_shop;
        $data["num"] = $num+10;

        return response()->json($data);
    }

    public function searchData(Request $request){
        
        if(!isset($search)){
            $shops = DB::table("shops")->where('name', 'like', '%'.$request->name.'%')->get();
        }
        $data['shops'] = $shops;
        $data["title"] = "Search - ".$request->name;

        return view('item_search',$data);
    }

    public function getOneShop($slug){
        $shop=  Shop::where("slug",$slug)->firstOrFail();
        
        $shop->view++;
        $shop->save();

        $data["shop"] = $shop;
        $data['sliders'] = Slider::all();
        $data['title'] = "Coffy - ".$shop->name;

        return view("shop",$data);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
