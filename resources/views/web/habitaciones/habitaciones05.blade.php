@extends('web.layouts.principal')
@section('css')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

    </style>
@endsection
@section('content')
        <habitacionsupervip-component></habitacionsupervip-component>
@endsection
@section('scripts')
    <script>
        $('#inicio').removeClass("active");
        $('#habitaciones').addClass("active");
        $('#instalaciones').removeClass("active");
        $('#contactenos').removeClass("active");
    </script>
@endsection
