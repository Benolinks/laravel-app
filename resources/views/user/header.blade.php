<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/Luxury hair logo.png" type="image/x-icon"> 
    
    {{-- // bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" >



{{-- style links --}}
<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap"
    rel="stylesheet">

      {{-- @ vite resources --}}
    @vite(['resources/css/style.css', 'resources/js/main.js'])



    <title>LUXURY HAIR</title>
</head> 


<body style="background: #e4d6d8;">


      <nav class="navbar navbar-expand-lg navbar-dark luxury-navbar">
    <div class="container">
      <a class="navbar-brand fw-bold luxury-brand" href="#">Luxury Hair</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto luxury-nav-links">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Wigs</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Bundles</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Closures</a></li>
          <li class="nav-item"><a class="nav-link" href="#"> Cart <i class="bi bi-cart"></i> (3)</a></li>
        </ul>
      </div>
    </div>
  </nav>

 


</body>
</html>
