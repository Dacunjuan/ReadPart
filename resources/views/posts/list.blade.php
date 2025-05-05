<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="flex min-h-screen">
        <div class="w-2/3 h-auto pe-20 border-r border-button">
            <p class="font-bold font-text text-[32px] mt-5">For you</p>
            <hr class="mb-10">
            <ul class="w-full h-auto divide-y divide-gray-200 dark:divide-gray-700">
                @if ($posts ?? [])
                    @foreach ($posts as $post)
                        <li class="h-auto border-b mb-1">
                            <div class="h-full flex">
                                <div class="min-h-full w-3/4 flex flex-col">
                                    <a href="{{ route('posts.show', $post->id) }}" class="h-1/2 pt-5">
                                        <span class=" font-text text-[24px] font-bold">{{ $post->title }}</span>
                                    </a>
                                    <div class="h-1/2 flex flex-row items-center">
                                        <div class="shrink-0">
                                            <img class="min-w-full min-h-full rounded-full" src="https://fakeimg.pl/50/"
                                                alt="Neil image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="ms-5 font-text text-[20px]">
                                                {{ $post->user->name }}
                                            </p>
                                        </div>
                                        <div class="ml-auto flex flex-row">
                                            <a href=""><svg class="w-12 h-12 text-gray-800 dark:text-white"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                                                </svg>
                                            </a>
                                            <a href="">
                                                <svg class="w-12 h-12 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-full w-1/4 p-1">
                                    <img class="min-w-full min-h-full" src="https://fakeimg.pl/100/" alt="">
                                </div>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="w-1/3 h-auto px-5">
            <p class="font-bold font-text text-[32px] mt-5">Topic(WIP)</p>
            <ul class="mt-5 w-full h-auto divide-y divide-gray-200 dark:divide-gray-700">
                @for ($i = 0; $i < 3; $i++)
                    <li class="h-30 mb-1">
                        <div class="h-full flex">
                            <a href="#" class="min-h-full w-3/4 flex flex-col">
                                <div class="h-1/2 flex flex-row items-center">
                                    <div class="shrink-0">
                                        <img class="min-w-full min-h-full rounded-full" src="https://fakeimg.pl/50/"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="ms-5 font-text text-[16px]">
                                            example_name
                                        </p>
                                    </div>
                                </div>
                                <span class="h-1/2 font-text text-[20px] font-bold">example_title</span>
                            </a>
                        </div>
                    </li>
                @endfor
            </ul>
            <hr>
            <p class="font-bold font-text text-[32px] mt-5">AD(WIP)</p>
            <img class="min-w-full h-auto p-5" src="https://fakeimg.pl/100/" alt="">
        </div>
    </div>
</x-app-layout>
