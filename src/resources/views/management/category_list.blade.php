@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category_list.css') }}">
@endsection

@section('content')

<h1>カテゴリ一覧</h1>


<table border="1">
    <thead>
        <tr>
            <th>カテゴリ</th>
            <th>商品名</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                @if($category->products->isEmpty())
                <span>(商品なし)</span>
                @else
                {{-- 商品名を改行で並べる例--}}
                @foreach($category->products as $product)
                <div>{{$product->name}}</div>
                @endforeach
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div style="margin-top:16px; text-align:center;">
    <a href="{{ route('management.products') }}">← 商品一覧へ戻る</a>
</div>

@endsection