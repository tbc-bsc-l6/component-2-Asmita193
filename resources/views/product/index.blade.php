@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">All Products</h1>
<hr>
<br>

 <?php //delete from here if search doesnt work ?>
<div>
        <div class="searchBar">
            <div class="">
            <form action="">
    <div class="form-group">
      <input type="search" label="Search" name="search" id="" class="form-control" placeholder="Search by Title">
    </div>
    <br>
    <button class="btn btn-primary">Search</button>
  </form>
                

               <!-- <form action="{{ route('product.index') }}" method="GET" role="search">

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
                </form> -->
            </div>
        </div>
    </div>
    <?php //kkkkkkkkkkkkkkkkkkkkkkkkkkk ?>
<div class="container">
    <div class="row">
        <div class="col-md-6" style="display:flex">
            @foreach ($product as $products)
            <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="img/{{ $products->picture }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $products->title }}</h5>
                                <!-- Product price-->
                                Price: ${{ $products->price }}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a href="{{ route('product.show', $products->id) }}" class="btn btn-outline-dark mt-auto" href="#">View Detail</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>



@endsection
