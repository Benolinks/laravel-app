<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/Luxury hair logo.png" type="image/x-icon"> {{-- // bootstrap css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>LUXURY HAIR</title>
</head> {{-- style links --}}
<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap"
    rel="stylesheet"> {{-- @ vite resources --}} @vite('resources/css/admin.css', 'resources/js/admin.js')

<body style="background: #e4d6d8;">

 

  <nav class="navbar navbar-dark luxury-navbar fixed-top">
<div class="container-fluid">
<a class="navbar-brand fw-bold" href="#">Luxury Admin</a>
<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
<span class="navbar-toggler-icon"></span>
</button>


<div class="offcanvas offcanvas-end luxury-offcanvas" tabindex="-1" id="offcanvasNavbar">
<div class="offcanvas-header">
<h5 class="offcanvas-title">Luxury Hair</h5>
<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
</div>


<div class="offcanvas-body">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
<li class="nav-item"><a class="nav-link" href="#">Orders</a></li>
<li class="nav-item"><a class="nav-link" href="#">Payments</a></li>
<li class="nav-item"><a class="nav-link" href="#">Products</a></li>
<li class="nav-item"><a class="nav-link" href="#">Uploads</a></li>
</ul>
</div>
</div>
</div>
</nav>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
