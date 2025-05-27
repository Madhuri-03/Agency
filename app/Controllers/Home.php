<?php

namespace App\Controllers;

class Home extends BaseController
{

     public function index(): string
    {
        return view('index');     
    }
    public function blog(): string
    {
        return view('blog');     
    }
    public function blog_single(): string
    {
        return view('blog_single');     
    }
    public function portfolio_details(): string
    {
        return view('portfolio-details');     
    }
    public function inner_page(): string
    {
        return view('inner-page');     
    }
    
}
