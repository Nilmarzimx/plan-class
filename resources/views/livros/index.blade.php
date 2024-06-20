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
                    <a href="{{ route('livros.create') }}" type="submit" class="btn-white">Criar</a>
                </div> 

                <table class="table=auto w-full">
                    <thead>
                        <tr>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">ID</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Autor</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Título</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Subtítulo</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Edição</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Editora</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Ano de Publicação</th>
                            <th class="px-3 py-2 text-gray-900 dark:text-white text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($livros as $livro)
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->id }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->autor }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->titulo }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->subtitulo }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->edicao }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->editora }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->ano_de_publicacao }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark: text-white text-center">{{ $livro->acao }}</td>
                            </tr>
                        @endforeach
                            
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
