
    <script defer src="/assets/js/apexcharts.js"></script>
    <h1 class="text-4xl font-semibold font-sans"> {{ __('Welcome to Terrakion') }} </h1>
    <div class="w-full bg-[#ebedf2] dark:bg-[#253b5c] mt-3 h-1"></div>
    
    <div x-data="finance">

        <div class="pt-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-6 text-white">
                @foreach ($currencies as $currency)
                <x-currency-card title="{{$currency->code}}" price="{{$currency->price}}" subtitle="{{$currency->name}}"/>
                @endforeach
              
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-1 gap-6">
                <!-- Favorites -->
                <div>
                    <div class="flex items-center mb-5 font-bold">
                        <span class="text-lg">Accesos Directos</span>

                    </div>


                    <div class="flex  gap-6 md:mb-5">
                        {{-- MI RED --}}
                        <div class="panel w-full">
                            <a href="{{ route('my-red') }}">
                                <div class="flex justify-center flex-col gap-2 h-full items-center">
                                    <h6 class="text-dark text-center dark:text-white-light uppercase">
                                        {{ 'My Network' }}</h6>
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100"
                                        height="90" viewBox="0 0 920.000000 920.000000"
                                        preserveAspectRatio="xMidYMid meet">

                                        <g transform="translate(0.000000,920.000000) scale(0.100000,-0.100000)"
                                            fill="#888ea8" stroke="none">
                                            <path
                                                d="M4442 9189 c-259 -33 -496 -152 -672 -335 -126 -131 -208 -268 -263
                                   -439 -44 -136 -52 -191 -52 -365 0 -98 6 -189 13 -225 32 -149 101 -313 181
                                   -435 100 -152 315 -328 485 -397 l81 -32 0 -988 0 -988 -1250 -5 c-1148 -5
                                   -1255 -7 -1315 -23 -300 -81 -526 -235 -680 -462 -84 -124 -131 -232 -177
                                   -405 -15 -58 -17 -156 -22 -958 l-6 -893 -81 -32 c-183 -74 -383 -243 -499
                                   -421 -239 -366 -244 -878 -14 -1253 74 -120 242 -288 362 -362 101 -62 230
                                   -113 361 -144 130 -29 382 -29 512 0 235 55 392 141 559 308 126 126 199 235
                                   252 377 61 161 77 252 77 438 0 186 -16 277 -77 438 -98 261 -345 515 -601
                                   619 l-81 32 -3 783 c-2 499 1 812 8 862 25 194 139 306 334 327 44 5 590 8
                                   1211 7 l1130 -3 0 -988 0 -988 -81 -32 c-170 -69 -385 -245 -485 -397 -80
                                   -122 -149 -286 -181 -435 -7 -36 -13 -127 -13 -225 0 -174 8 -229 52 -365 55
                                   -171 137 -308 263 -439 318 -331 813 -434 1268 -263 173 65 366 211 483 365
                                   90 119 175 311 211 477 7 36 13 127 13 225 0 98 -6 189 -13 225 -32 149 -101
                                   313 -181 435 -100 152 -315 328 -485 397 l-81 32 0 988 0 988 1195 0 1195 0
                                   55 -22 c113 -46 183 -121 218 -233 15 -50 17 -130 17 -888 l0 -833 -81 -32
                                   c-183 -74 -383 -243 -499 -421 -239 -367 -245 -877 -14 -1253 74 -120 242
                                   -288 362 -362 101 -62 230 -113 361 -144 130 -29 382 -29 512 0 235 55 392
                                   141 559 308 167 167 253 324 308 559 29 130 29 382 0 512 -51 219 -139 385
                                   -288 542 -103 109 -254 214 -368 258 -40 15 -74 29 -76 31 -2 1 -4 391 -6 865
                                   -2 846 -2 865 -23 965 -62 287 -191 499 -411 675 -94 75 -285 169 -416 205
                                   l-100 28 -1250 5 -1250 5 0 988 0 988 81 32 c170 69 385 245 485 397 80 122
                                   149 286 181 435 7 36 13 127 13 225 0 174 -8 229 -52 365 -55 171 -137 308
                                   -263 439 -249 259 -616 384 -988 335z m341 -797 c76 -38 129 -92 166 -171 23
                                   -50 26 -68 26 -171 0 -110 -2 -119 -33 -182 -38 -77 -92 -130 -171 -167 -50
                                   -23 -68 -26 -171 -26 -103 0 -121 3 -171 26 -79 37 -133 90 -171 167 -31 63
                                   -33 72 -33 182 0 103 3 121 26 170 69 149 183 213 366 207 91 -3 109 -7 166
                                   -35z m-3452 -6900 c77 -37 130 -91 168 -171 23 -50 26 -68 26 -171 0 -110 -2
                                   -119 -33 -182 -38 -77 -92 -130 -171 -167 -50 -23 -68 -26 -171 -26 -103 0
                                   -121 3 -171 26 -79 37 -133 90 -171 167 -31 63 -33 72 -33 182 0 103 3 121 26
                                   170 69 148 183 212 364 207 89 -3 107 -6 166 -35z m3452 0 c76 -38 129 -92
                                   166 -171 23 -50 26 -68 26 -171 0 -110 -2 -119 -33 -182 -38 -77 -92 -130
                                   -171 -167 -50 -23 -68 -26 -171 -26 -103 0 -121 3 -171 26 -79 37 -133 90
                                   -171 167 -31 63 -33 72 -33 182 0 103 3 121 26 170 69 149 183 213 366 207 91
                                   -3 109 -7 166 -35z m3448 0 c77 -37 130 -91 168 -171 23 -50 26 -68 26 -171 0
                                   -110 -2 -119 -33 -182 -38 -77 -92 -130 -171 -167 -50 -23 -68 -26 -171 -26
                                   -103 0 -121 3 -171 26 -79 37 -133 90 -171 167 -31 63 -33 72 -33 182 0 103 3
                                   121 26 170 69 148 183 212 364 207 89 -3 107 -6 166 -35z" />
                                        </g>
                                    </svg>

                                </div>
                            </a>
                        </div>
                        {{-- USUARIOS --}}
                        <div class="panel w-full">
                            <a href="{{ route('users.table') }}">
                                <div class="flex justify-center flex-col gap-2 h-full items-center">
                                    <h6 class="text-dark text-center dark:text-white-light uppercase">
                                        {{ __('Users') }}</h6>
                                    <svg width="100" height="100" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="6" r="4" stroke="currentColor"
                                            stroke-width="1.5"></circle>
                                        <path opacity="0.5"
                                            d="M18 9C19.6569 9 21 7.88071 21 6.5C21 5.11929 19.6569 4 18 4"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path opacity="0.5"
                                            d="M6 9C4.34315 9 3 7.88071 3 6.5C3 5.11929 4.34315 4 6 4"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <ellipse cx="12" cy="17" rx="6" ry="4"
                                            stroke="currentColor" stroke-width="1.5"></ellipse>
                                        <path opacity="0.5"
                                            d="M20 19C21.7542 18.6153 23 17.6411 23 16.5C23 15.3589 21.7542 14.3847 20 14"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path opacity="0.5"
                                            d="M4 19C2.24575 18.6153 1 17.6411 1 16.5C1 15.3589 2.24575 14.3847 4 14"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        {{-- TABLERO --}}
                        <div class="panel w-full">
                            <a href="{{ route('apps.scrumboard') }}">
                                <div class="flex justify-center flex-col gap-2 h-full items-center">
                                    <h6 class="text-dark text-center dark:text-white-light uppercase">
                                        {{ __('Scrumboard') }}</h6>
                                    <svg width="100" height="100" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                            stroke="currentColor" stroke-width="1.5"></path>
                                        <path
                                            d="M7 6C7 6.55228 6.55228 7 6 7C5.44772 7 5 6.55228 5 6C5 5.44772 5.44772 5 6 5C6.55228 5 7 5.44772 7 6Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M10 6C10 6.55228 9.55228 7 9 7C8.44772 7 8 6.55228 8 6C8 5.44772 8.44772 5 9 5C9.55228 5 10 5.44772 10 6Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M13 6C13 6.55228 12.5523 7 12 7C11.4477 7 11 6.55228 11 6C11 5.44772 11.4477 5 12 5C12.5523 5 13 5.44772 13 6Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.5"
                                            d="M2 8.75C1.58579 8.75 1.25 9.08579 1.25 9.5C1.25 9.91421 1.58579 10.25 2 10.25V8.75ZM22 10.25C22.4142 10.25 22.75 9.91421 22.75 9.5C22.75 9.08579 22.4142 8.75 22 8.75V10.25ZM8.25 21C8.25 21.4142 8.58579 21.75 9 21.75C9.41421 21.75 9.75 21.4142 9.75 21H8.25ZM9.75 10C9.75 9.58579 9.41421 9.25 9 9.25C8.58579 9.25 8.25 9.58579 8.25 10L9.75 10ZM2 10.25H22V8.75H2V10.25ZM9.75 21L9.75 10L8.25 10L8.25 21H9.75Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        {{-- NOTAS --}}
                        <div class="panel w-full">
                            <a href="{{ route('apps.notes') }}">
                                <div class="flex justify-center flex-col gap-2 h-full items-center">
                                    <h6 class="text-dark text-center dark:text-white-light uppercase">
                                        {{ __('Notes') }}</h6>
                                    <svg width="100" height="100" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21 16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H9C6.17157 22 4.75736 22 3.87868 21.1213C3 20.2426 3 18.8284 3 16V8C3 5.17157 3 3.75736 3.87868 2.87868C4.75736 2 6.17157 2 9 2H15C17.8284 2 19.2426 2 20.1213 2.87868C21 3.75736 21 5.17157 21 8V12"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M8 2V6M8 22V10" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round"></path>
                                        <path d="M2 12H4" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round"></path>
                                        <path d="M2 16H4" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round"></path>
                                        <path d="M2 8H4" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round"></path>
                                        <path d="M11.5 6.5H16.5" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round"></path>
                                        <path d="M11.5 10H16.5" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        {{-- CALENDARIO --}}
                        <div class="panel w-full">
                            <a href="{{ route('apps.calendar') }}">
                                <div class="flex justify-center flex-col h-full items-center gap-2">
                                    <h6 class="text-dark text-center dark:text-white-light uppercase">
                                        {{ 'Calendar' }}</h6>
                                    <svg width="100" height="100" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.75 2.5C7.75 2.08579 7.41421 1.75 7 1.75C6.58579 1.75 6.25 2.08579 6.25 2.5V4.07926C4.81067 4.19451 3.86577 4.47737 3.17157 5.17157C2.47737 5.86577 2.19451 6.81067 2.07926 8.25H21.9207C21.8055 6.81067 21.5226 5.86577 20.8284 5.17157C20.1342 4.47737 19.1893 4.19451 17.75 4.07926V2.5C17.75 2.08579 17.4142 1.75 17 1.75C16.5858 1.75 16.25 2.08579 16.25 2.5V4.0129C15.5847 4 14.839 4 14 4H10C9.16097 4 8.41527 4 7.75 4.0129V2.5Z"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22 12C22 11.161 22 10.4153 21.9871 9.75H2.0129C2 10.4153 2 11.161 2 12V14C2 17.7712 2 19.6569 3.17157 20.8284C4.34315 22 6.22876 22 10 22H14C17.7712 22 19.6569 22 20.8284 20.8284C22 19.6569 22 17.7712 22 14V12ZM14 12.25C13.0335 12.25 12.25 13.0335 12.25 14V16C12.25 16.9665 13.0335 17.75 14 17.75C14.9665 17.75 15.75 16.9665 15.75 16V14C15.75 13.0335 14.9665 12.25 14 12.25ZM14 13.75C13.8619 13.75 13.75 13.8619 13.75 14V16C13.75 16.1381 13.8619 16.25 14 16.25C14.1381 16.25 14.25 16.1381 14.25 16V14C14.25 13.8619 14.1381 13.75 14 13.75ZM10.787 12.3071C11.0673 12.4232 11.25 12.6967 11.25 13V17C11.25 17.4142 10.9142 17.75 10.5 17.75C10.0858 17.75 9.75 17.4142 9.75 17V14.8107L9.53033 15.0303C9.23744 15.3232 8.76256 15.3232 8.46967 15.0303C8.17678 14.7374 8.17678 14.2626 8.46967 13.9697L9.96967 12.4697C10.1842 12.2552 10.5068 12.191 10.787 12.3071Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        {{-- CHAT --}}
                        <div class="panel w-full">
                            <a href="{{ route('apps.chat') }}">
                                <div class="flex justify-center flex-col h-full items-center gap-2">
                                    <h6 class="text-dark text-center dark:text-white-light uppercase">
                                        {{ __('Chat') }}</h6>
                                    <svg width="100" height="100" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M18 14C18 18.4183 14.4183 22 10 22C8.76449 22 7.5944 21.7199 6.54976 21.2198C6.19071 21.0479 5.78393 20.9876 5.39939 21.0904L4.17335 21.4185C3.20701 21.677 2.32295 20.793 2.58151 19.8267L2.90955 18.6006C3.01245 18.2161 2.95209 17.8093 2.7802 17.4502C2.28008 16.4056 2 15.2355 2 14C2 9.58172 5.58172 6 10 6C14.4183 6 18 9.58172 18 14ZM6.5 15C7.05228 15 7.5 14.5523 7.5 14C7.5 13.4477 7.05228 13 6.5 13C5.94772 13 5.5 13.4477 5.5 14C5.5 14.5523 5.94772 15 6.5 15ZM10 15C10.5523 15 11 14.5523 11 14C11 13.4477 10.5523 13 10 13C9.44772 13 9 13.4477 9 14C9 14.5523 9.44772 15 10 15ZM13.5 15C14.0523 15 14.5 14.5523 14.5 14C14.5 13.4477 14.0523 13 13.5 13C12.9477 13 12.5 13.4477 12.5 14C12.5 14.5523 12.9477 15 13.5 15Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.6"
                                            d="M17.9842 14.5084C18.0921 14.4638 18.1986 14.4163 18.3035 14.3661C18.5952 14.2264 18.9257 14.1774 19.2381 14.261L20.2343 14.5275C21.0194 14.7376 21.7377 14.0193 21.5277 13.2342L21.2611 12.238C21.1775 11.9256 21.2266 11.595 21.3662 11.3033C21.7726 10.4545 22.0001 9.50385 22.0001 8.5C22.0001 4.91015 19.09 2 15.5001 2C12.7901 2 10.4674 3.6585 9.4917 6.0159C9.65982 6.00535 9.82936 6 10.0001 6C14.4184 6 18.0001 9.58172 18.0001 14C18.0001 14.1708 17.9948 14.3403 17.9842 14.5084Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>

                       
        </div>
    </div>

