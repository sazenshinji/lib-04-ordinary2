@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product_list.css') }}">
@endsection

@section('content')

<h1>商品一覧</h1>

{{-- 検索 + 商品追加（横並びにする想定） --}}
<div class="top-actions">
    {{-- 検索フォーム：クリック or Enter で GET送信 --}}
    <form action="{{ route('management.products') }}" method="GET" class="search-form">
        <div class="search-box">
            <input
                type="text"
                name="keyword"
                value="{{ $keyword ?? '' }}"
                placeholder="商品名で検索"
                class="search-input">

            {{-- 虫眼鏡ボタン（画像クリックで送信） --}}
            <button type="submit" class="search-button" aria-label="検索">
                <img src="{{ asset('images/search.jpg') }}" alt="検索" class="search-icon">
            </button>
        </div>
    </form>

    <div class="btn-add-area">
        <a href="{{ route('management.products.add') }}" class="btn-add">
            商品追加
        </a>
    </div>
</div>

{{-- 0件ならメッセージ、あるならテーブル --}}
@if($products->isEmpty())
<p class="no-result">該当する商品はありません。</p>
@else

<table border="1">
    <thead>
        <tr>
            <th>種類</th>
            <th>商品画像</th>
            <th>商品名</th>
            <th>価格</th>
            <th>税込</th>
            <th>説明</th>
            <th>削除</th>
            <th>変更</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            {{-- 種類 --}}
            <td>{{ $product->category->name }}</td>

            {{-- 製品画像 --}}
            <td>
                <a href="{{ route('management.products.detail', $product->id) }}">
                    <img src="{{ asset('storage/' . $product->image_path) }}" width="100">
                </a>
            </td>

            {{-- 製品名 --}}
            <td>
                <a href="{{ route('management.products.detail', $product->id) }}">
                    {{ $product->name }}
                </a>
            </td>

            {{-- 価格 --}}
            <td>¥{{ number_format($product->price) }}</td>

            {{-- 税込 --}}
            <td>¥{{ number_format($product->priceWithTax()) }}</td>


            {{-- 説明 --}}
            <td>{{ $product->description }}</td>

            {{-- [削除]ボタン --}}
            <td>
                <form action="{{ route('management.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </td>

            {{-- [変更]ボタン --}}
            <td>
                <a href="{{ route('management.products.edit', $product->id) }}">
                    変更
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection