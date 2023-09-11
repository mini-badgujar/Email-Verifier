<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body
    class="from-10% via-30% to-90% mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-100 via-sky-100 to-emerald-100 text-slate-700">

    <div class="text-2xl font-medium text-center">Email Varification</div>

    <div class="border rounded-md border-slate-300 bg-white p-4 shadow-sm">

        @if (session('success'))
            <div role="alert"
                class="my-8 rounded-md border-l-4 border-green-300 bg-green-100 p-4 text-green-700 opacity-75">
                <p class="font-bold">Success</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="flex justify-between items-center p-4 text-center">
            <div>
                <div class="text-xl underline mb-4">Valid Emails</div>
                @foreach ($emails as $email)
                    <div class=" text-green-500">
                        {{ $email }}
                    </div>
                @endforeach
            </div>
            <div>
                <div class="text-xl underline mb-4">Invalid Emails</div>
                @foreach ($emails as $email)
                    <div class=" text-red-500">
                        {{ $email }}
                    </div>
                @endforeach
            </div>

        </div>

</body>

</html>
