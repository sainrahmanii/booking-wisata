<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('output.css')}}" rel="stylesheet">

    <title>Payment - {{ $ticket->name }}</title>
    <link rel="icon" href="{{asset('assets/images/icons/ticket-star.svg')}}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="relative flex flex-col w-full min-h-screen max-w-[390px] mx-auto bg-[#F8F8F9]">
        <div id="background" class="fixed w-full max-w-[390px] top-0 h-screen z-0">
            <div class="absolute z-0 w-full h-[459px] bg-[linear-gradient(180deg,#000000_12.61%,rgba(0,0,0,0)_70.74%)]">
            </div>
            <img src="{{Storage::url($ticket->thumbnail)}}" class="w-full h-full object-cover" alt="background">
        </div>
        <div id="Top-Nav-Fixed"
            class="relative flex items-center justify-between w-full max-w-[390px] px-4 mt-[60px] z-20">
            <div class="fixed flex items-center justify-between w-full max-w-[390px] -ml-4 px-4 mx-auto">
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
            <div class="flex items-center justify-center h-12 w-full shrink-0">
                <h1 class="font-bold text-lg leading-[27px] text-white text-center w-full">Payment</h1>
            </div>
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{route('front.payment_store')}}"
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
                            <p class="font-semibold text-xs leading-[18px]">{{$ticket->seller->location}}</p>
                        </div>
                        <p class="font-bold text-sm leading-[21px] text-[#F97316]">
                            Rp {{number_format($ticket->price, 0, '.', '.')}}
                        </p>
                    </div>
                </div>
                <p class="w-fit flex shrink-0 items-center gap-[2px] rounded-full p-[6px_8px] bg-[#FFE5D3]">
                    <img src="{{asset('assets/images/icons/Star 1.svg')}}" class="w-4 h-4" alt="star">
                    <span class="font-semibold text-xs leading-[18px] text-[#F97316]">4/5</span>
                </p>
            </div>
            <div class="flex flex-col rounded-[30px] p-5 gap-[14px] bg-white">
                <div class="flex items-center justify-between">
                    <p class="font-semibold text-sm leading-[21px]">Total People</p>
                    <p class="font-semibold text-sm leading-[21px]">{{$booking['total_participant']}} Participant</p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="font-semibold text-sm leading-[21px]">Sub Total</p>
                    <p class="font-semibold text-sm leading-[21px]">
                        Rp {{number_format($booking['sub_total'], 0, '.', '.')}}
                    </p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="font-semibold text-sm leading-[21px]">Wajib Pajak 11%</p>
                    <p class="font-semibold text-sm leading-[21px]">
                        Rp {{number_format($booking['total_ppn'], 0, '.', '.')}}
                    </p>
                </div>
                <!-- <div class="flex items-center justify-between">
                    <p class="font-semibold text-sm leading-[21px]">Discount 0%</p>
                    <p class="font-semibold text-sm leading-[21px]">Rp 0</p>
                </div> -->
                <div class="flex items-center justify-between">
                    <p class="font-semibold text-sm leading-[21px]">Insurance</p>
                    <p class="font-semibold text-sm leading-[21px]">Included 100%</p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="font-semibold text-sm leading-[21px]">Grand Total</p>
                    <p class="font-bold text-[22px] leading-[33px] text-[#F97316]">
                        Rp {{number_format($booking['total_amount'], 0, '.', '.')}}
                    </p>
                </div>
            </div>
            <div class="flex flex-col rounded-[30px] p-5 gap-6 bg-white">
                <div class="flex flex-col gap-[6px]">
                    <p class="font-semibold text-sm leading-[21px]">Payment Method</p>
                    <div class="w-full">
                        <label for="transfer" class="relative group">
                            <div
                                class="flex items-center h-full rounded-full p-[14px_12px] gap-[6px] bg-[#F8F8F9] transition-all duration-300 group-has-[:checked]:ring-1 group-has-[:checked]:ring-[#F97316]">
                                <img src="{{asset('assets/images/icons/security-card-black.svg')}}" class="w-6 h-6"
                                    alt="icon">
                                <p class="font-semibold text-sm leading-[21px]">Transfer Bank</p>
                            </div>
                            <input type="radio" name="payment-method" id="transfer"
                                class="absolute top-1/2 left-1/2 -z-10" required>
                            <!-- </label>
                        <label for="credit" class="relative group">
                            <div
                                class="flex items-center h-full rounded-full p-[14px_12px] gap-[6px] bg-[#F8F8F9] transition-all duration-300 group-has-[:checked]:ring-1 group-has-[:checked]:ring-[#F97316]">
                                <img src="{{asset('assets/images/icons/cards.svg')}}" class="w-6 h-6" alt="icon">
                                <p class="font-semibold text-sm leading-[21px]">Credit Card</p>
                            </div>
                            <input type="radio" name="payment-method" id="credit"
                                class="absolute top-1/2 left-1/2 -z-10" required>
                        </label> -->
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="h-[50px] w-[71px] overflow-hidden">
                        <img src="{{asset('assets/images/logos/bca.svg')}}" class="h-full w-full object-contain"
                            alt="bank logo">
                    </div>
                    <div>
                        <p class="font-semibold">Wisata Sentul</p>
                        <p>12345678</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="h-[50px] w-[71px] overflow-hidden">
                        <img src="{{asset('assets/images/logos/mandiri.svg')}}" class="h-full w-full object-contain"
                            alt="bank logo">
                    </div>
                    <div>
                        <p class="font-semibold">Wisata Sentul</p>
                        <p>12345678</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col rounded-[30px] p-5 gap-6 bg-white">
                <p class="font-semibold text-sm leading-[21px]">Upload proof of transfer</p>
                <div
                    class="group w-full rounded-full px-5 flex items-center gap-[10px] bg-[#F8F8F9] relative transition-all duration-300 ">
                    <div class="w-6 h-6 flex shrink-0">
                        <img src="{{asset('assets/images/icons/receipt-2.svg')}}" alt="icon">
                    </div>
                    <button type="button" id="Upload-btn"
                        class="appearance-none outline-none w-full py-[14px] text-left text-sm leading-[21px] overflow-hidden"
                        onclick="document.getElementById('Proof').click()">
                        Upload file
                    </button>
                    <img src="{{asset('assets/images/icons/verify.svg')}}" class="w-6 h-6 flex shrink-0" alt="icon">
                    <input type="file" name="proof" id="Proof" class="absolute -z-10 opacity-0" required>
                </div>
                <button type="submit"
                    class="flex items-center justify-between p-1 pl-5 w-full gap-4 rounded-full bg-[#13181D]">
                    <p class="font-bold text-white">Confirm My Payment</p>
                    <img src="{{asset('assets/images/icons/card-tick.svg')}}" class="w-[50px] h-[50px]" alt="icon">
                </button>
            </div>
        </form>
    </div>

    <script src="{{asset('js/payment.js')}}"></script>
</body>

</html>