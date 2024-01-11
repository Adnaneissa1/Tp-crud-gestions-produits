

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="libelle">Libelle:</label>
    <input type="text" name="libelle" required>
    @error('libelle')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <label for="marque">Marque:</label>
    <input type="text" name="marque" required>
    @error('marque')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <label for="prix">Prix:</label>
    <input type="number" name="prix" required>
    @error('prix')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <label for="stock">Stock:</label>
    <input type="number" name="stock" required>
    @error('stock')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <label for="image">Image:</label>
    <input type="file" name="image">
    @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit">Créer le produit</button>
</form>
