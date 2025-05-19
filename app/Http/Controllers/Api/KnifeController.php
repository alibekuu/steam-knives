<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Knife;
use Illuminate\Http\Request;

class KnifeController extends Controller
{
    public function index()
    {
        return Knife::all();
    }
}
