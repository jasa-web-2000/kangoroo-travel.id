<div class="bg-white py-3 md:py-5 border-b z-[100] relative">
    <div class="__container">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-4">
                <x-logo />
            </div>
            <div class="col-span-8 flex justify-end items-center">
                <div class="md:hidden">
                    <div id="mobile-menu-toggle"
                        class="group border border-blue-700 rounded p-1.5 transition-all hover:bg-blue-600 hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 stroke-blue-700 group-hover:stroke-blue-100">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </div>
                    <div class="fixed z-[101] inset-0 bg-black/80 p-5 hidden" id="mobile-menu-list">
                        <svg xmlns="http://www.w3.org/2000/svg" id="mobile-menu-hidden" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="size-6 ms-auto cursor-pointer bg-slate-950/50 mb-1 stroke-slate-300 hover:scale-95 rounded ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                        <ul
                            class="list-none bg-white h-[calc(100%-30px)] p-5 rounded [&_li]:mb-4 [&_li_a]:w-full [&_li_a]:block">
                            <x-nav />
                            <x-button text="Pesan"
                                svg="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"
                                class="mt-4" />

                        </ul>
                    </div>
                </div>
                <div class="hidden md:flex justify-end items-center">
                    <ul class="flex flex-col md:!flex-row gap-x-10 gap-y-4 font-medium">
                        <x-nav />
                    </ul>
                    <x-button text="Pesan"
                        svg="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"
                        class="ml-10" />
                </div>
            </div>
        </div>
    </div>
</div>
