<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function books(){
        
        $data = [
            'book1'  => 'Little Women',
            'book2'  => 'Becoming',
            'book3'  => 'The Creative Act',
            'book4'  => 'The Handmaids Tail',
            'book5'  => 'Where the Crawdads Sing',
            'book6'  => 'Song of Solomon',
            'book7'  => 'Crying in H Mart',
            'book8'  => 'Ulysses',
            'book9'  => 'The Vanishing Half',
            'book10' => 'The Kite Runner',
            'book11' => 'There There'];

        return view('books', ['data' => $data]);
    }
}
