<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Model;
use App\Models\Price;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;

class AppController extends Controller
{
    public function __invoke(Request $request)
    {
        $brands = Brand::all();
        $models = Model::all();
        $shops = Shop::all();
        $prices = Price::all();

        return view("pages.home", compact("brands", "shops", "prices", "models"));
    }
}
