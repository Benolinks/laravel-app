<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function dashboard()
    {
        return view('admin.dashboard');
    }


    public function edit()
    {
        return view('admin.edit');
    }

    public function order()
    {
        return view('admin.order');
    }

    public function payment()
    {
        return view('admin.payment');
    }

    public function product_uploads()
    {
        return view('admin.product_uploads');
    }


   



















}
