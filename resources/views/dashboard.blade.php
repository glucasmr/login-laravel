<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bem vindo, {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <!-- diretiva @//can faz somente quem for user ver isto na view -->    
                @can('user') 
                        Conteúdo visível somente para usuários. 
                    @elsecan('admin')
                        Conteúdo visível somente para admin. 
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
