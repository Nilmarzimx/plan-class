<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista De Livros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <a class="btn btn-outline-light" href="{{ route('livros.create') }}" role="button" >Criar</a>
                </div> 

                <table class="table=auto w-full">
                    <thead>
                        <tr>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Id</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Autor</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Titulo</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Subtitulo</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Edicao</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Editora</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Ano de Publicação</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($livros as $livro)
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->id }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->Autor }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->Titulo }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->Subtitulo }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->Edicao }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->Editora }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->Ano_De_Publicacao }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->Acao }}</td>
                            </tr>
                        @endforeach
                            
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
