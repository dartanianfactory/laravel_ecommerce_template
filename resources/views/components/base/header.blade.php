<header class="grid grid-flow-col auto-cols-max justify-between p-[var(--p-default)]">
    <div>
        <a href="/">
            <h3>Site title</h3>
        </a>
    </div>

    @include('components.nav.user.right_header_nav')
    @guest
        <livewire:forms.user.auth />
    @endguest
</header>