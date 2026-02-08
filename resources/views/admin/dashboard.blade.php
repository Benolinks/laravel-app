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

<body >

    
    
         <div class="admin-sidebar"> @include('admin.sidebar') </div>

      <div class="content-wrapper">
       <h1 class="page-title">Dashboard</h1>


<div class="dashboard-grid">
<div class="dashboard-card">Total Orders: 120</div>
<div class="dashboard-card">Revenue: ₦850,000</div>
<div class="dashboard-card">Pending Orders: 12</div>
<div class="dashboard-card">Customers: 45</div>
</div>




<h1 class="page-title">Products</h1>


<table class="admin-table">
<thead>
<tr>
<th>Name</th>
<th>Price</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>Luxury Straight Hair</td>
<td>₦120,000</td>
<td>
<button class="btn btn-dark btn-sm">Edit</button>
<button class="btn btn-danger btn-sm">Delete</button>
</td>
</tr>
</tbody>
</table>
   


</body>
</html>
