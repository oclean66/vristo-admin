<x-app-layout>
    <script defer src="/assets/js/apexcharts.js"></script>
    <h1 class="text-4xl font-semibold font-sans"> {{ __('Welcome to Terrakion') }} </h1>
    <div class="w-full bg-[#1a2941] mt-3 h-1"></div>
    <div x-data="finance">

        <div class="pt-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-6 text-white">
                <!-- moneda - VES -->
                <x-currency-card title="VES" price="$27.00" subtitle="Bolivares Soberanos"></x-currency-card>
              
                <!-- moneda - COP -->
                <x-currency-card title="COP" price="$4200.00" subtitle="Pesos Colombianos"></x-currency-card>
                <!-- moneda - USD -->
                <x-currency-card title="USD" price="$1.00" subtitle="Dolares Americanos"></x-currency-card>
                <!-- moneda - ARS -->
                <x-currency-card title="ARS" price="$200.00" subtitle="Pesos Argentinos"></x-currency-card>
                <!-- moneda - EUR -->
                <x-currency-card title="EUR" price="$1.00" subtitle="Euros"></x-currency-card>
                <!-- moneda - CLP -->
                <x-currency-card title="CLP" price="$800.00" subtitle="Pesos Chilenos"></x-currency-card>
                <!-- moneda - PEN -->
                <x-currency-card title="CLP" price="$3.60" subtitle="Soles Peruanos"></x-currency-card>
                <!-- moneda - BRL -->
                <x-currency-card title="BRL" price="$4.90" subtitle="Real Brasilero"></x-currency-card>
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

                        {{-- <div class="panel">
                            <div class="flex items-center font-semibold mb-5">
                                <div class="w-10 h-10 bg-warning rounded-full grid place-content-center p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%"
                                        height="100%" version="1.1" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 784.37 1277.39"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer" />
                                            <g id="_1421394342400">
                                                <g>
                                                    <polygon fill="#343434" fill-rule="nonzero"
                                                        points="392.07,0 383.5,29.11 383.5,873.74 392.07,882.29 784.13,650.54 " />
                                                    <polygon fill="#8C8C8C" fill-rule="nonzero"
                                                        points="392.07,0 -0,650.54 392.07,882.29 392.07,472.33 " />
                                                    <polygon fill="#3C3C3B" fill-rule="nonzero"
                                                        points="392.07,956.52 387.24,962.41 387.24,1263.28 392.07,1277.38 784.37,724.89 " />
                                                    <polygon fill="#8C8C8C" fill-rule="nonzero"
                                                        points="392.07,1277.38 392.07,956.52 -0,724.89 " />
                                                    <polygon fill="#141414" fill-rule="nonzero"
                                                        points="392.07,882.29 784.13,650.54 392.07,472.33 " />
                                                    <polygon fill="#393939" fill-rule="nonzero"
                                                        points="0,650.54 392.07,882.29 392.07,472.33 " />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>

                                </div>
                                <div class="ltr:ml-2 rtl:mr-2">
                                    <h6 class="text-dark dark:text-white-light">ETH</h6>
                                    <p class="text-white-dark text-xs">Ethereum</p>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div x-ref="ethereum"></div>
                            </div>
                            <div class="flex justify-between items-center font-bold text-base">$21,000 <span
                                    class="text-danger font-normal text-sm">-1.25%</span></div>
                        </div>

                        <div class="panel">
                            <div class="flex items-center font-semibold mb-5">
                                <div class="w-10 h-10 rounded-full grid place-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                        viewBox="0.847 0.876 329.254 329.256">
                                        <title>Litecoin</title>
                                        <path
                                            d="M330.102 165.503c0 90.922-73.705 164.629-164.626 164.629C74.554 330.132.848 256.425.848 165.503.848 74.582 74.554.876 165.476.876c90.92 0 164.626 73.706 164.626 164.627"
                                            fill="#345d9d" />
                                        <path
                                            d="M295.15 165.505c0 71.613-58.057 129.675-129.674 129.675-71.616 0-129.677-58.062-129.677-129.675 0-71.619 58.061-129.677 129.677-129.677 71.618 0 129.674 58.057 129.674 129.677"
                                            fill="#345d9d" />
                                        <path
                                            d="M155.854 209.482l10.693-40.264 25.316-9.249 6.297-23.663-.215-.587-24.92 9.104 17.955-67.608h-50.921l-23.481 88.23-19.605 7.162-6.478 24.395 19.59-7.156-13.839 51.998h135.521l8.688-32.362h-84.601"
                                            fill="#fff" />
                                    </svg>
                                </div>
                                <div class="ltr:ml-2 rtl:mr-2">
                                    <h6 class="text-dark dark:text-white-light">LTC</h6>
                                    <p class="text-white-dark text-xs">Litecoin</p>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div x-ref="litecoin"></div>
                            </div>
                            <div class="flex justify-between items-center font-bold text-base">$11,657 <span
                                    class="text-success font-normal text-sm">+0.25%</span></div>
                        </div> --}}
                    </div>
                </div>

                <!-- Live Prices -->
                {{-- <div>
                    <div class="flex items-center mb-5 font-bold">
                        <span class="text-lg">Live Prices</span>
                        <a href="javascript:;"
                            class="ltr:ml-auto rtl:mr-auto text-primary hover:text-black dark:hover:text-white-dark">
                            See All
                        </a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-6">
                        <!-- Binance -->
                        <div class="panel">
                            <div class="flex items-center font-semibold mb-5">
                                <div class="w-10 h-10 rounded-full grid place-content-center">
                                    <svg width="100%" height="100%" viewBox="0 0 1024 1024"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="Icon">
                                            <circle cx="512" cy="512" r="512"
                                                style="fill: #f3ba2f" />
                                            <path class="st1 fill-white"
                                                d="M404.9 468 512 360.9l107.1 107.2 62.3-62.3L512 236.3 342.6 405.7z" />
                                            <path transform="rotate(-45.001 298.629 511.998)" class="st1 fill-white"
                                                d="M254.6 467.9h88.1V556h-88.1z" />
                                            <path class="st1 fill-white"
                                                d="M404.9 556 512 663.1l107.1-107.2 62.4 62.3h-.1L512 787.7 342.6 618.3l-.1-.1z" />
                                            <path transform="rotate(-45.001 725.364 512.032)" class="st1 fill-white"
                                                d="M681.3 468h88.1v88.1h-88.1z" />
                                            <path class="st1 fill-white"
                                                d="M575.2 512 512 448.7l-46.7 46.8-5.4 5.3-11.1 11.1-.1.1.1.1 63.2 63.2 63.2-63.3z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="ltr:ml-2 rtl:mr-2">
                                    <h6 class="text-dark dark:text-white-light">BNB</h6>
                                    <p class="text-white-dark text-xs">Binance</p>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div x-ref="binance"></div>
                            </div>
                            <div class="flex justify-between items-center font-bold text-base">$21,000 <span
                                    class="text-danger font-normal text-sm">-1.25%</span></div>
                        </div>

                        <!-- Tether -->
                        <div class="panel">
                            <div class="flex items-center font-semibold mb-5">
                                <div class="w-10 h-10 rounded-full grid place-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                        viewBox="0 0 2000 2000">
                                        <path
                                            d="M1000,0c552.26,0,1000,447.74,1000,1000S1552.24,2000,1000,2000,0,1552.38,0,1000,447.68,0,1000,0"
                                            fill="#53ae94" />
                                        <path
                                            d="M1123.42,866.76V718H1463.6V491.34H537.28V718H877.5V866.64C601,879.34,393.1,934.1,393.1,999.7s208,120.36,484.4,133.14v476.5h246V1132.8c276-12.74,483.48-67.46,483.48-133s-207.48-120.26-483.48-133m0,225.64v-0.12c-6.94.44-42.6,2.58-122,2.58-63.48,0-108.14-1.8-123.88-2.62v0.2C633.34,1081.66,451,1039.12,451,988.22S633.36,894.84,877.62,884V1050.1c16,1.1,61.76,3.8,124.92,3.8,75.86,0,114-3.16,121-3.8V884c243.8,10.86,425.72,53.44,425.72,104.16s-182,93.32-425.72,104.18"
                                            fill="#fff" />
                                    </svg>
                                </div>
                                <div class="ltr:ml-2 rtl:mr-2">
                                    <h6 class="text-dark dark:text-white-light">USDT</h6>
                                    <p class="text-white-dark text-xs">Tether</p>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div x-ref="tether"></div>
                            </div>
                            <div class="flex justify-between items-center font-bold text-base">$20,000 <span
                                    class="text-success font-normal text-sm">+0.25%</span></div>
                        </div>

                        <!-- Solana -->
                        <div class="panel">
                            <div class="flex items-center font-semibold mb-5">
                                <div class="w-10 h-10 bg-warning rounded-full p-2 grid place-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="100%" height="100%" viewBox="0 0 508.07 398.17">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="463" y1="205.16"
                                                x2="182.39" y2="742.62" gradientTransform="translate(0 -198)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#00ffa3" />
                                                <stop offset="1" stop-color="#dc1fff" />
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-2" x1="340.31" y1="141.1"
                                                x2="59.71" y2="678.57" xlink:href="#linear-gradient" />
                                            <linearGradient id="linear-gradient-3" x1="401.26" y1="172.92"
                                                x2="120.66" y2="710.39" xlink:href="#linear-gradient" />
                                        </defs>
                                        <path class="cls-1 fill-[url(#linear-gradient)]"
                                            d="M84.53,358.89A16.63,16.63,0,0,1,96.28,354H501.73a8.3,8.3,0,0,1,5.87,14.18l-80.09,80.09a16.61,16.61,0,0,1-11.75,4.86H10.31A8.31,8.31,0,0,1,4.43,439Z"
                                            transform="translate(-1.98 -55)" />
                                        <path class="cls-2 fill-[url(#linear-gradient)]"
                                            d="M84.53,59.85A17.08,17.08,0,0,1,96.28,55H501.73a8.3,8.3,0,0,1,5.87,14.18l-80.09,80.09a16.61,16.61,0,0,1-11.75,4.86H10.31A8.31,8.31,0,0,1,4.43,140Z"
                                            transform="translate(-1.98 -55)" />
                                        <path class="cls-3 fill-[url(#linear-gradient)]"
                                            d="M427.51,208.42a16.61,16.61,0,0,0-11.75-4.86H10.31a8.31,8.31,0,0,0-5.88,14.18l80.1,80.09a16.6,16.6,0,0,0,11.75,4.86H501.73a8.3,8.3,0,0,0,5.87-14.18Z"
                                            transform="translate(-1.98 -55)" />
                                    </svg>
                                </div>
                                <div class="ltr:ml-2 rtl:mr-2">
                                    <h6 class="text-dark dark:text-white-light">SOL</h6>
                                    <p class="text-white-dark text-xs">Solana</p>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div x-ref="solana"></div>
                            </div>
                            <div class="flex justify-between items-center font-bold text-base">$21,000 <span
                                    class="text-danger font-normal text-sm">-1.25%</span></div>
                        </div>
                    </div>
                </div> --}}
            </div>

            {{-- <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
                <div class="grid gap-6 xl:grid-flow-row">
                    <!-- Previous Statement -->
                    <div class="panel overflow-hidden">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-lg font-bold">Previous Statement</div>
                                <div class="text-success"> Paid on June 27, 2022 </div>
                            </div>
                            <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                <a href="javascript:;" @click="toggle">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 hover:opacity-80 opacity-70">
                                        <circle cx="5" cy="12" r="2" stroke="currentColor"
                                            stroke-width="1.5" />
                                        <circle opacity="0.5" cx="12" cy="12" r="2"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <circle cx="19" cy="12" r="2" stroke="currentColor"
                                            stroke-width="1.5" />
                                    </svg>
                                </a>
                                <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                    class="ltr:right-0 rtl:left-0">
                                    <li><a href="javascript:;" @click="toggle">View Report</a></li>
                                    <li><a href="javascript:;" @click="toggle">Edit Report</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="relative mt-10">
                            <div class="absolute -bottom-12 ltr:-right-12 rtl:-left-12 w-24 h-24">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="text-success opacity-20 w-full h-full">
                                    <circle opacity="0.5" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path d="M8.5 12.5L10.5 14.5L15.5 9.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                                <div>
                                    <div class="text-primary">Card Limit</div>
                                    <div class="mt-2 font-semibold text-2xl">$50,000.00</div>
                                </div>
                                <div>
                                    <div class="text-primary">Spent</div>
                                    <div class="mt-2 font-semibold text-2xl">$15,000.00</div>
                                </div>
                                <div>
                                    <div class="text-primary">Minimum</div>
                                    <div class="mt-2 font-semibold text-2xl">$2,500.00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Current Statement -->
                    <div class="panel overflow-hidden">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-lg font-bold">Current Statement</div>
                                <div class="text-danger"> Must be paid before July 27, 2022 </div>
                            </div>
                            <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                <a href="javascript:;" @click="toggle">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 hover:opacity-80 opacity-70">
                                        <circle cx="5" cy="12" r="2" stroke="currentColor"
                                            stroke-width="1.5" />
                                        <circle opacity="0.5" cx="12" cy="12" r="2"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <circle cx="19" cy="12" r="2" stroke="currentColor"
                                            stroke-width="1.5" />
                                    </svg>
                                </a>
                                <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                    class="ltr:right-0 rtl:left-0">
                                    <li><a href="javascript:;" @click="toggle">View Report</a></li>
                                    <li><a href="javascript:;" @click="toggle">Edit Report</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="relative mt-10">
                            <div class="absolute -bottom-12 ltr:-right-12 rtl:-left-12 w-24 h-24">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="text-danger opacity-20 w-24 h-full">
                                    <circle opacity="0.5" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path d="M12 7V13" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <circle cx="12" cy="16" r="1" fill="currentColor" />
                                </svg>
                            </div>

                            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                                <div>
                                    <div class="text-primary">Card Limit</div>
                                    <div class="mt-2 font-semibold text-2xl">$50,000.00</div>
                                </div>
                                <div>
                                    <div class="text-primary">Spent</div>
                                    <div class="mt-2 font-semibold text-2xl">$30,500.00</div>
                                </div>
                                <div>
                                    <div class="text-primary">Minimum</div>
                                    <div class="mt-2 font-semibold text-2xl">$8,000.00</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Recent Transactions -->
                <div class="panel">
                    <div class="mb-5 text-lg font-bold">Recent Transactions</div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="ltr:rounded-l-md rtl:rounded-r-md">ID</th>
                                    <th>DATE</th>
                                    <th>NAME</th>
                                    <th>AMOUNT</th>
                                    <th class="text-center ltr:rounded-r-md rtl:rounded-l-md">STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-semibold">#01</td>
                                    <td class="whitespace-nowrap">Oct 08, 2021</td>
                                    <td class="whitespace-nowrap">Eric Page</td>
                                    <td>$1,358.75</td>
                                    <td class="text-center">
                                        <span
                                            class="badge bg-success/20 text-success rounded-full hover:top-0">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">#02</td>
                                    <td class="whitespace-nowrap">Dec 18, 2021</td>
                                    <td class="whitespace-nowrap">Nita Parr</td>
                                    <td>-$1,042.82</td>
                                    <td class="text-center">
                                        <span class="badge bg-info/20 text-info rounded-full hover:top-0">In
                                            Process</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">#03</td>
                                    <td class="whitespace-nowrap">Dec 25, 2021</td>
                                    <td class="whitespace-nowrap">Carl Bell</td>
                                    <td>$1,828.16</td>
                                    <td class="text-center">
                                        <span
                                            class="badge bg-danger/20 text-danger rounded-full hover:top-0">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">#04</td>
                                    <td class="whitespace-nowrap">Nov 29, 2021</td>
                                    <td class="whitespace-nowrap">Dan Hart</td>
                                    <td>$1,647.55</td>
                                    <td class="text-center">
                                        <span
                                            class="badge bg-success/20 text-success rounded-full hover:top-0">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">#05</td>
                                    <td class="whitespace-nowrap">Nov 24, 2021</td>
                                    <td class="whitespace-nowrap">Jake Ross</td>
                                    <td>$927.43</td>
                                    <td class="text-center">
                                        <span
                                            class="badge bg-success/20 text-success rounded-full hover:top-0">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">#06</td>
                                    <td class="whitespace-nowrap">Jan 26, 2022</td>
                                    <td class="whitespace-nowrap">Anna Bell</td>
                                    <td>$250.00</td>
                                    <td class="text-center">
                                        <span class="badge bg-info/20 text-info rounded-full hover:top-0">In
                                            Process</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
