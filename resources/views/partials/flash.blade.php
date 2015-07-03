@if (session()->has('flash_message'))
    <div class="alert alert-{{ session('flash_message_level') }} {{ session()->has('flash_message_important') ? 'alert-dismissable' : '' }}" role="alert">
        @if (session()->has('flash_message_important'))
            <button class="close" type="button" data-dismiss="alert" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        @endif
        <p>{{ session('flash_message') }}</p>
    </div>
@endif
