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
                <span class="text-xl">{{ $listdata->title }}</span>
            </Span>
            <div class="pt-3 grid gap-3">
                <div class="bg-gray-600 grid w-full rounded p-6">
                    <div class="flex justify-between">
                        <div class="grid">
                            <a href="{{ route('single', $listdata->id) }}" class="text-lg">{{ $listdata->title }}</a>
                            <span class="text-sm">{{ $listdata->content }}</span>
                        </div>
                        <div>
                            <a href="{{ route('delete', $listdata->id) }}"
                                class="bg-red-500 text-white rounded-md px-6 py-3">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
