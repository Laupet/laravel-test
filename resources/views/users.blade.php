<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3">

                @foreach ($users as $user)

                    <div class="bg-white overflow-hidden shadow sm:rounded-lg m-2 hover:shadow-lg cursor-pointer">
                        <div class="p-6 border-b border-gray-200">

                            <p class="font-bold text-center">{{ $user->name }}</p>
                            <p class="text-center">{{ $user->email }}</p>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
