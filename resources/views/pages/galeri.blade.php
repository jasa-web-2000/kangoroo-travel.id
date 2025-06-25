@extends('app')
@section('content')
    <div class="[&_.baner]:pb-40">
        <x-default-baner :title="$title" :desc="$desc" />
    </div>

    <x-layouts.gallery />

    <section class="__container py-6">

    </section>
@endsection
