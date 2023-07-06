@props(['title' => 'title', 'price' => 0.0, 'subtitle' => 'subtitle'])

<div class="overflow-hidden panel bg-gradient-to-r from-cyan-600 to-cyan-500">
    <div class="flex justify-between">
        <div class="ltr:mr-1 rtl:ml-1 text-xl font-extrabold">{{ $title }}</div>
    </div>
    <div class="flex items-center mt-5">
        <div class="text-4xl font-bold ltr:mr-3 rtl:ml-3"> ${{ $price }} </div>
    </div>
    <div class="flex items-center font-semibold text-lg mt-5">
        <svg class="group-hover:!text-primary mx-1" width="20" height="20" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z"
                fill="currentColor"></path>
        </svg>
        {{ __($subtitle)}}
    </div>
    <div class="absolute -bottom-6 ltr:-right-6 rtl:-left-6 w-24 h-24">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="text-danger opacity-20 w-24 h-full">
            <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor"
                stroke-width="1.5" />
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32"
                enable-background="new 0 0 32 32" xml:space="preserve">
                <path fill="#666666"
                    d="M16,31.5c-8.5,0-15.5-7-15.5-15.5S7.5,0.5,16,0.5s15.5,7,15.5,15.5S24.5,31.5,16,31.5z M16,1.5
               C8,1.5,1.5,8,1.5,16S8,30.5,16,30.5S30.5,24,30.5,16S24,1.5,16,1.5z" />
                <g>
                    <g>
                        <path fill="#666666"
                            d="M15.5,23.5c-1.2,0-2.2-0.4-3-1.1c-0.2-0.2-0.2-0.5,0-0.7s0.5-0.2,0.7,0c0.5,0.5,1.4,0.8,2.3,0.8
                       c1.8,0,3.2-1.2,3.2-2.9c0-1.8-1.3-3.1-3.1-3.1c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5c2.3,0,4.1,1.8,4.1,4.1
                       C19.7,21.8,17.9,23.5,15.5,23.5z" />
                    </g>
                    <path fill="#666666"
                        d="M15.5,25.5c-0.3,0-0.5-0.2-0.5-0.5v-2c0-0.3,0.2-0.5,0.5-0.5S16,22.7,16,23v2C16,25.3,15.8,25.5,15.5,25.5z
                   " />
                    <g>
                        <path fill="#666666"
                            d="M15.6,16.5c-2.3,0-4.1-1.8-4.1-4.1c0-2.3,1.7-3.9,4-3.9c1.3,0,2.4,0.4,3.1,1.1c0.2,0.2,0.2,0.5,0,0.7
                       c-0.2,0.2-0.5,0.2-0.7,0c-0.5-0.5-1.4-0.8-2.4-0.8c-1.8,0-3,1.2-3,2.9c0,1.8,1.3,3.1,3.1,3.1c0.3,0,0.5,0.2,0.5,0.5
                       S15.9,16.5,15.6,16.5z" />
                    </g>
                    <path fill="#666666"
                        d="M15.5,9.5C15.2,9.5,15,9.3,15,9V6c0-0.3,0.2-0.5,0.5-0.5S16,5.7,16,6v3C16,9.3,15.8,9.5,15.5,9.5z" />
                </g>
            </svg>

        </svg>
    </div>
</div>
