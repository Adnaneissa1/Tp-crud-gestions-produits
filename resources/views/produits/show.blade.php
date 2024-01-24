<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <div class="container mt-4 bg-white p-4 rounded">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <h1 class="mb-4">{{ $product->libelle }}</h1>
        
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $product->image) }}" alt="Image Produit" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <table class="table table-bordered mt-4">
                    <tbody>
                        <tr>
                            <th scope="row">Marque</th>
                            <td>{{ $product->marque }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Prix</th>
                            <td>{{ $product->prix }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Stock</th>
                            <td>{{ $product->stock }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-warning">Modifier</a>

                <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">Supprimer</button>
                </form>

                <a href="{{ route('products.index') }}" class="btn btn-primary">Retour à la liste des produits</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
