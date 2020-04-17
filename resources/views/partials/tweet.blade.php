<div class="timeline border border-gray-300 rounded-lg mb-4">
    <div class="flex p-4">
        <div class="mr-2 flex-shrink-0">
            <img class="rounded-full mr-2" src="{{auth()->user()->avatar}}" alt="">
        </div>

        <div>
            <h5 class="font-bold ">{{$tweet->user->name}}</h5>
            <h6 class="text-gray-600 text-sm mb-4"><span>@</span>{{random_name()}}</h6>
            <p>{!! $tweet->body !!}</p>
        </div>
    </div>

</div>
