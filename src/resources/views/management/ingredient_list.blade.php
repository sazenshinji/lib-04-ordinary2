@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/ingredient_list.css') }}">
@endsection

@section('content')

<h1>材料一覧</h1>


<table border="1">
    <thead>
        <tr>
            <th>材料</th>
            <th>商品名</th>
            <th>使用量[g]</th>
        </tr>
    </thead>
    <tbody>

        @foreach($ingredients as $ingredient)
        @php
        $count = $ingredient->products->count();
        @endphp

        @if($count === 0)
        {{-- その材料を使う商品が無い場合 --}}
        <tr>
            <td>{{ $ingredient->name }}</td>
            <td colspan="2">該当商品なし</td>
        </tr>
        @else
        {{-- 1つ目の商品を材料名と同じ行に出す --}}
        <tr>
            <td rowspan="{{ $count }}">{{ $ingredient->name }}</td>
            <td>{{ $ingredient->products[0]->name }}</td>
            <td>{{ $ingredient->products[0]->pivot->quantity }}</td>
        </tr>

        {{-- 2つ目以降は商品だけを別行で出す --}}
        @foreach($ingredient->products->slice(1) as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->pivot->quantity }}</td>
        </tr>
        @endforeach
        @endif
        @endforeach

    </tbody>
</table>

<div style="margin-top:16px; text-align:center;">
    <a href="{{ route('management.products') }}">← 商品一覧へ戻る</a>
</div>

@endsection