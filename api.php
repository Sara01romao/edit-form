<?php

include './conexao.php';

// Sua página PHP (sua_pagina.php)



/* if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // Obtém a string JSON e a decodifica para um array associativo
     $campo_obj = json_decode($_POST['campo_obj'], true);
    
     $nome= $campo_obj['nome'];
     $tipo= $campo_obj['tipo'];
     $ajuda= $campo_obj['ajuda'];
     $opcoes= $campo_obj['opcoes'];

     
     if(isset($campo_obj['tipo']) == "tres"){
        
         $sqlCampo = "INSERT INTO `campo` (`nome_campo`, `tipo_campo`, `ajuda_campo`) VALUES ('$nome', '$tipo', '$ajuda')";
         $inserir_campo = mysqli_query($conexao, $sqlCampo);


         if ($inserir_campo) {
             $campo_id = mysqli_insert_id($conexao); // Obtém o ID gerado para o campo 
           

             // Agora, insira as opções do campo <select> na tabela "opcao" com o campo_id associado
            foreach ($opcoes as $opcao) {
                 if (!empty($opcao)) {
                    $sqlOpcao = "INSERT INTO `opcao` (`nome_opcao`, `id_campo_opcao`) VALUES ('$opcao', '$campo_id')";
                    $inserir_opcao = mysqli_query($conexao, $sqlOpcao);
                
                 }

                
             }

             $retorno = ['codigo' => $campo_id];
             echo json_encode($retorno);
         } 
    
     }else{
         $sqlCampo = "INSERT INTO `campo` (`nome_campo`, `tipo_campo`, `ajuda_campo`) VALUES ('$nome', '$tipo', '$ajuda')";
         $inserir_campo = mysqli_query($conexao, $sqlCampo);   

        $campo_id = mysqli_insert_id($conexao);

        $retorno = ['codigo' => $campo_id];
         echo json_encode($retorno);
     }

    exit();

}*/






if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $action = isset($_POST['action']) ? $_POST['action'] : '';
    
    
    
    
   
    if($action == 'create'){
        $campo_obj = json_decode($_POST['campo_obj'], true);

        $nome= $campo_obj['nome'];
        $tipo= $campo_obj['tipo'];
        $ajuda= $campo_obj['ajuda'];
        $opcoes= $campo_obj['opcoes'];

        if(isset($campo_obj['tipo']) == "tres"){
        
            $sqlCampo = "INSERT INTO `campo` (`nome_campo`, `tipo_campo`, `ajuda_campo`) VALUES ('$nome', '$tipo', '$ajuda')";
            $inserir_campo = mysqli_query($conexao, $sqlCampo);


            if ($inserir_campo) {
                $campo_id = mysqli_insert_id($conexao); // Obtém o ID gerado para o campo 
                

                // Agora, insira as opções do campo <select> na tabela "opcao" com o campo_id associado
                foreach ($opcoes as $opcao) {
                    if (!empty($opcao)) {
                        $sqlOpcao = "INSERT INTO `opcao` (`nome_opcao`, `id_campo_opcao`) VALUES ('$opcao', '$campo_id')";
                        $inserir_opcao = mysqli_query($conexao, $sqlOpcao);
                    
                    }

                    
                }

                $retorno = ['codigo' => $campo_id];
                echo json_encode($retorno);
            } 
        
        }else{
            $sqlCampo = "INSERT INTO `campo` (`nome_campo`, `tipo_campo`, `ajuda_campo`) VALUES ('$nome', '$tipo', '$ajuda')";
            $inserir_campo = mysqli_query($conexao, $sqlCampo);   
    
            $campo_id = mysqli_insert_id($conexao);
    
            $retorno = ['codigo' => $campo_id];
            echo  json_encode($retorno);
        }
    
        exit();





    }elseif($action == 'edit'){
        $campo_obj = json_decode($_POST['campo_obj'], true);

        $nome= $campo_obj['nome'];
        $tipo= $campo_obj['tipo'];
        $ajuda= $campo_obj['ajuda'];
        // $opcoes= $campo_obj['opcoes'];
        $id = $campo_obj['id_campo'];
        echo $tipo;


        
            
            

            if($tipo == "um" || $tipo ="dois"){
                
                
                $sqlCheckOpcoes = "SELECT COUNT(*) FROM `opcao` WHERE `id_campo_opcao` = $id";
                $resultCheckOpcoes = mysqli_query($conexao, $sqlCheckOpcoes);

                if ($resultCheckOpcoes) {
                    $row = mysqli_fetch_array($resultCheckOpcoes);
                    $optionCount = $row[0];

                 

                    mysqli_free_result($resultCheckOpcoes); 

                    if ($optionCount > 0) {
                        $sqlDeleteOpcoes = "DELETE FROM `opcao` WHERE `id_campo_opcao` = $id";
                        $delete_opcoes = mysqli_query($conexao, $sqlDeleteOpcoes);

                        $sqlEditCampo = "UPDATE `campo` SET `nome_campo`= '$nome', `tipo_campo`= '$tipo', `ajuda_campo`= '$ajuda' WHERE id_campo = $id ";
                        $edit_campo = mysqli_query($conexao, $sqlEditCampo);

                    } else {
                        $sqlEditCampo = "UPDATE `campo` SET `nome_campo`= '$nome', `tipo_campo`= '$tipo', `ajuda_campo`= '$ajuda' WHERE id_campo = $id ";
                        $edit_campo = mysqli_query($conexao, $sqlEditCampo);
                    }
                } else {
                    // Handle the error for checking options
                    echo "Error checking options: " . mysqli_error($conexao);
                }
            }else{
                        $sqlEditCampo = "UPDATE `campo` SET `nome_campo`= '$nome', `tipo_campo`= '$tipo', `ajuda_campo`= '$ajuda' WHERE id_campo = $id ";
                        $edit_campo = mysqli_query($conexao, $sqlEditCampo);
            }


          



       
    }elseif($action == 'apagarCampo'){
        $id = $_POST['idCampo'];


        $sqlCheckOpcoes = "SELECT COUNT(*) FROM `opcao` WHERE `id_campo_opcao` = $id";
        $resultCheckOpcoes = mysqli_query($conexao, $sqlCheckOpcoes);

        if ($resultCheckOpcoes) {
            $row = mysqli_fetch_array($resultCheckOpcoes);
            $optionCount = $row[0];

            mysqli_free_result($resultCheckOpcoes); // Corrected typo in variable name

            if ($optionCount > 0) {
                $sqlDeleteOpcoes = "DELETE FROM `opcao` WHERE `id_campo_opcao` = $id";
                $delete_opcoes = mysqli_query($conexao, $sqlDeleteOpcoes);

                $sqlDeletarCampo = "DELETE FROM `campo` WHERE `id_campo` = $id";
                $delete_campo = mysqli_query($conexao, $sqlDeletarCampo);
            } else {
                // If no related options exist, just delete the campo
                $sqlDeletarCampo = "DELETE FROM `campo` WHERE `id_campo` = $id";
                $delete_campo = mysqli_query($conexao, $sqlDeletarCampo);
            }
        } else {
            // Handle the error for checking options
            echo "Error checking options: " . mysqli_error($conexao);
        }




        echo "deletar id: " . $id;

    }elseif($action == 'buscaOption'){
        $id = $_POST['idCampo'];
        

        $sqlCheckOpcoes = "SELECT COUNT(*) FROM `opcao` WHERE `id_campo_opcao` = $id";
        $resultCheckOpcoes = mysqli_query($conexao, $sqlCheckOpcoes);

        if ($resultCheckOpcoes) {
            $row = mysqli_fetch_array($resultCheckOpcoes);
            $optionCount = $row[0];

            mysqli_free_result($resultCheckOpcoes); // Corrected typo in variable name

            if ($optionCount > 0) {

                $sqlBuscaOpcoes = "SELECT * FROM `opcao` WHERE `id_campo_opcao` = $id";
                $busca_opcoes = mysqli_query($conexao, $sqlBuscaOpcoes);

                $resultados = array();
                while ($row = mysqli_fetch_assoc($busca_opcoes)) {
                    $resultados[] = $row;
                }

                // Enviar os resultados como JSON para o frontend
                echo json_encode($resultados);

                
            } 
        } else {
            // Handle the error for checking options
            echo "Error checking options: " . mysqli_error($conexao);
        }






    }
    
    
}
?>
