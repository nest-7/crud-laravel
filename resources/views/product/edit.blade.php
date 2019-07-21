<form class="form_create_edit was-validated" method="POST" action="{{ route('product.update', $product) }}">
  @method('PUT')
  @include('product.form')
</form>
