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




 <!-- Failed Section --> <div class="container my-5"> <div class="row justify-content-center"> <div class="col-md-6"> <div class="card shadow-sm text-center"> <div class="card-body"> <div class="mb-3"> <i class="bi bi-x-circle-fill text-danger" style="font-size:3rem;"></i> </div> <h3 class="fw-bold">Payment Failed</h3> <p class="text-muted">Oops! Something went wrong. Please try again or use another payment method.</p> <a href="#" class="btn btn-danger w-100 fw-bold">Retry Payment</a> </div> </div> </div> </div> </div>
 


 
<!-- Footer -->
  <footer class="bg-dark text-light">
    @include("user.footer")
  </footer>
  

</body>
</html>




  

 

  
