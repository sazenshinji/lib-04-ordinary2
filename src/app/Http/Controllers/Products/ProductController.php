<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // カテゴリ一覧（タブ用）
        $categories = Category::orderBy('name')->get();

        // カテゴリが1件もない場合
        if ($categories->isEmpty()) {
            return view('products.products', [
                'categories' => $categories,
                'activeCategoryId' => null,
                'products' => collect(),
            ]);
        }

        // ?category=3 の取得（無ければ null）
        $requestedId = $request->query('category');

        // 有効なカテゴリIDか確認（存在しなければ先頭カテゴリにする）
        $activeCategoryId = $categories->pluck('id')->contains((int)$requestedId)
            ? (int)$requestedId
            : $categories->first()->id;

        // アクティブカテゴリの商品だけ取得
        $products = Product::where('category_id', $activeCategoryId)
            ->orderBy('name')
            ->get();

        return view('products.products', compact('categories', 'activeCategoryId', 'products'));
    }
}