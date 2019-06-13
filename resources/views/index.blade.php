
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
        <div class="col-md-3">

          <div class="card image-feature" >
          <img src={{ asset('images/products/one.jpg') }} class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Samsung</h5>
            <p class="card-text">50000/=</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-3 image-feature">

        <div class="card " >
        <img src={{ asset('images/products/one.jpg') }} class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Samsung</h5>
          <p class="card-text">50000/=</p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">

      <div class="card image-feature" >
      <img src={{ asset('images/products/one.jpg') }} class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Samsung</h5>
        <p class="card-text">50000/=</p>
    <a href="#" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div>

  <div class="col-md-3">

    <div class="card image-feature" >
    <img src={{ asset('images/products/one.jpg') }} class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Samsung</h5>
      <p class="card-text">50000/=</p>
      <a href="#" class="btn btn-primary">Buy Now</a>
    </div>
  </div>
</div>
<div class="col-md-3">

  <div class="card image-feature" >
  <img src={{ asset('images/products/one.jpg') }} class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Samsung</h5>
    <p class="card-text">50000/=</p>
    <a href="#" class="btn btn-primary">Buy Now</a>
  </div>
</div>
</div>

        </div>

      </div>

    </div>

  </div>
</div>

</div>
@endsection
