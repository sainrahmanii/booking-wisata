<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('output.css')}}" rel="stylesheet">
    <title>{{$ticket->name}}</title>
    <link rel="icon" href="{{asset('assets/images/icons/ticket-star.svg')}}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
</head>

<body>
    <div class="relative flex flex-col w-full min-h-screen max-w-[390px] mx-auto bg-white">
        <header class="relative h-[480px] mb-[44px]">
            <div id="Absolute-Top-Nav" class="absolute flex items-center justify-between w-full px-4 mt-[60px] z-10">
                <a href="{{route('front.index')}}">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_b_256_678)">
                            <rect width="36" height="36" rx="16.8727" fill="white" fill-opacity="0.6" />
                            <path
                                d="M21.5307 24.9693C21.6004 25.039 21.6557 25.1217 21.6934 25.2128C21.7311 25.3038 21.7505 25.4014 21.7505 25.5C21.7505 25.5985 21.7311 25.6961 21.6934 25.7871C21.6557 25.8782 21.6004 25.9609 21.5307 26.0306C21.461 26.1003 21.3783 26.1555 21.2873 26.1933C21.1962 26.231 21.0986 26.2504 21.0001 26.2504C20.9016 26.2504 20.804 26.231 20.7129 26.1933C20.6219 26.1555 20.5392 26.1003 20.4695 26.0306L12.9695 18.5306C12.8997 18.4609 12.8444 18.3782 12.8067 18.2872C12.7689 18.1961 12.7495 18.0985 12.7495 18C12.7495 17.9014 12.7689 17.8038 12.8067 17.7128C12.8444 17.6217 12.8997 17.539 12.9695 17.4693L20.4695 9.96933C20.6102 9.8286 20.8011 9.74954 21.0001 9.74954C21.1991 9.74954 21.39 9.8286 21.5307 9.96933C21.6715 10.1101 21.7505 10.3009 21.7505 10.5C21.7505 10.699 21.6715 10.8899 21.5307 11.0306L14.5604 18L21.5307 24.9693Z"
                                fill="#FA7500" />
                        </g>
                        <defs>
                            <filter id="filter0_b_256_678" x="-4" y="-4" width="44" height="44"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="2" />
                                <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_256_678" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_256_678"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg>

                </a>
                <a href="#">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_b_256_681)">
                            <rect width="36" height="36" rx="16.8727" fill="white" fill-opacity="0.6" />
                            <path
                                d="M28.2806 15.9703L20.7806 8.4703C20.6757 8.36535 20.5421 8.29384 20.3967 8.26483C20.2512 8.23581 20.1004 8.25058 19.9633 8.30728C19.8262 8.36398 19.709 8.46005 19.6265 8.58335C19.5441 8.70666 19.5 8.85165 19.4999 8.99999V12.7828C17.0681 12.9909 14.3821 14.1816 12.1724 16.0556C9.51182 18.3131 7.85526 21.2222 7.50744 24.2466C7.48026 24.4817 7.52794 24.7194 7.64368 24.9259C7.75943 25.1323 7.93735 25.297 8.15212 25.3965C8.36689 25.496 8.60757 25.5252 8.83991 25.48C9.07225 25.4348 9.28441 25.3175 9.44619 25.1447C10.4774 24.0469 14.1468 20.5753 19.4999 20.2697V24C19.5 24.1483 19.5441 24.2933 19.6265 24.4166C19.709 24.5399 19.8262 24.636 19.9633 24.6927C20.1004 24.7494 20.2512 24.7642 20.3967 24.7352C20.5421 24.7061 20.6757 24.6346 20.7806 24.5297L28.2806 17.0297C28.4208 16.8891 28.4996 16.6986 28.4996 16.5C28.4996 16.3014 28.4208 16.1109 28.2806 15.9703ZM20.9999 22.1897V19.5C20.9999 19.3011 20.9209 19.1103 20.7803 18.9697C20.6396 18.829 20.4489 18.75 20.2499 18.75C17.6174 18.75 15.0534 19.4372 12.629 20.7937C11.3943 21.4877 10.2438 22.322 9.20057 23.28C9.74432 21.045 11.1149 18.9197 13.1428 17.1994C15.3196 15.3534 17.9765 14.25 20.2499 14.25C20.4489 14.25 20.6396 14.171 20.7803 14.0303C20.9209 13.8897 20.9999 13.6989 20.9999 13.5V10.8112L26.6896 16.5L20.9999 22.1897Z"
                                fill="#FA7500" />
                        </g>
                        <defs>
                            <filter id="filter0_b_256_681" x="-4" y="-4" width="44" height="44"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="2" />
                                <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_256_681" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_256_681"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg>

                </a>
            </div>
            <div id="Title" class="absolute bottom-0 w-full p-4 pt-0 z-10">
                <div
                    class="flex items-center justify-between w-full h-fit rounded-[17px] border border-white/40 p-[8px_10px] bg-[#94959966] backdrop-blur-sm z-10">
                    <div>
                        <h1 class="font-bold text-white line-clamp-2">{{$ticket->name}}</h1>
                        <div class="flex items-center gap-[6px]">
                            <img src="{{Storage::url($ticket->category->icon)}}" class="w-[22px] h-[22px]" alt="icon">
                            <p class="text-sm leading-[18px] text-white">{{$ticket->category->name}}</p>
                        </div>
                    </div>
                    <p class="w-fit flex shrink-0 items-center gap-[2px] rounded-full p-[6px_8px] bg-white">
                        <img src="{{asset('assets/images/icons/Star 1.svg')}}" class="w-4 h-4" alt="star">
                        <span class="font-semibold text-xs leading-[18px]">4/5</span>
                    </p>
                </div>
            </div>
            <div class="swiper-gallery w-full overflow-hidden">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="relative flex items-center w-full h-[480px] shrink-0 bg-[#13181D] overflow-hidden">
                            <img src="{{Storage::url($ticket->thumbnail)}}" class="absolute w-full h-full object-cover"
                                alt="thumbnail">
                        </div>
                    </div>
                    @forelse($ticket->photos as $itemPhoto)
                    <div class="swiper-slide">
                        <div class="relative flex items-center w-full h-[480px] shrink-0 bg-[#13181D] overflow-hidden">
                            <img src="{{Storage::url($itemPhoto->photo)}}" class="absolute w-full h-full object-cover"
                                alt="thumbnail">
                        </div>
                    </div>
                    @empty
                    <p>Tidak ada gambar untuk ditamplikan!</p>
                    @endforelse
                    <div class="swiper-slide">
                        <div class="relative flex items-center w-full h-[480px] shrink-0 bg-[#13181D] overflow-hidden">
                            <div id="playBtn" class="absolute w-full h-full z-10 bg-transparent"></div>
                            <div class="plyr__video-embed" id="player" style="width: 100%; height: 100%;">
                                <iframe
                                    src="https://www.youtube.com/embed/{{$ticket->path_video}}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                                    allowfullscreen allowtransparency allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination !relative !bottom-auto flex items-center justify-center gap-[6px] py-5">
                </div>
            </div>
        </header>
        <main id="details" class="flex flex-col gap-5 px-4 pb-[116px]">
            <section id="Get-to-Know" class="flex flex-col gap-[6px]">
                <h2 class="font-bold text-sm leading--[21px]">Get to Know</h2>
                <p class="text-sm leading-[28px]">
                    {!!$ticket->about!!}
                </p>
            </section>
            <section id="Time" class="flex flex-col gap-[6px]">
                <h2 class="font-bold text-sm leading--[21px]">Time</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center rounded-3xl p-[14px_16px] gap-4 bg-[#F8F8F9]">
                        <img src="{{asset('assets/images/icons/timer.svg')}}" class="w-6 h-6" alt="icon">
                        <div class="text-left">
                            <p class="text-sm leading-[21px]">Open Time</p>
                            <p class="font-bold text-lg leading-[27px]">{{$ticket->open_time_at}}</p>
                        </div>
                    </div>
                    <div class="flex items-center rounded-3xl p-[14px_16px] gap-4 bg-[#F8F8F9]">
                        <img src="{{asset('assets/images/icons/clock.svg')}}" class="w-6 h-6" alt="icon">
                        <div class="text-left">
                            <p class="text-sm leading-[21px]">Closed Time</p>
                            <p class="font-bold text-lg leading-[27px]">{{$ticket->closed_time_at}}</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <section id="Travel-with-Juara" class="flex flex-col gap-[6px]">
                <h2 class="font-bold text-sm leading-[21px]">Get to Know</h2>
                <div class="grid grid-cols-3 gap-3">
                    <div class="flex flex-col items-center rounded-3xl p-[14px_16px] gap-3 text-center bg-[#13181D]">
                        <img src="{{asset('assets/images/icons/security-card.svg')}}" class="w-9 h-9" alt="icon">
                        <div>
                            <h3 class="font-bold text-sm leading-[21px] text-white">Security</h3>
                            <p class="text-xs leading-[18px] text-white">24/7 Support</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center rounded-3xl p-[14px_16px] gap-3 text-center bg-[#13181D]">
                        <img src="{{asset('assets/images/icons/hospital.svg')}}" class="w-9 h-9" alt="icon">
                        <div>
                            <h3 class="font-bold text-sm leading-[21px] text-white">Insurance</h3>
                            <p class="text-xs leading-[18px] text-white">Available</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center rounded-3xl p-[14px_16px] gap-3 text-center bg-[#13181D]">
                        <img src="{{asset('assets/images/icons/lovely.svg')}}" class="w-9 h-9" alt="icon">
                        <div>
                            <h3 class="font-bold text-sm leading-[21px] text-white">Comfort</h3>
                            <p class="text-xs leading-[18px] text-white">Easy Refund</p>
                        </div>
                    </div>
                </div>
            </section> -->
            <section id="Management" class="flex flex-col gap-[6px]">
                <h2 class="font-bold text-sm leading--[21px]">Management</h2>
                <div class="flex items-center justify-between rounded-3xl p-[10px] pr-[14px] bg-[#F8F8F9]">
                    <div class="flex items-center gap-[14px]">
                        <div class="w-[60px] h-[60px] rounded-[20px] overflow-hidden">
                            <img src="{{Storage::url($ticket->seller->photo)}}" class="w-full h-full object-cover"
                                alt="">
                        </div>
                        <div>
                            <p class="font-bold text-lg leading-[27px]">{{$ticket->seller->name}}</p>
                            <p class="text-sm leading-[21px]">{{$ticket->seller->tickets->count()}} Places</p>
                        </div>
                    </div>
                    <a href="https://wa.me/+6285691472131" target="_blank">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="40" height="40" rx="20" fill="url(#paint0_linear_99_123)" />
                            <path
                                d="M21.125 20C21.125 20.2225 21.059 20.44 20.9354 20.625C20.8118 20.81 20.6361 20.9542 20.4305 21.0394C20.225 21.1245 19.9988 21.1468 19.7805 21.1034C19.5623 21.06 19.3618 20.9528 19.2045 20.7955C19.0472 20.6382 18.94 20.4377 18.8966 20.2195C18.8532 20.0012 18.8755 19.775 18.9606 19.5695C19.0458 19.3639 19.19 19.1882 19.375 19.0646C19.56 18.941 19.7775 18.875 20 18.875C20.2984 18.875 20.5845 18.9935 20.7955 19.2045C21.0065 19.4155 21.125 19.7016 21.125 20ZM15.875 18.875C15.6525 18.875 15.435 18.941 15.25 19.0646C15.065 19.1882 14.9208 19.3639 14.8356 19.5695C14.7505 19.775 14.7282 20.0012 14.7716 20.2195C14.815 20.4377 14.9222 20.6382 15.0795 20.7955C15.2368 20.9528 15.4373 21.06 15.6555 21.1034C15.8738 21.1468 16.1 21.1245 16.3055 21.0394C16.5111 20.9542 16.6868 20.81 16.8104 20.625C16.934 20.44 17 20.2225 17 20C17 19.7016 16.8815 19.4155 16.6705 19.2045C16.4595 18.9935 16.1734 18.875 15.875 18.875ZM24.125 18.875C23.9025 18.875 23.685 18.941 23.5 19.0646C23.315 19.1882 23.1708 19.3639 23.0856 19.5695C23.0005 19.775 22.9782 20.0012 23.0216 20.2195C23.065 20.4377 23.1722 20.6382 23.3295 20.7955C23.4868 20.9528 23.6873 21.06 23.9055 21.1034C24.1238 21.1468 24.35 21.1245 24.5555 21.0394C24.7611 20.9542 24.9368 20.81 25.0604 20.625C25.184 20.44 25.25 20.2225 25.25 20C25.25 19.7016 25.1315 19.4155 24.9205 19.2045C24.7095 18.9935 24.4234 18.875 24.125 18.875ZM29.75 20C29.7504 21.6833 29.3149 23.338 28.486 24.8031C27.6572 26.2682 26.4631 27.4938 25.02 28.3605C23.577 29.2272 21.9341 29.7055 20.2514 29.7489C18.5686 29.7923 16.9033 29.3993 15.4175 28.6081L12.2253 29.6722C11.961 29.7603 11.6774 29.7731 11.4062 29.7091C11.1351 29.6451 10.8871 29.5069 10.6901 29.3099C10.4931 29.1129 10.3549 28.8649 10.2909 28.5938C10.2269 28.3226 10.2397 28.039 10.3278 27.7747L11.3919 24.5825C10.6964 23.2749 10.3079 21.826 10.256 20.3459C10.2041 18.8658 10.49 17.3933 11.0921 16.0401C11.6942 14.687 12.5967 13.4888 13.731 12.5366C14.8654 11.5843 16.2017 10.9029 17.6387 10.5443C19.0756 10.1856 20.5754 10.159 22.0242 10.4664C23.473 10.7739 24.8327 11.4074 26.0001 12.3188C27.1675 13.2303 28.1119 14.3957 28.7616 15.7266C29.4114 17.0575 29.7494 18.5189 29.75 20ZM28.25 20C28.2496 18.7345 27.9582 17.486 27.3981 16.3512C26.838 15.2164 26.0244 14.2256 25.0201 13.4555C24.0159 12.6855 22.8479 12.1568 21.6067 11.9103C20.3654 11.6638 19.084 11.7063 17.8618 12.0342C16.6395 12.3622 15.5091 12.967 14.558 13.8018C13.6068 14.6366 12.8605 15.679 12.3767 16.8484C11.8929 18.0177 11.6846 19.2828 11.7679 20.5455C11.8512 21.8083 12.2239 23.035 12.8572 24.1306C12.9103 24.2226 12.9433 24.3248 12.954 24.4305C12.9647 24.5362 12.9528 24.643 12.9191 24.7437L11.75 28.25L15.2562 27.0809C15.3326 27.0549 15.4128 27.0416 15.4934 27.0416C15.6252 27.0418 15.7545 27.0767 15.8684 27.1428C17.1226 27.8685 18.5458 28.251 19.9948 28.2519C21.4438 28.2528 22.8674 27.8721 24.1225 27.148C25.3776 26.424 26.4199 25.3821 27.1445 24.1273C27.869 22.8725 28.2503 21.449 28.25 20Z"
                                fill="white" />
                            <defs>
                                <linearGradient id="paint0_linear_99_123" x1="20" y1="0" x2="20" y2="40"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FB791B" />
                                    <stop offset="0.849" stop-color="#FC4F46" />
                                </linearGradient>
                            </defs>
                        </svg>

                    </a>
                </div>
            </section>
            <section id="Map" class="flex flex-col gap-[10px]">
                <h2 class="font-bold text-sm leading--[21px]">Map & Address</h2>
                <div class="w-full h-[200px] overflow-hidden">
                    <div id="embedded-map-display" class="w-full h-full">
                        <iframe class="w-full h-full" frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?q={{$ticket->address}}&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                </div>
                <p class="text-sm leading-[28px]">
                    {{$ticket->address}}
                </p>
            </section>
        </main>
        <nav id="Bottom-Nav-Book"
            class="fixed bottom-0 flex items-center justify-between w-full max-w-[390px] bg-white p-4 z-30">
            <div>
                <p class="font-bold text-[22px] leading-[26px]">
                    Rp {{number_format($ticket->price, 0, '.', '.')}}
                </p>
                <p class="text-sm leading-[26px] text-[#70758F]">/person</p>
            </div>
            <a href="{{route('front.booking', $ticket->slug)}}">
                <div class="flex items-center p-1 pl-5 w-fit gap-4 rounded-full bg-[#13181D]">
                    <p class="font-bold text-white">Book Now</p>
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="44" height="44" rx="22" fill="url(#paint0_linear_97_108)" />
                        <path
                            d="M31.1744 19.6394C30.8209 19.27 30.4553 18.8894 30.3175 18.5547C30.19 18.2481 30.1825 17.74 30.175 17.2478C30.1609 16.3328 30.1459 15.2959 29.425 14.575C28.7041 13.8541 27.6672 13.8391 26.7522 13.825C26.26 13.8175 25.7519 13.81 25.4453 13.6825C25.1116 13.5447 24.73 13.1791 24.3606 12.8256C23.7137 12.2041 22.9788 11.5 22 11.5C21.0212 11.5 20.2872 12.2041 19.6394 12.8256C19.27 13.1791 18.8894 13.5447 18.5547 13.6825C18.25 13.81 17.74 13.8175 17.2478 13.825C16.3328 13.8391 15.2959 13.8541 14.575 14.575C13.8541 15.2959 13.8438 16.3328 13.825 17.2478C13.8175 17.74 13.81 18.2481 13.6825 18.5547C13.5447 18.8884 13.1791 19.27 12.8256 19.6394C12.2041 20.2872 11.5 21.0212 11.5 22C11.5 22.9788 12.2041 23.7128 12.8256 24.3606C13.1791 24.73 13.5447 25.1106 13.6825 25.4453C13.81 25.7519 13.8175 26.26 13.825 26.7522C13.8391 27.6672 13.8541 28.7041 14.575 29.425C15.2959 30.1459 16.3328 30.1609 17.2478 30.175C17.74 30.1825 18.2481 30.19 18.5547 30.3175C18.8884 30.4553 19.27 30.8209 19.6394 31.1744C20.2863 31.7959 21.0212 32.5 22 32.5C22.9788 32.5 23.7128 31.7959 24.3606 31.1744C24.73 30.8209 25.1106 30.4553 25.4453 30.3175C25.7519 30.19 26.26 30.1825 26.7522 30.175C27.6672 30.1609 28.7041 30.1459 29.425 29.425C30.1459 28.7041 30.1609 27.6672 30.175 26.7522C30.1825 26.26 30.19 25.7519 30.3175 25.4453C30.4553 25.1116 30.8209 24.73 31.1744 24.3606C31.7959 23.7128 32.5 22.9788 32.5 22C32.5 21.0212 31.7959 20.2872 31.1744 19.6394ZM30.0916 23.3228C29.6425 23.7916 29.1775 24.2763 28.9309 24.8716C28.6947 25.4434 28.6844 26.0969 28.675 26.7297C28.6656 27.3859 28.6553 28.0731 28.3638 28.3638C28.0722 28.6544 27.3897 28.6656 26.7297 28.675C26.0969 28.6844 25.4434 28.6947 24.8716 28.9309C24.2763 29.1775 23.7916 29.6425 23.3228 30.0916C22.8541 30.5406 22.375 31 22 31C21.625 31 21.1422 30.5387 20.6772 30.0916C20.2122 29.6444 19.7238 29.1775 19.1284 28.9309C18.5566 28.6947 17.9031 28.6844 17.2703 28.675C16.6141 28.6656 15.9269 28.6553 15.6363 28.3638C15.3456 28.0722 15.3344 27.3897 15.325 26.7297C15.3156 26.0969 15.3053 25.4434 15.0691 24.8716C14.8225 24.2763 14.3575 23.7916 13.9084 23.3228C13.4594 22.8541 13 22.375 13 22C13 21.625 13.4612 21.1431 13.9084 20.6772C14.3556 20.2113 14.8225 19.7238 15.0691 19.1284C15.3053 18.5566 15.3156 17.9031 15.325 17.2703C15.3344 16.6141 15.3447 15.9269 15.6363 15.6363C15.9278 15.3456 16.6103 15.3344 17.2703 15.325C17.9031 15.3156 18.5566 15.3053 19.1284 15.0691C19.7238 14.8225 20.2084 14.3575 20.6772 13.9084C21.1459 13.4594 21.625 13 22 13C22.375 13 22.8578 13.4612 23.3228 13.9084C23.7878 14.3556 24.2763 14.8225 24.8716 15.0691C25.4434 15.3053 26.0969 15.3156 26.7297 15.325C27.3859 15.3344 28.0731 15.3447 28.3638 15.6363C28.6544 15.9278 28.6656 16.6103 28.675 17.2703C28.6844 17.9031 28.6947 18.5566 28.9309 19.1284C29.1775 19.7238 29.6425 20.2084 30.0916 20.6772C30.5406 21.1459 31 21.625 31 22C31 22.375 30.5387 22.8569 30.0916 23.3228ZM21.25 19C21.25 18.555 21.118 18.12 20.8708 17.75C20.6236 17.38 20.2722 17.0916 19.861 16.9213C19.4499 16.751 18.9975 16.7064 18.561 16.7932C18.1246 16.88 17.7237 17.0943 17.409 17.409C17.0943 17.7237 16.88 18.1246 16.7932 18.561C16.7064 18.9975 16.751 19.4499 16.9213 19.861C17.0916 20.2722 17.38 20.6236 17.75 20.8708C18.12 21.118 18.555 21.25 19 21.25C19.5967 21.25 20.169 21.0129 20.591 20.591C21.0129 20.169 21.25 19.5967 21.25 19ZM18.25 19C18.25 18.8517 18.294 18.7067 18.3764 18.5833C18.4588 18.46 18.5759 18.3639 18.713 18.3071C18.85 18.2503 19.0008 18.2355 19.1463 18.2644C19.2918 18.2933 19.4254 18.3648 19.5303 18.4697C19.6352 18.5746 19.7066 18.7082 19.7356 18.8537C19.7645 18.9992 19.7497 19.15 19.6929 19.287C19.6361 19.4241 19.54 19.5412 19.4167 19.6236C19.2933 19.706 19.1483 19.75 19 19.75C18.8011 19.75 18.6103 19.671 18.4697 19.5303C18.329 19.3897 18.25 19.1989 18.25 19ZM25 22.75C24.555 22.75 24.12 22.882 23.75 23.1292C23.38 23.3764 23.0916 23.7278 22.9213 24.139C22.751 24.5501 22.7064 25.0025 22.7932 25.439C22.88 25.8754 23.0943 26.2763 23.409 26.591C23.7237 26.9057 24.1246 27.12 24.561 27.2068C24.9975 27.2936 25.4499 27.249 25.861 27.0787C26.2722 26.9084 26.6236 26.62 26.8708 26.25C27.118 25.88 27.25 25.445 27.25 25C27.25 24.4033 27.0129 23.831 26.591 23.409C26.169 22.9871 25.5967 22.75 25 22.75ZM25 25.75C24.8517 25.75 24.7067 25.706 24.5833 25.6236C24.46 25.5412 24.3639 25.4241 24.3071 25.287C24.2503 25.15 24.2355 24.9992 24.2644 24.8537C24.2934 24.7082 24.3648 24.5746 24.4697 24.4697C24.5746 24.3648 24.7082 24.2934 24.8537 24.2644C24.9992 24.2355 25.15 24.2503 25.287 24.3071C25.4241 24.3639 25.5412 24.46 25.6236 24.5833C25.706 24.7067 25.75 24.8517 25.75 25C25.75 25.1989 25.671 25.3897 25.5303 25.5303C25.3897 25.671 25.1989 25.75 25 25.75ZM26.2806 18.7806L18.7806 26.2806C18.7109 26.3503 18.6282 26.4056 18.5372 26.4433C18.4461 26.481 18.3485 26.5004 18.25 26.5004C18.1515 26.5004 18.0539 26.481 17.9628 26.4433C17.8718 26.4056 17.7891 26.3503 17.7194 26.2806C17.6497 26.2109 17.5944 26.1282 17.5567 26.0372C17.519 25.9461 17.4996 25.8485 17.4996 25.75C17.4996 25.6515 17.519 25.5539 17.5567 25.4628C17.5944 25.3718 17.6497 25.2891 17.7194 25.2194L25.2194 17.7194C25.2891 17.6497 25.3718 17.5944 25.4628 17.5567C25.5539 17.519 25.6515 17.4996 25.75 17.4996C25.8485 17.4996 25.9461 17.519 26.0372 17.5567C26.1282 17.5944 26.2109 17.6497 26.2806 17.7194C26.3503 17.7891 26.4056 17.8718 26.4433 17.9628C26.481 18.0539 26.5004 18.1515 26.5004 18.25C26.5004 18.3485 26.481 18.4461 26.4433 18.5372C26.4056 18.6282 26.3503 18.7109 26.2806 18.7806Z"
                            fill="#F9F9F9" />
                        <defs>
                            <linearGradient id="paint0_linear_97_108" x1="22" y1="0" x2="22" y2="44"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FB791B" />
                                <stop offset="0.849" stop-color="#FC4F46" />
                            </linearGradient>
                        </defs>
                    </svg>

                </div>
            </a>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script defer src="{{asset('js/details.js')}}"></script>
    <script>
        const player = new Plyr('#player', {
            controls: ['play-large'],
            speed: {
                selected: 1
            }
        });

        const playBtn = document.getElementById("playBtn");
        let played = false

        playBtn.addEventListener("click", () => {
            if (!played) {
                player.play();
                played = true;
            } else {
                player.pause();
                played = false;
            }
        });
    </script>

</body>

</html>