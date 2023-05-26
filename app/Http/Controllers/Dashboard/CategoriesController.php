<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // Read
    public function index() 
    {
        $categories=[]; 
    //    $categories=Category::all();
    //    dd($categories);
        return view('dashboard.categories.index',[
            'title'=>'Categories List',
            'entries'=>$categories,
        ]);
    }


    //Create
    public function create() 
    {
        return view('dashboard.categories.create');
    }

    public function store() 
    {
        
    }


    // Update
    public function edit() 
    {
        
    }

    public function update() 
    {
        
    }


    //Delete
    public function destroy() 
    {
        
    }
}
