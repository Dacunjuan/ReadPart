<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('首頁') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-primary-link href="posts/list">
                瀏覽文章
            </x-primary-link>
        </div>
    </div>
</x-app-layout>
