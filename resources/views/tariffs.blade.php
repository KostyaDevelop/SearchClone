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
                    <div class="tariffs-title-text-item">
                        Изменить свой тариф можно в <a href=""> &nbsp Личном кабинете.</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <div class="tariffs-items">
                @foreach($tariffs as $tariff)
                    <div class="tariffs-items-item">
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
                            <div class="tariffs-items-item-time">
                                {{$tariff->time}} месяца
                            </div>
                            <div class="tariffs-items-item-max_issuance">{{$tariff->max_issuance}}</div>
                            <div class="tariffs-items-item-button">
                                <a href="">Заказать</a>
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
