<x-background-blue>
    <div class="__container py-24">
        <x-heading title="Pilih Rute" desc1="Bebarapa Rute Unggulan"
            desc2="Kami merekomendasikan beberapa rute yang jadi pilihan banyak orang." :light="true"
            :full="true" />
        <div class="mt-10">
            <x-layouts.travel-grid :featured="$featured" />
        </div>
    </div>
</x-background-blue>
