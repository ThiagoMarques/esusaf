<?php require_once 'includes/head.php'; ?>
<body>
  <?php require_once 'includes/nav.php'; ?>
  <html>

  <body>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div id="informativo" class="col-lg-10 text-left align-self-center informativo">
          <h3 class="informativo-bold">Vamos consolidar o que estudamos?</h3>
          <p>A seguir vamos fazer exercícios que são avaliativos, são três questões relacionadas aos conteúdos estudados.</p>
          <p>Orientações para responder os exercícios:</p>
          <ul>
            <li>Clique na opção correta e depois clique em <span class="bold">Verificar resposta</span>. Aparecerá o feedback dessa questão.</li>
            <li>Clique em <span class="bold">Próxima Questão</span> para responder outra questão. Após responder todas as questões será mostrada a quantidade de respostas corretas.</li>
            <li>Após responder todas as questões será mostrada a quantidade de respostas corretas</li>
          </ul>
          <button class="btn btn-lg btnStart" onclick="show('questao_1')">Iniciar</button>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 text-left divTitulo">
          <h1 class="tituloExercicio">Exercícios </h1>
          <h3 class="tituloQuestao">Questão <span id="questao_atual_1">1</span> de <span id="total_questoes_1"></span></h3>
        </div>
        <div id="questao_1" class="questao col-lg-8 text-left">
          <p>Marque uma das opções abaixo:</p>
          <p>Para solicitar a senha de acesso ao e-SUS AF (Sistema Nacional de Gestão da Assistência Farmacêutica),
            clicando em “Novo por aqui?”, o usuário será direcionado para realização de cadastro em qual plataforma de
            acesso?</p>
          <form>
            <div class="form-group row">
              <input id="opc0" type="radio" name="opcao" value="0">
              <label for="opc0">Site do Departamento de Informática do SUS (DATASUS).</label>
              <p class="me_feedback">Não é possível solicitar acesso ao e-SUS AF no site do DATASUS</p>
            </div>
            <div class="form-group row">
              <input id="opc1" type="radio" name="opcao" value="1">
              <label for="opc1">Plataforma de acesso do e-SUS Atenção Básica (e-SUS AB).</label>
              <p class="me_feedback">A opção indicada é utilizada para acesso ao Sistema e-SUS Atenção Básica e não para solicitação de acesso ao e-SUS AF.</p>
            </div>
            <div class="form-group row">
              <input id="opc2" type="radio" name="opcao" value="2">
              <label for="opc2">Sistema de informação em Saúde (SIS).</label>
              <p class="me_feedback">Não é possível solicitar acesso ao e-SUS AF via SIS.</p>
            </div>
            <div class="form-group row">
              <input id="opc3" type="radio" name="opcao" value="3">
              <label for="opc3">Sistema de Cadastro e Permissão de Acesso (SCPA).</label>
              <p class="me_feedback">A fim de realizar cadastro no e-SUS AF, ao clicar em “Novo por aqui?”, o usuário
              será direcionado para o site do SCPA (Sistema de Cadastro e Permissão de Acesso), uma plataforma de
              acesso a diversos sistemas do Ministério da Saúde</p>
            </div>
            <input type="hidden" name="resposta" value="3">
            <input class="btnResposta" type="button" value="Verificar Resposta" onclick="verificarResposta('questao_1')">
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 text-left divTitulo">
          <h1 class="tituloExercicio">Exercícios </h1>
          <h3 class="tituloQuestao">Questão <span id="questao_atual_2">1</span> de <span id="total_questoes_2"></span></h3>
        </div>
        <div id="questao_2" class="questao col-lg-8 text-left">
          <p>Marque uma das opções abaixo:</p>
          <p>Teste 2</p>
          <form>
            <div class="form-group row">
              <input id="opc4" type="radio" name="opcao" value="0">
              <label for="opc4">Site do Departamento de Informática do SUS (DATASUS).</label>
              <p class="me_feedback">Não é possível solicitar acesso ao e-SUS AF no site do DATASUS</p>
            </div>
            <div class="form-group row">
              <input id="opc5" type="radio" name="opcao" value="1">
              <label for="opc5">Plataforma de acesso do e-SUS Atenção Básica (e-SUS AB).</label>
              <p class="me_feedback">A opção indicada é utilizada para acesso ao Sistema e-SUS Atenção Básica e não para solicitação de acesso ao e-SUS AF.</p>
            </div>
            <div class="form-group row">
              <input id="opc6" type="radio" name="opcao" value="2">
              <label for="opc6">Sistema de informação em Saúde (SIS).</label>
              <p class="me_feedback">Não é possível solicitar acesso ao e-SUS AF via SIS.</p>
            </div>
            <div class="form-group row">
              <input id="opc7" type="radio" name="opcao" value="3">
              <label for="opc7">Sistema de Cadastro e Permissão de Acesso (SCPA).</label>
              <p class="me_feedback">A fim de realizar cadastro no e-SUS AF, ao clicar em “Novo por aqui?”, o usuário
              será direcionado para o site do SCPA (Sistema de Cadastro e Permissão de Acesso), uma plataforma de
              acesso a diversos sistemas do Ministério da Saúde</p>
            </div>
            <input type="hidden" name="resposta" value="3">
            <input class="btnResposta" type="button" value="Verificar Resposta" onclick="verificarResposta('questao_2')">
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 text-left divTitulo">
          <h1 class="tituloExercicio">Exercícios </h1>
          <h3 class="tituloQuestao">Questão <span id="questao_atual_3">1</span> de <span id="total_questoes_3"></span></h3>
        </div>
        <div id="questao_3" class="questao col-lg-8 text-left">
          <p>Marque uma das opções abaixo:</p>
          <p>Teste 3</p>
          <form>
            <div class="form-group row">
              <input id="opc8" type="radio" name="opcao" value="0">
              <label for="opc8">Site do Departamento de Informática do SUS (DATASUS).</label>
              <p class="me_feedback">Não é possível solicitar acesso ao e-SUS AF no site do DATASUS</p>
            </div>
            <div class="form-group row">
              <input id="opc9" type="radio" name="opcao" value="1">
              <label for="opc9">Plataforma de acesso do e-SUS Atenção Básica (e-SUS AB).</label>
              <p class="me_feedback">A opção indicada é utilizada para acesso ao Sistema e-SUS Atenção Básica e não para solicitação de acesso ao e-SUS AF.</p>
            </div>
            <div class="form-group row">
              <input id="opc10" type="radio" name="opcao" value="2">
              <label for="opc10">Sistema de informação em Saúde (SIS).</label>
              <p class="me_feedback">Não é possível solicitar acesso ao e-SUS AF via SIS.</p>
            </div>
            <div class="form-group row">
              <input id="opc11" type="radio" name="opcao" value="3">
              <label for="opc11">Sistema de Cadastro e Permissão de Acesso (SCPA).</label>
              <p class="me_feedback">A fim de realizar cadastro no e-SUS AF, ao clicar em “Novo por aqui?”, o usuário
              será direcionado para o site do SCPA (Sistema de Cadastro e Permissão de Acesso), uma plataforma de
              acesso a diversos sistemas do Ministério da Saúde</p>
            </div>
            <input type="hidden" name="resposta" value="3">
            <input class="btnResposta" type="button" value="Verificar Resposta" onclick="verificarResposta('questao_3')">
          </form>
        </div>
      </div>
      <div class="row">
        <div id="resultado" class="col-lg-10 text-left align-self-center resultado">
          <h3 class="informativo-bold">Rendimento</h3>
          <button class="btn btn-lg btnStart" onclick="show('questao_1')">Ir para Próxima Aula</button>
      </div>
    </div>
    

    <!-- Modal -->
    <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="tituloModal"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tituloModal"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="texto-modal" class="modal-body">
          </div>
        </div>
      </div>
    </div>


    <script src="js/questoes.js"></script>
    <?php require_once 'includes/footer.php'; ?>
  </body>

  </html>