@include('parts.header')
<div class="main-registration">
    <div class="main-registration-title">
        Авторизация
    </div>
    <div class="login-block">
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
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </div>
</div>
@include('parts.footer')
