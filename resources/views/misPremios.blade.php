<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis premios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($misPremios as $prm)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $prm->fecha }}</div>
                        <p class="text-gray-500 text-base">{{ $prm->comic }}</p>
                        <p class="text-gray-700 text-base">{{ $prm->autor }}</p>
                        </div>
                        <x-button class="ml-4" onclick="window.location.href='{{url('/borrar/'.$prm->id) }}'">{{__('Borrar')}}</x-button>
                        <x-button class="ml-4" onclick="window.location.href='{{url('/modificar/'.$prm->id)}}'">{{__('Modificar')}}</x-button>     
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>