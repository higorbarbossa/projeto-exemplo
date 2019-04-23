<template>
  <div class="col-md-10">
    <div class="card">
      <div class="card-header">Lista de clientes</div>
      <div class="card-body">
        <div>
          <router-link
            class="btn btn-primary btn-lg btn-block"
            to="/vue/client/create"
          >Cadastrar Cliente</router-link>
          <hr>
        </div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Data de Nascimento</th>
              <th scope="col">Telefone</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="client in clients" :key="client.id">
              <th scope="row">{{client.id}}</th>
              <td>{{client.name}}</td>
              <td>{{client.email}}</td>
              <td>{{ dataFormatada(client.birth)}}</td>
              <td>{{client.phone}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      clients: {}
    };
  },
  methods: {
    getClients() {
      this.axios
        .get("/clients")
        .then(result => {
          this.clients = result.data;
        })
        .catch(e => {
          console.log(e);
        });
    },
    dataFormatada(dataSemFormatacao) {
      let data = new Date(dataSemFormatacao);
      let dia = data
        .getDate()
        .toString()
        .padStart(2, "0");
      let mes = (data.getMonth() + 1).toString().padStart(2, "0"); //+1 pois no getMonth Janeiro começa com zero.
      let ano = data.getFullYear();
      return dia + "/" + mes + "/" + ano;
    }
  },
  created() {
    this.getClients();
  }
};
</script>
