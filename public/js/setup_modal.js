$('#texto-login').on('click', function(){
    chamaModal('modalLogin')
})

$('#criar_cadastro').on('click', function(){
    enviarCadastro()
})


$('#btn-login-entrar').on('click', function(){
    logar()
})

$("form").submit(function(e){
    // Evitar o submit
    e.preventDefault();

    // Pegar identificador
    let forNome = $(this).attr('id')
    let valores =  new Object;

    for(let valor of $(this).serializeArray()){
    
        if(valor.value == '')
            return chamaMensagem(forNome, 'e', 'O campo ' + valor.name + ' não pode ser vazio')

        else
            valores[valor.name] = valor.value
    }
    
    $.ajax({
        url : "../ajax/envia_email.php",
        type : 'post',
        data : valores

   }).done(function(retorno){
    console.log(retorno)


    })

    let mensagem = 'Email enviado com sucesso. Nos próximos minutos você receberá um email de confirmação caso seu email exista'
    chamaMensagem(forNome, 's', mensagem)
    
});

function chamaModal(modalChamado){
    if(modalChamado == 'modalCadastro'){
        $('#modalLogin').modal('hide')
        $('#modalCadastro').modal('show')

    }else if(modalChamado == 'modalLogin'){
        $('#modalCadastro').modal('hide')
        $('#modalLogin').modal('show')
    }
} 

function chamaMensagem(identificador, status, conteudo){
    let classe = status == 's' ? 'success' : 'danger';

    // Altera o conteudo da mensagem
    $(`.mensagem-alert-${identificador} span`).text(conteudo)

    // Removendo classes de background
    $(`.mensagem-alert-${identificador}`).removeClass('alert-success')
    $(`.mensagem-alert-${identificador}`).removeClass('alert-danger')

    //Setando classe chamada
    $(`.mensagem-alert-${identificador}`).addClass("alert-" + classe);

    // Mostra a mensagem
    $(`.mensagem-alert-${identificador}`).show(1000)

    // Esconde a mensagem
    $(`.mensagem-alert-${identificador}`).delay(5000).hide(3000)
}

function enviarCadastro(){
    // Capturando todos os dados
    let nome = $("#modalCadastro [name=nome]").val()
    let sobrenome = $("#modalCadastro [name=sobrenome]").val()
    let email = $("#modalCadastro [name=email]").val()
    let usuario = $("#modalCadastro [name=usuario]").val()
    let senha = $("#modalCadastro [name=senha]").val()
    let senhaConfirme = $("#modalCadastro [name=senhaConfirme]").val()

    // Escapando o conteudo e impedindo de ser vazio
    nome = addslashes(nome)
    sobrenome = addslashes(sobrenome)
    email = addslashes(email)
    usuario = addslashes(usuario)
    senha = addslashes(senha)
    senhaConfirme = addslashes(senhaConfirme)

    //Verificando condições
    let statusSeTemVazio = testarSeTemVazio([nome, sobrenome, email, usuario, senha, senhaConfirme])
    let statusMinCaracter = testarMinCaracter([nome, sobrenome, email, usuario, senha, senhaConfirme])
    let statusEmail = testarEmail(email);
    let statusSenhas = testarSenhas(senha, senhaConfirme)


    if(statusSeTemVazio || statusMinCaracter || statusEmail || statusSenhas){

        if(statusSeTemVazio){
            chamaMensagem('modalCadastro', 'e', conteudo=statusSeTemVazio)
            return

        }else if(statusMinCaracter){
            chamaMensagem('modalCadastro', 'e', conteudo=statusMinCaracter)
            return

        }else if(statusEmail){
            chamaMensagem('modalCadastro', 'e', conteudo=statusEmail)
            return

        }else if(statusSenhas){
            chamaMensagem('modalCadastro', 'e', conteudo=statusSenhas)
            return
        }
    }else{
        $.ajax({
            url : "../ajax/cadastro_login.php",
            type : 'post',
            data : {
                action: 'cadastro',
                nome: nome, 
                sobrenome: sobrenome, 
                email: email, 
                usuario: usuario, 
                senha: senha,                 
                senhaConfirme: senhaConfirme,                 
            }
       })
       .done(function(retorno){
            let json = JSON.parse(retorno)

            if(json['status'] == 'sucesso'){
                // Chama a tela de login
                chamaModal('modalLogin')
                // Altera o valor do usuário
                $("#modalLogin [name=usuario]").val(json['msg'])
                // Chama mensagem de sucesso do cadastro
                chamaMensagem('modalLogin', 's', 'Conta cadastrada com sucesso. Faça Login!')

            }else if(json['status'] == 'erro'){
                
                chamaMensagem('modalCadastro', 'e', json['msg'])

            }else{
                chamaMensagem('modalCadastro', 'e', 'Não foi possivel fazer o seu cadastro')
            }
       })
       .fail(function(jqXHR, textStatus, msg){
            chamaMensagem('modalCadastro', 'e', 'Não foi possivel fazer o seu cadastro')
       });
    }
    
}

function logar(){
    // Capturando todos os dados
    let usuario = $("#modalLogin [name=usuario]").val()
    let senha = $("#modalLogin [name=senha]").val()

    // Escapando o conteudo e impedindo de ser vazio
    usuario = addslashes(usuario)
    senha = addslashes(senha)

    //Verificando condições
    let statusSeTemVazio = testarSeTemVazio([usuario, senha])

    if(statusSeTemVazio){
        chamaMensagem('modalLogin', 'e', conteudo=statusSeTemVazio)
        return
    }else{

        $.ajax({
            url : "../ajax/cadastro_login.php",
            type : 'post',
            data : {
                action: 'login',
                usuario: usuario, 
                senha: senha               
            }
       })
       .done(function(retorno){
        console.log(retorno)
           let json = JSON.parse(retorno)

            if(json['status'] == 'sucesso'){
                //Redireciona para página logada
                chamaMensagem('modalLogin', 's', 'Entrando')

                setTimeout(function() {
                    window.location.href = "app/index.php";
                }, 3000);
                

            }else if(json['status'] == 'erro'){
                chamaMensagem('modalLogin', 'e', json['msg'])

            }else{
                chamaMensagem('modalLogin', 'e', 'Não foi possivel fazer o seu cadastro')
            }
       })
       .fail(function(jqXHR, textStatus, msg){
            chamaMensagem('modalLogin', 'e', 'Não foi possivel fazer o seu cadastro')
       });
    }

}

function testarSeTemVazio(parametrosDoCadastro){
    let erro = 0
    parametrosDoCadastro.forEach(function(elemento, index, array){
        if(elemento == '' || elemento == null || typeof elemento == 'undefined' || elemento.substr(0, 1) == ' ')
            erro = 'Nenhum campo pode ser nulo'
    });
    return erro
}

function testarMinCaracter(parametrosDoCadastro){
    let erro = 0
    parametrosDoCadastro.forEach(function(elemento, index, array){
        if(elemento.length < 4)
            erro = 'Nenhum campo pode ter menos de 4 caracteres'
    });
    return erro
}

function testarEmail(email){
    let erro = 0
    let arroba = email.indexOf("@");
    let ponto = email.indexOf(".", arroba);

    if(arroba == -1 || ponto == -1)
        erro = 'O formato do email está inválido'

    return erro;
}

function testarSenhas(senha, senhaConfirme){
    let erro = senha == senhaConfirme ? 0 : 'Senhas não conferem';
    return erro;
}

function addslashes( str ) {
    return (str + '').replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
}