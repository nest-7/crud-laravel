@csrf
<fieldset class="form-group">
  <label for="code">Code</label>
  <input type="text" class="form-control" id="code" name="code" required value="{{ old('code', $product->code) }}">
</fieldset>
<fieldset class="form-group">
  <label for="name">Name</label>
  <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $product->name) }}">
</fieldset>
<fieldset class="form-group">
  <label for="price">Price</label>
  <input type="number" class="form-control" id="price" name="price" required value="{{ old('price', $product->price) }}">
</fieldset>
<div class="text-center">
  <button class="btn btn-primary" type="submit">Enviar</button>
</div>
