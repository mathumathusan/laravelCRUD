@extends('layouts.app')
@section('main')

                <div class="d-flex justify-content-between"> <span class="h4">product details</span>
                    <a href="/products/create" class="btn btn-primary"><i class="bi bi-plus-circle-fill mx-2"></i>add products</a>
                </div>
               
                <div class="col-md-12 table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>M.R.P</th>
                                <th>Selling Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="/products/{{$product->image}}" style="height: 50px; width: 50px; object-fit: contain;" alt="product"></td>
                                <td><a href="/products/show/{{$product->id}}">{{$product->name}}</a></td>
                                <td>{{$product->mrp}}</td>
                                <td>{{$product->price}}</td>
                                <td class="d-flex ">
                                    <a href="/products/delete/{{$product->id}}" class="btn btn-danger mx-2 " onclick="return confirm('Are you sure want to you delete?')"  style="width: 100px;">delete</a>
                                    <a href="/products/edit/{{$product->id}}"   class="btn btn-success"  style="width: 100px;">edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

@endsection