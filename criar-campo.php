<?php

include './conexao.php';






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

 <div class="modal-criar-campo">
    <div class="modal-campo-container">
        <button class="close-modal-add">x</button>
        
        <h2>+ Novo Campo</h2>

        <form action="criar-campo.php" class="form-cria-campo" method="post"  >

        
            <div class="campo-input">
                <label for="">Nome do campo</label>
                <input type="text" name="nome-campo" id="nome-campo" required>
                <small class="erro-campo">Preencha o campo</small>
            </div>

            <div class="campo-input">
                <label for="">Texto de ajuda (abaixo da pergunta): <small>opcional</small></label>
                <input type="text" name="txt-ajuda-campo" id="txt-ajuda-campo" required>
                
            </div>
            
            <div class="campo-input">
                <div class="info-tipo-container">
                    <div class="info-tipo-open">
                        <label for="">Selecione o tipo</label> 
                        <p class="active-intro">?</p>
                        
                        <div class="info-tipo" >
                            <p>
                                <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.83984 0.928711L1.54492 10H0.198242L3.99219 0.046875H4.86035L4.83984 0.928711ZM7.60156 10L4.2998 0.928711L4.2793 0.046875H5.14746L8.95508 10H7.60156ZM7.43066 6.31543V7.39551H1.83887V6.31543H7.43066ZM14.458 8.73535V4.92773C14.458 4.63607 14.3988 4.38314 14.2803 4.16895C14.1663 3.9502 13.9932 3.78158 13.7607 3.66309C13.5283 3.5446 13.2412 3.48535 12.8994 3.48535C12.5804 3.48535 12.3001 3.54004 12.0586 3.64941C11.8216 3.75879 11.6348 3.90234 11.498 4.08008C11.3659 4.25781 11.2998 4.44922 11.2998 4.6543H10.0352C10.0352 4.38997 10.1035 4.12793 10.2402 3.86816C10.377 3.6084 10.5729 3.3737 10.8281 3.16406C11.0879 2.94987 11.3978 2.78125 11.7578 2.6582C12.1224 2.5306 12.528 2.4668 12.9746 2.4668C13.5124 2.4668 13.9863 2.55794 14.3965 2.74023C14.8112 2.92253 15.1348 3.19824 15.3672 3.56738C15.6042 3.93197 15.7227 4.38997 15.7227 4.94141V8.38672C15.7227 8.63281 15.7432 8.89486 15.7842 9.17285C15.8298 9.45085 15.8958 9.6901 15.9824 9.89062V10H14.6631C14.5993 9.85417 14.5492 9.66048 14.5127 9.41895C14.4762 9.17285 14.458 8.94499 14.458 8.73535ZM14.6768 5.51562L14.6904 6.4043H13.4121C13.0521 6.4043 12.7308 6.43392 12.4482 6.49316C12.1657 6.54785 11.9287 6.63216 11.7373 6.74609C11.5459 6.86003 11.4001 7.00358 11.2998 7.17676C11.1995 7.34538 11.1494 7.54362 11.1494 7.77148C11.1494 8.00391 11.2018 8.21582 11.3066 8.40723C11.4115 8.59863 11.5687 8.7513 11.7783 8.86523C11.9925 8.97461 12.2546 9.0293 12.5645 9.0293C12.9518 9.0293 13.2936 8.94727 13.5898 8.7832C13.8861 8.61914 14.1208 8.41862 14.2939 8.18164C14.4717 7.94466 14.5674 7.71452 14.5811 7.49121L15.1211 8.09961C15.0892 8.29102 15.0026 8.50293 14.8613 8.73535C14.7201 8.96777 14.5309 9.19108 14.2939 9.40527C14.0615 9.61491 13.7835 9.79036 13.46 9.93164C13.141 10.0684 12.7809 10.1367 12.3799 10.1367C11.8786 10.1367 11.4388 10.0387 11.0605 9.84277C10.6868 9.64681 10.3952 9.38477 10.1855 9.05664C9.98047 8.72396 9.87793 8.35254 9.87793 7.94238C9.87793 7.5459 9.9554 7.19727 10.1104 6.89648C10.2653 6.59115 10.4886 6.33822 10.7803 6.1377C11.0719 5.93262 11.4229 5.77767 11.833 5.67285C12.2432 5.56803 12.7012 5.51562 13.207 5.51562H14.6768Z" fill="black"/>
                                </svg>
                                    
                                    
                                    
                                Texto Curto   
                            </p>
    
                            <p>
                                <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1H16" stroke="black" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                                    <path d="M1 5.5H16" stroke="black" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                                    <path d="M1 10H8.5" stroke="black" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                                    </svg>
                                    
                                    
                                    
                                Parágrafo
                                    
                            </p>
    
                            <p>
                                <svg width="17" height="6" viewBox="0 0 17 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="17" height="5.76923" fill="black"/>
                                    <path d="M12.4219 2.30774L13.8385 3.95609L15.2552 2.30774" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                    
                                    
                                    
                                    
                                Selecionar opção
                            </p>
    
                            
                        </div>
                    </div>
                    
                    
                </div>
                
                <select name="tipo" id="tipo-campo">
                    <option value="">Selecione</option>
                    <option value="um">Texto Curto</option>
                    <option value="dois">Parágrafo</option>
                    <option value="tres">Lista de Opções</option>
                </select>
                <small class="erro-campo">Selecione o tipo</small>
            </div>
        
            <div class="option-container">
                <div class="input-criar-option">
                    <div class="input-add-option">
                       
                        <label for="">Cria opção</label>
                        <input type="text" name="novo-option" id="input-option">
                    
                    </div>
        
                    <button type="button" class="add-option">+ Adicionar</button>
                    
                </div>
                <small class="erro-campo">Adicione opções</small>
        
        
        
                <div class="option-lista">
                    <h4>Opções</h4>
                
                    <div class="msg-option">
                        <p>Adicione opções</p>
                    </div>
        
                </div>
        
        
            </div>
        
        
            <button type="button" class="salvar-campo">Salvar</button>
        </form>
    </div>
 </div>
  


 
    



  
    <div class="modal-edit-campo">
        <div class="modal-edit-campo-container">

            <button class="close-modal-edit">x</button>
                
            <h2>
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.65358 3.09566L13.9041 7.3464L4.67424 16.5767L0.884537 16.9951C0.377206 17.0512 -0.0514349 16.6222 0.0050089 16.1148L0.426678 12.3223L9.65358 3.09566ZM16.5331 2.4628L14.5373 0.466927C13.9148 -0.155642 12.9051 -0.155642 12.2825 0.466927L10.405 2.34459L14.6555 6.59533L16.5331 4.71766C17.1556 4.09476 17.1556 3.08537 16.5331 2.4628Z" fill="#4F4F4F"/>
                </svg>
                    
                        
                Editar Campo
            </h2>

            <form action="" class="form-edit-campo">

                <div class="campo-input">
                    <label for="">Nome do campo</label>
                    <input type="text" name="nome-campo" id="nome-campo-edit" required>
                    <small class="erro-campo">Preencha o campo</small>
                    <input type="text" name="id-campo" id="id-campo" disabled="disabled">
                    <small class="erro-campo">Preencha o campo</small>
                </div>
                
                <div class="campo-input">
                    <label for="">Texto de ajuda (abaixo da pergunta): <small>opcional</small></label>
                    <input type="text" name="txt-ajuda-campo-edit" id="txt-ajuda-campo-edit" required>
                    
                </div>

                
                <div class="campo-input">
                    <label for="">Selecione o tipo</label>
                    <select name="tipo" id="tipo-campo-edit">
                        <option value="">Selecione</option>
                        <option value="um">Texto Curto</option>
                        <option value="dois">Parágrafo</option>
                        <option value="tres">Lista de Opções</option>
                    </select>
                    <small class="erro-campo">Preencha o campo</small>
                </div>
            
            
            
            
                <div class="option-container">
                    <div class="input-criar-option">
                        <div class="input-add-option">
                            <label for="">Cria opção</label>
                            <input type="text" name="novo-option" id="input-option-edit">
                        </div>
            
                        <button type="button" class="add-option-edit">Adicionar</button>
                        
                    </div>
                    <small class="erro-campo">Adicione opções</small>
                    

                    <div class="option-lista-edit editar-campo">
                        <h4>Opções</h4>
                    
                        <div class="msg-option">
                            <p>Adicione opções</p>
                        </div>


                       

                        
                       
            
                    
            
                    </div>
            
            
                </div>
            
            
                <button type="button" class="salvar-campo-edit">Salvar</button>
            </form>
        </div>
        
    </div>
  
 

    <section class="novo-formulario-container">
        <h1>Criar Campos</h1>
        <form action="" id="novo-form">
        
           
    
            <div class="criar-campo-title">
            <h4>Campo</h4>
            <button type="button" class="open-modal-add">+ Novo Campo</button>
            </div>

            <div class="msg-campo-vazio">
                <p>Clique no botão <strong>"+ Novo Campo"</strong> para começar a criar seu formulário.</p>
            </div>
            
            <?php
                $sql_campo = "SELECT * FROM `campo` ORDER BY id_campo ASC";
                $busca_campo = mysqli_query($conexao, $sql_campo);
            ?>

            <div class="form-container-campo">
                <?php
                while ($array = mysqli_fetch_assoc($busca_campo)) {
                    $id_campo = $array['id_campo'];
                    $nome_campo = $array['nome_campo'];
                    $tipo_campo = $array['tipo_campo'];
                    $ajuda_campo = $array['ajuda_campo'];

                    if ($tipo_campo == "tres") {
                        $sql_opcao = "SELECT * FROM `opcao` WHERE id_campo_opcao = $id_campo";
                        $busca_opcao = mysqli_query($conexao, $sql_opcao);
                ?>
                        <div class="novoCampo" id="<?php echo $id_campo; ?>">
                            <div>
                                <div>
                                    <label><?php echo $nome_campo; ?></label>
                                    <small><?php echo $ajuda_campo; ?></small>
                                </div>
                                <div>
                                    <button type="button" class="editar-campo" onclick="editarCampo(this)">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.95001 2.54937L11.4505 6.04997L3.84938 13.6514L0.728442 13.9959C0.31064 14.0421 -0.0423582 13.6888 0.00412498 13.271L0.351382 10.1478L7.95001 2.54937ZM13.6155 2.02819L11.9719 0.384528C11.4592 -0.128176 10.6277 -0.128176 10.115 0.384528L8.56878 1.93084L12.0692 5.43145L13.6155 3.88513C14.1282 3.37215 14.1282 2.54089 13.6155 2.02819Z" fill="#21813C"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="remove-campo" onclick="removerCampo(this)"> X</button>
                                </div>
                            </div>
                            <select name="<?php echo $nome_campo; ?>">
                                <?php
                                foreach ($busca_opcao as $item_opcao) { ?>
                                    <option value="<?php echo $item_opcao['nome_opcao'] ?>"> <?php echo $item_opcao['nome_opcao'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                     <?php
                    } elseif ($tipo_campo == "um") {
                        ?>
                        <div class="novoCampo" id="<?php echo $id_campo; ?>">
                            <!-- Rest of your HTML and PHP code for "um" type -->

                            <div>
                                <div class="title-campo">
                                    <label ><?php echo $nome_campo; ?></label>
                                    <small><?php echo $ajuda_campo; ?></small>
                                </div>
                                
                                <div>
                                    <button type='button' class='editar-campo' onclick='editarCampo(this)'>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.95001 2.54937L11.4505 6.04997L3.84938 13.6514L0.728442 13.9959C0.31064 14.0421 -0.0423582 13.6888 0.00412498 13.271L0.351382 10.1478L7.95001 2.54937ZM13.6155 2.02819L11.9719 0.384528C11.4592 -0.128176 10.6277 -0.128176 10.115 0.384528L8.56878 1.93084L12.0692 5.43145L13.6155 3.88513C14.1282 3.37215 14.1282 2.54089 13.6155 2.02819Z" fill="#21813C"/>
                                        </svg>
                                    </button>
                                    <button type='button' class='remove-campo' onclick='removerCampo(this)'> X</button>
                                </div>
                            </div>
                            <input type="text" name="<?php echo $nome_campo; ?>">
                        </div>
                        <?php

                    }elseif ($tipo_campo == "dois") {
                        ?>
                        <div class="novoCampo" id="<?php echo $id_campo; ?>">
                            <div>
                                            
                                <div class="title-campo">
                                    <label ><?php echo $nome_campo; ?></label>
                                    <small><?php echo $ajuda_campo; ?></small>
                                </div>
                                
                                <div>
                                    <button type='button' class='editar-campo' onclick='editarCampo(this)'>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.95001 2.54937L11.4505 6.04997L3.84938 13.6514L0.728442 13.9959C0.31064 14.0421 -0.0423582 13.6888 0.00412498 13.271L0.351382 10.1478L7.95001 2.54937ZM13.6155 2.02819L11.9719 0.384528C11.4592 -0.128176 10.6277 -0.128176 10.115 0.384528L8.56878 1.93084L12.0692 5.43145L13.6155 3.88513C14.1282 3.37215 14.1282 2.54089 13.6155 2.02819Z" fill="#21813C"/>
                                        </svg>    
                                    </button>
                                    <button type='button' class='remove-campo' onclick='removerCampo(this)'> X</button>
                                </div>
                            </div>
                            
                            <textarea name="<?php echo $nome_campo; ?>"></textarea>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

                    
           

            
                
            
           
            <!-- <div class="form-container-campo">
                    
            </div> -->

            
            <!-- <button type="button" class="salvar-form" onclick="coletarCampos()">Salvar</button> -->
    
        </form>
    </section>
  
    


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



    <script>

        //verifica mudança do select tipo de campo
        $('#tipo-campo').on('change', function() {
            console.log( this.value );

            if(this.value == "tres"){
                console.log( "Lista" );

                $('.option-container').css('display', 'block');

            }else{
                $('.option-container').css('display', 'none');
                //$('.option-item').remove()

            }
        });
       

        //fecha modal de add campo
        $('.close-modal-add').on("click", function(){
            
                $('#nome-campo').val('');
                $('#txt-ajuda-campo').val('');
                $('#tipo-campo').val('');
                $('.option-lista .option-item').remove();

                $('.modal-criar-campo').css('display','none')
                $('#input-option').val('');
                $('.option-container').css('display', 'none');

                $('#tipo-campo').next('small').css('display', 'none');
                $('#nome-campo').next('small').css('display', 'none');

                

            
        })

        //abre modal de add campo
        $('.open-modal-add').on("click", function(){
            
                

                $('.modal-criar-campo').css('display','flex')
                

            
        })

      
        //adiciona options no modal criar campo  
        $('.add-option').on("click", function(){
            
            var option= $('#input-option').val();

            if(!option){
                console.log('vazio');

            }else{
                console.log(option)

                var novoItem = document.createElement('div');
                novoItem.classList.add('option-item')
            
                // Conteúdo HTML do novo item
                novoItem.innerHTML = `
                        

                        <input  type='text'  name='${option}' value="${option}">

                        <div class="btns-option">
                            <button type='button'  class="remove-option">X</button>
                        </div>
                `;


                $('.option-lista').append(novoItem);
                $('#input-option').val('');
                $('.input-criar-option').next('small').css('display', 'none');


                
            }
             
            //verifica qtd de option
            if($('.option-lista').find('.option-item').length !== 0){
              
               $('.msg-option').css('display','none')
               
            }
            
        })
        

       
        //remover option no modal criar campo 
        $('.option-lista').on("click", ".remove-option", function(){
            $(this).closest('.option-item').remove()
            console.log('removeu')
            
            //verifica qtd de option
            if($('.option-lista').find('.option-item').length == 0){
                console.log($('.option-lista').find('.option-item').length, "qtd")

                $('.msg-option').css('display','flex')
            }
        });
        


        $('.salvar-campo').on('click', function() {
            

            var tipo_campo = document.getElementById('tipo-campo').value;
            var nome_campo = document.getElementById('nome-campo').value;
            var ajuda_campo = document.getElementById('txt-ajuda-campo').value;
        
            
            if(nome_campo !== '' && tipo_campo !== ''){

                if(tipo_campo == "tres"){

                    
                    var inputs = document.querySelectorAll(".option-item input");
                    var lista_opcoes = [];

                

                    for (var i = 0; i < inputs.length; i++) {
                        lista_opcoes.push(inputs[i].value);
                    }

                    if(lista_opcoes.length != 0){
                        var novoSelect = document.createElement('div');
                        novoSelect.classList.add('novoCampo')


                        // Conteúdo HTML do novo item
    
                        var opcoesHTML = lista_opcoes
                        .filter(item => item !== '') // Filtra os itens que não são vazios
                        .map(item => `<option value="${item}">${item}</option>`) // Cria elementos <option> para cada item
                        .join('');
                        
                       // informações do campo
                        const campo_obj = {
                            nome: nome_campo,
                            tipo: tipo_campo,
                            ajuda: ajuda_campo,
                            opcoes: lista_opcoes
                        };
                        
                        
                        console.log(campo_obj);

                      

                        

                        // Use AJAX para enviar o objeto para o PHP
                        $.ajax({
                            type: 'POST',
                            url: 'api.php', // Substitua 'sua_pagina.php' pelo caminho correto do seu script PHP
                            data: {
                                action: "create", 
                                campo_obj: JSON.stringify(campo_obj) // Converta o objeto para uma string JSON
                            },
                            success: function(response) {
                                console.log("enviado");
                                // Lida com a resposta do PHP, se necessário
                                var data = JSON.parse(response)

                                novoSelect.id= data.codigo;
                                   
                                novoSelect.innerHTML = `
                                    <div>
                                        <div>
                                            <label >${nome_campo}</label>
                                            <small>${ajuda_campo}</small>
                                        </div>
                                        <div>
                                            <button type='button' class='editar-campo' onclick='editarCampo(this)'>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.95001 2.54937L11.4505 6.04997L3.84938 13.6514L0.728442 13.9959C0.31064 14.0421 -0.0423582 13.6888 0.00412498 13.271L0.351382 10.1478L7.95001 2.54937ZM13.6155 2.02819L11.9719 0.384528C11.4592 -0.128176 10.6277 -0.128176 10.115 0.384528L8.56878 1.93084L12.0692 5.43145L13.6155 3.88513C14.1282 3.37215 14.1282 2.54089 13.6155 2.02819Z" fill="#21813C"/>
                                                </svg>
                                                    
                                            </button>
                                            <button type='button' class='remove-campo' onclick='removerCampo(this)'> X</button>
                                        </div>
                                    </div>
                                    <select name='${nome_campo}'>
                                        ${opcoesHTML}
                                    </select>

                                        
                                `;


                                console.log("data", data)


                                
                                $('#novo-form .form-container-campo').append(novoSelect);

                                $('#nome-campo').val('');
                                $('#tipo-campo').val('');
                                $('#txt-ajuda-campo').val('');
                                $('.option-lista .option-item').remove();
                                $('.modal-criar-campo').css('display','none')
                                $('#nome-campo').next('small').css('display', 'none');
                                $('#tipo-campo').next('small').css('display', 'none');
                                $('.option-container').css('display', 'none');

                                Swal.fire({
                                        position: "center",
                                        icon: "success",
                                        title: "Concluído",
                                        showConfirmButton: false,
                                        timer: 1000
                                });

                            },
                            error: function(error) {
                                console.error(error);
                            }
                        });




                    }else{
                        
                        
                        $('.input-criar-option').next('small').css('display', 'block');
                    }

                



                }else if(tipo_campo == "um"){

                        var novoInput = document.createElement('div');
                        novoInput.classList.add('novoCampo');

                       
                        const campo_obj = {
                            nome: nome_campo,
                            tipo: tipo_campo,
                            ajuda: ajuda_campo,
                            opcoes:[]
                        };

                        console.log(campo_obj);
                        
                         // Use AJAX para enviar o objeto para o PHP
                         $.ajax({
                            type: 'POST',
                            url: 'api.php', // Substitua 'sua_pagina.php' pelo caminho correto do seu script PHP
                            data: {
                                action: "create", 
                                campo_obj: JSON.stringify(campo_obj) // Converta o objeto para uma string JSON
                                
                            
                            },
                            success: function(response) {
                                // Lida com a resposta do PHP, se necessário
                                var data = JSON.parse(response);
                                
                                novoInput.id= data.codigo;
                                 

                                // Conteúdo HTML do novo item
                                novoInput.innerHTML = `
                                    <div>
                                        <div class="title-campo">
                                            <label >${nome_campo}</label>
                                            <small>${ajuda_campo}</small>
                                        </div>
                                        <div>
                                            <button type='button' class='editar-campo' onclick='editarCampo(this)'>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.95001 2.54937L11.4505 6.04997L3.84938 13.6514L0.728442 13.9959C0.31064 14.0421 -0.0423582 13.6888 0.00412498 13.271L0.351382 10.1478L7.95001 2.54937ZM13.6155 2.02819L11.9719 0.384528C11.4592 -0.128176 10.6277 -0.128176 10.115 0.384528L8.56878 1.93084L12.0692 5.43145L13.6155 3.88513C14.1282 3.37215 14.1282 2.54089 13.6155 2.02819Z" fill="#21813C"/>
                                                </svg>
                                            </button>
                                            <button type='button' class='remove-campo' onclick='removerCampo(this)'> X</button>
                                        </div>
                                    </div>
                                    <input type="text" name='${nome_campo}'>

                                        
                                `;
                                
                            
                                $('.option-item').remove()
                                $('#novo-form .form-container-campo').append(novoInput);

                                $('#nome-campo').val('');
                                $('#tipo-campo').val('');
                                $('#txt-ajuda-campo').val('');
                                $('.option-lista .option-item').remove();
                                $('.modal-criar-campo').css('display','none')
                                $('#nome-campo').next('small').css('display', 'none');
                                $('#tipo-campo').next('small').css('display', 'none');

                                Swal.fire({
                                        position: "center",
                                        icon: "success",
                                        title: "Concluído",
                                        showConfirmButton: false,
                                        timer: 1000
                                });


                            },
                            error: function(error) {
                                console.error(error);
                            }
                        });

                        

                }else if(tipo_campo == "dois"){

                    var novoTextarea = document.createElement('div');
                    novoTextarea.classList.add('novoCampo');
                    



                        const campo_obj = {
                            nome: nome_campo,
                            tipo: tipo_campo,
                            ajuda: ajuda_campo,
                            opcoes:[] 
                        };
                        
                         // Use AJAX para enviar o objeto para o PHP
                         $.ajax({
                            type: 'POST',
                            url: 'api.php', // Substitua 'sua_pagina.php' pelo caminho correto do seu script PHP
                            data: {
                                action: "create", 
                                campo_obj: JSON.stringify(campo_obj) // Converta o objeto para uma string JSON
                            },
                            success: function(response) {
                                console.log("enviado");
                              
                                // Lida com a resposta do PHP, se necessário
                                var data = JSON.parse(response);


                                
                                novoTextarea.id=data.codigo;
                                
                            novoTextarea.innerHTML = `
                                <div>
                                    
                                    <div class="title-campo">
                                        <label >${nome_campo}</label>
                                        <small>${ajuda_campo}</small>
                                    </div>
                                    
                                    <div>
                                        <button type='button' class='editar-campo' onclick='editarCampo(this)'>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.95001 2.54937L11.4505 6.04997L3.84938 13.6514L0.728442 13.9959C0.31064 14.0421 -0.0423582 13.6888 0.00412498 13.271L0.351382 10.1478L7.95001 2.54937ZM13.6155 2.02819L11.9719 0.384528C11.4592 -0.128176 10.6277 -0.128176 10.115 0.384528L8.56878 1.93084L12.0692 5.43145L13.6155 3.88513C14.1282 3.37215 14.1282 2.54089 13.6155 2.02819Z" fill="#21813C"/>
                                            </svg>    
                                        </button>
                                        <button type='button' class='remove-campo' onclick='removerCampo(this)'> X</button>
                                    </div>
                                </div>
                                
                                <textarea name='${nome_campo}'></textarea>

                                    
                            `;
                            

                                $('.option-lista .option-item').remove()
                                $('#novo-form .form-container-campo').append(novoTextarea);

                                $('#nome-campo').val('');
                                $('#tipo-campo').val('');
                                $('#txt-ajuda-campo').val('');
                                $('.option-lista .option-item').remove();
                                $('.modal-criar-campo').css('display','none')
                                $('#nome-campo').next('small').css('display', 'none');
                                $('#tipo-campo').next('small').css('display', 'none');

                                Swal.fire({
                                        position: "center",
                                        icon: "success",
                                        title: "Concluído",
                                        showConfirmButton: false,
                                        timer: 1000
                                });

                            },
                            error: function(error) {
                                console.error(error);
                            }
                        });

                    // Conteúdo HTML do novo item

                    
                }

                 
            }else if( tipo_campo == '' && nome_campo == ''){
                    $('#tipo-campo').next('small').css('display', 'block');
                    $('#nome-campo').next('small').css('display', 'block');

            }else if( tipo_campo == ''){
                $('#tipo-campo').next('small').css('display', 'block');
               

            }else{
                
                $('#nome-campo').next('small').css('display', 'block');

                
            }
            
            
        });

        //-----------------REMOVER-----------------------------------------------------------
            
                //remove campo
                function removerCampo(button) {
                    const campoContainer = $(button).closest(".novoCampo");
                    var data_id = campoContainer.attr('id');
                                        


                   
                   
                    console.log("remove campo", data_id)




                    Swal.fire({
                        title: 'Excluir campo',
                        text: "Tem certeza que você deseja excluir esse campo?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#dd3333',
                        cancelButtonColor: '#626262',
                        confirmButtonText: 'Excluir',
                        cancelButtonText: 'Cencelar'
                            }).then((result) => {

                                if (result.isConfirmed) {
                                    $.ajax({
                                        type: 'POST',
                                        url: 'api.php', // Substitua 'sua_pagina.php' pelo caminho correto do seu script PHP
                                        data: {
                                            action: "apagarCampo", 
                                            idCampo: data_id,
                                        },
                                        success: function(response) {
                                            
                                            campoContainer.remove();
                                        
                                        },
                                        error: function(error) {
                                            console.error(error);
                                        }
                                    });
                                }

                    })

                   
                        
                         // Use AJAX para enviar o objeto para o PHP
                        



                }



        //-----------------EDITAR-----------------------------------------------------------

        //fecha modal de edit campo
        $('.close-modal-edit').on("click", function(){
            
            $('#nome-campo-edit').val('');
            $('#txt-ajuda-campo-edit').val('');
            
            $('#tipo-campo-edit').val('');
            $('.option-lista-edit .option-item').remove();

            $('.modal-edit-campo').css('display','none')
            $('#input-option').val('');
            $('.option-container').css('display', 'none');
            
            $('#tipo-campo-edit').next('small').css('display', 'none');
            $('#nome-campo-edit').next('small').css('display', 'none');
 
        })

       
    

        //editar
        function editarCampo(button) {
            
            

            $('.modal-edit-campo').css('display','flex')

            const campoContainer = $(button).closest(".novoCampo");
            var idCampo = campoContainer.attr('id');
            const selectElement = campoContainer.find("select");
            
            const inputElement = campoContainer.find("input");
            const textareaElement = campoContainer.find("textarea");

            var ajuda_campo_edit = campoContainer.find("small").text();
             
          
            
            $('#id-campo').val(idCampo);
            
            

            if (selectElement.length > 0) {
                
                var select_name = selectElement.attr('name');
                $('.form-edit-campo #nome-campo-edit ').val(select_name );
               

                $('.form-edit-campo #txt-ajuda-campo-edit ').val(ajuda_campo_edit );
              
                $('.form-edit-campo #tipo-campo-edit').val("tres").change();
                
                $('.msg-option').css('display','none')


                $.ajax({
                    type: 'POST',
                    url: 'api.php', // Substitua 'sua_pagina.php' pelo caminho correto do seu script PHP
                    
                    data: { 
                        action: "buscaOption", 
                        idCampo: idCampo,
                         // Converta o objeto para uma string JSON
                    },
                    
                    success: function(response) {
                        console.log("enviado busca");

                        
                    
                        // Lida com a resposta do PHP, se necessário
                        var data = JSON.parse(response);

                        console.log("Data", response)


                        data.forEach(element => {
                    
                

                            var optionItem = document.createElement('div');
                            optionItem.classList.add('option-item')
                        
                                // Conteúdo HTML do novo item
            
                                
                                optionItem.innerHTML = `
                                    
            
                                        <input  type='text'  name='${element.nome_opcao}' value="${element.nome_opcao}" disabled>

                                        <div class="btns-option">
                                            
                                            <button type="button" class="editar-option">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.95001 2.54937L11.4505 6.04997L3.84938 13.6514L0.728442 13.9959C0.31064 14.0421 -0.0423582 13.6888 0.00412498 13.271L0.351382 10.1478L7.95001 2.54937ZM13.6155 2.02819L11.9719 0.384528C11.4592 -0.128176 10.6277 -0.128176 10.115 0.384528L8.56878 1.93084L12.0692 5.43145L13.6155 3.88513C14.1282 3.37215 14.1282 2.54089 13.6155 2.02819Z" fill="#1C813C"/>
                                                </svg>

                                            </button>

                                            <button type="button" data-id="${element.id_opcao}" class="salvar-editar-option">Salvar</button>

                                            <button type="button" data-id="${element.id_opcao}" class="remove-option">X</button>
                                        </div>
                                        
                                `;

                            
                            $('.option-lista-edit.editar-campo').append(optionItem);





                        });

                        // Conteúdo HTML do novo item

                
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
                

                
                var option_campo_edit = selectElement.find("option");
                  
                var lista_opcoes_edit = [];




               

                for (var i = 0; i < option_campo_edit.length; i++) {
                    lista_opcoes_edit.push(option_campo_edit[i].value);
                }
                
                console.log(lista_opcoes_edit, 'valores');

                // lista_opcoes_edit.forEach(element => {
                    
                

                //     var optionItem = document.createElement('div');
                //     optionItem.classList.add('option-item')
                
                //         // Conteúdo HTML do novo item
    
                        
                //         optionItem.innerHTML = `
                            
    
                //                 <input  type='text'  name='${element}' value="${element}">

                //                 <div class="btns-option">
                                    
                //                     <button type="button" class="remove-option">X</button>
                //                 </div>
                                
                //         `;

                    
                //     $('.option-lista-edit.editar-campo').append(optionItem);





                // });

                  //verifica qtd de option
                if($('.option-lista-edit').find('.option-item').length !== 0){
                
                    $('.msg-option').css('display','none')
                }


                
                


            } else if(inputElement.length > 0){
                var input_name = inputElement.attr('name');
                $('.form-edit-campo #nome-campo-edit ').val(input_name );
                $('.form-edit-campo #txt-ajuda-campo-edit ').val(ajuda_campo_edit );
              
                $('.form-edit-campo #tipo-campo-edit').val("um").change();

            }else if(textareaElement.length > 0){
                var textarea_name = textareaElement.attr('name');
                $('.form-edit-campo #nome-campo-edit ').val(textarea_name);
                $('.form-edit-campo #txt-ajuda-campo-edit ').val(ajuda_campo_edit );
              
                $('.form-edit-campo #tipo-campo-edit').val("dois").change();

            }
                        
            


            
        }
        


        $('.add-option-edit').on("click", function(){
            
            var option= $('#input-option-edit').val();
            

            if(!option){
                console.log('vazio');
                $('.option-lista-edit .msg-option').css('display','flex')
            }else{

                var idCampo = $('#id-campo').val();


                const option_obj = {
                                idCampo: idCampo,
                                optionValor: option,
                                
                            };

                

                var novoItem = document.createElement('div');
                novoItem.classList.add('option-item')
            
               

                $.ajax({
                    type: 'POST',
                    url: 'api.php', // Substitua 'sua_pagina.php' pelo caminho correto do seu script PHP
                    data: {
                        action: "addOptionEdit", 
                        optionNovo: JSON.stringify(option_obj)
                    },
                    success: function(response) {
                        console.log(response, "dsad")
                        $idNovo =JSON.parse(response);

                        Swal.fire({
                                position: "center",
                                icon: "success",
                                title: "Concluído",
                                showConfirmButton: false,
                                timer: 800
                        });
                        console.log(response);


                         // Conteúdo HTML do novo item
                            novoItem.innerHTML = `
                                    

                            <input  type='text'   name='${option}' value="${option}" disabled>

                                <div class="btns-option">
                                    
                                    <button type="button" class="editar-option">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.95001 2.54937L11.4505 6.04997L3.84938 13.6514L0.728442 13.9959C0.31064 14.0421 -0.0423582 13.6888 0.00412498 13.271L0.351382 10.1478L7.95001 2.54937ZM13.6155 2.02819L11.9719 0.384528C11.4592 -0.128176 10.6277 -0.128176 10.115 0.384528L8.56878 1.93084L12.0692 5.43145L13.6155 3.88513C14.1282 3.37215 14.1282 2.54089 13.6155 2.02819Z" fill="#1C813C"/>
                                        </svg>

                                    </button>

                                    <button type="button" data-id="${$idNovo.idNovo}" class="salvar-editar-option">Salvar</button>

                                    <button type="button" data-id="${$idNovo.idNovo}" class="remove-option">X</button>
                                </div>
                            `;
                            
                    
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
        



                $('.option-lista-edit').append(novoItem);
                $('#input-option-edit').val('');
                $('.form-edit-campo .input-criar-option').next('small').css('display', 'none');

                $('.option-lista-edit .msg-option').css('display','none')
            }
             
           
            
        })


          //remover option
        $('.option-lista-edit').on("click", ".remove-option", function(){
            var removeId = $(this).data('id');
            var item = $(this).closest('.option-item')



            
            

            Swal.fire({
                        title: 'Excluir campo',
                        text: "Tem certeza que você deseja excluir esse campo?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#dd3333',
                        cancelButtonColor: '#626262',
                        confirmButtonText: 'Excluir',
                        cancelButtonText: 'Cencelar'
                            }).then((result) => {

                                if (result.isConfirmed) {
                                    $.ajax({
                                        type: 'POST',
                                        url: 'api.php', // Substitua 'sua_pagina.php' pelo caminho correto do seu script PHP
                                        data: {
                                            action: "apagarOption", 
                                            idOption: removeId,
                                        },
                                        success: function(response) {

                                            item.remove()
                                            
                                        
                                        },
                                        error: function(error) {
                                            console.error(error);
                                        }
                                    });
                                }

            })
            
            //verifica qtd de option
            if($('.option-lista-edit').find('.option-item').length == 0){

               $('.option-lista-edit .msg-option').css('display','flex')
            }
        });


        //editar option


        $('.option-lista-edit').on("click", ".editar-option", function(){
            
            $(this).closest('.option-item').find('input').prop('disabled', false);
            $(this).closest('.option-item').find('input').focus();
            $(this).closest('.option-item').find('.salvar-editar-option').css('display', 'flex');
            $(this).css('display','none');
            
        });


         //salvar-option-edit

        

        $('.option-lista-edit').on("click", ".salvar-editar-option", function(){
            
            $(this).closest('.option-item').find('input').prop('disabled', true);
            $(this).closest('.option-item').find('.editar-option').css('display', 'flex');
            $(this).css('display','none');
            
            var valorDoInput = $(this).closest('.option-item').find('input').val();
            var optionId = $(this).data('id');

            var obj_Edit_Option = {
                "option_id": optionId,
                "option_value": valorDoInput 
            }
            console.table( obj_Edit_Option)

            $.ajax({
                type: 'POST',
                url: 'api.php', // Substitua 'sua_pagina.php' pelo caminho correto do seu script PHP
                
                data: { 
                    action: "editOption", 
                    option_obj: JSON.stringify(obj_Edit_Option) // Converta o objeto para uma string JSON
                },

                success: function(response) {

                     console.log("response", response)


                }

            });

                
            
        });
        

       

        
        

        $('#tipo-campo-edit').on('change', function() {
            console.log( this.value );

            if(this.value == "tres"){
                console.log( "Lista" );

                $('.option-container').css('display', 'block');

            }else{
                $('.option-container').css('display', 'none');
                //$('.option-item').remove()

            }
        });


        //salvar edição   
        $('.salvar-campo-edit').on('click', function() {
            

            var tipo_campo = document.getElementById('tipo-campo-edit').value;
            var nome_campo = document.getElementById('nome-campo-edit').value;
            var ajuda_campo = document.getElementById('txt-ajuda-campo-edit').value;
            var id_campo = document.getElementById('id-campo').value;

            console.log("ajuda", ajuda_campo)
           
            if(nome_campo !== '' && tipo_campo !== ''){

                    if(tipo_campo == "tres"){

                        
                        var inputs = document.querySelectorAll(".option-lista-edit .option-item input");
                        var lista_opcoes = [];

                    

                        for (var i = 0; i < inputs.length; i++) {
                            lista_opcoes.push(inputs[i].value);
                        }

                        if(lista_opcoes.length !== 0){
                            var novoSelect = document.createElement('div');
                            novoSelect.classList.add('novoCampo');
                            novoSelect.id=id_campo;
                        
                            // Conteúdo HTML do novo item
        
                            var opcoesHTML = lista_opcoes
                            .filter(item => item !== '') // Filtra os itens que não são vazios
                            .map(item => `<option value="${item}">${item}</option>`) // Cria elementos <option> para cada item
                            .join('');
                            
                            
                            const campo_obj = {
                                nome: nome_campo,
                                tipo: tipo_campo,
                                ajuda: ajuda_campo,
                                id_campo: id_campo,
                                opcoes: lista_opcoes
                            };
                        

                            console.log(campo_obj);

                            $.ajax({
                                type: 'POST',
                                url: 'api.php', // Substitua 'sua_pagina.php' pelo caminho correto do seu script PHP
                                
                                data: { 
                                    action: "edit", 
                                    id_campo: id_campo,
                                    campo_obj: JSON.stringify(campo_obj) // Converta o objeto para uma string JSON
                                },
                                
                                success: function(response) {
                                    console.log("enviado edição");
                                
                                    // Lida com a resposta do PHP, se necessário
                                    // var data = JSON.parse(response);

                                    novoSelect.innerHTML = `
                                        <div>
                                            <div class="title-campo">
                                                <label >${nome_campo}</label>
                                                <small>${ajuda_campo}</small>
                                            </div>
                                        
                                            <div>
                                                <button type='button' class='editar-campo' onclick='editarCampo(this)'>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.95001 2.54937L11.4505 6.04997L3.84938 13.6514L0.728442 13.9959C0.31064 14.0421 -0.0423582 13.6888 0.00412498 13.271L0.351382 10.1478L7.95001 2.54937ZM13.6155 2.02819L11.9719 0.384528C11.4592 -0.128176 10.6277 -0.128176 10.115 0.384528L8.56878 1.93084L12.0692 5.43145L13.6155 3.88513C14.1282 3.37215 14.1282 2.54089 13.6155 2.02819Z" fill="#21813C"/>
                                                    </svg>
                                                </button>
                                                <button type='button' class='remove-campo' onclick='removerCampo(this)'>X</button>
                                            </div>
                                        </div>
                                        <select name='${nome_campo}'>
                                            ${opcoesHTML}
                                        </select>

                                            
                                    `;
                                    
                            

                                        $('#novo-form').find('#'+id_campo).replaceWith(novoSelect);
                                        //$('#novo-form').append(novoSelect);

                                        $('#nome-campo-edit').val('');
                                        $('#id-campo').val('');
                                        $('#tipo-campo-edit').val('');
                                        $('#txt-ajuda-campo-edit').val('');
                                        $('#nome-campo-edit').next("small").css('display', 'none')
                                        $('.option-lista-edit .option-item').remove();
                                        $('.modal-edit-campo').css('display','none')
                                        
            


                                },
                                error: function(error) {
                                    console.error(error);
                                }
                            });



                           
                            
                            

                        }else{
                        
                            
                            $('.input-criar-option').next('small').css('display', 'block');
                        }

                    
                            


                    }else if(tipo_campo == "um"){

                        var novoInput = document.createElement('div');
                            novoInput.classList.add('novoCampo');

                            novoInput.id=id_campo;

                            const campo_obj = {
                                nome: nome_campo,
                                tipo: tipo_campo,
                                ajuda: ajuda_campo,
                                id_campo: id_campo,
                                opcoes: lista_opcoes
                            };
                        

                            console.log(campo_obj);
                            

                            $.ajax({
                                type: 'POST',
                                url: 'api.php', // Substitua 'sua_pagina.php' pelo caminho correto do seu script PHP
                                
                                data: { 
                                    action: "edit", 
                                    id_campo: id_campo,
                                    campo_obj: JSON.stringify(campo_obj) // Converta o objeto para uma string JSON
                                },
                                
                                success: function(response) {
                                    console.log("enviado edição");
                                
                                    // Lida com a resposta do PHP, se necessário
                                    // var data = JSON.parse(response);


                                      // Conteúdo HTML do novo item

                            
                                    novoInput.innerHTML = `
                                        <div>
                                            <div class="title-campo">
                                                <label >${nome_campo}</label>
                                                <small>${ajuda_campo}</small>
                                            </div>
                                            <div>
                                                <button type='button' class='editar-campo' onclick='editarCampo(this)'>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.95001 2.54937L11.4505 6.04997L3.84938 13.6514L0.728442 13.9959C0.31064 14.0421 -0.0423582 13.6888 0.00412498 13.271L0.351382 10.1478L7.95001 2.54937ZM13.6155 2.02819L11.9719 0.384528C11.4592 -0.128176 10.6277 -0.128176 10.115 0.384528L8.56878 1.93084L12.0692 5.43145L13.6155 3.88513C14.1282 3.37215 14.1282 2.54089 13.6155 2.02819Z" fill="#21813C"/>
                                                    </svg>
                                                </button>
                                                <button type='button' class='remove-campo' onclick='removerCampo(this)'> X</button>
                                            </div>
                                        </div>
                                        <input type="text" name='${nome_campo}'>

                                            
                                    `;
                                    

                                    $('#novo-form').find('#'+id_campo).replaceWith(novoInput);

                                    $('#nome-campo-edit').val('');
                                    $('#id-campo').val('');
                                    $('#tipo-campo-edit').val('');
                                    $('#txt-ajuda-campo-edit').val('');
                                    $('#nome-campo-edit').next("small").css('display', 'none')
                                    $('.option-lista-edit .option-item').remove();
                                    $('.modal-edit-campo').css('display','none');



                                },
                                error: function(error) {
                                    console.error(error);
                                }
                            });

                          

                    }else if(tipo_campo == "dois"){

                        var novoTextarea = document.createElement('div');
                        novoTextarea.classList.add('novoCampo');
                      

                        novoTextarea.id=id_campo;
                              

                        const campo_obj = {
                            nome: nome_campo,
                            tipo: tipo_campo,
                            ajuda: ajuda_campo,
                            id_campo: id_campo,
                            opcoes: lista_opcoes
                        };
                    

                        console.log(campo_obj);

                        $.ajax({
                            type: 'POST',
                            url: 'api.php', // Substitua 'sua_pagina.php' pelo caminho correto do seu script PHP
                            
                            data: { 
                                action: "edit", 
                                id_campo: id_campo,
                                campo_obj: JSON.stringify(campo_obj) // Converta o objeto para uma string JSON
                            },
                            
                            success: function(response) {
                                console.log("enviado edição");
                            
                                // Lida com a resposta do PHP, se necessário
                                // var data = JSON.parse(response);

                                novoTextarea.innerHTML = `
                                    <div>
                                            <div class="title-campo">
                                                <label >${nome_campo}</label>
                                                <small>${ajuda_campo}</small>
                                            </div>
                                        
                                        <div>
                                            <button type='button' class='editar-campo' onclick='editarCampo(this)'>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.95001 2.54937L11.4505 6.04997L3.84938 13.6514L0.728442 13.9959C0.31064 14.0421 -0.0423582 13.6888 0.00412498 13.271L0.351382 10.1478L7.95001 2.54937ZM13.6155 2.02819L11.9719 0.384528C11.4592 -0.128176 10.6277 -0.128176 10.115 0.384528L8.56878 1.93084L12.0692 5.43145L13.6155 3.88513C14.1282 3.37215 14.1282 2.54089 13.6155 2.02819Z" fill="#21813C"/>
                                                </svg>    
                                            </button>
                                            <button type='button' class='remove-campo' onclick='removerCampo(this)'> X</button>
                                        </div>
                                    </div>
                                    
                                    <textarea name='${nome_campo}'></textarea>

                                        
                                `;


                                $('#novo-form').find('#'+id_campo).replaceWith(novoTextarea);

                                $('#nome-campo-edit').val('');
                                $('#id-campo').val('');
                                $('#tipo-campo-edit').val('');
                                $('#txt-ajuda-campo-edit').val('');
                                $('#nome-campo-edit').next("small").css('display', 'none')
                                $('.option-lista-edit .option-item').remove();
                                $('.modal-edit-campo').css('display','none')



                            },
                            error: function(error) {
                                console.error(error);
                            }
                        });


                        // Conteúdo HTML do novo item


                       
                    }


            }else if( tipo_campo == '' && nome_campo == ''){
                    $('#tipo-campo-edit').next('small').css('display', 'block');
                    $('#nome-campo-edit').next('small').css('display', 'block');

            }else if( tipo_campo == ''){
                    $('#tipo-campo-edit').next('small').css('display', 'block');
               

            }else{
                
                    $('#nome-campo-edit').next('small').css('display', 'block');

                
            }
            
        });



         // Exemplo de uso do SweetAlert
  


          

    </script>



                      

</body>
</html>