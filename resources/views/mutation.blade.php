@extends('pages.main')

@section('container')
    <div class="bg-custblack flex flex-row text-white justify-between">
        <div class="flex flex-col gap-4 mt-4">
            <h1 class="font-semibold text-4xl">Mutation</h1>
            <div class="border-2 border-white rounded-md h-[450px] py-6 px-8 overflow-y-scroll scroll flex flex-col gap-4">
                @foreach ($mutation as $m)
                <div class="border-2 border-white rounded-md py-2 px-4 w-[300px]">
                    <div class="flex flex-row justify-between">
                        <h1 class="font-semibold">{{ $m -> status }}</h1>
                        <h1>- Rp. {{ number_format($m -> amount) }}</h1>
                    </div>
                    <h3>{{ $m -> name }} - {{ $m -> bank }}</h3>
                </div>
                @endforeach
            </div>
        </div>
        <img class="w-1/2" src="img/visa.svg" alt="missing img">
    </div>
@endsection
