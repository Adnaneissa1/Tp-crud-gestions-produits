

<h1>{{ $product['libelle'] }}</h1>
<p>Marque: {{ $product['marque'] }}</p>
<p>Prix: {{ $product['prix'] }}</p>
<p>Stock: {{ $product['stock'] }}</p>
<img src="{{ $product['image']}}"  alt="image Produit"/>

<a href="{{ route('products.index') }}" class="btn btn-primary">Retour à la liste des produits</a>
