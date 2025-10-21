<x-layout>
<header>
</header>

<form action="{{ route('products.store')}}" method="post">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter name here">
    <input type="number" name="quantity" value="{{ old('quantity') }}">
    <textarea name="description"></textarea>
    <input type="submit" value="Submit">
</form>

<a href="{{ route('products.index')}}">Back to product list</a>
</x-layout>