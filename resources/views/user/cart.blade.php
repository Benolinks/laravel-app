<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body >

  <!-- Navbar -->
  <div>
  @include("user.header")
</div>

  <!-- Cart Section -->

  <section class="py-5 gradient-section">
    <div class="container">
      <h2 class="text-center text-light fw-bold mb-4">Shopping Cart</h2>
      <div class="card shadow-lg">
        <div class="card-body">
          <div class="row align-items-center">
            <!-- Product Image -->
            <div class="col-md-3 text-center">
              <div class="product-img-placeholder">
                <span>Product Image</span>
              </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
              <h5 class="fw-bold">Straight Hair Extension</h5>
              <p class="text-muted mb-1">$129.99</p>
              <p class="small">
                Crafted from high-quality, natural hair. Sleek, straight texture for a smooth and polished look. 
                Elevate your style with this luxurious extension.
              </p>
            </div>

            <!-- Quantity Selector -->
            <div class="col-md-3 text-center">
              <div class="input-group justify-content-center">

                <button class="btn btn-outline-dark">
                    <i class="bi bi-dash"></i>
                </button>

                <input type="text" class="form-control text-center mx-1" value="1" style="max-width:60px;">

                <button class="btn btn-outline-dark">
                    <i class="bi bi-plus"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Subtotal -->
          <hr>
          <div class="d-flex justify-content-between">
            <span class="fw-semibold">Subtotal</span>
            <span>$129.99</span>
          </div>
          <div class="d-flex justify-content-between mb-3">
            <span class="fw-semibold">Total</span>
            <span class="fw-bold">$129.99</span>
          </div>

          <!-- Checkout Button -->
          <button class="btn btn-primary w-100 btn-lg">Proceed to Checkout</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-light">
    @include("user.footer")
  </footer>

 
</body>
</html>
