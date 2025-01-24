@extends('web.layouts.principal')
@section('css')
<style>
    .room-slider{
        display:none;
    }

    .room-slider.active{
        display:block;
    }

    button{
        cursor: pointer;
        border: none;
    }

    button:focus {
        outline: none;
    }
</style>
@endsection
@section('content')
    <instalaciones-component></instalaciones-component>

@endsection
@section('scripts')
    
    
@endsection
