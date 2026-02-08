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

   
    
         <div class="admin-sidebar"> @include('admin.sidebar') </div>

         <div class="content-wrapper">
<h1 class="page-title">Orders</h1>


<table class="admin-table">
<thead>
<tr>
<th>Customer</th>
<th>Amount</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>Jane Doe</td>
<td>₦95,000</td>
<td><span class="badge bg-success">Paid</span></td>
</tr>
</tbody>
</table>
    </div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
   
</div>

</body>
</html>
