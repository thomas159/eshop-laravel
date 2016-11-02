<nav>
@foreach($categories as $category)
 {{ $category->name }}
@endforeach
 {!! Html::Link('products','PRODUCTS') !!}
</nav>