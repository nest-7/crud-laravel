@extends('main.principal')
@section('content')
@if( session()->has('delete') )
  <script>
    toastr.error('El registro se elimino correctamente','Eliminado correctamente');
  </script>
@endif
<div class="container">
  <div class="row">
    @forelse($product as $productt)
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-primary">${{ $productt->price }}</strong>
          <h3 class="mb-0">
          <a class="text-dark" href="#">{{ $productt->name }}</a>
          </h3>
          <div class="mb-1 text-muted">Codigo : {{ $productt->code }}</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <div class="row">
            <div class="col-md-6">
              <a class="create_edit btn btn-link" href="{{ route('product.edit', $productt) }}"><i class="fas fa-edit">Editar</i></a>
            </div>
            <div class="col-md-6">
              <form class="d-inline-block" method="POST" action="{{ route('product.destroy', $productt) }}" onsubmit="return confirm('Estas seguro que deseas eliminar el producto?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-link text-danger"><i class="fas fa-trash-alt">Eliminar</i></button>
              </form>
            </div>
          </div>
        </div>
      <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"></rect><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
    </div>
  </div>
  @empty
  <div class="col-md-12">
    <h1 class="text-center"><i class="fas fa-store"></i>Sin productos</h1>
  </div>
  @endforelse
</div>
<div class="text-center">
  {{ $product->links() }}
</div>
</div>
@include('product.modals.modal')
@endsection
@push('js')
<script>
  (function(w, d, $) {
    $('.create_edit').click(function(e) {
      e.preventDefault();
      let my = $(this);
      var url = my.attr('href');
      $.get(url).done( function (r) {
        $('.modal-body').html(r);
        $('.mi-modal').modal('show');
      });
    });
    $(d).on('submit', '.form_create_edit', function(e) {
      e.preventDefault();
      let my = $(this);
      var url = my.attr('action'), method = my.attr('method');
      $.ajax({
        url: url,
        method: method,
        data: my.serialize(),
        success: (r) => {
          setTimeout(function() {
            location.reload();
          }, 2000);
          $('.mi-modal').modal('hide');
          toastr.info('Realizado correctamente', 'Todo se aplico correctamente');
        }, error: (xhr) => {
          var errs = xhr.responseJSON;
          if ( $.isEmptyObject(errs) == false ) {
            $.each( errs, function(k,v) {
              $('#' + k)
              .addClass('is-invalid')
              .after('<span class="invalid-feedback"><strong>' + v + '</strong></span>');
            });
          }
        }
      });
    });
  })(window, document, window.jQuery);
</script>
@endpush
