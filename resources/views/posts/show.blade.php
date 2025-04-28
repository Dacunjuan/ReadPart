<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="font-bold text-logo text-[42px] mb-5 ">{{ $post->title }}</h1>
            <div class="w-full flex items-center">
                <img class="h-10 w-10 rounded-full" src="https://fakeimg.pl/50/" alt="Neil image">
                <p class="ms-5 font-text text-[20px]">
                    {{ $post->user->name }}
                </p>
            </div>
            <hr class="my-5">

            <p class="text-text text-[20px] break-all">
                {!! nl2br(e($post->content)) !!}
            </p>

        </div>
    </div>
</x-app-layout>
