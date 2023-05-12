<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Actions
    public function index()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('register');
    }

    public function newss()
    {
        return view('news');
    }


    protected $news = [
        1 => 'News Title 1',
        2 => 'News Title 2',
        3 => 'News Title 3',
        4 => 'News Title 4',
    ];



    public function news($id=0)
    {
        if($id){
            echo '<h1>' . $this->news[$id]. '</h1>';
        } else {
            echo '<ul>';
            foreach($this->news as $news){
                echo '<li>' .$news. '</lu>';
            }
            echo '/ul';
        }
    }

}
