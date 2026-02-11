<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 

</head>
<body class="luxury-bg-light">

  <!-- Navbar -->
  <div>
  @include('user.header')
  </div>


  <!-- Hero Banner -->
  <section class="luxury-banner text-white text-center d-flex align-items-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="/images/IMG 1.png" alt="Model with styled hair" class="img-fluid rounded luxury-banner-img">
        </div>
        <div class="col-lg-6">
          <h1 class="fw-bold display-5">LUXURY HAIR FOR EVERY QUEEN</h1>
          <p class="lead">Discover Our New Arrivals<br>Explore the latest trends in hair fashion</p>
          <a href="#" class="btn btn-light btn-lg luxury-btn">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Product Grid -->

@foreach ($userproducts as $userproduct)
<div class="product-grid">
  <div class="card">
    <div class="product-image">
      <img src="{{ asset('storage/'.$userproduct->product->image) }}" alt="">
    </div>

    <h3 class="product-title">
        @if ($userproduct->product)
          {{ $userproduct->product->product_name }}
        @endif
    </h3>

    <p class="product-price">
       @if ($userproduct->product)
         {{ $userproduct->product->product_price }}
        @endif
    </p>
  </div>
</div>
@endforeach



  {{-- <div class="card">
    <div class="product-image">
      <img src="/images/IMG 1.png" alt="Sneakers">
    </div>
    <h3 class="product-title">Sneakers</h3>
    <p class="product-price">$90</p>
  </div>

  <div class="card">
    <div class="product-image">
      <img src="/images/IMG 1.png" alt="Sports Shoe">
    </div>
    <h3 class="product-title">Sports Shoe</h3>
    <p class="product-price">$150</p>
  </div> --}}

  <!-- Add more cards as needed -->
</div>











  {{-- <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 luxury-card text-center">
            <img src="/images/red-curly.png" class="card-img-top luxury-card-img" alt="Red Curly Hair Extension">
            <div class="card-body">
              <h5 class="card-title fw-bold">Red Curly Hair Extension</h5>
              <p class="card-text">Premium quality curly hair extension for bold, confident looks.</p>
              <a href="#" class="btn btn-dark luxury-btn">Go somewhere</a>
            </div>
          </div>
        </div>
        <!-- Repeat more product cards -->
      </div>
    </div>
  </section> --}}

  <!-- Footer -->
 <div>
  @include('user.footer')
  </div>


  <!-- Bootstrap JS -->

</body>
</html>
