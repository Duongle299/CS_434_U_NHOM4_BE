<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Dữ liệu mẫu ban đầu cho giỏ hàng
    // File: app/Http/Controllers/CartController.php

private $defaultCart = [
    [
        'id' => 1, 
        'name' => 'Xi Măng', 
        'price' => 200000, 
        'quantity' => 1, 
        // THAY ĐỔI ĐƯỜNG DẪN DƯỚI ĐÂY
        'image' => 'http://localhost:8000/images/SP1.jpg', 
        'manufacturer' => 'ABC', 
        'size' => '3x3', 
        'description' => 'Mô tả sản phẩm 1'
    ],
    [
        'id' => 2, 
        'name' => 'Gạch đỏ', 
        'price' => 300000, 
        'quantity' => 2, 
        // THAY ĐỔI ĐƯỜNG DẪN DƯỚI ĐÂY
        'image' => 'http://localhost:8000/images/SP2.jpg', 
        'manufacturer' => 'XYZ', 
        'size' => '5x5', 
        'description' => 'Mô tả sản phẩm 2'
    ]
];

    /**
     * Lấy danh sách giỏ hàng. API: GET /api/cart
     */
    public function index()
    {
        // Nếu Session giỏ hàng rỗng, lưu dữ liệu mặc định vào Session
        if (!Session::has('cart')) {
            Session::put('cart', $this->defaultCart);
        }
        
        return response()->json(Session::get('cart'));
    }

    /**
     * Xóa một sản phẩm khỏi giỏ hàng. API: DELETE /api/cart/{id}
     */
    public function destroy($id)
    {
        // Lấy giỏ hàng hiện tại
        $cart = Session::get('cart', []);

        // Lọc ra sản phẩm cần xóa
        $cart = array_filter($cart, function($item) use ($id) {
            return $item['id'] != $id;
        });

        // Lưu lại giỏ hàng đã cập nhật vào Session
        Session::put('cart', array_values($cart)); // array_values để reset keys

        return response()->json(['message' => 'Sản phẩm đã được xóa.'], 200);
    }
}