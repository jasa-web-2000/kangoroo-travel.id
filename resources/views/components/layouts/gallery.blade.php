<div class="py-24 __container">
    <x-heading title="Galeri Travel" desc1="Abadikan Momen Perjalanan Anda"
        desc2="Galeri ini menampilkan berbagai unit, foto, dan momen berharga yang merefleksikan perjalanan kami." />
    <div
        class="max-w-2xl lg:max-w-4xl !mx-auto grid grid-cols-12 sm:gap-x-6 gap-y-8 mt-10 [&>*]:overflow-hidden [&>div]:cursor-pointer [&>div]:w-full [&>div]:rounded-2xl [&>div]:shadow-lg [&>div]:h-72 [&>div]:col-span-full [&>div]:border-8 [&>div]:border-yellow-600 [&_img]:w-full [&_img]:h-full [&_img]:object-cover [&_img]:rounded-lg [&_img]:transition-all [&_img]:duration-700 [&_img]:brightness-50 hover:[&_img]:brightness-75">
        {{-- <div class="!col-span-full !h-auto aspect-video">
            <iframe class="w-full h-auto aspect-video"
                src="https://www.youtube.com/embed/JkQtbMABGUo?si=Yjw3V54n_MqENcZ9&autoplay=0"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div> --}}
        <div class="sm:!col-span-8">
            <img loading="lazy" width="100" height="100" src="{{ asset('img/gallery/1.jpg') }}" alt="galeri 1">
        </div>
        <div class="sm:!col-span-4">
            <img loading="lazy" width="100" height="100" src="{{ asset('img/gallery/2.jpg') }}" alt="galeri 2">
        </div>
        <div class="sm:!col-span-6">
            <img loading="lazy" width="100" height="100" src="{{ asset('img/gallery/5.jpg') }}" alt="galeri 5">
        </div>
        <div class="sm:!col-span-6">
            <img loading="lazy" width="100" height="100" src="{{ asset('img/gallery/6.jpg') }}" alt="galeri 6">
        </div>
        <div class="sm:!col-span-4">
            <img loading="lazy" width="100" height="100" src="{{ asset('img/gallery/3.jpg') }}" alt="galeri 3">
        </div>
        <div class="sm:!col-span-8">
            <img loading="lazy" width="100" height="100" src="{{ asset('img/gallery/4.jpg') }}" alt="galeri 4">
        </div>
    </div>
</div>
