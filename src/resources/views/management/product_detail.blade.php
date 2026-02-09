@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product_detail.css') }}">
@endsection

@section('content')

<div class="product-detail-container">

    <h1>商品詳細</h1>

    {{-- 商品画像 --}}
    <div class="product-image">
        <img src="{{ asset('storage/' . $product->image_path) }}" width="300">
    </div>

    {{-- 種類 --}}
    <div class="product-field">
        <span class="label">種類</span>
        <span class="value">{{ $product->category->name }}</span>
    </div>

    {{-- 商品名 --}}
    <div class="product-field">
        <span class="label">商品名</span>
        <span class="value">{{ $product->name }}</span>
    </div>

    {{-- 価格 --}}
    <div class="product-field">
        <span class="label">価格</span>
        <span class="value">¥{{ number_format($product->price) }}</span>
    </div>

    {{-- 説明 --}}
    <div class="product-field">
        <span class="label">説明</span>
        <span class="value">{{ $product->description }}</span>
    </div>

    {{-- 材料 --}}
    <div class="product-field">
        <span class="label">材料</span>
        <span class="value">
            @if($product->ingredients->isEmpty())
            （登録なし）
            @else
            @foreach($product->ingredients as $ingredient)
            {{ $ingredient->name }}@if(!$loop->last)、@endif
            @endforeach
            @endif
        </span>
    </div>

</div>

@endsection