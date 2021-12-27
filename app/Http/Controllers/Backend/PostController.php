<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Image;

class PostController extends Controller
{
    public function index(){

        $allPost=Post::limit(20)->get();

        return view('backend.post.index',compact('allPost'));
    }
    public function editPage($id){
        $item=Post::find($id);$category=Category::get();
      return view('backend.post.edit',compact('item','category'));
    }
    public function update(Request $request,Post $post)    {
        $post->fill($request->all());
        $yil = Carbon::now()->year;
        $ay = Carbon::now()->month;
        if (file_exists('storage/postimg/' . $yil) === false) {
            mkdir('storage/postimg/' . $yil, 0777, true);
        }
        if (file_exists('storage/postimg/' . $yil . '/' . $ay) === false) {
            mkdir('storage/postimg/' . $yil . '/' . $ay, 0777, true);
        }

        $image = $request->image;
        if ($image) { // if image is updating
            $image_one = uniqid() . '.' . $image->getClientOriginalName();

            $new_image_name = 'storage/postimg/' . $yil . '/' . $ay . '/' . $image_one;
            Image::make($image)->resize(800, 600)->fit(800, 600)->save($new_image_name,58,'jpeg');
            $post->image = $new_image_name; // set new image to the object, replace tmp image with new right path

            if (file_exists($request->old_image)) {
                unlink($request->old_image);
            }
        }

        $post->save();
        return Redirect()->route('post.index');
    }



    public function status($id,Request $request){
        $data = Post::where('id', $id)->first();
        $update['status'] = $request->aktif;
        Post::where('id', $id)->update($update);

        return Redirect()->route('post.index');

    }
    public function addPage(){
        $category =Category::get();

        return view('backend.post.add',compact('category'));
  }
    public function insert(Request $request){


        $post = Post::create($request->all());

        $yil = Carbon::now()->year;
        $ay = Carbon::now()->month;
        if (file_exists('storage/postimg/' . $yil) == false) {
            mkdir('storage/postimg/' . $yil, 0777, true);
        }
        if (file_exists('storage/postimg/' . $yil . '/' . $ay) == false) {
            mkdir('storage/postimg/' . $yil . '/' . $ay, 0777, true);
        }

        $image = $request->image;
        if ($image) {
            $image_one = uniqid() . '.' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $image->getClientOriginalExtension();

            $new_image_name = 'storage/postimg/' . $yil . '/' . $ay . '/' . $image_one;

            Image::make($image)->resize(800, 600)->fit(800, 600)->save($new_image_name,58,'jpeg');

            $post->image = $new_image_name;
        }

        $post->save();

        return Redirect()->route('post.index');
    }
    public function delete($id){
        Post::where('id',$id)->delete();
        return Redirect()->route('post.index');
    }}
