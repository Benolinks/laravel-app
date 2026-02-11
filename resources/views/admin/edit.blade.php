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
<form  method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')


<label>Product Name</label>
<input type="text" class="form-control" value="{{ $product->product_name }}">


<label>Price (₦)</label>
<input type="number" class="form-control" value="{{ $product->price }}">


<label>Description</label>
<textarea class="form-control">{{ $product->description }}</textarea>

<label>Hair Length</label>
<select class="form-control" name="length" value="{{ $product->length }}">
<option value="10 inches" {{ $product->length == '10 inches' ? 'selected' : '' }}>10 inches</option>
<option value="12 inches" {{ $product->length == '12 inches' ? 'selected' : '' }}>12 inches</option>
<option value="14 inches" {{ $product->length == '14 inches' ? 'selected' : '' }}>14 inches</option>
<option value="16 inches" {{ $product->length == '16 inches' ? 'selected' : '' }}>16 inches</option>
<option value="20+ inches" {{ $product->length == '20+ inches' ? 'selected' : '' }}>20+ inches</option>
</select>


<div class="product-img mt-3 mb-3">
    <img src="{{ asset('storage/'.$product->image) }}" alt="">
</div>



<label>Product Image</label>
<input type="file" class="form-control">


<button class="primary-btn">Update Product</button>

</form>
</div>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>