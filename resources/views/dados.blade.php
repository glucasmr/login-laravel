<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dados da conta
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
                <!-- diretiva @//can faz somente quem for user ver isto na view -->    
                @can('user') 
                Nome: {{ Auth::user()->name }} 
                <br>
                Email: {{ Auth::user()->email }}    
                <br>
                Permissão: Usuário
                
                @elsecan('admin')
                Nome do usuário: {{ Auth::user()->name }} 
                <br>
                Email do usuário: {{ Auth::user()->email }}
                <br>
                Permissão: Admin
                @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
