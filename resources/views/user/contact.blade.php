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

<!-- Contact Section --> <div class="container my-5"> <h2 class="text-center fw-bold mb-4">Contact Us</h2> <div class="row justify-content-center"> <div class="col-md-8 col-lg-6"> <div class="card shadow-sm"> <div class="card-body"> <h5 class="card-title mb-3">Support</h5> <form> <div class="mb-3"> <label class="form-label">Name</label> <input type="text" class="form-control" placeholder="Enter your name"> </div> <div class="mb-3"> <label class="form-label">Email</label> <input type="email" class="form-control" placeholder="Enter your email"> </div> <div class="mb-3"> <label class="form-label">Message</label> <textarea class="form-control" rows="4" placeholder="Type your message"></textarea> </div> <button type="submit" class="btn btn-primary w-100 fw-bold">Send Message</button> </form> </div> </div> </div> </div> </div>

  

 
<!-- Footer -->
  <footer class="bg-dark text-light">
    @include("user.footer")
  </footer>
  

</body>
</html>




  

 

  
