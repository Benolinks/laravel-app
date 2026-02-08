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




  <!-- Success Section -->
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm text-center">
          <div class="card-body">
            <div class="mb-3">
              <i class="bi bi-check-circle-fill text-success" style="font-size:3rem;"></i>
            </div>
            <h3 class="fw-bold">Payment Successful</h3>
            <p class="text-muted">Thank you for your purchase! Your order has been confirmed.</p>
            <a href="#" class="btn btn-primary w-100 fw-bold">Back to Shop</a>
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




  

 

  
