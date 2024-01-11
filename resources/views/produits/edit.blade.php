

<form action="{{ route('products.update', $product['id']) }}" method="POST" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    
    <label for="libelle">Libelle:</label>
    <input type="text" name="libelle" value="{{ $product['libelle'] }}" required>
    @error('libelle')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <label for="marque">Marque:</label>
    <input type="text" name="marque" value="{{ $product['marque'] }}" required>
    @error('marque')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <label for="prix">Prix:</label>
    <input type="number" name="prix" value="{{ $product['prix'] }}" required>
    @error('prix')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <label for="stock">Stock:</label>
    <input type="number" name="stock" value="{{ $product['stock'] }}" required>
    @error('stock')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <label for="image">Image:</label>
    <input type="file" name="image">
    @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <button type="submit">Modifier le produit</button>
</form>
