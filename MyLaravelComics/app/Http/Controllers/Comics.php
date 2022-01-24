<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Comics extends Controller
{
    public function fumetti() {

        $comics = [
            [
                'img' => '/storage/assets/superman.jpg',
                'name' => 'Action Comics'
            ],
            [
                'img' => '/storage/assets/batman.jpg',
                'name' => 'Batman'
            ],
            [
                'img' => '/storage/assets/joker.jpg',
                'name' => 'Joker'
            ],
            [
                'img' => '/storage/assets/greenlantern.jpg',
                'name' => 'Green Lantern'
            ],
            [
                'img' => '/storage/assets/batman-2.jpg',
                'name' => 'Batman'
            ],
            [
                'img' => '/storage/assets/JL.jpg',
                'name' => 'Justice League'
            ],
            [
                'img' => '/storage/assets/superman-2.jpg',
                'name' => 'Superman'
            ],
            [
                'img' => '/storage/assets/wonderwoman.jpg',
                'name' => 'Wonder Woman'
            ],
            [
                'img' => '/storage/assets/robin.jpg',
                'name' => 'Robin'
            ],
            [
                'img' => '/storage/assets/R&B.jpg',
                'name' => 'Batman & Robin'
            ],
            [
                'img' => '/storage/assets/action.jpg',
                'name' => 'Action Comics XL'
            ],
            [
                'img' => '/storage/assets/flash.jpg',
                'name' => 'Flash'
            ]
        ];

        return view('pages.home', compact('comics'));
    }
}
