<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.home.home');
    }
public function AddCategory(){
    return view('admin.add-category.add-category');
}
    public function ManageCategory(){
        return view('admin.manage-category.manage-category');
    }
}
