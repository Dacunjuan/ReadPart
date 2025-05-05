<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-6 h-auto">
        <x-post-form id="postForm" :action="route('posts.store')" />
    </div>
    <x-slot name="footer">
        <footer class="bg-secondary h-[80px]">
            <div class="h-full flex justify-end items-center mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <button type="submit" form="postForm"
                    class="text-white bg-button text-[28px] rounded-full text-sm text-center w-40 h-15 cursor-pointer text-text">Publish
                </button>
            </div>
        </footer>
    </x-slot>
</x-app-layout>
