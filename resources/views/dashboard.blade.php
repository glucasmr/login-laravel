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
            <a href="https://laravel.com/docs/9.x/starter-kits" class="underline">Laravel Breeze</a> é um starter kit fornecido pelo framework para autenticação incluindo login, cadastro, trocar senha, verificação do email e confirmação de senha. Neste mini projeto, login, cadastro e níveis de permissão(usando o <a class="underline" href="https://spatie.be/docs/laravel-permission/v5/introduction">Spatie</a>) foram implementados, assim como views diferentes para cada permissão.
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
