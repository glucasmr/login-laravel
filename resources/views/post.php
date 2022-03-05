<?php
if(isset($_POST['novaPermissao'])) {
    echo aawawwawaw;
    $user = Auth::user();
    $novaPermissao = $_POST['novaPermissao'];
    if($novaPermissao == 'user'){
        $user->revokePermissionTo('admin');
        $user->givePermissionTo('user');
    }else{
        $user->revokePermissionTo('user');
        $user->givePermissionTo('admin');
    }
   
}
?>