@extends('admin.admin_master')
@section('admin')
<div class="content m-2" >

<div class="card">

<div class="card-body">
    <form action="{{route('category.insert')}}" method="post">
@csrf
    <fieldset class="mb-3">
        <legend class="text-uppercase font-size-sm font-weight-bold">Kategori Ekle</legend>

       <!-- <select name="parent_id">
            <option value="">--</option>
        </select>-->

        <div class="form-group row">
            <label class="col-form-label col-lg-2">Kategori İsmi  </label>
            <div class="col-lg-10">
                <input type="text"  name="title" class="form-control">
                @error('category_tr')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-lg-2">Kategori Detay</label>
            <div class="col-lg-10">
                <textarea class="form-control" name="text" id="" cols="30" rows="10"></textarea>
                
            </div>
        </div><div class="form-group row">
            <label class="col-form-label col-lg-2">Kategori Keywords</label>
            <div class="col-lg-10">
                <textarea class="form-control" name="keywords" id="" cols="30" rows="10"></textarea>
                
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-lg-2">Kategori Description</label>
            <div class="col-lg-10">
                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                
            </div>
        </div>
        <button type="submit" class="btn bg-success float-right"> Ekle</button>
    </form>
</div>
</div>
</div>

@endsection