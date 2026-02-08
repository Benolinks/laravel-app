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



  <!-- Checkout Section -->
  <div class="container my-5">
    <h2 class="text-center mb-4 fw-bold">Checkout</h2>
    <div class="row">
      
      <!-- Shipping Address -->
      <div class="col-md-6">
        <div class="card shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title mb-3">Shipping Address</h5>
            <form>
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Enter full name">
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" placeholder="Street address">
              </div>
              <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" class="form-control" placeholder="City">
              </div>
              <div class="mb-3">
                <label class="form-label">Country</label>
                <select class="form-select">
                  <option selected>Choose...</option>
                  <option>Nigeria</option>
              
                </select>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Payment + Order Summary -->
      <div class="col-md-6">
        <div class="card shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title mb-3">Payment Method</h5>
            <form>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="payment" id="card" checked>
                <label class="form-check-label" for="card">Card</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="payment" id="bank">
                <label class="form-check-label" for="bank">Bank</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="payment" id="wallet">
                <label class="form-check-label" for="wallet">Wallet</label>
              </div>
            </form>
          </div>
        </div>

        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title mb-3">Order Summary</h5>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Straight Hair Extension
                <span>$129.99</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span class="fw-bold">Subtotal</span>
                <span>$129.99</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span class="fw-bold">Total</span>
                <span class="fw-bold">$129.99</span>
              </li>
            </ul>
            <button class="btn btn-pink w-100 fw-bold">Place Order</button>
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




  

 

  
