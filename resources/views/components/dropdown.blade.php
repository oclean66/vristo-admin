<div class="flex items-center justify-center">
    <div class="dropdown flex-shrink-0" x-data="dropdown" @click.outside="open = false" @click="toggle">
        {!! $toggle !!}
        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
            class="ltr:right-0 rtl:left-0 top-11 whitespace-nowrap w-max">
            {!! $slot !!}
        </ul>
    </div>
</div>
