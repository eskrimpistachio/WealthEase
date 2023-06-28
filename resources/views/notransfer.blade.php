@extends('pages.main')

@section('container')
    <div class="bg-custblack flex flex-row text-white justify-between">
        <div class="flex flex-col justify-evenly">
            <h1 class="text-7xl font-semibold">You didn't choose any account!</h1>
            <div>
                <a class="bg-custpink py-4 px-4 w-48 rounded-md font-semibold" href="/list">Back to Account List</a>
            </div>
        </div>
        <img class="w-1/2" src="/img/visa.svg" alt="missing img">
    </div>
@endsection
