<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('output.css')}}" rel="stylesheet">

    <title>Check My Booking - {{$bookingDetails->ticket->name}}</title>
    <link rel="icon" href="{{asset('assets/images/icons/ticket-star.svg')}}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="relative flex flex-col w-full min-h-screen max-w-[390px] mx-auto bg-[#F8F8F9]">
        <div id="background" class="fixed w-full max-w-[390px] top-0 h-screen z-0">
            <div class="absolute z-0 w-full h-[459px] bg-[linear-gradient(180deg,#000000_12.61%,rgba(0,0,0,0)_70.74%)]">
            </div>
            <img src="{{Storage::url($bookingDetails->ticket->thumbnail)}}"
                class="w-full h-full object-cover brightness-50" alt="background">
        </div>
        <div id="Top-Nav-Fixed"
            class="relative flex items-center justify-between w-full max-w-[390px] px-4 mt-[60px] z-20">
            <div class="fixed flex items-center justify-between w-full max-w-[390px] -ml-4 px-4 mx-auto">
                <a href="{{route('front.check_booking')}}">
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
                <h1 class="font-bold text-lg leading-[27px] text-white text-center w-full">Booking Details</h1>
            </div>
        </div>
        <main class="relative flex flex-col w-full px-4 gap-[18px] mt-5 pb-[30px] overflow-x-hidden">
            @if(session('error'))
            <div class="w-full p-4 mb-4 text-sm text-white bg-red-500 rounded-lg">
                {{ session('error') }}
            </div>
            @endif
            <div class="flex items-center justify-between rounded-3xl p-[6px] pr-[14px] bg-white overflow-hidden">
                <div class="flex items-center gap-[14px]">
                    <div class="flex w-[90px] h-[90px] shrink-0 rounded-3xl bg-[#D9D9D9] overflow-hidden">
                        <img src="{{Storage::url($bookingDetails->ticket->thumbnail)}}"
                            class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <h3 class="font-semibold">{{$bookingDetails->ticket->name}}</h3>
                        <div class="flex items-center gap-1">
                            <img src="{{asset('assets/images/icons/location.svg')}}" class="w-[18px] h-[18px]"
                                alt="icon">
                            <p class="font-semibold text-xs leading-[18px]">{{$bookingDetails->ticket->seller->name}}
                            </p>
                        </div>
                        <p class="font-bold text-sm leading-[21px] text-[#F97316]">
                            Rp {{number_format($bookingDetails->ticket->price, 0, '.', '.')}}
                        </p>
                    </div>
                </div>
                <p class="w-fit flex shrink-0 items-center gap-[2px] rounded-full p-[6px_8px] bg-[#FFE5D3]">
                    <img src="{{asset('assets/images/icons/Star 1.svg')}}" class="w-4 h-4" alt="star">
                    <span class="font-semibold text-xs leading-[18px] text-[#F97316]">4/5</span>
                </p>
            </div>
            <div class="relative w-[361px] h-[504px] shrink-0 mx-auto overflow-hidden">
                <img src="{{asset('assets/images/backgrounds/receipt.svg')}}"
                    class="absolute w-full h-full object-contain" alt="background">
                <div class="relative flex flex-col p-5 pb-[30px] gap-6">
                    <img src="{{asset('assets/images/icons/ticket-star.svg')}}" class="w-20 h-20 mx-auto" alt="icon">
                    <div class="flex flex-col gap-[14px] shrink-0 h-full">
                        <div class="flex items-center justify-between">
                            <p class="font-bold text-sm leading-[21px]">Booking TRX ID</p>
                            <p class="font-bold text-xl leading-[30px]">{{$bookingDetails->booking_trx_id}}</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-bold text-sm leading-[21px]">Started At</p>
                            <p class="font-bold text-sm leading-[21px] text-[#FF1927]">
                                {{$dateStart}}
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-bold text-sm leading-[21px]">Total People</p>
                            <p class="font-bold text-sm leading-[21px]">{{$bookingDetails->total_participant}}
                                Participant</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-bold text-sm leading-[21px]">Insurance</p>
                            <p class="font-bold text-sm leading-[21px]">Included 100%</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-bold text-sm leading-[21px]">Grand Total</p>
                            <p class="font-bold text-[22px] leading-[33px] text-[#F97316]">
                                Rp {{number_format($bookingDetails->total_amount, 0, '.', '.')}}
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-bold text-sm leading-[21px]">Payment Status</p>
                            @if($bookingDetails->is_paid == 1)
                            <p
                                class="w-fit rounded-full p-[6px_12px] bg-[#07B704] font-bold text-xs leading-[18px] text-white">
                                SUCCESS
                            </p>
                            @elseif($dateStart < $today) <p
                                class="w-fit rounded-full p-[6px_12px] bg-[red] font-bold text-xs leading-[18px] text-white">
                                FAILED
                                </p>
                                @else
                                <p
                                    class="w-fit rounded-full p-[6px_12px] bg-[#13181D] font-bold text-xs leading-[18px] text-white">
                                    PENDING
                                </p>
                                @endif
                        </div>
                    </div>
                    <hr class="w-[321px] mx-auto border border-[#D0D5DC] border-dashed">
                    @if($bookingDetails->is_paid == 1 && $dateStart >= $today)
                    <div class="flex items-center rounded-[20px] p-[10px] gap-[10px] bg-[#F8F8F9]">
                        <img src="{{asset('assets/images/icons/ticket-star-black.svg')}}" class="w-8 h-8" alt="icon">
                        <p class="leading-[28px]">Redeem code <span
                                class="font-bold">{{$bookingDetails->booking_trx_id}}</span> for your trip.</p>
                    </div>

                    @elseif($bookingDetails->is_paid == 0 && $start_date >= $today)
                    <h2 class="text-center">Admin still checking your booking transaction</h2>
                    @elseif($start_date < $today)
                        <h2 class="text-center">Your Booking Transaction has expired</h2>
                        @endif
                </div>
            </div>
        </main>
    </div>

</body>

</html>