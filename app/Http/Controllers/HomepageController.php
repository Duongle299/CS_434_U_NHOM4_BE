<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Xi măng Holcim',
                'price' => '80.000',
                'category' => 'Xi măng',
                'image' => 'http://localhost:8000/images/SP1.jpg'
            ],
            [
                'name' => 'Thép Việt Nhật',
                'price' => '250.000',
                'category' => 'Sắt thép',
                'image' => 'http://localhost:8000/images/SP3.jpg'
            ],
            [
                'name' => 'Gạch đỏ',
                'price' => '1.200',
                'category' => 'Gạch',
                'image' => 'http://localhost:8000/images/SP2.jpg'
            ],
            [
                'name' => 'Sơn Jotun',
                'price' => '560.000',
                'category' => 'Sơn',
                'image' => 'http://localhost:8000/images/SP4.jpg'
            ],
            [
                'name' => 'Dây điện Cadivi',
                'price' => '320.000',
                'category' => 'Thiết bị điện',
                'image' => 'http://localhost:8000/images/SP5.jpg'
            ],
        ];

        // Lấy danh sách categories
        $categories = array_unique(array_column($products, 'category'));

        // Tạo mảng sản phẩm theo danh mục, mỗi danh mục có toàn bộ danh sách sản phẩm lặp lại
        $productsByCategory = [];
        foreach ($categories as $category) {
            $productsByCategory[$category] = $products;
        }

        return response()->json([
            'categories' => array_values($categories),
            'productsByCategory' => $productsByCategory,
        ]);
    }
}
