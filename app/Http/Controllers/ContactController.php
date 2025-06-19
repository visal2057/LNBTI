<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
     public function index()
    {
        return view('contact'); // Assumes you have a `contact.blade.php`
    }
}
