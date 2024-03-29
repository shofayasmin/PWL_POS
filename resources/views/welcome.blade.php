@extends('layout.app') 
{{-- terdapat  kesalahan pada jobsheet, yaity typo pada 'layouts', seharusnya 'layout' --}}

{{-- Customize layout section --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')
    
{{-- Content body: main page content --}}

@section('conten_body')
    <p>Welcome to this beautiful admin panel.</p>
@stop

{{-- Push body: main page content --}}

@push('css')
    {{-- Add here stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, Im using the Laravel-AdminLTE package!"); </script>
@endpush

