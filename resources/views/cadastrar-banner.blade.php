<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Banner') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h1>Cadastrar Banner</h1>
                </div>
                <hr>
                <form method="POST" action="{{ route('store-banner') }}">
                    @csrf
                    <!-- Name -->
                    <div>
                        <label for="titulo">Título</label>

                        <x-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')"  autofocus />
                    </div>

                    <div>
                        <label for="imagem">Imagem</label>

                        <x-input id="image" class="block mt-1 w-full" type="text" name="image" :value="old('image')"  autofocus />
                    </div>


                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Cadastrar') }}
                        </x-button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>
