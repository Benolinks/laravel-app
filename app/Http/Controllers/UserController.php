<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    

  public function index()
    {
        return view('user.index');
    }


    public function cart(){

    return view('user.cart'); 
    
    }


    public function checkout(){

        return view('user.checkout'); 
        
        }

        public function contact(){
            return view('user.contact');
        }

        public function trackorder(){
            return view('user.trackorder');
        }
       
        public function payment_failed(){
            return view('user.payment_failed');
        }
        public function payment_success(){
            return view('user.payment_success');
        }

        public function home(){
            return view('user.home');
        }


}
