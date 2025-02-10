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
</head>

<body>
    <div class="relative flex flex-col w-full min-h-screen max-w-[390px] mx-auto bg-[#F8F8F9]">
        <div id="background" class="fixed w-full max-w-[390px] top-0 h-screen z-0">
            <div class="absolute z-0 w-full h-[459px] bg-[linear-gradient(180deg,#000000_12.61%,rgba(0,0,0,0)_70.74%)]">
            </div>
            <img src="{{Storage::url($ticket->thumbnail)}}" class="w-full h-full object-cover brightness-50" alt="background">
        </div>
        <div id="Top-Nav-Fixed"
            class="relative flex items-center justify-between w-full max-w-[390px] px-4 mt-[60px] z-20">
            <div class="fixed flex items-center justify-between w-full max-w-[390px] -ml-4 px-4 mx-auto">
                <a href="{{route('front.details', $ticket->slug)}}">
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
            </div>
            <div class="flex items-center justify-center h-12 w-full shrink-0">
                <h1 class="font-bold text-lg leading-[27px] text-white text-center w-full">Book a Ticket</h1>
            </div>
        </div>
        <form method="POST" action="{{route('front.booking_store', $ticket->slug)}}"
            class="relative flex flex-col w-full px-4 gap-[18px] mt-5 pb-[30px] overflow-x-hidden">
            @csrf
            <div class="flex items-center justify-between rounded-3xl p-[6px] pr-[14px] bg-white overflow-hidden">
                <div class="flex items-center gap-[14px]">
                    <div class="flex w-[90px] h-[90px] shrink-0 rounded-3xl bg-[#D9D9D9] overflow-hidden">
                        <img src="{{Storage::url($ticket->thumbnail)}}" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <h3 class="font-semibold">{{$ticket->name}}</h3>
                        <div class="flex items-center gap-1">
                            <img src="{{asset('assets/images/icons/location.svg')}}" class="w-[18px] h-[18px]"
                                alt="icon">
                            <p class="font-semibold text-xs leading-[18px]">{{$ticket->seller->name}}</p>
                        </div>
                        <p class="font-bold text-sm leading-[21px] text-[#F97316]">Rp
                            {{number_format($ticket->price, 0, '.', '.')}}
                        </p>
                        <input type="hidden" name="realTicketPrice" id="realTicketPrice" value="{{$ticket->price}}">
                    </div>
                </div>
                <p class="w-fit flex shrink-0 items-center gap-[2px] rounded-full p-[6px_8px] bg-[#FFE5D3]">
                    <img src="{{asset('assets/images/icons/Star 1.svg')}}" class="w-4 h-4" alt="star">
                    <span class="font-semibold text-xs leading-[18px] text-[#F97316]">4/5</span>
                </p>
            </div>
            <div class="flex flex-col rounded-[30px] p-5 gap-[14px] bg-white">
                <div class="flex flex-col gap-[6px]">
                    <label for="name" class="font-semibold text-sm leading-[21px]">Full Name</label>
                    <div
                        class="flex items-center rounded-full px-5 gap-[10px] bg-[#F8F8F9] transition-all duration-300 focus-within:ring-1 focus-within:ring-[#F97316]">
                        <img src="{{asset('assets/images/icons/user-octagon.svg')}}" class="w-6 h-6" alt="icon">
                        <input type="text" name="name" id="name"
                            class="appearance-none outline-none py-[14px] !bg-transparent w-full font-semibold text-sm leading-[21px] placeholder:font-normal placeholder:text-[#13181D]"
                            placeholder="Write your complete name">
                    </div>
                </div>
                <div class="flex flex-col gap-[6px]">
                    <label for="email" class="font-semibold text-sm leading-[21px]">Email</label>
                    <div
                        class="flex items-center rounded-full px-5 gap-[10px] bg-[#F8F8F9] transition-all duration-300 focus-within:ring-1 focus-within:ring-[#F97316]">
                        <img src="{{asset('assets/images/icons/sms.svg')}}" class="w-6 h-6" alt="icon">
                        <input type="email" name="email" id="email"
                            class="appearance-none outline-none py-[14px] !bg-transparent w-full font-semibold text-sm leading-[21px] placeholder:font-normal placeholder:text-[#13181D]"
                            placeholder="Write your email">
                    </div>
                </div>
                <div class="flex flex-col gap-[6px]">
                    <label for="phone" class="font-semibold text-sm leading-[21px]">Phone No.</label>
                    <div
                        class="flex items-center rounded-full px-5 gap-[10px] bg-[#F8F8F9] transition-all duration-300 focus-within:ring-1 focus-within:ring-[#F97316]">
                        <img src="{{asset('assets/images/icons/mobile.svg')}}" class="w-6 h-6" alt="icon">
                        <input type="tel" name="phone_number" id="phone"
                            class="appearance-none outline-none py-[14px] !bg-transparent w-full font-semibold text-sm leading-[21px] placeholder:font-normal placeholder:text-[#13181D]"
                            placeholder="Give us your number">
                    </div>
                </div>
                <div class="flex flex-col gap-[6px]">
                    <label for="started_at" class="font-semibold text-sm leading-[21px]">Choose Date</label>
                    <div
                        class="flex items-center rounded-full px-5 gap-[10px] bg-[#F8F8F9] transition-all duration-300 focus-within:ring-1 focus-within:ring-[#F97316]">
                        <img src="{{asset('assets/images/icons/clock.svg')}}" class="w-6 h-6" alt="icon">
                        <input type="date" name="started_at" id="started_at"
                            class="appearance-none outline-none py-[14px] !bg-transparent w-full font-semibold text-sm leading-[21px] placeholder:font-normal placeholder:text-[#13181D]">
                    </div>
                </div>
            </div>
            <div class="flex flex-col rounded-[30px] p-5 gap-6 bg-white">
                <div class="flex justify-between items-center">
                    <p class="font-bold">How Many <br>People Buying?</p>
                    <div id="counter"
                        class="flex items-center justify-between w-fit min-w-[135px] rounded-full p-[14px_20px] gap-[14px] bg-[#F8F8F9]">
                        <button type="button" id="minus" class="w-6 h-6">
                            <img src="{{asset('assets/images/icons/minus.svg')}}" alt="minus">
                        </button>
                        <p id="count-text" class="font-bold">1</p>
                        <input type="number" name="total_participant" id="people" value="1" class="hidden">
                        <button type="button" id="plus" class="w-6 h-6">
                            <img src="{{asset('assets/images/icons/add.svg')}}" alt="plus">
                        </button>
                    </div>
                </div>
                <div class="gap-1">
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-sm leading-[21px]">PPN</p>
                        <p id="total-ppn-price" class="text-[12px] leading-[33px] text-[#F97316]"></p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-sm leading-[21px]">Subtotal Booking Price</p>
                        <p id="total-price-people" class="text-[12px] leading-[33px] text-[#F97316]"></p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-sm leading-[21px]">Grand Total Price</p>
                        <p id="total-price" class="font-bold text-[22px] leading-[33px] text-[#F97316]"></p>
                    </div>
                </div>
                <button type="submit"
                    class="flex items-center justify-between p-1 pl-5 w-full gap-4 rounded-full bg-[#13181D]">
                    <p class="font-bold text-white">Continue to Checkout</p>
                    <img src="{{asset('assets/images/icons/card.svg')}}" class="w-[50px] h-[50px]" alt="icon">
                </button>
            </div>
        </form>
    </div>

    <script src="{{asset('js/booking.js')}}"></script>
</body>

</html>