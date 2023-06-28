@extends('pages.main')

@section('container')
    <div class="bg-custblack flex flex-row text-white justify-between">
        <div class="flex flex-col gap-4 mt-16">
            <h1 class="font-semibold text-4xl">Add Account</h1>
            <div>
                <form method="POST" action="/add-account" class="flex flex-col gap-8 my-4">
                    @csrf
                    <div class="flex flex-col">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name"
                            class="bg-custblack rounded-lg border-white border-2 w-96 py-2 px-6">
                    </div>
                    <div class="flex flex-col">
                        <label for="acc_num">Account Number</label>
                        <input type="text" id="acc_num" name="acc_num"
                            class="bg-custblack rounded-lg border-white border-2 w-96 py-2 px-6">
                    </div>
                    <div class="flex flex-col">
                        <label for="bank">Bank</label>
                        <input type="text" id="bank" name="bank"
                            class="bg-custblack rounded-lg border-white border-2 w-96 py-2 px-6">
                    </div>
                    <div>
                        <button class="bg-custpink py-4 px-4 w-48 rounded-md font-semibold" type="submit" value="Submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <img class="w-1/2" src="/img/visa.svg" alt="missing img">
    </div>
@endsection
