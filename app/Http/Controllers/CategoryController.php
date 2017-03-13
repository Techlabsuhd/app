<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

class CategoryController extends Controller
{
    //
    
    public function get(){
        
        $id = request()->route("id");
        if(is_null($id)){
            $categories = Category::all();
            return view("categories", ["categories"=>$categories]);
            
        }
        $category = Category::find($id);
        if(is_null($category)) {
            return redirect("category");
        }
         
        return view("category", ["category"=>$category]);
        
    }
    
    
    
    
    public function staticCreate(){
        
       // $category = new \App\Category();
       // $category->name = "First Category";
       // $category->save();
        
        $category = Category::firstOrCreate(
                [
                    'name' => 'First Category'
                    ]);
        
       $category = Category::firstOrCreate(
                [
                    'name' => 'Second Category'
                    ]);
        return "Category ".$category->name." is ready";
    }
   
}
