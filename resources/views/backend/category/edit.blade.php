@extends('admin.admin_master')
@section('admin')
<div class="content m-2" >

<div class="card">

<div class="card-body">
    <form action="{{route('category.update')}}" method="post">
@csrf
    <fieldset class="mb-3">
        <legend class="text-uppercase font-size-sm font-weight-bold">Kategori Düzenle</legend>

       
        <div class="form-group row">
            <label class="col-form-label col-lg-2">Kategori İsmi</label>
            <div class="col-lg-10">
                <input type="text"  name="title" value="{{$category->title}}" class="form-control">
               
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-lg-2">Kategori Detay</label>
            <div class="col-lg-10">
                <textarea class="form-control" name="text" id="" cols="30" rows="10">{{$category->text}}</textarea>
                
            </div>
        </div><div class="form-group row">
            <label class="col-form-label col-lg-2">Kategori Keywords</label>
            <div class="col-lg-10">
                <textarea class="form-control" name="keywords" id="" cols="30" rows="10">{{$category->keywords}}</textarea>
                
            </div>
        </div>
        <input type="hidden" name="id" value="{{$category->id}}">
        <div class="form-group row">
            <label class="col-form-label col-lg-2">Kategori Description</label>
            <div class="col-lg-10">
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$category->description}}</textarea>
                
            </div>
        </div>
        <button type="submit" class="btn bg-success float-right"> Düzenle</button>
    </form>
</div>
</div>
</div>

@endsection