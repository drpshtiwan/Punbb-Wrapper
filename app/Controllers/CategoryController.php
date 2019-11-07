<?php

namespace App\Controllers;

use App\Model\Category;
use App\Resources\CategoryResource;

class CategoryController
{
    public function index()
    {    
        makePagination();
        $topics = Category::orderBy('disp_position','ASC')->get();
        responseJSON(CategoryResource::collection($topics));
    }
    
    
    
}