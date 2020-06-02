
@extends('layouts.master')


@section('title','new arrivals')
@section('title_text','sixteen products')




@section('item')
<div class="products">
  <div class="container">
    <div class="row">
      @include('partials.productfilters')

      <div class="col-md-12">
        <div class="filters-content">
          <div class="row grid">
            <div class="col-lg-4 col-md-4 all des">
              <div class="product-item">
                <a href="#"><img src="{{asset('assets/images/product_01.jpg')}}" alt=""></a>
                <div class="down-content">
                  <a href="#"><h4>Tittle goes here</h4></a>
                  <h6>$18.25</h6>
                  <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                  <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  <span>Reviews (12)</span>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      @include('partials.productpagenumber')
    </div>
  </div>
</div>
@endsection

