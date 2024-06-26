<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Adicionar Livro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <center>   
                <form method="POST" action="{{ route('livros.store') }}" class="max-w-sm mx-auto for">
                    @csrf
                    <div class="mb-5">
                        <label for="autor" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Autor</label>
                        <input type="text" id="autor" class="bg-gray-50 border border-gray-300 text-gray-900" name="Autor">
                    </div>

                    <div class="mb-5">  
                        <label for="titulo" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                        <input type="text"id="titulo" class="bg-gray-50 border border-gray-300 text-gray-900" name="Titulo">
                    </div>

                    <div class="mb-5"> 
                        <label for="subtitulo" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Subtitulo</label>
                        <input type="text" id="subtitulo" class="bg-gray-50 border border-gray-800 text-gray-900" name="Subtitulo">
                    </div>  

                    <div class="mb-5">
                        <label for="edicao" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Edicao</label>
                        <input type="text" id="edicao" class="bg-gray-50 border border-gray-300 text-gray-900" name="Edicao">
                    </div>

                    <div class="mb-5">     
                        <label for="editora" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Editora</label>
                        <input type="text" id="editora" class="bg-gray-50 border border-gray-300 text-gray-900" name="Editora">
                    </div>

                    <div class="mb-5">
                        <label for="ano_de_publiccacao" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Ano de publicidade</label>
                        <input type="text"id="ano_de_publicacao" class="bg-gray-50 border border-gray-300 text-gray-900" name="Ano_De_Publicacao">
                    </div>     
                    <button type="submit" class="text-white bg-white-600 hover:bg-slte-1000-1000 focus:ring-4 focus-out">Salvar</button>
                    <a href="{{ route('livros.index')}}" class="text-white bg-slate-700 hover:bg-slate-1000 focus:out">Cancelar</a>
                </form>
            </center>  
            </div>
        </div>
    </div>
</x-app-layout>