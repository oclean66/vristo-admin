<div x-data="modal">
    <div class="max-w-fit" @click="toggle">
        {{ $toggle }}
    </div>
    <div class="fixed inset-0 bg-[black]/60 z-[999] hidden" :class="open && '!block'">
        <div x-show="open" x-transition x-transition.duration.300
            class="flex items-start justify-center min-h-screen px-4" @click.self="open = false">
            {{ $dialog }}
        </div>
    </div>
</div>
