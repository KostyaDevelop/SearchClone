@include('parts.header')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="search-title">
                    <span class="search-title-first_word">
                        Искать &nbsp;
                    </span>
                    <span class="search-title-second_word">
                         клон,  копию аккаунта
                    </span>
                </div>
                <div class="search-selector-soc">
                    <div class="search-selector-soc-input">
                        <span class="earch-selector-soc-input-icon_1">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.3709 18.8819H20.0543L19.5876 18.4319C21.2209 16.5319 22.2043 14.0653 22.2043 11.3819C22.2043 5.39861 17.3543 0.548615 11.3709 0.548615C5.3876 0.548615 0.537598 5.39861 0.537598 11.3819C0.537598 17.3653 5.3876 22.2153 11.3709 22.2153C14.0543 22.2153 16.5209 21.2319 18.4209 19.5986L18.8709 20.0653V21.3819L27.2043 29.6986L29.6876 27.2153L21.3709 18.8819V18.8819ZM11.3709 18.8819C7.22093 18.8819 3.87093 15.5319 3.87093 11.3819C3.87093 7.23195 7.22093 3.88195 11.3709 3.88195C15.5209 3.88195 18.8709 7.23195 18.8709 11.3819C18.8709 15.5319 15.5209 18.8819 11.3709 18.8819Z" fill="#666666" fill-opacity="0.8"/>
                            </svg>
                        </span>
                        <span class="search-selector-soc-input-select">
                            <select id="search-selector-soc-input-selector">
                                <option value="vk">Найти в Вконтакте</option>
                                <option value="ok">Найти в Одноклассниках</option>
                            </select>
                        </span>
                        <span class="search-selector-soc-input-icon_3">
                            <span class="search-selector-soc-input-icon_3-vk">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px">
                                    <path fill="#1976d2" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"/>
                                    <path fill="#fff" d="M35.937,18.041c0.046-0.151,0.068-0.291,0.062-0.416C35.984,17.263,35.735,17,35.149,17h-2.618 c-0.661,0-0.966,0.4-1.144,0.801c0,0-1.632,3.359-3.513,5.574c-0.61,0.641-0.92,0.625-1.25,0.625C26.447,24,26,23.786,26,23.199 v-5.185C26,17.32,25.827,17,25.268,17h-4.649C20.212,17,20,17.32,20,17.641c0,0.667,0.898,0.827,1,2.696v3.623 C21,24.84,20.847,25,20.517,25c-0.89,0-2.642-3-3.815-6.932C16.448,17.294,16.194,17,15.533,17h-2.643 C12.127,17,12,17.374,12,17.774c0,0.721,0.6,4.619,3.875,9.101C18.25,30.125,21.379,32,24.149,32c1.678,0,1.85-0.427,1.85-1.094 v-2.972C26,27.133,26.183,27,26.717,27c0.381,0,1.158,0.25,2.658,2c1.73,2.018,2.044,3,3.036,3h2.618 c0.608,0,0.957-0.255,0.971-0.75c0.003-0.126-0.015-0.267-0.056-0.424c-0.194-0.576-1.084-1.984-2.194-3.326 c-0.615-0.743-1.222-1.479-1.501-1.879C32.062,25.36,31.991,25.176,32,25c0.009-0.185,0.105-0.361,0.249-0.607 C32.223,24.393,35.607,19.642,35.937,18.041z"/>
                                </svg>
                            </span>
                            <span class="search-selector-soc-input-icon_3-ok">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px">
                                    <path fill="#FF9800" d="M42,37c0,2.8-2.2,5-5,5H11c-2.8,0-5-2.2-5-5V11c0-2.8,2.2-5,5-5h26c2.8,0,5,2.2,5,5V37z"/>
                                    <path fill="#FFF" d="M26.9,30.4c1.5-0.3,2.9-0.9,4.1-1.7c1-0.6,1.3-1.9,0.7-2.9c-0.6-1-1.9-1.3-2.9-0.7c-2.9,1.8-6.7,1.8-9.6,0c-1-0.6-2.3-0.3-2.9,0.7c-0.6,1-0.3,2.3,0.7,2.9c1.3,0.8,2.7,1.4,4.1,1.7l-4,4c-0.8,0.8-0.8,2.1,0,3c0.4,0.4,0.9,0.6,1.5,0.6c0.5,0,1.1-0.2,1.5-0.6l3.9-3.9l3.9,3.9c0.8,0.8,2.1,0.8,3,0c0.8-0.8,0.8-2.1,0-3C30.9,34.4,26.9,30.4,26.9,30.4z M24,10c-3.9,0-7,3.1-7,7c0,3.9,3.1,7,7,7c3.9,0,7-3.1,7-7C31,13.1,27.9,10,24,10z M24,20c-1.7,0-3-1.3-3-3c0-1.7,1.3-3,3-3c1.7,0,3,1.3,3,3C27,18.7,25.7,20,24,20z"/>
                                </svg>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="search-selector-file">
                    <form enctype="multipart/form-data" action="{{route('detect-faces')}}" method="POST">
                        @csrf
                        <label class="search-selector-file-input">
                            <input id="send_image" type="file" name="file">
                            <div class="search-selector-file-input-inner">
                                <span class="search-selector-file-input-inner-icon_1">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.5337 16.9557V11.9557" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.9736 14.4557H9.97363" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M22.4736 11.4557V17.4557C22.4736 21.4557 21.4736 22.4557 17.4736 22.4557H7.47363C3.47363 22.4557 2.47363 21.4557 2.47363 17.4557V7.45575C2.47363 3.45575 3.47363 2.45575 7.47363 2.45575H8.97363C10.4736 2.45575 10.8036 2.89575 11.3736 3.65575L12.8736 5.65575C13.2536 6.15575 13.4736 6.45575 14.4736 6.45575H17.4736C21.4736 6.45575 22.4736 7.45575 22.4736 11.4557Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"/>
                                    </svg>
                                </span>
                                <span class="search-selector-file-input-inner-text">
                                    Выбрать файл
                                </span>
                                <span class="search-selector-file-input-inner-icon_2">
                                     <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9201 9.40576L13.4001 15.9258C12.6301 16.6958 11.3701 16.6958 10.6001 15.9258L4.08008 9.40576" stroke="#323232" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                     </svg>
                                </span>
                            </div>
                        </label>
                        <button class="search-selector-file-button" type="submit">
                            Искать клон
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
    <div class="container container-full-width">
        <div class="search-info">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="search-info-title">
                        <div class="search-info-title-first">
                            Как &nbsp;
                        </div>
                        <div class="search-info-title-second">
                            это работает?
                        </div>
                    </div>
                    <div class="search-info-items">
                        1) Выберите для начала, где вы будете искать ваш клон в выпадающем списке из предложенных соцсетей.<br>
                        2) Нажмите кнопку Выбрать файл и загрузите фотографию из вашего устройства<br>
                        3) Нажмите кнопку “Искать клон” чтобы начать поиск.<br>
                    </div>
                    <div class="search-info_2-items">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="search-info_2-item">
                                    <div class="search-info_2-item-icon">
                                        <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.2554 38.0811L31.6829 41.5186C32.2604 42.0961 33.5529 42.371 34.4054 42.371H39.8504C41.5554 42.371 43.4254 41.0786 43.8654 39.3736L47.3029 28.951C48.0179 26.9435 46.7254 25.2385 44.5804 25.2385H38.8604C38.0079 25.2385 37.2929 24.5235 37.4304 23.5335L38.1454 18.9684C38.4204 17.6759 37.5679 16.2459 36.2754 15.8334C35.1204 15.3934 33.6904 15.9709 33.1404 16.8234L27.2829 25.541" stroke="#FBBC05" stroke-width="1.5" stroke-miterlimit="10"/>
                                            <path d="M19.9683 38.0813V24.0836C19.9683 22.0761 20.8207 21.3611 22.8282 21.3611H24.2583C26.2658 21.3611 27.1183 22.0761 27.1183 24.0836V38.0813C27.1183 40.0888 26.2658 40.8038 24.2583 40.8038H22.8282C20.8207 40.8038 19.9683 40.0888 19.9683 38.0813Z" stroke="#FBBC05" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M50.2183 51.9961H48.1283C45.9283 51.9961 43.8382 52.8486 42.2982 54.3886L37.5958 59.0363C35.4508 61.1538 31.9583 61.1538 29.8133 59.0363L25.1107 54.3886C23.5707 52.8486 21.4533 51.9961 19.2808 51.9961H17.2183C12.6533 51.9961 8.96826 48.3387 8.96826 43.8287V13.8261C8.96826 9.31611 12.6533 5.65869 17.2183 5.65869H50.2183C54.7833 5.65869 58.4683 9.31611 58.4683 13.8261V43.8287C58.4683 48.3112 54.7833 51.9961 50.2183 51.9961Z" stroke="#FBBC05" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="search-info_2-item-title">
                                        Лучший способ найти все
                                    </div>
                                    <div class="search-info_2-item-text">
                                        Сервис работает на программном обеспечении с применением системы распознавания лиц
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="search-info_2-item">
                                    <div class="search-info_2-item-icon">
                                        <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.6782 24.8916C20.994 24.8916 25.3032 20.5823 25.3032 15.2666C25.3032 9.95086 20.994 5.6416 15.6782 5.6416C10.3625 5.6416 6.05322 9.95086 6.05322 15.2666C6.05322 20.5823 10.3625 24.8916 15.6782 24.8916Z" stroke="#FDDD81" stroke-width="1.5"/>
                                            <path d="M47.3037 41.3916H55.5537C58.5787 41.3916 61.0537 43.8666 61.0537 46.8916V55.1416C61.0537 58.1666 58.5787 60.6416 55.5537 60.6416H47.3037C44.2787 60.6416 41.8037 58.1666 41.8037 55.1416V46.8916C41.8037 43.8666 44.2787 41.3916 47.3037 41.3916Z" stroke="#FDDD81" stroke-width="1.5"/>
                                            <path d="M33.6359 13.8916H41.0059C46.0934 13.8916 48.4584 20.1891 44.6359 23.5441L22.6634 42.7666C18.8409 46.0941 21.2059 52.3916 26.2659 52.3916H33.6359" stroke="#FDDD81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.7225 15.2666H15.7542" stroke="#FDDD81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M51.472 51.0166H51.5038" stroke="#FDDD81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="search-info_2-item-title">
                                        Быстрый поиск клона
                                    </div>
                                    <div class="search-info_2-item-text">
                                        Сервис работает на программном обеспечении с применением системы распознавания лиц
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="search-info_2-item">
                                    <div class="search-info_2-item-icon">
                                        <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M42.8749 14.4365L46.7523 22.1915C47.2748 23.264 48.6773 24.2815 49.8598 24.5015L56.8724 25.6565C61.3549 26.399 62.3999 29.644 59.1824 32.889L53.7098 38.3615C52.8023 39.269 52.2799 41.0565 52.5824 42.349L54.1498 49.114C55.3873 54.449 52.5274 56.539 47.8249 53.734L41.2523 49.829C40.0698 49.114 38.0899 49.114 36.9074 49.829L30.3348 53.734C25.6323 56.5115 22.7724 54.449 24.0099 49.114L25.5774 42.349C25.8799 41.084 25.3574 39.2965 24.4499 38.3615L18.9774 32.889C15.7599 29.6715 16.8049 26.4265 21.2874 25.6565L28.2998 24.5015C29.4823 24.309 30.8849 23.264 31.4074 22.1915L35.2849 14.4365C37.3474 10.229 40.7574 10.229 42.8749 14.4365Z" stroke="#FCD562" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M22.5522 13.859H6.05225" stroke="#FCD562" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M14.3022 52.359H6.05225" stroke="#FCD562" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.80225 33.109H6.05225" stroke="#FCD562" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="search-info_2-item-title">
                                        Выгодные тарифы
                                    </div>
                                    <div class="search-info_2-item-text">
                                        Сервис работает на программном обеспечении с применением системы распознавания лиц
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </div>
@include('parts.footer')
