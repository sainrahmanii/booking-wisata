<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('output.css')}}" rel="stylesheet">

    <title>Check Your Ticket!</title>
    <link rel="icon" href="{{asset('assets/images/icons/ticket-star.svg')}}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="relative flex flex-col w-full min-h-screen max-w-[390px] mx-auto bg-[#F8F8F9]">
        <main class="flex flex-col justify-center items-center w-full px-8 m-auto">
            <form method="POST" action="{{route('front.check_booking_details')}}"
                class="flex flex-col w-[329px] shrink-0 rounded-[30px] p-5 gap-6 bg-white">
                @csrf
                <svg width="104" height="85" viewBox="0 0 104 85" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mx-auto">
                    <path
                        d="M87.3958 42.5C87.3958 34.5096 93.3224 27.8685 101.022 26.7838C101.646 26.6946 102.217 26.3833 102.63 25.907C103.043 25.4307 103.271 24.8213 103.271 24.1908V10.75C103.271 4.90271 98.5347 0.166672 92.6874 0.166672H10.6666C4.81929 0.166672 0.083252 4.90271 0.083252 10.75V24.1908C0.083252 25.4873 1.03575 26.5985 2.33221 26.7838C10.0316 27.8685 15.9583 34.5096 15.9583 42.5C15.9583 50.4904 10.0316 57.1315 2.33221 58.2163C1.70804 58.3054 1.13698 58.6167 0.723861 59.093C0.31074 59.5693 0.0832844 60.1787 0.083252 60.8092V74.25C0.083252 80.0973 4.81929 84.8333 10.6666 84.8333H92.6874C98.5347 84.8333 103.271 80.0973 103.271 74.25V60.8092C103.271 60.1787 103.043 59.5693 102.63 59.093C102.217 58.6167 101.646 58.3054 101.022 58.2163C97.2403 57.6729 93.7814 55.7849 91.2788 52.8985C88.7762 50.012 87.3976 46.3203 87.3958 42.5Z"
                        fill="url(#paint0_linear_184_1632)" />
                    <defs>
                        <linearGradient id="paint0_linear_184_1632" x1="51.677" y1="0.166672" x2="51.677" y2="84.8333"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FB791B" />
                            <stop offset="0.849" stop-color="#FC4F46" />
                        </linearGradient>
                    </defs>
                </svg>

                <h1 class="font-bold text-2xl leading-9 text-center">View Your Tickets</h1>
                <div class="flex flex-col gap-[6px]">
                    <label for="bookId" class="font-semibold text-sm leading-[21px]">Booking ID</label>
                    <div
                        class="flex items-center rounded-full px-5 gap-[10px] bg-[#F8F8F9] transition-all duration-300 focus-within:ring-1 focus-within:ring-[#F97316]">
                        <img src="{{asset('assets/images/icons/user-octagon.svg')}}" class="w-6 h-6" alt="icon">
                        <input type="text" name="booking_trx_id" id="bookId"
                            class="appearance-none outline-none py-[14px] !bg-transparent w-full font-semibold text-sm leading-[21px] placeholder:font-normal placeholder:text-[#13181D]"
                            placeholder="What’s your booking ID">
                    </div>
                </div>
                <div class="flex flex-col gap-[6px]">
                    <label for="phone" class="font-semibold text-sm leading-[21px]">Phone Number</label>
                    <div
                        class="flex items-center rounded-full px-5 gap-[10px] bg-[#F8F8F9] transition-all duration-300 focus-within:ring-1 focus-within:ring-[#F97316]">
                        <img src="{{asset('assets/images/icons/mobile.svg')}}" class="w-6 h-6" alt="icon">
                        <input type="tel" name="phone_number" id="phone"
                            class="appearance-none outline-none py-[14px] !bg-transparent w-full font-semibold text-sm leading-[21px] placeholder:font-normal placeholder:text-[#13181D]"
                            placeholder="What’s your number">
                    </div>
                </div>
                <button type="submit"
                    class="w-full rounded-full p-[14px_20px] text-white text-center bg-[#F97316] font-bold">
                    Search Ticket
                </button>
            </form>
        </main>
        <nav id="Bottom-Nav" class="fixed bottom-0 w-full max-w-[390px] bg-white px-4 py-5 z-30">
            <ul class="flex justify-evenly max-[400px]:justify-between">
                <li class=" text-[#13181D]">
                    <a href="{{route('front.index')}}" class="menu">
                        <div class="group flex flex-col items-center text-center gap-[10px]">
                            <div class="w-6 h-6 flex shrink-0">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5603 8.18875L10.0603 0.688748C9.77905 0.407656 9.39766 0.249756 9.00001 0.249756C8.60236 0.249756 8.22097 0.407656 7.9397 0.688748L0.439697 8.18875C0.299732 8.32767 0.188783 8.49304 0.1133 8.67523C0.0378174 8.85742 -0.00069249 9.05279 9.42514e-06 9.25V18.25C9.42514e-06 18.4489 0.0790272 18.6397 0.219679 18.7803C0.360332 18.921 0.551097 19 0.750009 19H6.75001C6.94892 19 7.13969 18.921 7.28034 18.7803C7.42099 18.6397 7.50001 18.4489 7.50001 18.25V13H10.5V18.25C10.5 18.4489 10.579 18.6397 10.7197 18.7803C10.8603 18.921 11.0511 19 11.25 19H17.25C17.4489 19 17.6397 18.921 17.7803 18.7803C17.921 18.6397 18 18.4489 18 18.25V9.25C18.0007 9.05279 17.9622 8.85742 17.8867 8.67523C17.8112 8.49304 17.7003 8.32767 17.5603 8.18875ZM16.5 17.5H12V12.25C12 12.0511 11.921 11.8603 11.7803 11.7197C11.6397 11.579 11.4489 11.5 11.25 11.5H6.75001C6.5511 11.5 6.36033 11.579 6.21968 11.7197C6.07903 11.8603 6.00001 12.0511 6.00001 12.25V17.5H1.50001V9.25L9.00001 1.75L16.5 9.25V17.5Z"
                                        fill="#FA7500" />
                                </svg>


                            </div>
                            <p
                                class="font-semibold text-sm leading-[21px] transition-all duration-300 group-hover:text-[#F97316] text-current">
                                Home</p>
                        </div>
                    </a>
                </li>
                <li class="text-[#F97316]">
                    <a href="{{route('front.check_booking')}}" class="menu">
                        <div class="group flex flex-col items-center text-center gap-[10px]">
                            <div class="w-6 h-6 flex shrink-0">
                                <svg width="17" height="21" viewBox="0 0 17 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.25 1.99999H11.8506C11.4292 1.52817 10.9129 1.15066 10.3355 0.892197C9.7581 0.633729 9.13262 0.500122 8.5 0.500122C7.86738 0.500122 7.2419 0.633729 6.6645 0.892197C6.08709 1.15066 5.57079 1.52817 5.14937 1.99999H1.75C1.35218 1.99999 0.970644 2.15802 0.68934 2.43933C0.408035 2.72063 0.25 3.10216 0.25 3.49999V19.25C0.25 19.6478 0.408035 20.0293 0.68934 20.3106C0.970644 20.592 1.35218 20.75 1.75 20.75H15.25C15.6478 20.75 16.0294 20.592 16.3107 20.3106C16.592 20.0293 16.75 19.6478 16.75 19.25V3.49999C16.75 3.10216 16.592 2.72063 16.3107 2.43933C16.0294 2.15802 15.6478 1.99999 15.25 1.99999ZM8.5 1.99999C9.29565 1.99999 10.0587 2.31606 10.6213 2.87867C11.1839 3.44127 11.5 4.20434 11.5 4.99999H5.5C5.5 4.20434 5.81607 3.44127 6.37868 2.87867C6.94129 2.31606 7.70435 1.99999 8.5 1.99999ZM11.5 14H5.5C5.30109 14 5.11032 13.921 4.96967 13.7803C4.82902 13.6397 4.75 13.4489 4.75 13.25C4.75 13.0511 4.82902 12.8603 4.96967 12.7197C5.11032 12.579 5.30109 12.5 5.5 12.5H11.5C11.6989 12.5 11.8897 12.579 12.0303 12.7197C12.171 12.8603 12.25 13.0511 12.25 13.25C12.25 13.4489 12.171 13.6397 12.0303 13.7803C11.8897 13.921 11.6989 14 11.5 14ZM11.5 11H5.5C5.30109 11 5.11032 10.921 4.96967 10.7803C4.82902 10.6397 4.75 10.4489 4.75 10.25C4.75 10.0511 4.82902 9.86031 4.96967 9.71966C5.11032 9.579 5.30109 9.49999 5.5 9.49999H11.5C11.6989 9.49999 11.8897 9.579 12.0303 9.71966C12.171 9.86031 12.25 10.0511 12.25 10.25C12.25 10.4489 12.171 10.6397 12.0303 10.7803C11.8897 10.921 11.6989 11 11.5 11Z"
                                        fill="#FA7500" />
                                </svg>


                            </div>
                            <p
                                class="font-semibold text-sm leading-[21px] transition-all duration-300 group-hover:text-[#F97316] text-current">
                                Bookings</p>
                        </div>
                    </a>
                </li>
                <li class=" text-[#13181D]">
                    <a href="" class="menu">
                        <div class="group flex flex-col items-center text-center gap-[10px]">
                            <div class="w-6 h-6 flex shrink-0">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.5 0.25C8.57164 0.25 6.68657 0.821828 5.08319 1.89317C3.47982 2.96451 2.23013 4.48726 1.49218 6.26884C0.754225 8.05042 0.561142 10.0108 0.937348 11.9021C1.31355 13.7934 2.24215 15.5307 3.60571 16.8943C4.96928 18.2579 6.70656 19.1865 8.59787 19.5627C10.4892 19.9389 12.4496 19.7458 14.2312 19.0078C16.0127 18.2699 17.5355 17.0202 18.6068 15.4168C19.6782 13.8134 20.25 11.9284 20.25 10C20.2473 7.41498 19.2192 4.93661 17.3913 3.10872C15.5634 1.28084 13.085 0.25273 10.5 0.25ZM10.5 18.25C8.86831 18.25 7.27326 17.7661 5.91655 16.8596C4.55984 15.9531 3.50242 14.6646 2.878 13.1571C2.25358 11.6496 2.0902 9.99085 2.40853 8.3905C2.72685 6.79016 3.51259 5.32015 4.66637 4.16637C5.82016 3.01259 7.29017 2.22685 8.89051 1.90852C10.4909 1.59019 12.1497 1.75357 13.6571 2.37799C15.1646 3.00242 16.4531 4.05984 17.3596 5.41655C18.2661 6.77325 18.75 8.3683 18.75 10C18.7475 12.1873 17.8775 14.2843 16.3309 15.8309C14.7843 17.3775 12.6873 18.2475 10.5 18.25ZM12 14.5C12 14.6989 11.921 14.8897 11.7803 15.0303C11.6397 15.171 11.4489 15.25 11.25 15.25C10.8522 15.25 10.4706 15.092 10.1893 14.8107C9.90804 14.5294 9.75 14.1478 9.75 13.75V10C9.55109 10 9.36033 9.92098 9.21967 9.78033C9.07902 9.63968 9 9.44891 9 9.25C9 9.05109 9.07902 8.86032 9.21967 8.71967C9.36033 8.57902 9.55109 8.5 9.75 8.5C10.1478 8.5 10.5294 8.65804 10.8107 8.93934C11.092 9.22064 11.25 9.60218 11.25 10V13.75C11.4489 13.75 11.6397 13.829 11.7803 13.9697C11.921 14.1103 12 14.3011 12 14.5ZM9 5.875C9 5.6525 9.06598 5.43499 9.1896 5.24998C9.31322 5.06498 9.48892 4.92078 9.69449 4.83564C9.90005 4.75049 10.1263 4.72821 10.3445 4.77162C10.5627 4.81502 10.7632 4.92217 10.9205 5.0795C11.0778 5.23684 11.185 5.43729 11.2284 5.65552C11.2718 5.87375 11.2495 6.09995 11.1644 6.30552C11.0792 6.51109 10.935 6.68679 10.75 6.8104C10.565 6.93402 10.3475 7 10.125 7C9.82664 7 9.54049 6.88147 9.32951 6.6705C9.11853 6.45952 9 6.17337 9 5.875Z"
                                        fill="#FA7500" />
                                </svg>

                            </div>
                            <p
                                class="font-semibold text-sm leading-[21px] transition-all duration-300 group-hover:text-[#F97316] text-current">
                                Support</p>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</body>

</html>