<div class="tweet-box border-b px-4  pb-2 hidden md:block">
    <form method="POST" action="{{route('tweet.store')}}">
        @csrf
        <!--suppress HtmlFormInputWithoutLabel -->
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <img class="rounded-full mr-2" src="{{auth()->user()->avatar}}" alt="">
            </div>
            <textarea name="body" class="resize-none placeholder-gray-500 text-lg w-full outline-none pt-4  rounded-lg"
                      placeholder="What's happening?"></textarea>
        </div>
        @include('partials.tweet-box-decoration')
    </form>
</div>
