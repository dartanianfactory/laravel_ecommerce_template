<div class="relative">
    <button class="relative" wire:click="toogleShowForm">
        Вход
    </button>

    @if ($isShowForm)
        <div class="absolute -translate-x-40">
            @if (Session::has('errorAuth'))
                <h3>{{ Session::get('errorAuth') }}</h3>
            @endif

            @if (Session::has('successAuth'))
                <h3>{{ Session::get('successAuth') }}</h3>
            @endif

            @if ($isLoginSelected)
                @include('components.livewire.forms.user.login')
            @else
                @include('components.livewire.forms.user.register')
            @endif
        </div>
    @endif
</div>