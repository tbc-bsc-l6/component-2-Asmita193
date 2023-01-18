@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">All Products</h1>
<hr>
<br>

<?php //delete from here if search doesnt work ?>
<div>
        <div class="searchBar">
            <div class="">
                <form action="{{ route('product.index') }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search Products">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search products" id="term">
                        <a href="{{ route('product.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php //kkkkkkkkkkkkkkkkkkkkkkkkkkk ?>
<div class="container">
    <div class="row">
        <div class="col-md-6" style="display:flex">
            @foreach ($products as $product)
            <div class="card m-2 p-2" style="width: 18rem;">
                <img src="images/{{ $product->picture }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->title }}</h5>
                  <h5 class="card-title">Price: ${{ $product->price }}</h5>
                  <hr>
                  <p class="card-text">{{ $product->description}} </p>
                  <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View Detail</a>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>



@endsection
