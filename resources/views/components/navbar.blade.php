<nav class="bg-custblack font-medium ">
    <div class="mx-16 flex flex-row justify-between py-4">
        <div>
            <img class="h-3/4" src="/img/logo.png" alt="missing img">
        </div>
        <div class="text-white mt-2">
            <ul class="flex flex-row justify-evenly gap-8">
                <li><a class="{{ $active === 'home' ? 'text-custpink' : 'text-white' }}" href="/">Why Us</a>
                </li>
                <li><a class="{{ $active === 'add' ? 'text-custpink' : 'text-white' }}" href="/add">Add Account</a>
                </li>
                <li><a class="{{ $active === 'list' ? 'text-custpink' : 'text-white' }}" href="/list">Account List</a>
                </li>
                <li><a class="{{ $active === 'transfer' ? 'text-custpink' : 'text-white' }}" href="/transfer">Transfer</a>
                </li>
                <li><a class="{{ $active === 'mutation' ? 'text-custpink' : 'text-white' }}" href="/mutation">Mutation</a>
                </li>
                <li><a class="{{ $active === 'balance' ? 'text-custpink' : 'text-white' }}" href="/balance">My Balance</a>
                </li>
            </ul>
        </div>
        <a href="/add" class="bg-custpink flex flex-row pt-3 px-4 justify-evenly gap-2 rounded-md">
            <h1 class="text-white">Get Started</h1>
            <img class="h-1/2" src="/img/arrow.png" alt="missing img">
        </a>
    </div>
</nav>
