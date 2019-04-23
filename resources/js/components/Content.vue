<template>
  <div class="col-md-9">
    <div class="card">
      <div class="card-header">Projeto Exemplo - aplicando conhecimentos de Laravel e Vue.js</div>
      <div class="card-body">
        <h4>
          <p>Requisitos para execução do projeto;</p>
        </h4>
        <p>- Toda gestão dos requisitos do projeto terá que ser descrita no Trello, onde o candidato criará o quadro, cards e listagens conforme desejar.</p>
        <p>- Todo código fonte terá que estar disponível no *Github*, aonde o candidato criará o repositório com o nome que desejar</p>
        <p>- O sistema deverá ser construído com o uso obrigatoriamente das seguintes tecnologias: PHP, MySQL, Javascript, CSS e HTML o uso de frameworks e bibliotecas é totalmente livre.</p>
        <p>
          - Prazo máximo para entrega do projeto é de até 24hrs (até 23/04 - 14h45) e já começa a ser contabilizado
          logo no envio deste email (22/04 - 14h45), não se preocupe caso não consiga atender todos os
          requisitos, nosso objetivo é mensurar o seu conhecimento profissional
          e seu modelo de execução de trabalho.
        </p>
        <h5>
          <p>Requisitos do sistema;</p>
        </h5>
        <p>Descrição: O candidato deverá construir uma simples aplicação para inclusão de clientes a partir de uma página de autenticação;</p>
        <p>- Pagina de autenticação</p>Email (válido e obrigatório)
        <br>Senha(obrigatório)
        <br>Botão para login
        <br>
        <br>
        <p>Obs. formulário de login deverá ser validado para os seguintes dados(email:usuario@teste.com.br/senha:123456), casos os dados sejam válidos o usuário será direcionado para a página de listagem de clientes, caso contrário o sistema deverá comunicar o usuário que não foi possível realizar login.</p>
        <p>- Pagina de listagem de clientes</p>Botão para incluir novo cliente
        <br>Tabela contendo nome, e-mail, idade e telefone dos clientes cadastrados no sistema.
        <br>
        <br>
        <p>- Pagina para inclusão de cliente</p>
        <p>Área com formulário contendo as seguintes entradas: nome(obrigatório contendo no mínimo 3 caracteres), e-mail(obrigatório e formato válido), data de nascimento(não obrigatório/máscara com formato válido), telefone(não obrigatório e máscara com formato válido tanto para tel. fixo/móvel) e botão cadastrar.</p>
        <p>Obs. se atente sobre a disposição dos campos, máscaras e validação dos dados. Botão cadastrar deverá ser funcional</p>
        <p>Utilize sua criatividade sobre a disposição dos elementos na página, assim como a paleta de cores e demais itens de aspecto visual levando sempre em consideração a usabilidade, boa sorte!</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {};
  }
};
</script>
