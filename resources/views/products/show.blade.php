<header>
    
</header>

<h1>{{ $singleProduct->name }}</h1>
<h4>Quantity: {{ $singleProduct->quantity }}</h4>
<p>{{ $singleProduct->description }}</p>

<a href="{{ route('products.index')}}">Back to all product list</a>