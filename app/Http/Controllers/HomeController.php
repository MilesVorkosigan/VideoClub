<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CatalogController;
use App\Models\User;
// use App\Models\Movie;

class HomeController extends Controller
{
    
    public function getHome()
    {
        return redirect()->action([CatalogController::class,'getIndex']);
    }
}
