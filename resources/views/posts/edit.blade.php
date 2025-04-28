<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-6 h-auto">
        @if (isset($post))
            <form id="posts.edit" method="POST" action="{{ route('posts.update', $post->id) }}"
                class="flex flex-col w-full h-screen">
                @csrf
                <input id="title" name="title" class="h-1/5 w-full outline-none focus:ring-0 text-logo text-[42px]"
                    value="{{ old('', $post->title) }}" placeholder="Write title here."></input>
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                <textarea id="content" name="content" class="h-4/5 w-full outline-none focus:ring-0 text-text text-[20px]"
                    placeholder="Write something...">{{ old('', $post->content) }}</textarea>
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </form>
        @else
            <form id="posts.edit" method="POST" action="{{ route('posts.edit') }}"
                class="flex flex-col w-full h-screen">
                @csrf
                <input id="title" name="title"
                    class="h-1/5 w-full outline-none focus:ring-0 text-logo text-[42px]" value="{{ old('title') }}"
                    placeholder="Write title here."></input>
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                <textarea id="content" name="content" class="h-4/5 w-full outline-none focus:ring-0 text-text text-[20px]"
                    placeholder="Write something...">{{ old('content') }}</textarea>
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </form>
        @endif

    </div>
    <x-slot name="footer">
        <footer class="bg-secondary h-[80px]">
            <div class="h-full flex justify-end items-center mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <button type="submit" form="posts.edit"
                    class="text-white bg-button text-[28px] rounded-full text-sm text-center w-40 h-15 cursor-pointer text-text">Publish
                </button>
            </div>
        </footer>
    </x-slot>
</x-app-layout>
