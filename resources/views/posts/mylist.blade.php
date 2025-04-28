<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="flex min-h-screen">
        <div class="h-auto w-2/3 pe-20 border-r border-button">
            <p class="font-bold font-text text-[32px] mt-5">My Post</p>
            <hr class="mb-10">
            <ul class="w-full h-auto divide-y divide-gray-200 dark:divide-gray-700">
                @if ($posts ?? [])
                    @foreach ($posts as $post)
                        <li class="h-auto border-b mb-1">
                            <div class="h-full flex">
                                <div class="min-h-full w-3/4 flex flex-col">
                                    <a href="{{ $post->id }}" class="w-full h-1/2 pt-5">
                                        <span class="font-text text-[24px] font-bold ">{{ $post->title }}</span>
                                    </a>
                                    <div class="w-full h-1/2 flex flex-row items-center">
                                        <div class="">
                                            <img class="min-w-full min-h-full rounded-full" src="https://fakeimg.pl/50/"
                                                alt="Neil image">
                                        </div>
                                        <div class="">
                                            <p class="ms-5 font-text text-[20px]">
                                                {{ $post->user->name }}
                                            </p>
                                        </div>
                                        <div class="ml-auto flex flex-row">
                                            <a href="edit/{{ $post->id }}">
                                                <svg class="w-12 h-12 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                                </svg>
                                            </a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                                class="ml-auto">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('確定要刪除這篇文章嗎？');">
                                                    <svg class="w-12 h-12 text-gray-800 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                                    </svg>
                                                </button>
                                            </form>
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
        </div>
    </div>
</x-app-layout>
