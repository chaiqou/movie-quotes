<x-admin-layout>
    <section class="max-w-md  mx-auto py-8">
        <x-admin-languages />
        <div class="flex">
            <main
                class="w-72  justify-center items-center max-w-xl mx-auto mt-10 bg-gray-100  border border-gray-200 p-6 rounded-xl">
                <h1 class="text-blue-700 font-bold text-lg mb-8 border-b border-blue-700">{{ __('message.dashboard') }}
                </h1>
                <ul role="list" class="divide-y  divide-gray-300">
                    <li class="py-4 flex">
                        <img class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1598899134739-24c46f58b8c0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2056&q=80"
                            alt="">
                        <div class="ml-3">
                            <a class="text-lg text-gray-700 text-center" href="movies">{{ __('message.all_movie') }}</a>

                        </div>
                    </li>

                    <li class="py-4 flex">
                        <img class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1598899134739-24c46f58b8c0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2056&q=80"
                            alt="">
                        <div class="ml-3">
                            <a class="text-lg text-gray-700 text-center"
                                href="movies/create">{{ __('message.add_movie') }}</a>

                        </div>
                    </li>

                    <li class="py-4 flex">
                        <img class="h-10 w-10 rounded-full"
                            src="https://images.pexels.com/photos/2681319/pexels-photo-2681319.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                        <div class="ml-3">
                            <a class="text-lg text-gray-700 text-center"
                                href="quotes">{{ __('message.all_quote') }}</a>

                        </div>
                    </li>

                    <li class="py-4 flex">
                        <img class="h-10 w-10 rounded-full"
                            src="https://images.pexels.com/photos/2681319/pexels-photo-2681319.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                        <div class="ml-3">
                            <a class="text-lg text-gray-700 text-center"
                                href="quotes/create">{{ __('message.add_quote') }}</a>

                        </div>
                    </li>


                </ul>

            </main>

        </div>
        <form class="flex justify-center" method="POST" action="/logout">
            @csrf
            <x-submit-button>{{ __('message.logout') }}</x-submit-button>
        </form>
    </section>
</x-admin-layout>
