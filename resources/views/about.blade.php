@include('parts.header')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div class="about-title">
                 <div class="about-title-head">
                      О нас
                 </div>
                <div class="about-title-text">
                      Мы предоставляем услугу по поиску клона акаунта. Быстрый поиск любых копий и клонов вашего аккаунта в социальных сетях с помощью уникального алгоритма
                </div>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>
<div class="container container-full-width">
    <div class="about-image">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <div class="about-info">
                <div class="about-info-text">
                    <div class="about-info-text-title">
                        <div class="about-info-text-title-text">
                            Как это работает?
                        </div>
                        <div class="about-info-text-title-svg">
                            <svg width="27" height="19" viewBox="0 0 27 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.66113 9.27222H24.6611M24.6611 9.27222L16.8498 1.77222M24.6611 9.27222L16.8498 16.7722" stroke="#29D958" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="about-info-text-1">
                        Вы загружаете фотографию, по которой необходимо найти подобный аккаунт
                    </div>
                    <div class="about-info-text-2">
                        Обученный алгоритм находит человека, лицо которого похоже на лицо, определенное на фото
                    </div>
                </div>
                <div class="about-info-image">
                </div>
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="about-info-test_request">
                <div class="about-info-test_request-title">
                    Тестовый запрос
                </div>
                <div class="about-info-test_request-text">
                    У вас есть возможность попробовать ресурс с помощью 2-х тестовых запросов в Начальном Тарифе
                </div>
                <div class="about-info-test_request-button">
                    <a href="{{route('registration')}}">
                        Регистрация
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
@include('parts.footer')
