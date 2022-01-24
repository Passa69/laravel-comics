<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Comics extends Controller
{
    public function fumetti() {

        $comics = [ 
            '/storage/assets/superman.jpg',
            
            '/storage/assets/superman.jpg',
        
            '/storage/assets/superman.jpg',
        
            '/storage/assets/superman.jpg',
        
            '/storage/assets/superman.jpg',
        
            '/storage/assets/superman.jpg',
        
            '/storage/assets/superman.jpg',
        
            '/storage/assets/superman.jpg',
        
            '/storage/assets/superman.jpg',
        
            '/storage/assets/superman.jpg',
        
            '/storage/assets/superman.jpg',
        
            '/storage/assets/superman.jpg'
        ];

        return view('pages.home', compact('comics'));
    }
}
