<div class="panel">
    <div x-data="modal" class="mb-5">
        <div class="flex items-center justify-center">
            <button type="button" class="btn btn-primary" @click="toggle">Launch modal</button>
        </div>
        <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto" :class="open && '!block'">
            <div class="flex items-start justify-center min-h-screen px-4" @click.self="open = false">
                <div x-show="open" x-transition x-transition.duration.300
                    class="panel border-0 p-0 rounded-lg overflow-hidden my-8 w-full max-w-lg">
                    <div class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                        <div class="font-bold text-lg">Modal Title</div>
                        <button type="button" class="text-white-dark hover:text-dark" @click="toggle">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="w-6 h-6">
                                <line x1="18" y1="6" x2="6" y2="18">
                                </line>
                                <line x1="6" y1="6" x2="18" y2="18">
                                </line>
                            </svg>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="dark:text-white-dark/70 text-base font-medium text-[#1f2937]">
                            <p>Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros.
                                Phasellus egestas sit amet velit sed luctus. Orci varius natoque
                                penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet
                                ullamcorper mi.</p>
                        </div>
                        <div class="flex justify-end items-center mt-8">
                            <button type="button" class="btn btn-outline-danger" @click="toggle">Discard</button>
                            <button type="button" class="btn btn-primary ltr:ml-4 rtl:mr-4"
                                @click="toggle">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
