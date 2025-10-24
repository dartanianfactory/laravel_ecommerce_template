<form
    method="POST"
    wire:submit="register"
    class="grid grid-flow-row"
>
@csrf
    <input
        type="email"
        name="email"
        wire:mode="email"
    />
    <input
        type="password"
        name="password"
        wire:mode="password"
    />
    <input
        type="repeat_password"
        name="repeat_password"
        wire:mode="repeat_password"

    />

    <img src="{{ captcha_src() }}" alt="captcha" />
    <input type="text" name="captcha" wire:model="captcha" class="form-control" placeholder="Введите капчу" />
    
    <button>Регистрация</button>
    <p wire:click="toogleMode">Или войти</p>
</form>