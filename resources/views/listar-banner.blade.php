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
                   <h1>Listar Banner</h1>
                </div>
                <hr>
                @if(Session::has('message'))

                <div class="alert alert-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <h5 style="color: #343a40;"><strong>Parabéns!</strong> {!! Session::get('message') !!}</h5> </div>
                @endif
                <hr>
                {{--  Dados do Banner aqui  --}}
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cadastrado Por:</th>
                        <th scope="col">Nome do Banner</th>
                        <th scope="col">Imagem</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($banners as $banner)
                        <tr>
                            <th scope="row"> {{ $banner->id }} </th>
                            <td> {{ $banner->user }} </td>
                            <td> {{ $banner->nome }}  </td>
                            <td> {{ $banner->imagem }}  </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</x-app-layout>
