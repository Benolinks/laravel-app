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
    rel="stylesheet">

<body>



    <div class="admin-sidebar">
        @include('admin.sidebar')
    </div>

    <div class="content-wrapper">
        <h1 class="page-title">Dashboard</h1>


        <div class="dashboard-grid">
            <div class="dashboard-card">Total Orders: 120</div>
            <div class="dashboard-card">Revenue: ₦850,000</div>
            <div class="dashboard-card">Pending Orders: 12</div>
            <div class="dashboard-card">Customers: 45</div>
        </div>




        <div class="d-flex container-fluid justify-content-between mt-4 mb-4">
            <h1 class="page-title">Products</h1>
            <h1 class="page-title"><a href="{{ route('admin.product_uploads') }}" class="page-title">Add product</a>
            </h1>
        </div>

        @foreach ($products as $product)

        <div>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Luxury Straight Hair</td>
                        <td>₦120,000</td>
                        <td class="product-image">
                            <div class="product-img">
                                <img src="{{ asset('storage/'. $product->image) }}" alt="Luxury Straight Hair">
                            </div>
                        </td>

                        <td class="action-buttons d-flex gap-4 mt-4">
                            <button class="btn btn-dark btn-sm"><a
                                    href="{{ route('admin.product_edit', $product) }}">Edit</a></button>
                            <button class="btn btn-danger btn-sm confirmDeleteBtn"
                                data-product-id="{{ $product->id }}">Delete</button>


                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach

        @if ($products->count() > 0)
        {{-- sweet alert on delete --}}

        <div class="confirmDelete">
            <div class="alert-box">
                <h4>Confirm Delete</h4>
                <p>Are you sure you want to delete this item?</p>

                <div class="alert-actions">
                    <form action="{{ route('admin.product_delete', $product) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn_delete" id="btnDelete">Yes, Delete</button>
                    </form>
                    <button class="btn_cancel" id="btnCancel">Cancel</button>
                </div>
            </div>
        </div>

        {{-- End of sweet alert --}}
            
        @else
        <p>No products found.</p>
            
        @endif
        



</body>

</html>