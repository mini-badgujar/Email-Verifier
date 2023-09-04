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


        <form action="{{ route('VerifyEmail.store') }}" method="POST">

            @csrf
            <div class="grid col-span-1 p-4 md-4">
                <label for="emails" class="text-slate-500 pd-2 mx-0.5">Enter Email Id's</label>
                <textarea class="resize-none h-96 border rounded p-4 bg-slate-100 mb-4" name="emails">{{ old('emails') }}</textarea>

                @if($errors->any())
                    <div class="text-sm text-red-500 ">{{ implode('', $errors->all(':message')) }}</div>
                @endif

                <button
                    class="text-sm rounded-md border border-slate-300 bg-green-100 px-2.5 py-2.5 text-center text-slate-700 hover:bg-slate-100">Verify</button>
            </div>
        </form>


        <br>

    </div>
    </div>
</body>

</html>
