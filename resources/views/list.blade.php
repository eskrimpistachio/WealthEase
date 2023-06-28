@extends('pages.main')

@section('container')
    <div class="bg-custblack flex flex-row text-white justify-between">
        <div class="flex flex-col gap-4 mt-4">
            <h1 class="font-semibold text-4xl">Account List</h1>
            <div class="border-2 border-white rounded-md h-[450px] py-6 px-8 overflow-y-scroll scroll flex flex-col gap-4">
                    @foreach ($accounts as $a)
                        <a href="/list/{{ $a->acc_num }}" class="border-2 border-white rounded-md py-2 pl-4 pr-16">
                            <h1 class="font-semibold">{{ $a -> name }}</h1>
                            <h3>{{ $a -> bank }} - {{ $a -> acc_num }}</h3>
                        </a>
                        {{-- @dd($a); --}}
                    @endforeach
            </div>
        </div>
        <img class="w-1/2" src="img/visa.svg" alt="missing img">
    </div>
@endsection
