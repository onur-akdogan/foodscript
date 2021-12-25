<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $allCategory=Category::get();

        return view('backend.category.index',compact('allCategory'));
    }
    public function editPage($id){
        $category=Category::find($id);
      return view('backend.category.edit',compact('category'));
    }
    public function update(Request $request){
        $id=$request->id;
        $data = request()->except(['_token','id']);
        Category::where('id',$id)->update($data);
        return Redirect()->route('category.index');
    }

    public function status($id,Request $request){
        $data = Category::where('id', $id)->first();
        $update['status'] = $request->aktif;
        Category::where('id', $id)->update($update);
        
        return Redirect()->route('category.index');
        
    }
    public function addPage(){
        return view('backend.category.add');  
  }
    public function insert(Request $request){
    $data = request()->except(['_token']);
        Category::insert($data);
        return Redirect()->route('category.index');
    }
    public function delete($id){
        Category::where('id',$id)->delete();
        return Redirect()->route('category.index');
    }
}
