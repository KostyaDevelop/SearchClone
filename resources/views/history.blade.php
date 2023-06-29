@include('parts.header')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
                <div class="col-md-6">
                    <div class="history-title title">
                        <span class="history-title-first_word title-first_word">
                            История &nbsp;
                        </span>
                        <span class="history-title-second_word title-second_word">
                             поиска
                        </span>
                    </div>
                </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="history-block">
            <div class="row">
                @if($resultsHistories->first())
                    <?php $i=0;?>
                    @foreach($resultsHistories as $setId => $resultsHistory)
                        <?php $i++;?>
                        <div class="col-md-3">
                            <div class="history-block-item">
                                <div class="history-block-item-photo">
                                    <a href="{{route('history_one',['set_id' => $setId])}}">
                                        <img src="{{$resultsHistory->pluck('image_url')->first()}}" alt="Изображение">
                                    </a>
                                </div>
                                <div class="history-block-item-description">
                                    <div class="history-block-item-description-count">
                                        {{$i}}
                                    </div>
                                    <div class="history-block-item-description-time">
                                        Время загрузки: {{$resultsHistory->pluck('time')->first()}}
                                    </div>
                                    <div class="history-block-item-description-date">
                                        Дата загрузки: {{$resultsHistory->pluck('date')->first()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="history-block-empty">
                            У вас не было запросов =(
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                @endif
            </div>
        </div>
    </div>
@include('parts.footer')
