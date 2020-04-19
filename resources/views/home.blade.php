@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="w-1/5 ml-10 hidden md:block">@include('partials.sidebar_links')</div>

        <div class="flex md:justify-between">

            <div class="flex-1 border-gray-400 md:ml-6 md:mr-6 border-l border-r" style="max-width: 800px">
                @include('partials.main_content')
            </div>

            <div class="w-1/3 mt-1 hidden md:block">@include('partials.friend_list')</div>

        </div>
    </div>
@endsection
