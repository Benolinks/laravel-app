<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    //

    public function dashboard()
    {
        $products = Product::all();
        return view('admin.dashboard', compact('products'));
    }


    public function edit(Request $request, Product $product)
    {
        return view('admin.edit', compact('product'));
    }

    public function order()
    {
        return view('admin.order');
    }

    public function payment()
    {
        return view('admin.payment');
    }

    public function product_uploads()
    {
        return view('admin.product_uploads');
    }


    public function upload_product(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'product_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'length' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $data['image'] = $imagePath;
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }


        Product::create($data + ['image' => $imagePath]);

        return redirect()->route('admin.dashboard')->with('success', 'Product uploaded successfully!');
    }

    public function product_delete(Product $product)
    {

        $product = Product::findOrFail($product->id);

        if ($product->image && Storage::disk('public')->exists($product->image)){
            Storage::disk('public')->delete($product->image);
       
            $product->delete();
            
           

            return redirect()->route('admin.dashboard')->with('success', 'Product deleted successfully!');

    
        }else {
            return back()->withErrors(['error' => 'Product not found.']);
        }
    }
    
    









    public function product_edit(Request $request, Product $product)
    {
       return view('admin.edit', compact('product'));
       
    }
}
