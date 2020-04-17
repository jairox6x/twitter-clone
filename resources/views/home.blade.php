@extends('layouts.app')

@section('content')
<div class="flex lg:justify-between">
    <div class="w-1/6 mt-8" >@include('partials.sidebar_links')</div>

    <div class="flex-1 border-gray-400 ml-6 mr-6 border-l border-r" style="max-width: 700px">
        @include('partials.main_content')
    </div>


    <div class="w-1/6 mt-8">@include('partials.friend_list')</div>
</div>
@endsection
