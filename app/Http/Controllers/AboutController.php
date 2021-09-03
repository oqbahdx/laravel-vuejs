<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return 'this is index function from controller';
    }

    public function myHistory(){
        return 'history from controller';
    }
}
