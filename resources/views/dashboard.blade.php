<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Premios a lo largo de los años') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($listaPremios as $prm)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        @if($prm->portada == "")
                            <img width="200" height="300" src="/imagenes/sin_imagen.png">
                        @else
                            <img width="200" height="300" src="/imagenes/{{$prm->portada}}">
                        @endif
                        <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $prm->fecha }}</div>
                        <p class="text-gray-500 text-base">{{ $prm->comic }}</p>
                        <p class="text-gray-700 text-base">{{ $prm->autor }}</p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$prm->User->name}}</span>
                          </div>
                        </div>                    
                    </div>
            @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
