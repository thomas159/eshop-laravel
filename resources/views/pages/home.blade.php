@extends('layouts.default')
@section('content')

@foreach ($product as $prod)
<li>{{ $prod->name }}</li>
@endforeach

@stop