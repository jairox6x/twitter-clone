<div class="tweet-box border rounded-lg border-blue-400 px-8 py-6 mb-8">
    <form method="POST" action="{{route('tweet.store')}}">
        @csrf
        <!--suppress HtmlFormInputWithoutLabel -->
        <div class="flex">
            <div class="mr-2 flex-shrink-0">
                <img class="rounded-full mr-2" src="{{auth()->user()->avatar}}" alt="">
            </div>
            <textarea name="body" class="w-full outline-none focus:bg-gray-200 rounded-lg p-4" placeholder="What's up Dog?"></textarea>
        </div>
        <hr class="my-4">
        @include('partials.tweet-box-decoration')
    </form>
</div>
