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
                    @can('user')
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Tela do usuário</h1>
                    <br>
                    <a href="https://laravel.com/docs/9.x/starter-kits" class="underline">Laravel Breeze</a> é um starter kit fornecido pelo framework para autenticação incluindo login, cadastro, trocar senha, verificação do email e confirmação de senha. Neste mini projeto, login, cadastro e níveis de permissão(usando o <a class="underline" href="https://spatie.be/docs/laravel-permission/v5/introduction">Spatie</a>) foram implementados, assim como views diferentes para cada permissão.
                    @elsecan('admin')
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Tela do administrador</h1>
                    <br>
                    Por padrão todo novo usuário registrado possui permissão de usuário. O <a class="underline" href="https://spatie.be/docs/laravel-permission/v5/introduction">Spatie</a> permite a criação de novas permissões e papéis(roles), onde cada usuário pode acumular ou não vários níveis de acesso diferentes.  
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
