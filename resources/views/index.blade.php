@extends('master')
@section('title')
    Home Page
@endsection
@section('content')
    <h1>I'm Home {{ $myName }} and {{ $myAge }}</h1>
@endsection

@push('script')
    <script>
        console.log("test push");
    </script>
@endpush

@prepend('script')
    <script>
        console.log("test prepand")
    </script>
@endprepend
