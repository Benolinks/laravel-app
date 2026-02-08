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



  <!-- Track Order Section -->
  <div class="container my-5">
    <h2 class="text-center fw-bold mb-4">Track Order</h2>
    <p class="text-center text-muted">Order Number: <span class="fw-bold">0123456789</span></p>

    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <!-- Profile Card -->
        <div class="card shadow-sm mb-4">
          <div class="card-body text-center">
            <img src="https://via.placeholder.com/100" class="rounded-circle mb-3" alt="Profile Picture">
            <h5 class="fw-bold mb-1">Jane Doe</h5>
            <p class="text-muted mb-0">janedoe@example.com</p>
          </div>
        </div>

        <!-- Order Summary Card -->
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">Order Summary</h5>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between">
                <span>Processing</span>
                <span>$129.99</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Shipped</span>
                <span>$129.99</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Delivered</span>
                <span>$49.99</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span class="fw-bold">Subtotal</span>
                <span class="fw-bold">$129.99</span>
              </li>
            </ul>
            <button class="btn btn-primary w-100 fw-bold">Back to Shop</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  


  

 
<!-- Footer -->
  <footer class="bg-dark text-light">
    @include("user.footer")
  </footer>
  

</body>
</html>




  

 

  
