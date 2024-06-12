@extends('layout')
@section('title', 'Menu')

@section('content')

{{-- Upper Section --}}
<div class="upper-section">
  <div class="card-logo" style="width: 380px; height: 240px; border-radius: 50%; padding-left: 30px;">
    <img src="{{ asset('image/Logo_2.jpeg') }}" class="card-img-top" alt="Image">
  </div>
  
  
  {{-- Long Card Image --}}
  <div class="container-for-bg-img">
    <div class="card-background-img">
        <img src="{{ asset('image/Home_1.jpeg')}}" class="card-img-top" alt="...">
    </div>
  </div>
</div>

{{-- Short Card Image --}}
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      {{-- First Card Image --}}
      <div class="card card-pic">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('image/Gorengan-3.jpg') }}" class="img-fluid image-image-image" alt="Image">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Tahu Goreng</h5>
              <p class="card-text">Olahan tahu yang digemari karena bertekstur renyah dan memiliki cita rasa yang gurih</p>
            </div>
          </div>
        </div>
      </div>
      
      {{-- Third Card Image --}}
      <div class="card card-pic">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('image/Bakwan_Goreng.jpeg') }}" class="img-fluid image-image-image" alt="Image">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Bakwan Goreng</h5>
              <p class="card-text">Gorengan yang terbuat dari taoge, irisan kubis, dan irisan wortel yang di campur ke dalam adonan tepung terigu dan di goreng</p>
            </div>
          </div>
        </div>
      </div>
      
      {{-- Fifth Card Image --}}
      <div class="card card-pic">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('image/pisang_goreng.jpeg') }}" class="img-fluid image-image-image" alt="Image">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Pisang Goreng</h5>
              <p class="card-text">Gorengan yang berbahan dasar pisang dan di campur dengan tepung dan di goreng menghasilkan rasa gurih dan manis</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-6">
      {{-- Second Card Image --}}
      <div class="card card-pic">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('image/Lumpia.jpeg') }}" class="img-fluid image-image-image" alt="Image">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Lumpia</h5>
              <p class="card-text">Lumpia di buat dengan menggabungkan daging, telur, taoge, dan bawang yang di balut oleh kulit lumpia dan di goreng</p>
            </div>
          </div>
        </div>
      </div>
      
      {{-- Fourth Card Image --}}
      <div class="card card-pic">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('image/tempe_goreng.jpeg') }}" class="img-fluid image-image-image" alt="Image">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Tempe Goreng</h5>
              <p class="card-text">Gorengan terkenal yang banyak di gemari yang dibuat dari tempe yang di taburi adonan tepung dan di goreng</p>
            </div>
          </div>
        </div>
      </div>
      
      {{-- Sixth Card Image --}}
      <div class="card card-pic">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('image/Gorengan-2.jpeg') }}" class="img-fluid image-image-image" alt="Image" style="width: 200px; height: 150px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Tahu Isi</h5>
              <p class="card-text">Makanan yang banyak di sukai oleh orang orang, terbuat dari tahu yang di isi oleh daging ataupun sayuran dan di goreng. Menciptakan bau harum dan tekstur yang lembut dan enak di mulut</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

<style>
  .image-image-image {
    max-width: 300px;
    max-height: 150px;
    border-radius: 10px;
    margin: 8px;
    margin-top: 25px;
    margin-bottom: 25px;
    border: 2px black solid;
  }

  body {
    background-color: #fff0c3;
  }

  .upper-section{
    position: relative;
    background-color: #fff0c3;
    display: flex;
    justify-content: center;
    padding: 20px;
  }

  .container-for-bg-img{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 86%;
        height: 370px;
    }

    .card-img-top {
      height: 370px;
    }

    .card-background-img {
        display: flex;  
        flex-direction: column;
        align-items: center;  
        justify-content: center;
        width: 68%;
        height: 370px;
        border: black 1px solid;
        margin: 10px 20px;
    }

  .container-fluid{
    background-color: #fff0c3;
  }

  .card-pic {
    border-radius: 10px;
    position: relative;
    margin: 20px;
  }

</style>
