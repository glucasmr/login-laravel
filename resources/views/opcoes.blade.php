<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Opções de gerenciamento
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <!-- diretiva @//can faz somente quem for user ver isto na view -->    
                <?php 
                    $user = Auth::user();
                    if($user->hasPermissionTo('user')){
                        $permissaoAtual='user';"
                    }else{
                        $permissaoAtual='admin';
                    }
                ?>
                Altere a permissão da sua conta: 
                <div>
                    <form>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value<?php echo ($permissaoAtual == "user") ? "checked" : null; ?>>
                            <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault1">
                                Usuário
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault2" <?php echo ($permissaoAtual == "admin") ? "checked" : null; ?> >
                            <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault2">
                                Admin
                            </label>
                            <input type="submit" name="submit" value="Salvar"/>
                        </div>
                    </form>
                </div>
                "
                

                {{-- isset($_POST['flexRadioDefault']);

                @can('user') 
                $user->revokePermissionTo('user');
                $user->givePermissionTo('admin');
               
                    
                @elsecan('admin')
                $user->revokePermissionTo('admin');
                $user->givePermissionTo('user');
                
                @endcan --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
