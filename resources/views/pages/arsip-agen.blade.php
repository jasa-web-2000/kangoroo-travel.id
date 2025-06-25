@extends('app')
@section('content')
    <div class="[&_.baner]:pb-40">
        <x-default-baner :title="$title" :desc="$desc" />
    </div>
    <div class="__container grid place-items-center -my-32 pb-44">
        <x-agen-search />
    </div>
    <section class="__container py-24">
        <x-heading title="Pilih Agen" desc1="Bebarapa Agen Unggulan"
            desc2="Kami merekomendasikan bebarapa agen yang jadi pilihan banyak orang." :full="true" />
        <div class="mt-10">
            <x-layouts.agent-grid :agent="$agent" />
        </div>
    </section>
@endsection
