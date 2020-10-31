<?php require_once 'includes/head.php'; ?>

<body>
  <?php require_once 'includes/nav.php'; ?>


  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="tituloPrincipal">Curso de Capacitação para Utilização do Sistema Nacional de Gestão da Assistência Farmacêutica (e-SUS AF)</h2>
        <h5 class="subtitulo">Objetivo geral: Capacitar usuários para utilização do Sistema e-SUS-AF (Sistema Nacional de Gestão da Assistência Farmacêutica)</h5>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-sm-6">
        <div class="col-lg-12 col-sm-12 text-left">
          <h3 class="titulo_funcionalidade">Boas-vindas</h3>
          <p>Sejam bem-vindos ao Curso ESUS-AF</p>
        </div>
        <ul class="funcionalidade">
          <li id="BTN01"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades" title="Veja seu desempenho"
              type="button" data-toggle="collapse" data-target="#M0P1" aria-expanded="false" aria-controls="M0P1">
              Acesso ao Sistema
            </button></li>
          <div class="collapse" id="M0P1">
            <div class="card card-body progresso_aluno">
              <p>Módulo não iniciado!</p>
              <a href="#" onclick="redirectPage('c1')" ;>Clique aqui para acessar o módulo</a>
            </div>
          </div>
          <li id="BTN02"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades" title="Veja seu desempenho"
              type="button" data-toggle="collapse" data-target="#M0P2" aria-expanded="false" aria-controls="M0P2">
              Solicitação de Perfil
            </button></li>
          <div class="collapse" id="M0P2">
            <div class="card card-body progresso_aluno">
              <p>Módulo não iniciado!!</p>
              <a href="#" onclick="redirectPage('c3')" ;>Clique aqui para acessar o módulo</a>
            </div>
          </div>
        </ul>
      </div>
      <div class="col-lg-6 col-sm-6">
        <div class="col-lg-12  col-sm-12 text-left">
          <h3 class="titulo_funcionalidade">Módulo Administrativo</h3>
          <p>O objetivo deste módulo é capacitar o usuário a consultar e cadastrar estabelecimentos de saúde no e-SUS AF,
            bem como entender a importância dessa funcionalidade nos fluxos de movimentação e dispensação. Além disso, ele
            abordará outras funcionalidades envolvidas na dinâmica de movimentação de estoques ao orientar o usuário a
            como realizar um cadastro de empenho e sua importância para a transparência da gestão de recursos financeiros.
            Este módulo se propõe também a capacitar o operador sobre a consulta de produtos (medicamentos e produtos para
            saúde) cadastrados no Sistema e como proceder com o cadastro de subgrupos de origem de receita (cadastros
            indicadores da proveniência de receitas médicas para o e-SUS AF).</p>
        </div>
        <ul class="funcionalidade">
          <li id="BTN03"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades" title="Veja seu desempenho"
              type="button" data-toggle="collapse" data-target="#M0P3" aria-expanded="false" aria-controls="M0P3">
              Cadastro de Estabelecimento
            </button></li>
          <div class="collapse" id="M0P3">
            <div class="card card-body progresso_aluno">
              <p>Módulo não iniciado!!</p>
              <a href="#" onclick="redirectPage('c5')" ;>Clique aqui para acessar o módulo</a>
            </div>
          </div>
  
          <li id="BTN04"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades" title="Veja seu desempenho"
              type="button" data-toggle="collapse" data-target="#M0P4" aria-expanded="false" aria-controls="M0P4">
              Configurações (Subgrupo de Origem)
            </button></li>
          <div class="collapse" id="M0P4">
            <div class="card card-body progresso_aluno">
              <p>Módulo não iniciado!!</p>
              <a href="#" onclick="redirectPage('c7')" ;>Clique aqui para acessar o módulo</a>
            </div>
          </div>
          <li id="BTN05"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades" title="Veja seu desempenho"
              type="button" data-toggle="collapse" data-target="#M0P5" aria-expanded="false" aria-controls="M0P5">
              Consulta de Produto
            </button></li>
          <div class="collapse" id="M0P5">
            <div class="card card-body progresso_aluno">
              <p>Módulo não iniciado!!</p>
              <a href="#" onclick="redirectPage('c9')" ;>Clique aqui para acessar o módulo</a>
            </div>
          </div>
          <li id="BTN06"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades" title="Veja seu desempenho"
              type="button" data-toggle="collapse" data-target="#M0P6" aria-expanded="false" aria-controls="M0P6">
              Cadastro de Empenho
            </button></li>
          <div class="collapse" id="M0P6">
            <div class="card card-body progresso_aluno">
              <p>Módulo não iniciado!!</p>
              <a href="#" onclick="redirectPage('c11')" ;>Clique aqui para acessar o módulo</a>
            </div>
          </div>
          <li id="BTN07"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades" title="Veja seu desempenho"
              type="button" data-toggle="collapse" data-target="#M0P7" aria-expanded="false" aria-controls="M0P7">
              Selecionar Estabelecimento
            </button></li>
          <div class="collapse" id="M0P7">
            <div class="card card-body progresso_aluno">
              <p>Módulo não iniciado!!</p>
              <a href="#" onclick="redirectPage('c13')" ;>Clique aqui para acessar o módulo</a>
            </div>
          </div>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-sm-6">
        <div class="col-lg-12 col-sm-12 text-left">
          <h3 class="titulo_funcionalidade">Módulo Atendimento</h3>
          <p>O Módulo de Atendimento do e-SUS AF compreende funcionalidades que envolvem o cadastro de Usuários SUS e a
            realização de dispensações. Este módulo tem como objetivo orientar a consulta, cadastro e edição de dados de
            Usuários SUS no Sistema e a realização de agendamentos de atendimento e registros de dispensação, ou seja, a
            retirada de medicamentos ou produtos para saúde do estoque virtual do e-SUS AF para um Usuário SUS.</p>
          <ul class="funcionalidade">
            <li id="BTN08"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades"
                title="Veja seu desempenho" type="button" data-toggle="collapse" data-target="#M0P8" aria-expanded="false"
                aria-controls="M0P8">
                Cadastro de Usuário
              </button></li>
            <div class="collapse" id="M0P8">
              <div class="card card-body progresso_aluno">
                <p>Módulo não iniciado!!</p>
                <a href="#" onclick="redirectPage('c15')" ;>Clique aqui para acessar o módulo</a>
              </div>
            </div>
            <li id="BTN09"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades"
                title="Veja seu desempenho" type="button" data-toggle="collapse" data-target="#M0P9" aria-expanded="false"
                aria-controls="M0P9">
                Dispensação
              </button></li>
            <div class="collapse" id="M0P9">
              <div class="card card-body progresso_aluno">
                <p>Módulo não iniciado!!</p>
                <a href="#" onclick="redirectPage('c17')" ;>Clique aqui para acessar o módulo</a>
              </div>
            </div>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6">
        <div class="col-lg-12 col-sm-12 text-left">
          <h3 class="titulo_funcionalidade">Módulo Movimentação e Logística</h3>
          <p>O módulo Movimentação e Logística contempla as funcionalidades do e-SUS AF responsáveis pelo deslocamento de
            produtos entre estabelecimentos, bloqueio de lotes e retiradas excepcionais de estoque (saídas diversas).</p>
          <ul class="funcionalidade">
            <li id="BTN10"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades"
                title="Veja seu desempenho" type="button" data-toggle="collapse" data-target="#M0P10"
                aria-expanded="false" aria-controls="M0P10">
                Entrada
              </button></li>
            <div class="collapse" id="M0P10">
              <div class="card card-body progresso_aluno">
                <p>Módulo não iniciado!!</p>
                <a href="#" onclick="redirectPage('c19')" ;>Clique aqui para acessar o módulo</a>
              </div>
            </div>
            <li id="BTN11"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades"
                title="Veja seu desempenho" type="button" data-toggle="collapse" data-target="#M0P11"
                aria-expanded="false" aria-controls="M0P11">
                Bloqueio de Lote
              </button></li>
            <div class="collapse" id="M0P11">
              <div class="card card-body progresso_aluno">
                <p>Módulo não iniciado!!</p>
                <a href="#" onclick="redirectPage('c21')" ;>Clique aqui para acessar o módulo</a>
              </div>
            </div>
            <li id="BTN12"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades"
                title="Veja seu desempenho" type="button" data-toggle="collapse" data-target="#M0P12"
                aria-expanded="false" aria-controls="M0P12">
                Requisição
              </button></li>
            <div class="collapse" id="M0P12">
              <div class="card card-body progresso_aluno">
                <p>Módulo não iniciado!!</p>
                <a href="#" onclick="redirectPage('c23')" ;>Clique aqui para acessar o módulo</a>
              </div>
            </div>
            <li id="BTN13"><i class="fas fa-caret-right"></i><button class="btn_funcionalidades"
                title="Veja seu desempenho" type="button" data-toggle="collapse" data-target="#M0P13"
                aria-expanded="false" aria-controls="M0P13">
                Saídas Diversas
              </button></li>
            <div class="collapse" id="M0P13">
              <div class="card card-body progresso_aluno">
                <p>Módulo não iniciado!!</p>
                <a href="#" onclick="redirectPage('c25')" ;>Clique aqui para acessar o módulo</a>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <?php require_once 'includes/footer.php'; ?>
</body>

</html>