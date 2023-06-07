<div class="flex items-center justify-center">
    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
        <button class="btn btn-primary dropdown-toggle" @click="toggle">Action
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block">
                <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
            class="ltr:right-0 rtl:left-0 whitespace-nowrap">
            <li><a href="javascript:;" @click="toggle">Action</a></li>
            <li><a href="javascript:;" @click="toggle">Another action</a></li>
            <li><a href="javascript:;" @click="toggle">Something else here</a></li>
            <li><a href="javascript:;" @click="toggle">Separated link</a></li>
        </ul>
    </div>
</div>
