@extends('layouts.default')

@section('content')
@if(isset($products))
<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full gridxl--1of4">
  @foreach ($products as $product)
    <div class="cell">
      {{ $product->name }}
      <div class="products-name"><a href="{{ URL::route('products.id',[$product->id] )  }}"></a></div>
       <div class="products-desc">
         {{ str_limit($product->description, $limit = 100) }}
       </div>
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