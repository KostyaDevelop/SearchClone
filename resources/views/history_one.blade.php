@include('parts.header')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="history-result_one-title title">
                    <div class="history-result_one-title-first_word title-first_word">
                        Результаты &nbsp;
                    </div>
                    <div class="history-result_one-title-second_word title-second_word">
                         поиска
                    </div>
                </div>
                <div class="history-result_one-timestamp">
                    <div class="history-result_one-timestamp-time">
                        Время загрузки фото: {{$resultsHistory[0]->time}}
                    </div>
                    <div class="history-result_one-timestamp-date">
                        Дата загрузки фото: {{$resultsHistory[0]->date}}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="history-block">
            <div class="row">
                <?php $i=0; ?>
                @foreach($resultsHistory as $resultHistory)
                    <?php $i++; ?>
{{--                    {{dd($resultHistory)}}--}}
                    <div class="col-md-3">
                        <div class="history-block-item">
                            <div class="history-block-item-photo">
                                <a href="{{$resultHistory->profile_url}}">
                                    <img src="{{$resultHistory->image_url}}">
                                </a>
                            </div>
                            <div class="history-block-item-description">
                                <div class="history-block-item-description-score">
                                    {{$resultHistory->score}}%
                                </div>
                                <div class="history-result_one-block-item-description-count">
                                    {{$i}}
                                </div>
                                <div class="history-block-item-description-name">
                                    {{$resultHistory->name}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@include('parts.footer')
