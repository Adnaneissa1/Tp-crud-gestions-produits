

<a href="{{ route('products.create') }}" class="btn btn-success">Créer un produit</a>

<table class="table">
    <thead>
        <tr>
            <th>Libelle</th>
            <th>Marque</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product['libelle'] }}</td>
            <td>{{ $product['marque'] }}</td>
            <td>{{ $product['prix'] }}</td>
            <td>{{ $product['stock'] }}</td>
            <td>
                @if($product['image'])
                <img src="{{ asset('path/to/your/images/' . $product['image']) }}" alt="Product Image" style="max-width: 50px; max-height: 50px;">
                @else
                No Image
                @endif
            </td>
            <td>
                <a href="{{ route('products.show', $product['id']) }}" class="btn btn-info">Détails</a>
                <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-warning">Modifier</a>
                <form action="{{ route('products.destroy', $product['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>