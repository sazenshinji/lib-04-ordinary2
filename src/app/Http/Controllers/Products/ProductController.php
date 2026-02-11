<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        // カテゴリ一覧 ＋ そのカテゴリに属する商品一覧を一括取得
        $categories = Category::with(['products' => function ($query) {
            $query->orderBy('name');
        }])
            ->orderBy('name')
            ->get();

        return view('products.products', compact('categories'));
    }
}