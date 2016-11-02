@extends('layouts.default')

@section('content')
@if(isset($products))
@foreach ($products as $product)
<li><a href="{{ URL::route('products.id',[$product->id] )  }}">{{ $product->name }}</a></li>
@endforeach
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