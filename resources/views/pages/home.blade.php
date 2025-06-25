@extends('app')
@section('content')
    <x-layouts.home.baner />
    <x-layouts.home.advantages />
    <x-layouts.home.featured :featured="$featured" />
    <x-layouts.gallery />
    <x-layouts.cta />
    <x-layouts.home.agent :agent="$agent" />
@endsection
