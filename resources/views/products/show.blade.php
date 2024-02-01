@extends('layouts.app')
@section('main')
<div class="container mt-5 ">
            <div class="d-flex align-items-center" >
                <a href="/" >home</a>
                <span>/ProductDetails</span>
             </div> 
            <div class="row">
          
                <div class="card mb-3" >
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="/products/{{$product->image}}" class="img-fluid rounded-start" style="height:400px;width:400px;">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$product->name}}</h5>
                          <p class="card-text">{{$product->description}}</p>
                          <p class="card-text"><small class="text-body-secondary">Last updated {{$product->created_at}} </small></p>
                        </div>
                      </div>
                    </div>
                  </div>
           
            </div>
        </div>
@endsection