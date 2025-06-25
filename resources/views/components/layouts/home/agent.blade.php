<div class="__container py-24">
    <x-heading title="Pilih Agen" desc1="Bebarapa Agen Unggulan"
        desc2="Kami merekomendasikan bebarapa agen yang jadi pilihan banyak orang." :full="true" />
    <div class="mt-10">
        <x-layouts.agent-grid :agent="$agent" />
    </div>
</div>
