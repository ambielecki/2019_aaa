@extends('shared.layouts.shell')

@section('layout')
    @include('main.includes.nav')
    <main>
        @include('shared.includes.flash_message')
        <div class="container">
            @yield('content')
        </div>
    </main>
    @include('shared.includes.footer')
@endsection

@push('body_scripts')
    @stack('page_scripts')
@endpush
