@extends('app')
@section('content')
    <div class="[&_.baner]:pb-40">
        <x-default-baner :title="$title" :desc="$desc" />
    </div>
    <div class="__container grid place-items-center -my-32 pb-44">
        <x-travel-search />
    </div>
    <section class="__container py-24">
        <x-heading title="Pilih Rute" desc1="Bebarapa Rute Unggulan"
            desc2="Kami merekomendasikan beberapa rute yang jadi pilihan banyak orang." :full="true" />
        <div class="mt-10">
            <x-layouts.travel-grid :featured="$featured" />
        </div>
    </section>
@endsection
