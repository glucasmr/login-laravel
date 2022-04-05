<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Opções de gerenciamento
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- diretiva @//can faz somente quem for user ver isto na view -->    
                    <?php 
                        $user = Auth::user();
                        if($user->hasPermissionTo('user')){
                            $permissaoAtual='user';
                        }else{
                            $permissaoAtual='admin';
                        }
                    ?>
                    Altere a permissão da sua conta: 
                    <div>
                        <form id="formPermissao">
                        @csrf
                            <div class="form-check">
                                <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" value="user" name="novaPermissao" id="flexRadioDefault1" <?php echo ($permissaoAtual == "user") ? "checked" : null; ?>/>
                                <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault1">
                                    Usuário
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" value="admin" name="novaPermissao" id="flexRadioDefault2" <?php echo ($permissaoAtual == "admin") ? "checked" : null; ?>/>
                                <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault2">
                                    Admin
                                </label>
                            </div>
                            <br>
                            <input type="submit" value="Alterar" class="px-4 py-1 text-sm font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2"/>
                        </form>
                    </div>

                    <div id="resposta"></div>
               
                    <script>  
                        
                        var urlPermissao= '{{url("auth/alternarPermissao.php")}}';
                            $('#formPermissao').submit(function(e){
                                e.preventDefault();   
                                    var u_novaPermissao = $('input[name="novaPermissao"]:checked').val();  
                                    // alert(u_novaPermissao);
                                    $.ajax({
                                    url:urlPermissao,
                                    method: 'POST',
                                    data:{novaPermissao: u_novaPermissao},
                                    sucess:function(data){
                                            $('#resposta').html(data);   
                                            alert('Permissão atualizada para '+u_novaPermissao+'!');
                                    }
                                })  
                            });  
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
