@include('parts.header')
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-3">
                <div class="result-title">
                     <span class="result-title-first_word">
                          Результаты &nbsp;
                     </span>
                    <span class="result-title-second_word">
                          поиска
                    </span>
                </div>
            </div>
            <div class="col-md-8">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="result-photos">
                    <div class="row">
                        @foreach($facesResult as $faceResult)
                            <div class="col-md-2">
                                <a target="_blank" href="{{$faceResult->profile}}">
                                    <img class="result-photos-img" src="{{$faceResult->source}}">
                                    <span>{{$faceResult->first_name . ' ' . $faceResult->last_name}}</span>
                                    <span>Процент совпадения{{$faceResult->score}}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
    {{--                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">--}}
    {{--                    <ol class="carousel-indicators">--}}
    {{--                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
    {{--                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
    {{--                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
    {{--                    </ol>--}}
    {{--                    <div class="carousel-inner">--}}
    {{--                        @foreach($facesResult as $faceResult)--}}
    {{--                            <div class="carousel-item--}}
    {{--                                    @if ($loop->first)--}}
    {{--                                        active--}}
    {{--                                    @endif"--}}
    {{--                                >--}}
    {{--                                <a href="{{$faceResult->profile}}">--}}
    {{--                                    <img class="d-block" src="{{$faceResult->source}}" alt="First slide">--}}
    {{--                                </a>--}}
    {{--                            </div>--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
    {{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
    {{--                        <span class="sr-only">Previous</span>--}}
    {{--                    </a>--}}
    {{--                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
    {{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
    {{--                        <span class="sr-only">Next</span>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
@include('parts.footer')
