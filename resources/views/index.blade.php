<h1>Product List</h1>

<form method="GET" action="{{ route('products.index') }}">
    <input type="text" name="search" placeholder="Search by Product ID or Description">
    <button type="submit">Search</button>
</form>

<table>
    <thead>
    <tr>
        <th><a href="{{ route('products.index', ['sort' => 'name']) }}">Name</a></th>
        <th><a href="{{ route('products.index', ['sort' => 'price']) }}">Price</a></th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a href="{{ route('products.show', $product->id) }}">View</a>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $products->links() }}


