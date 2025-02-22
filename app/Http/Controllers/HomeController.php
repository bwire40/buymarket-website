<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // welcome page
    public function index()
    {
        $img1 = 'resources/images/products/perfume.jpg';
        $img2 = 'resources/images/products/sport_shoe.jpg';
        $img3 = 'resources/images/products/laural.jpg';
        $home_data = [
            [
                "id" => 1,
                "name" => "perfume",
                "img" => $img1
            ],
            [
                "id" => 2,
                "name" => "Sport Shoe",
                "img" => $img2
            ],
            [
                "id" => 3,
                "name" => "Laurel",
                "img" => $img3,
            ],
        ];


        return view('welcome', compact('home_data'));
    }

    public function shop()
    {
        return view('customers.shop');
    }
    public function contact()
    {
        return view('customers.contact');
    }
    public function about()
    {
        return view('customers.about');
    }
    public function become_seller()
    {
        return view('customers.become-seller');
    }
}
