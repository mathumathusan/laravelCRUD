@extends('layouts.app')
@section('main')
<div class="container  d-flex flex-column">
         <span>Update  Product</span>
         <hr >
         <div class="d-flex align-items-center" >
            <a href="/" >home</a>
            <span>/Update  Product</span>
         </div> 
         <div class="mt-2 col-md-6" >
            <form action="/products/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="col-md-12 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control
                     @if ($errors->has('name')){{'is-invalid'}}@endif" value="{{old('name',$product->name)}}" name="name">
                     @if($errors->has('name'))
                     <div class="invalid-feedback">{{$errors->first('name')}}</div>
                     @endif
                 </div>
                 <div class="col-md-6 mb-3">
                    <label for="">M.R.P</label>
                    <input type="text" class="form-control   @if ($errors->has('mrp')){{'is-invalid'}}@endif" name="mrp" value="{{old('mrp',$product->mrp)}}" >
                    @if($errors->has('name'))
                     <div class="invalid-feedback">{{$errors->first('mrp')}}</div>
                     @endif
                 </div>
                 <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="text" class="form-control   @if ($errors->has('price')){{'is-invalid'}}@endif" name="price" value="{{old('price',$product->price)}}" >
                    @if($errors->has('name'))
                     <div class="invalid-feedback">{{$errors->first('price')}}</div>
                     @endif
                 </div>
                 <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                   <textarea id="" cols="30" rows="10" class="form-control   @if ($errors->has('description')){{'is-invalid'}}@endif  " value="{{old('description',$product->description)}}"  name="description">{{old('description',$product->description)}}</textarea>
                   @if($errors->has('name'))
                     <div class="invalid-feedback">{{$errors->first('description')}}</div>
                     @endif
                </div>
                 <div class="col-md-12 mb-3">
                    <label for="">Product Image</label>
                   <input type="file" class="form-control   @if ($errors->has('image')){{'is-invalid'}}@endif" value="{{old('image',$product->image)}}"  name="image">
                   @if($errors->has('name'))
                     <div class="invalid-feedback">{{$errors->first('image')}}</div>
                     @endif
                </div>
                 <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Update Product</button>
                    <button type="submit" class="btn btn-danger">Clear All</button>
                 </div>
                 
             
            </form>
         </div>
          </div>
          @endsection