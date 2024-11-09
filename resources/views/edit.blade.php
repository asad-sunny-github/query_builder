<h1>Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="product_id" value="{{ $product->product_id }}" required>

    <input type="text" name="name" value="{{ $product->name }}" required>

    <textarea name="description">{{ $product->description }}</textarea>

    <input type="text" name="price" value="{{ $product->price }}" required>

    <input type="text" name="stock" value="{{ $product->stock }}">

    <input type="file" name="image">

    <button type="submit">Update</button>
</form>

