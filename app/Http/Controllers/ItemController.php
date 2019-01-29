<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use Auth;
use Session;

class ItemController extends Controller
{
    public function showItems() {
    	$categories = Category::all();
    	$items = Item::all();
    	return view("items.catalog", compact(['categories', 'items'])); 
    }

    public function itemDetails($id) {
    	// $items = Item::where('id',$item_id)->first();
    	$item = Item::find($id);

    	return view("items.item_details", compact("item")); 
    }
}
