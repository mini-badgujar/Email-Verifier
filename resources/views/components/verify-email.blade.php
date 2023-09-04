<div class="flex justify-between items-center p-4 text-center">

    <div>
        <div class="text-xl underlin">Valid Email's</div>
        @foreach ($emails as $email)
            <div class=" text-green-500 p-4">
                {{ $email }}
            </div>
        @endforeach
    </div>
    <div>
        <div class="text-xl underline">Invalid Email's</div>
        @foreach ($emails as $email)
            <div class=" text-red-500 p-4">
                {{ $email }}
            </div>
        @endforeach
    </div>

</div>
