@extends('layouts.default')

@section('content')
@if(isset($products))
<div class="grid grid--flexcells grid--1of5">
  @foreach ($products as $product)
    <div class="cell">
      <div class="products-text"><a href="{{ URL::route('products.id',[$product->id] )  }}">{{ $product->name }}</a></div>
    </div>
  @endforeach
</div>
@elseif(isset($ids))
<ul>
<li>{{$ids->name}}</li>
<li>{{$ids->description}}</li>
<li>{{$ids->price}}</li>
</ul>

 @foreach ($ids->product_images as $image)
<img src="../media/product/{{$image->product_id}}/{{$image->filename}}" class="img">
@endforeach
@endif

@stop