@props(['id' => 'postForm', 'action' => "route('posts.store')", 'isEdit' => false, 'title' => '', 'content' => ''])
<script src="https://cdn.tiny.cloud/1/your-api-key/tinymce/6/tinymce.min.js"></script>

<form id="{{ $id }}" method="POST" action="{{ $action }}" class="flex flex-col w-full h-screen">
    @csrf
    @if ($isEdit)
        @method('PUT')
    @endif
    <input id="title" name="title" class="h-1/5 w-full outline-none focus:ring-0 text-logo text-[42px]"
        value="{{ old('', $title) }}" placeholder="Write title here."></input>
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
    <textarea id="content" name="content" class="h-4/5 w-full outline-none focus:ring-0 text-text text-[20px]"
        placeholder="Write something...">{{ old('', $content) }}</textarea>
    <x-input-error :messages="$errors->get('content')" class="mt-2" />
</form>
