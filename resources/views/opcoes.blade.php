<x-app-layout>
    <x-slot name="header">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>  
    $(document).ready(function(){  
        $('input[type="radio"]').click(function(){  
            var novaPermissao = $(this).val();  
            $.ajax({  
                    url:"post.php",  
                    method:"POST",  
                    data:{novaPermissao:novaPermissao},  
                    success:function(data){  
                         alert('Você atualizou sua permissão!');  
                    }  
            });  
        });  
    });  
    </script>  


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
                        $permissaoAtual='user';
                    }else{
                        $permissaoAtual='admin';
                    }
                ?>
                Altere a permissão da sua conta: 
                <div>
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
                </div>
                

                
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
