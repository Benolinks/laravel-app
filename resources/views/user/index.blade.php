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

  <!-- Product Section -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <!-- Product Image -->
        <div class="col-md-6 text-center">
          <img src="/images/img 1.png" alt="Straight Hair Extension" class="img-fluid luxury-product-img">
        </div>

        <!-- Product Details -->
        <div class="col-md-6 luxury-product-details">
          <h2 class="fw-bold luxury-product-title">Straight Hair Extension</h2>
          <p class="text-muted fs-5 luxury-price">$129.99</p>
          <p class="lead luxury-description">
            Crafted from high-quality, natural hair. Sleek, straight texture for a smooth and polished look. 
            Elevate your style with this luxurious, easy-to-use extension.
          </p>

          <!-- Length Options -->
          <div class="mb-3 luxury-length-options">
            <label class="fw-semibold">Length:</label>
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-outline-dark luxury-length-btn">18"</button>
              <button type="button" class="btn btn-outline-dark luxury-length-btn">20"</button>
              <button type="button" class="btn btn-outline-dark luxury-length-btn">22"</button>
            </div>
          </div>

          <!-- Add to Cart -->
          <button class="btn btn-primary btn-lg w-100 luxury-add-cart">Add to Cart</button>

          <!-- Customer Reviews -->
          <div class="mt-4 luxury-reviews">
            <h6 class="fw-semibold">Customer Reviews</h6>
            <div class="d-flex align-items-center">
              <span class="text-warning fs-4">★★★★☆</span>
              <span class="ms-2">4.5 out of 5</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <div>
  @include('user.footer')
  </div>


  <!-- Bootstrap JS -->

</body>
</html>
