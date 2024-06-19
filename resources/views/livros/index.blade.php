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
                    <a href="{{ route('livros.create') }}">Criar</a>
                </div> 

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Autor</th>
                            <th>Título</th>
                            <th>Subtítulo</th>
                            <th>Edição</th>
                            <th>Editora</th>
                            <th>Ano de Publicação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($livros as $livro)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->autor }}</td>
                                <td>{{ $student->titulo }}</td>
                                <td>{{ $student->subtitulo }}</td>
                                <td>{{ $student->edicao }}</td>
                                <td>{{ $student->editora }}</td>
                                <td>{{ $student->ano_de_publicacao }}</td>
                                
                                
                                
                            </tr>
                        @endforeach
                            
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
