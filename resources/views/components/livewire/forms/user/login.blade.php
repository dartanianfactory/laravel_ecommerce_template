<form method="POST" wire:submit="login" class="grid grid-flow-row">
    @csrf
    <input type="email" name="email" wire:model="email" />
    <input type="password" name="password" wire:model="password" />

    <img src="{{ captcha_src() }}" alt="captcha" />
    <input type="text" name="captcha" wire:model="captcha" class="form-control" placeholder="Введите капчу" />
    
    <div>
        <input type="checkbox" name="remember" wire:model="remember" />
    </div>


    <button>Войти</button>
    <p wire:click="toogleMode">Зарегистрироваться</p>
</form>