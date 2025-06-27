<div class="{{ $className }}">
    <div class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100 md:px-14 rounded-2xl md:py-14 ">
        {{-- <p class="text-base leading-normal"></p> --}}

        <p class="text-base leading-normal">{!! $text !!}</p>

        <div class="flex items-center sm mt-8 space-x-3">
            <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                <img alt="testimoni {{ $name }}" src={{ $img }} loading="lazy">
            </div>
            <div class="text-left">
                <div class="text-lg font-medium text-gray-700">{{ $name }}</div>
                <div class="text-gray-600 ">{{ $job }}</div>
            </div>
        </div>
    </div>
</div>
