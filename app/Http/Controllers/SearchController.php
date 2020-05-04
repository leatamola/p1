<?php

namespace App\Http\Controllers;

use App\Category_model;
use App\ImageGallery_model;
use App\ProductAtrr_model;
use App\Products_model;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){

      $query = $request->input('query');
      // $products = Products_model::where('title', 'like', "%$query%")->get();

      $categories = Category_model::all();
      $products = Products_model::search($query)->paginate(10);
      return view('frontEnd.searchResults',compact('categories'))->with('products', $products);

    }

    public function index(Request $request){

      $query = $request->input('query');
      // $products = Products_model::where('title', 'like', "%$query%")->get();

      $categories = Category_model::all();
      $products = Products_model::all()->paginate(10);
      return view('frontEnd.searchResults',compact('categories'))->with('products', $products);

    }

    public function searchCategory($name){

      $category = Category_model::SearchCategory($name)->first();
      $products = $category->product->title;
      dd($products);

    }
}
