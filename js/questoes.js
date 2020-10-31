function show(elementID) {
    switch(elementID){
        case 'informativo':
        $("#resultado").hide();
        break;

        case 'questao_1':
        var atual = document.getElementById("questao_atual_1"); 
        var total = document.getElementById("total_questoes_1"); 
        atual.innerHTML = 1; 
        total.innerHTML = 3;
        proxQuestao = "'questao_2'";
        resetForm();
        limpaTitulos();
        exibeTitulo(0);
        break;

        case 'questao_2':
        var atual = document.getElementById("questao_atual_2"); 
        var total = document.getElementById("total_questoes_2"); 
        atual.innerHTML = 2; 
        total.innerHTML = 3;
        proxQuestao = "'questao_3'";
        resetForm();
        limpaTitulos();
        exibeTitulo(1);
        break;

        case 'questao_3':
        var atual = document.getElementById("questao_atual_3"); 
        var total = document.getElementById("total_questoes_3"); 
        atual.innerHTML = 3; 
        total.innerHTML = 3;
        proxQuestao = "'resultado'";
        resetForm();
        limpaTitulos();
        exibeTitulo(2);
        break;

        case 'resultado':
        limpaTitulos();
        break;
    }
    let questao = document.getElementById(elementID);
    if (!questao) {
        alert("Nenhuma questão encontrada");
        return;
    }

    let pages = document.getElementsByClassName('questao');
    for(let i = 0; i < pages.length; i++) {
        pages[i].style.display = 'none';
    }
    questao.style.display = 'block';
}

function exibeTitulo(pagina){
    let titulo = document.getElementsByClassName('divTitulo');
    titulo[pagina].style.display = 'block';
}

function limpaTitulos(){
    let titulo = document.getElementsByClassName('divTitulo');
    for (let i = 0, length = titulo.length; i < length; i++) {
        titulo[i].style.display = 'none';
    }
}

function resetForm(){
    $("#resultado").hide();
    $("#informativo").hide();
    $('input[type="radio"]:checked').prop("checked", false);
    $(".btnResposta").show();
    $('.modal-content').removeClass('correta');
    $('.modal-content').removeClass('incorreta');
}

function exibeModal(resposta, feedback, questao){
    $("#feedbackModal").modal();
    $(".modal-content").addClass(resposta);
    $(".clicked").addClass(resposta);
    if (resposta === 'correta') {
        $('.modal-body').html(feedback);
        $('#tituloModal').html('Resposta Correta!');
    }else {
        $('.modal-body').html(feedback);
        $('#tituloModal').html('Resposta Incorreta!');
    }
    console.log('Questao', proxQuestao)
    $(".btnResposta").hide();
    $("#" + questao + " form input[name='opcao']").prop("disabled", true);
    if(proxQuestao !== "'resultado'"){
        $("#" + questao).append('<input type="button" onclick="show('+proxQuestao+')" value="Próxima questão &#10148;" ">');
    }else{
        $("#" + questao).append('<input type="button" onclick="show('+proxQuestao+')" value="Ver Pontuação &#10148" ">');
    }
    
}

function verificarResposta(questao) {
    let opcaoCorreta = $("#" + questao + " form input[type='hidden']").val();
    let radios = document.getElementsByName('opcao');
    let feedback = document.getElementsByClassName('me_feedback');
    let questaoSelecionada = -1;

    for (let i = 0, length = radios.length; i < length; i++) {
      if (radios[i].checked === true){
        if (radios[i].value === opcaoCorreta) {
            for (let j = 0, length = feedback.length; j < length; j++) {
                if (j === i){
                    var feedbackCorreto = feedback[j].textContent;
                }
            }
            questaoSelecionada = opcaoCorreta;
            exibeModal("correta", feedbackCorreto, questao);
            break;
          }
      }

      if (radios[i].checked !== opcaoCorreta) {
        for (let j = 0, length = feedback.length; j < length; j++) {
            if (j === i){
                var feedbackIncorreto = feedback[j].textContent;
            }
        }
      }
    }
    if(questaoSelecionada === -1){
        exibeModal("incorreta", feedbackIncorreto, questao);
    }
}

$(document).ready(function () {
    
    show('informativo');
    
    

    $('.form-group').click(function() {
        $('.clicked').toggleClass('clicked');   
        $(this).toggleClass('clicked');
    });
});
