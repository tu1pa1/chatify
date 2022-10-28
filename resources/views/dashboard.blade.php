<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h1>Event and Listeners</h1>

                   <form action="{{ route('laravel.event_listeners') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn mt-2">fire</button>
                   </form>

                   @foreach ($users as $user)
                       <li>{{ $user->name }}</li>
                   @endforeach

                   <p>
                        {{ $orderCount }}
                   </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
