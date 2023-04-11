<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function product(){
        $productname = [
            ['name' => 'Fluffantry', 'desc' =>'Has 3 magics power, Fluffantry Cards are a type of collectible card in the Cars Wars Wiki game that feature images of vehicle characters in a cute and adorable fluff style of animation. Each Fluffantry card displays an image of a vehicle accompanied by a brief description of its characteristics and abilities.',
            'stats' => 'R', 'price' => '$100', 'image' => 'CardR.jpg'],
            ['name' => 'HuskerGiant', 'desc' =>'Has 1 magic power, Husker Giant Cards are a type of collectible card in the Cars Wars Wiki game that feature images of powerful and intimidating vehicle characters. Each card displays an image of a Husker Giant vehicle accompanied by a brief description of its size, strength, and other defining characteristics.',
            'stats' => 'SR', 'price' => '$500', 'image' => 'CardSR.jpg'],
            ['name' => 'SgtMushroom', 'desc' =>'Has 1 magic power, Sgt. Mushroom Cards are a type of collectible card in the Cars Wars Wiki game that feature images of a unique and quirky vehicle character known as Sgt. Mushroom. Each card displays an image of Sgt. Mushroom vehicle accompanied by a brief description of its characteristics and abilities.',
            'stats' => 'SSR', 'price' => '$1000', 'image' => 'CardSSR.jpg']
        ];
        return view('product') -> with('products', $productname);
    }

    public function detail($name){
        $productname = [
            ['name' => 'Fluffantry', 'desc' =>'Has 3 magics power, Fluffantry Cards are a type of collectible card in the Cars Wars Wiki game that feature images of vehicle characters in a cute and adorable fluff style of animation. Each Fluffantry card displays an image of a vehicle accompanied by a brief description of its characteristics and abilities.',
            'stats' => 'R', 'price' => '$100', 'image' => 'CardR.jpg'],
            ['name' => 'HuskerGiant', 'desc' =>'Has 1 magic power, Husker Giant Cards are a type of collectible card in the Cars Wars Wiki game that feature images of powerful and intimidating vehicle characters. Each card displays an image of a Husker Giant vehicle accompanied by a brief description of its size, strength, and other defining characteristics.',
            'stats' => 'SR', 'price' => '$500', 'image' => 'CardSR.jpg'],
            ['name' => 'SgtMushroom', 'desc' =>'Has 1 magic power, Sgt. Mushroom Cards are a type of collectible card in the Cars Wars Wiki game that feature images of a unique and quirky vehicle character known as Sgt. Mushroom. Each card displays an image of Sgt. Mushroom vehicle accompanied by a brief description of its characteristics and abilities.',
            'stats' => 'SSR', 'price' => '$1000', 'image' => 'CardSSR.jpg']
        ];

        $productNew = [];
        foreach($productname as $p) {
            if($p["name"] == $name) {
                $productNew  = $p;
            }
        }
        return view('layout.detailproduct') -> with('products', $productNew);
    }
}
