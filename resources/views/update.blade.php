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

                <form action="{{ route('update', $listdata->id) }}" method="POST" class="grid gap-3">
                    @csrf
                    <input type="text" name="title" value="{{ $listdata->title }}"
                        class="rounded-md w-full p-3 text-black" placeholder="TITLE" id="">
                    @error('title')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <textarea name="content" id="" cols="30" class="rounded-md w-full p-3 text-black" placeholder="CONTENT"
                        rows="10">{{ $listdata->content }}</textarea>
                    @error('content')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <button class="bg-blue-500 text-white rounded-md px-6 py-3">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
