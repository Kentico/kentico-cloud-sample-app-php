@extends('layouts.app')

@section('page_title', $product->getString('product_name') . ' - Products')


@section('body')


<article class="product-detail">
    <div class="row">
        <div class="col-md-12">
            <header>
                <h2>{{ $product->getString('product_name') }}</h2>
            </header>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-lg-7 col-md-6">
            <figure class="image">
            	@php($img = $product->getElement('image')->value[0])
            	<img src="{{ $img->url }}" alt="{{ $img->description }}">
            </figure>
            <div class="description">
            	@yield('product_description')
            </div>
        </div>

        @yield('product_form')

    </div>
</article>




@endsection


@section('scripts')

@yield('scripts')
    
@endsection