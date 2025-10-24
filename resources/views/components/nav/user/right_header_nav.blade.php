@auth
    <div>
        @if (Auth::user()->isAdmin())
            <a href="/sweet_panel/dashboard">Админ панель</a>
        @endif

        <a href="/user/personal_cabinet">Личный кабинет</a>

        <a href="/user/actions/logout" class="relative">
                Выйти
        </a>
    </div>
@endauth