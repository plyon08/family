@if ($flash = session('message'))
  <section class='row'>
    <div class='col mx-auto mx-2'>
      <div class='alert alert-success' id='alert' role='alert'>
        {{ $flash }}
      </div>
    </div>
  </section>
@endif
