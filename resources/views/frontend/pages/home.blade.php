@extends('frontend.layouts.base')
@section('content')
    {{-- home slider --}}
    @include('frontend.includes.homeslider')
    {{-- section 1 welcome --}}
    @include('frontend.shared.search')
    {{-- proprty types --}}
    @include('frontend.shared.propertytypes')
    {{-- ---ctai 1---- --}}
    @include('frontend.includes.homesection1')
    {{-- -pplist --}}
    @include('frontend.shared.propertylist')
    {{-- -home cta --}}
    @include('frontend.includes.homesection3')
    {{-- home agents --}}
    @include('frontend.includes.topagents')
    {{-- testimonials- --}}
    @include('frontend.includes.testimonials')
@endsection
