@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('content')
<div class="product-page">

    {{-- タブ --}}
    <div class="tab-wrapper">
        @forelse($categories as $i => $category)
        <button
            class="tab {{ $i === 0 ? 'active' : '' }}"
            type="button"
            data-tab="tab-{{ $category->id }}">
            {{ $category->name }}
        </button>
        @empty
        <p>カテゴリが登録されていません。</p>
        @endforelse
    </div>

    {{-- タブの中身（カテゴリごとの商品一覧） --}}
    @foreach($categories as $i => $category)
    <div
        class="tab-panel {{ $i === 0 ? 'active' : '' }}"
        id="tab-{{ $category->id }}">
        @if($category->products->isEmpty())
        <p class="empty-message">このカテゴリの商品はありません。</p>
        @else
        <div class="product-grid">
            @foreach($category->products as $product)
            <div class="product-card">
                <img
                    src="{{ asset('storage/' . $product->image_path) }}"
                    alt="{{ $product->name }}">
                <p class="product-name">{{ $product->name }}</p>
            </div>
            @endforeach
        </div>
        @endif
    </div>
    @endforeach

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.tab');
        const panels = document.querySelectorAll('.tab-panel');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // タブactive切り替え
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                // パネルactive切り替え
                const targetId = tab.dataset.tab;
                panels.forEach(p => p.classList.remove('active'));
                const target = document.getElementById(targetId);
                if (target) target.classList.add('active');
            });
        });
    });
</script>
@endsection