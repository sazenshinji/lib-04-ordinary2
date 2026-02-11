@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('content')
<div class="product-page">

    {{-- タブ --}}
    <div class="tab-wrapper">
        @forelse($categories as $category)
        <a
            href="{{ route('products.index', ['category' => $category->id]) }}"
            class="tab {{ ($activeCategoryId === $category->id) ? 'active' : '' }}">
            {{ $category->name }}
        </a>
        @empty
        <p>カテゴリが登録されていません。</p>
        @endforelse
    </div>

    {{-- 商品一覧（選択カテゴリのみ） --}}
    @if($categories->isNotEmpty())
    @if($products->isEmpty())
    <p class="empty-message">このカテゴリの商品はありません。</p>
    @else
    <div class="product-grid">
        @foreach($products as $product)
        <div class="product-card">
            <img
                src="{{ asset('storage/' . $product->image_path) }}"
                alt="{{ $product->name }}">
            <p class="product-name">{{ $product->name }}</p>
        </div>
        @endforeach
    </div>
    @endif
    @endif

</div>
@endsection