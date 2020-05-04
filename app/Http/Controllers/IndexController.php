<?php

namespace App\Http\Controllers;

use App\Category_model;
use App\ImageGallery_model;
use App\ProductAtrr_model;
use App\Products_model;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $menu_active=0;
        $categories=Category_model::orderBy('name')->get();
        $destacados = Products_model::all()->where('destacado', 1)->take(4);
        $cuarentenas = Products_model::all()->where('cuarentena', 1)->take(4);
        $products=Products_model::all();
        return view('frontEnd.index',compact('products','menu_active','categories','destacados'));
    }
    public function shop(){
      $categories = Category_model::all();
      $products=Products_model::paginate(5);
      return view('frontEnd.products',compact('products','categories'));

    }
    public function listByCat($id){
        $list_product=Products_model::where('categories_id',$id)->paginate(10);
        $byCate=Category_model::select('name')->where('id',$id)->first();
        $categories = Category_model::orderBy('name')->get();
        return view('frontEnd.listByCategory',compact('list_product','byCate','categories'));
    }

    public function listAll(){
      $categories = Category_model::orderBy('name')->get();
      $list_product=Products_model::paginate(15);
        return view('frontEnd.listByCategory',compact('list_product','categories'));
    }
    public function destacadosShow(){
      $list_product=Products_model::where('destacado',1)->paginate(10);
      $categories = Category_model::orderBy('name')->get();
      return view('frontEnd.listByCategory',compact('list_product','categories'));
    }
    public function aboutShow(){
        $categories=Category_model::orderBy('name')->get();
        $products=Products_model::all();
        return view('frontEnd.about',compact('products','categories'));
    }

    public function detialpro($id){
        $detail_product=Products_model::findOrFail($id);
        $categories=Category_model::orderBy('name')->get();
        $imagesGalleries=ImageGallery_model::where('products_id',$id)->get();
        $totalStock=ProductAtrr_model::where('products_id',$id)->sum('stock');
        $relateProducts=Products_model::where([['id','!=',$id],['categories_id',$detail_product->categories_id]])->get();
        return view('frontEnd.product_details',compact('detail_product','imagesGalleries','totalStock','relateProducts','categories'));
    }
    public function getAttrs(Request $request){
        $all_attrs=$request->all();
        //print_r($all_attrs);die();
        $attr=explode('-',$all_attrs['size']);
        //echo $attr[0].' <=> '. $attr[1];
        $result_select=ProductAtrr_model::where(['products_id'=>$attr[0],'size'=>$attr[1]])->first();
        echo $result_select->price."#".$result_select->stock;
    }
}
