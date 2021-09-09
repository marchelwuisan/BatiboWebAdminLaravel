<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12 h-64">
        <h2 class="font-bold">Transactions</h2>
        <div>
            <div class="grid grid-cols-4 gap-4">
                @foreach ($transactions as $item)
                <div class="bg-white w-1/4">
                    <div>
                        {{ $item->id }}
                    </div>
                </div>
                @endforeach
            </div>
            <a class="text-right bg-white object-right" href="/dashboard/transactions">See More ></a>
        </div>
        <br/>
        <h2 class="font-bold">Products</h2>
        <div>
            <div class="grid grid-cols-4 gap-4">
                @foreach ($products as $item)
                <div class="bg-white w-1/4">
                    <h3 class="font-semibold">
                        {{ $item->name }}
                    </h3>
                </div>
                @endforeach
            </div>
            <a class="text-right" href="/dashboard/products">See More ></a>
        </div>
        <br/>
        <h2 class="font-bold">Users</h2>
        <div>
            <div class="grid grid-cols-4 gap-4">
                @foreach ($users as $item)
                <div class="bg-white w-1/4">
                    <h3 class="font-semibold">
                        {{ $item->name }}
                    </h3>
                    <p>
                        {{ $item->email }}
                    </p>
                    <p>
                        {{ $item->roles }}
                    </p>
                </div>
                @endforeach
            </div>
            <a class="text-right" href="/dashboard/users">See More ></a>
        </div>
    </div>

</x-app-layout>
