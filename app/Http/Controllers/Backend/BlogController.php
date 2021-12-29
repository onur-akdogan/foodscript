<?php

namespace App\Http\Controllers\Backend;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Image;
class BlogController extends Controller
{
    public function index(){
        $allPost=Blog::limit(20)->orderByDesc('created_at')->get();
        return view("backend.blog.index",compact('allPost'));
    }
    public function status($id,Request $request){
        $data = Blog::where('id', $id)->first();
        $update['status'] = $request->aktif;
        Blog::where('id', $id)->update($update);

        return Redirect()->route('blog.index');

    }
    public function update(Request $request,Blog $blog)    {
        $blog->fill($request->all());
        $yil = Carbon::now()->year;
        $ay = Carbon::now()->month;
        if (file_exists('storage/postimg/' . $yil) === false) {
            mkdir('storage/postimg/' . $yil, 0777, true);
        }
        if (file_exists('storage/postimg/' . $yil . '/' . $ay) === false) {
            mkdir('storage/postimg/' . $yil . '/' . $ay, 0777, true);
        }
    
        $image = $request->images;
        if ($image) { // if image is updating
            $image_one = uniqid() . '.' . $image->getClientOriginalName();
    
            $new_image_name = 'storage/postimg/' . $yil . '/' . $ay . '/' . $image_one;
            Image::make($image)->resize(800, 600)->fit(800, 600)->save($new_image_name,58,'jpeg');
            $blog->images = $new_image_name; // set new image to the object, replace tmp image with new right path
    
            if (file_exists($request->old_image)) {
                unlink($request->old_image);
            }
        }
        $blog->save();
        return Redirect()->route('blog.index');
    }

    public function delete($id){
        Blog::where('id',$id)->delete();
        return Redirect()->route('blog.index');
    }
    public function addPage(){
       

        return view('backend.blog.add');
  }
  public function insert(Request $request){
    $blog = Blog::create($request->all());
    $yil = Carbon::now()->year;
    $ay = Carbon::now()->month;
    if (file_exists('storage/postimg/' . $yil) == false) {
        mkdir('storage/postimg/' . $yil, 0777, true);
    }
    if (file_exists('storage/postimg/' . $yil . '/' . $ay) == false) {
        mkdir('storage/postimg/' . $yil . '/' . $ay, 0777, true);
    }

    $image = $request->images;
    if ($image) {
        $image_one = uniqid() . '.' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $image->getClientOriginalExtension();

        $new_image_name = 'storage/postimg/' . $yil . '/' . $ay . '/' . $image_one;

        Image::make($image)->resize(800, 600)->fit(800, 600)->save($new_image_name,58,'jpeg');

        $blog->images = $new_image_name;
    }

    $blog->save();

    return Redirect()->route('blog.index');
}
public function editPage($id){
    $item=Blog::find($id);
  return view('backend.blog.edit',compact('item'));
}

}
