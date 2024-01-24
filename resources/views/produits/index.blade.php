<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>

<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

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
            @forelse($products as $product)
            <tr>
                <td>{{ $product->libelle }}</td>
                <td>{{ $product->marque }}</td>
                <td>{{ $product->prix }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}" alt="Product Image" style="max-width: 50px; max-height: 50px;">
                    @else
                    No Image
                    @endif
                </td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Détails</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">Aucun produit disponible.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>