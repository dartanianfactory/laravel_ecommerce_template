<header class="grid grid-flow-col auto-cols-max justify-between p-[var(--p-default)]">
    <div>
        <a href="/">
            <h3>Обратно на сайт</h3>
        </a>
    </div>

    @guest
        <livewire:forms.user.auth />
    @endguest
</header>