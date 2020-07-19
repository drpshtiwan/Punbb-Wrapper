<?php

namespace App\Controllers;

use App\Model\Category;
use App\Resources\CategoryResource;

class CategoryController
{
    public function index()
    {    
        $categories = Category::orderBy('disp_position','ASC')->get()->filter(function ($cat){
            return $cat->forums->count() > 0;
        })->values();
        responseJSON(CategoryResource::collection($categories));
    }
}