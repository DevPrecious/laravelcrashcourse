<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <div class="grid place-items-center h-screen">
        <div class="w-1/3 rounded-md bg-gray-900 text-white p-8">
            <Span class="text-2xl">
                Create List
            </Span>
            <div class="pt-3 grid gap-3">
                @if (session()->has('success'))
                    <span class="text-green-500">{{ session()->get('success') }}</span>
                @endif
                <form action="{{ route('insert') }}" method="POST" class="grid gap-3">
                    @csrf
                    <input type="text" name="title" class="rounded-md w-full p-3 text-black" placeholder="TITLE"
                        id="">
                    @error('title')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <textarea name="content" id="" cols="30" class="rounded-md w-full p-3 text-black" placeholder="CONTENT"
                        rows="10"></textarea>
                    @error('content')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <button class="bg-blue-500 text-white rounded-md px-6 py-3">Post</button>
                </form>
            </div>
        </div>
        <div class="pt-6"></div>
        <div class="w-1/3 rounded-md bg-gray-900 text-white p-8">
            <Span class="text-2xl">
                MY LIST
            </Span>
            <div class="pt-3 grid gap-3">
                @foreach ($lists as $list)
                    <div class="bg-gray-600 grid w-full rounded p-6">
                        <div class="flex justify-between">
                            <div class="grid">
                                <a href="{{ route('single', $list->id) }}" class="text-lg">{{ $list->title }}</a>
                                <span class="text-sm">{{ $list->content }}</span>
                            </div>
                            <div class="flex space-x-4 items-center">
                                <a href="{{ route('update', $list->id) }}"
                                    class="bg-green-500 text-white rounded-md px-6 py-3">Update</a>
                                <a href="{{ route('delete', $list->id) }}"
                                    class="bg-red-500 text-white rounded-md px-6 py-3">Delete</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
