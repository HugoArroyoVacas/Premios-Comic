<x-app-layout>
        @isset($premio)
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Modificar un premio') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="{{ url('modificar') }}" method="post">
                            @csrf
                            <x-label for="comic">Título del comic:</x-label>
                            <x-input type="text" name="comic" id="comic" value="{{$premio->comic}}"></x-input>
                            <br>
                            <br>
                            <x-label for="fecha">Año del premio:</x-label>
                            <x-input type="text" name="fecha" id="fecha" value="{{$premio->fecha}}"></x-input>
                            <br>
                            <br>
                            <x-label for="autor">Año del premio:</x-label>
                            <x-input type="text" name="autor" id="autor" value="{{$premio->autor}}"></x-input>
                            <br>
                            <br>
                            <x-button class="ml-4">
                                {{ __('Modificar Premio') }}
                            </x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Crear un premio') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="{{ url('modificar') }}" method="post">
                            @csrf
                            <x-label for="comic">Título del comic:</x-label>
                            <x-input type="text" name="comic" id="comic"></x-input>
                            <br>
                            <br>
                            <x-label for="fecha">Año del premio:</x-label>
                            <x-input type="text" name="fecha" id="fecha"></x-input>
                            <br>
                            <br>
                            <x-label for="autor">Año del premio:</x-label>
                            <x-input type="text" name="autor" id="autor"></x-input>
                            <br>
                            <br>
                            <x-button class="ml-4">
                                {{ __('Modificar Premio') }}
                            </x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endisset
</x-app-layout>