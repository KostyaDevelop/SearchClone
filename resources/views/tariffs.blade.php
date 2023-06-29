@include('parts.header')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div class="tariffs-title">
                <div class="tariffs-title-head">
                    Тарифы
                </div>
                <div class="tariffs-title-text">
                    <div class="tariffs-title-text-item">
                        Оплата тарифа осуществляется с помощью карты или безналичным расчетом.
                    </div>
                    <div class="tariffs-title-text-item">
                        Действие тарифа начинается с момента осуществления платежа.
                    </div>
                    @auth()
                        <div class="tariffs-title-text-item">
                            Изменить свой тариф можно в &nbsp
                            <a class="a-border-black" href="{{route('personal_cabinet')}}">
                                Личном кабинете.
                            </a>
                        </div>
                    @endauth()
                </div>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10 no-padding">
            <div class="tariffs-items">
                <?php $i = 0 ?>
                @foreach($tariffs as $tariff)
                    <?php $i++ ?>
                    <div class="tariffs-items-item @if($i === 2) tariffs-items-item-middle @endif">
                        <div class="tariffs-items-item-name">{{$tariff->name}}</div>
                        <div class="tariffs-items-item-block">
                            <div class="tariffs-items-item-price">
                                <div class="tariffs-items-item-price-title">
                                    Цена
                                </div>
                                <div class="tariffs-items-item-price-text">
                                    {{$tariff->price}}
                                </div>
                            </div>
                            <div class="tariffs-items-item-count_search">
                                <div class="tariffs-items-item-count_search-text">
                                    {{$tariff->count_search}}
                                </div>
                                <div class="tariffs-items-item-count_search-title">
                                    Поисков
                                </div>
                            </div>
                        </div>
                        <div class="tariffs-items-item-block-2">
                            <div class="tariffs-items-item-time tariffs-items-item-block-2-item">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11.0752" cy="11.6451" r="10.25" stroke="#EBC500" stroke-width="1.5"/>
                                    <path d="M10.5449 15.1755C10.8378 15.4684 11.3126 15.4684 11.6055 15.1755L16.3785 10.4025C16.6714 10.1096 16.6714 9.63473 16.3785 9.34184C16.0856 9.04895 15.6107 9.04895 15.3178 9.34184L11.0752 13.5845L6.83255 9.34184C6.53966 9.04895 6.06479 9.04895 5.77189 9.34184C5.479 9.63473 5.479 10.1096 5.77189 10.4025L10.5449 15.1755ZM10.3252 13.6451V14.6451H11.8252V13.6451H10.3252Z" fill="#EBC500"/>
                                </svg>
                                {{$tariff->time}} месяца
                            </div>
                            <div class="tariffs-items-item-max_issuance tariffs-items-item-block-2-item">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11.0752" cy="11.6451" r="10.25" stroke="#EBC500" stroke-width="1.5"/>
                                    <path d="M10.5449 15.1755C10.8378 15.4684 11.3126 15.4684 11.6055 15.1755L16.3785 10.4025C16.6714 10.1096 16.6714 9.63473 16.3785 9.34184C16.0856 9.04895 15.6107 9.04895 15.3178 9.34184L11.0752 13.5845L6.83255 9.34184C6.53966 9.04895 6.06479 9.04895 5.77189 9.34184C5.479 9.63473 5.479 10.1096 5.77189 10.4025L10.5449 15.1755ZM10.3252 13.6451V14.6451H11.8252V13.6451H10.3252Z" fill="#EBC500"/>
                                </svg>
                                {{$tariff->max_issuance}} запросов
                            </div>
                            <div class="tariffs-items-item-button">
                                <a href="
                                    @auth()
                                        {{route('personal_cabinet')}}
                                    @endauth
                                    @guest()
                                        {{route('registration')}}
                                    @endguest
                                ">Заказать</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</div>
@include('parts.footer')
