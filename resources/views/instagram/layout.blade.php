<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instagram</title>
    <link rel="stylesheet" href="{{mix('css/main.css')}}">
</head>
<body class="bg-gray-100 font-sans">

<div class="w-full bg-white border-b border-gray-400 sticky top-0">
    <div class="container mx-auto py-2 px-32">
        <nav class="flex justify-between items-center">
            <div class="logo">
                <a href="#">
                    <img alt="Instagram" src="{{asset('images/instalogo.png')}}">
                </a>
            </div>
            <div class="search">
                <div class="w-1/2">
                    <input type="text" autocomplete="off" placeholder="Search"
                           class="focus:outline-none font-light text-gray-700 bg-gray-200 border border-gray-400 rounded-sm px-3 text-sm py-1">
                </div>
            </div>
            <div class="links flex items-center">
                <a href="#" class="ml-4">
                    <svg aria-label="Inicio" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22">
                        <path d="M45.5 48H30.1c-.8 0-1.5-.7-1.5-1.5V34.2c0-2.6-2.1-4.6-4.6-4.6s-4.6 2.1-4.6 4.6v12.3c0 .8-.7 1.5-1.5 1.5H2.5c-.8 0-1.5-.7-1.5-1.5V23c0-.4.2-.8.4-1.1L22.9.4c.6-.6 1.6-.6 2.1 0l21.5 21.5c.3.3.4.7.4 1.1v23.5c.1.8-.6 1.5-1.4 1.5z"></path>
                    </svg>
                </a>
                <a href="#" class="ml-4">
                    <svg aria-label="Direct" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22">
                        <path d="M46.5 3.5h-45C.6 3.5.2 4.6.8 5.2l16 15.8 5.5 22.8c.2.9 1.4 1 1.8.3L47.4 5c.4-.7-.1-1.5-.9-1.5zm-40.1 3h33.5L19.1 18c-.4.2-.9.1-1.2-.2L6.4 6.5zm17.7 31.8l-4-16.6c-.1-.4.1-.9.5-1.1L41.5 9 24.1 38.3z"></path>
                        <path d="M14.7 48.4l2.9-.7"></path>
                    </svg>
                </a>
                <a href="#" class="ml-4">
                    <svg aria-label="Buscar personas" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22">
                        <path clip-rule="evenodd"
                              d="M24 .5C37 .5 47.5 11 47.5 24S37 47.5 24 47.5.5 37 .5 24 11 .5 24 .5zm0 44c11.3 0 20.5-9.2 20.5-20.5S35.3 3.5 24 3.5 3.5 12.7 3.5 24 12.7 44.5 24 44.5zm-4.4-23.7c.3-.5.7-.9 1.2-1.2l14.8-8.1c.3-.1.6-.1.8.1.2.2.3.5.1.8l-8.1 14.8c-.3.5-.7.9-1.2 1.2l-14.8 8.1c-.3.1-.6.1-.8-.1-.2-.2-.3-.5-.1-.8l8.1-14.8zm6.2 5l4.3-7.8-7.8 4.3 3.5 3.5z"
                              fill-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="ml-4">
                    <svg aria-label="Feed de actividades" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22">
                        <path clip-rule="evenodd"
                              d="M34.3 3.5C27.2 3.5 24 8.8 24 8.8s-3.2-5.3-10.3-5.3C6.4 3.5.5 9.9.5 17.8s6.1 12.4 12.2 17.8c9.2 8.2 9.8 8.9 11.3 8.9s2.1-.7 11.3-8.9c6.2-5.5 12.2-10 12.2-17.8 0-7.9-5.9-14.3-13.2-14.3zm-1 29.8c-5.4 4.8-8.3 7.5-9.3 8.1-1-.7-4.6-3.9-9.3-8.1-5.5-4.9-11.2-9-11.2-15.6 0-6.2 4.6-11.3 10.2-11.3 4.1 0 6.3 2 7.9 4.2 3.6 5.1 1.2 5.1 4.8 0 1.6-2.2 3.8-4.2 7.9-4.2 5.6 0 10.2 5.1 10.2 11.3 0 6.7-5.7 10.8-11.2 15.6z"
                              fill-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="ml-4">
                    <img src="{{random_avatar(24, 'james')}}" class="rounded-full" alt="">
                </a>
            </div>
        </nav>
    </div>
</div>

<div class="content">
    <main class="container mx-auto mt-6 px-32">

        <div class="flex">
            <section class="feed w-2/3">
                <article class="flex-col border border-gray-400 rounded-sm">
                    <header class="border flex justify-between px-3 py-2">
                        <div class="user-info flex">
                            <img src="{{random_avatar(50)}}" class="rounded-full" alt="user-avatar">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900 block">{{random_name()}}</div>
                                <div class="text-xs font-medium text-gray-700">{{random_location()}}</div>
                            </div>
                        </div>
                    </header>
                    <main>
                        <img src="https://source.unsplash.com/random">
                    </main>
                    <footer class="mt-2 px-4 py-2">
                        <div class="flex justify-between">
                            <div class="share flex">
                                <a href="#" class="">
                                    <svg aria-label="Me gusta" fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                                        <path clip-rule="evenodd"
                                              d="M34.3 3.5C27.2 3.5 24 8.8 24 8.8s-3.2-5.3-10.3-5.3C6.4 3.5.5 9.9.5 17.8s6.1 12.4 12.2 17.8c9.2 8.2 9.8 8.9 11.3 8.9s2.1-.7 11.3-8.9c6.2-5.5 12.2-10 12.2-17.8 0-7.9-5.9-14.3-13.2-14.3zm-1 29.8c-5.4 4.8-8.3 7.5-9.3 8.1-1-.7-4.6-3.9-9.3-8.1-5.5-4.9-11.2-9-11.2-15.6 0-6.2 4.6-11.3 10.2-11.3 4.1 0 6.3 2 7.9 4.2 3.6 5.1 1.2 5.1 4.8 0 1.6-2.2 3.8-4.2 7.9-4.2 5.6 0 10.2 5.1 10.2 11.3 0 6.7-5.7 10.8-11.2 15.6z"
                                              fill-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="#" class="ml-4">
                                    <svg aria-label="Comentar" fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                                        <path clip-rule="evenodd"
                                              d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                                              fill-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="#" class="ml-4">
                                    <svg aria-label="Compartir publicación" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                                        <path d="M46.5 3.5h-45C.6 3.5.2 4.6.8 5.2l16 15.8 5.5 22.8c.2.9 1.4 1 1.8.3L47.4 5c.4-.7-.1-1.5-.9-1.5zm-40.1 3h33.5L19.1 18c-.4.2-.9.1-1.2-.2L6.4 6.5zm17.7 31.8l-4-16.6c-.1-.4.1-.9.5-1.1L41.5 9 24.1 38.3z"></path>
                                        <path d="M14.7 48.4l2.9-.7"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="bookmark">
                                <svg aria-label="Guardar" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                                    <path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path>
                                </svg>

                            </div>
                        </div>
                        <div class="likes mb-4 mt-4 text-sm">
                            <span>Les gusta a <b>{{random_name()}}</b> y <b>otras personas</b>.</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="comment">
                                <span class="text-sm font-medium text-gray-900">{{random_name()}}</span>
                                <span class="text-sm text-gray-700">{{random_words(random_int(6, 15))}}</span>
                            </div>
                            <div class="like-it">
                                <button class="focus:outline-none">
                                    <svg aria-label="Me gusta" class="_8-yf5 " fill="#8e8e8e" height="12" viewBox="0 0 48 48" width="12">
                                        <path clip-rule="evenodd"
                                              d="M34.3 3.5C27.2 3.5 24 8.8 24 8.8s-3.2-5.3-10.3-5.3C6.4 3.5.5 9.9.5 17.8s6.1 12.4 12.2 17.8c9.2 8.2 9.8 8.9 11.3 8.9s2.1-.7 11.3-8.9c6.2-5.5 12.2-10 12.2-17.8 0-7.9-5.9-14.3-13.2-14.3zm-1 29.8c-5.4 4.8-8.3 7.5-9.3 8.1-1-.7-4.6-3.9-9.3-8.1-5.5-4.9-11.2-9-11.2-15.6 0-6.2 4.6-11.3 10.2-11.3 4.1 0 6.3 2 7.9 4.2 3.6 5.1 1.2 5.1 4.8 0 1.6-2.2 3.8-4.2 7.9-4.2 5.6 0 10.2 5.1 10.2 11.3 0 6.7-5.7 10.8-11.2 15.6z"
                                              fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </footer>
                </article>
            </section>
            <section class="information w-1/3">
                Information
            </section>

        </div>

    </main>
</div>


</body>
</html>