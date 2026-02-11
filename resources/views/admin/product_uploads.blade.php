<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Upload Product</title>


<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@vite('resources/css/admin.css')
</head>


<body>

<div>
@include('admin.sidebar')
</div>

<div class="admin-wrapper">


<h1 class="page-title">Upload Luxury Hair Product</h1>


<div class="upload-card">
<form action="{{ route('admin.upload-product') }}" method="POST" enctype="multipart/form-data">
 @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   


<label>Product Name</label>
<input type="text" class="form-control" name="product_name">


<label>Price (₦)</label>
<input type="number" class="form-control" name="price">

<label>Description</label>
<textarea class="form-control" name="description"></textarea>

<label>Hair Length</label>
<select class="form-control" name="length">
<option>10 inches</option>
<option>12 inches</option>
<option>14 inches</option>
<option>16 inches</option>
<option>20+ inches</option>
</select>


<label>Product Image</label>
<input type="file" class="form-control" name="image">


<button class="primary-btn">Upload Product</button>




</form>
</div>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>