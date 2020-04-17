<h3 class="font-bold mb-4 text-xl">Friends</h3>
<ul class="bg-gray-100 px-6 rounded-lg py-4">
    @foreach(range(1, 8) as $user)
        <li class="mb-4 text-sm">
            <div class="flex items-center">
                <img class="rounded-full mr-2" src="https://i.pravatar.cc/40?u={{random_string()}}" alt="">
                <span>{{random_name()}}</span>
            </div>
        </li>
    @endforeach
</ul>