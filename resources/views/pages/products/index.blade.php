
@extends('layout.master')

@section('content')


<div class="container margin">



<div class="row">

  <div class="col-md-4">
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
      <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item list-group-item-action " >Vestibulum at eros</a>
  </div>



  </div>

  <div class="col-md-8">

    <div class="widget">
      <div class="row">
        @foreach($products as $p)
        <div class="col-md-3">

          <div class="card image-feature" >
          @foreach($p->images as $image)
              <img src="{{ asset('images/products/'. $image->image) }}" class="card-img-top" alt="...">
          @endForeach
          <div class="card-body">
            <h5 class="card-title">{{ $p->title }}</h5>
            <p class="card-text">{{ $p->price }}</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      </div>
      @endForeach



        </div>

      </div>

    </div>

  </div>
</div>

</div>
@endsection
