<div class="auth-alert">
    <div class="auth-alert-close">
        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.8333 2.54667L16.9533 0.666666L9.49996 8.12L2.04663 0.666666L0.166626 2.54667L7.61996 10L0.166626 17.4533L2.04663 19.3333L9.49996 11.88L16.9533 19.3333L18.8333 17.4533L11.38 10L18.8333 2.54667Z" fill="#666666" fill-opacity="0.8"/>
        </svg>
    </div>
    <form enctype="multipart/form-data" method="POST" class="auth-alert-form" action="{{route('auth_login')}}" >
        @csrf
        <input required type="email" name="email" class="auth-alert-input-email" placeholder="Введите ваш электронный адрес">
        <input required type="password" name="password" class="auth-alert-input-password" placeholder="Введите ваш пароль">
        <button type="submit" class="auth-alert-auth">Войти</button>
    </form>
    <div class="auth-alert-line">
        <svg width="133" height="3" viewBox="0 0 133 3" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect y="0.5" width="133" height="2" fill="#666666" fill-opacity="0.25"/>
        </svg>
        <div class="auth-alert-line-text">
            или
        </div>
        <svg width="133" height="3" viewBox="0 0 133 3" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect y="0.5" width="133" height="2" fill="#666666" fill-opacity="0.25"/>
        </svg>
    </div>
    <div class="auth-alert-registration">
        <a href="{{route('registration')}}">
            Зарегистрируйтесь
        </a>
    </div>
</div>
