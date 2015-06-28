@if (session()->has('flash_message'))
    <div class="Page-flash">
        <div class="Flash Flash--{{ session('flash_message_level') }} {{ session()->has('flash_message_important') ? 'is-dismissable' : '' }}">
            @if (session()->has('flash_message_important'))
                <button class="Btn Btn--close" type="button" aria-hidden="true">&times;</button>
            @endif
            {{ session('flash_message') }}
        </div>
    </div>
@endif
