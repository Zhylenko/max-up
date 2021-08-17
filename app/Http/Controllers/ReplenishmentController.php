<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReplenishmentController extends Controller
{
    public function index()
    {
        return view('replenishment.index');
    }
}
