@include('parts.header')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="auth-title">
                    Авторизация
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="auth-block">
                    <div class="auth-block-title-1">
                        Создайте учетную запись с помощью аккаунта
                    </div>
                    <div class="auth-block-soc">
                       Или
                    </div>
                    <div class="auth-block-line">
                       Зарегистрируйтесь с помощью вашего электронного адреса
                    </div>
                    <div class="auth-block-form">
                        <form>
                            <input class="auth-block-form-input_email">
                            <input class="auth-block-form-input_pass">
                        </form>
                    </div>
                    <div class="auth-block-agreement">
                        Создавая учетную запись, вы соглашаетесь с  <a href="#">Условиями использования.</a>
                    </div>
                    <div class="auth-block-registration">
                        Зарегистрироваться
                    </div>
                    <div class="auth-block-reg">
                        У вас уже есть аккаунт? <a href="#">Авторизоваться</a>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
@include('parts.footer')
