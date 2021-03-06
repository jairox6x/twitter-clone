@extends('instagram.layout')


@section('content')

    <div class="stories lg:hidden border-gray-300 mb-6 -mt-6 rounded-md py-4">
        <div class="h-20 overflow-y-hidden">
            <div class="w-auto flex" style="overflow: hidden">

                @foreach(range(1,10) as $story)
                    <a href="#" class="block ml-6 flex flex-col justify-content-around">
                        <div>
                            <img src="{{random_avatar(80)}}" class="rounded-full" alt="story-avatar">
                        </div>
                        <div class="ml-2">
                            <div class="text-2xs text-gray-500">{{random_name()}}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="md:flex md:justify-center">


        <section class="feed mb-8" style="max-width: 614px">
            @foreach($photos as $post)
                @include('instagram.partials.post', ['post' => $post])
            @endforeach
        </section>


        <section class="information md:w-1/3 ml-4 sticky top-0 hidden lg:block" style="max-width: 293px">

            <div class="user-information flex items-center">
                <div class="mr-4">
                    <a href="#">
                        <img src="{{random_avatar(60)}}" alt="user-image" class="rounded-full">
                    </a>
                </div>
                <div class="text">
                    <div class="text-sm text-gray-800 font-semibold">jairox6x</div>
                    <div class="text-xs text-gray-600">Jairo Rodriguez</div>
                </div>
            </div>

            <div class="histories-container bg-white mt-6 border border-gray-300 rounded-t-lg rounded-bl-lg">
                <section class="pl-4 pt-4 pt-2">
                    <header class="flex justify-between items-center mb-4 pr-4">
                        <div class="font-bold text-sm text-gray-500">Stories</div>
                        <div class="text-gray-800 font-bold text-xs">Ver todas</div>
                    </header>
                    <div class="story-feed overflow-y-scroll" style="max-height: 200px">
                        @foreach(range(1,10) as $stories)
                            <div class="flex py-2">
                                <a href="#" class="flex">
                                    <div>
                                        <img src="{{random_avatar(40)}}" class="rounded-full" alt="story-avatar">
                                    </div>
                                    <div class="ml-2">
                                        <div class="text-sm font-bold text-gray-800">{{random_name()}}</div>
                                        <div class="text-2xs uppercase text-gray-600">HACE {{random_int(2, 12)}} HORAS</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </section>
            </div>

            <div class="suggestions-container bg-white mt-6 border border-gray-300 rounded-t-lg rounded-bl-lg mt-4">
                <section class="p-4">
                    <header class="flex justify-between items-center mb-4">
                        <div class="font-bold text-sm text-gray-500">Sugerencias para ti</div>
                        <div class="text-gray-800 font-bold text-xs">Ver todo</div>
                    </header>
                    <div class="story-feed">
                        @foreach(range(1,4) as $stories)
                            <div class="flex py-2 justify-between items-center">
                                <a href="#" class="flex">
                                    <div>
                                        <img src="{{random_avatar(30)}}" class="rounded-full" alt="story-avatar">
                                    </div>
                                    <div class="ml-2">
                                        <div class="text-sm font-bold text-gray-800">{{random_name()}}</div>
                                        <div class="text-xs  text-gray-600">Te sigue</div>
                                    </div>
                                </a>
                                <button class="text-blue-600 font-semibold text-xs focus:outline-none">Seguir</button>
                            </div>
                        @endforeach
                    </div>

                </section>
            </div>


        </section>

    </div>

@endsection