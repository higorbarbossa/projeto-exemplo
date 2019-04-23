<template>
  <div class="col-md-10">
    <div class="card">
      <div class="card-header">Cadastro de clientes</div>
      <div class="card-body">
        <form @submit.prevent="checkForm()">
          <div class="form-group">
            <label for="nameBrand">Nome do cliente</label>
            <input
              v-model="client.name"
              type="text"
              class="form-control"
              id="nameBrand"
              placeholder="Nome"
              min="3"
              required
            >
          </div>

          <div class="form-group">
            <label for="desc">E-mail</label>
            <input
              v-model="client.email"
              type="email"
              class="form-control"
              id="email"
              placeholder="exemplo@mail.com"
              required
            >
          </div>

          <div class="form-group">
            <label for="desc">Telefone</label>

            <the-mask
              class="form-control"
              v-model="client.phone"
              placeholder="Telefone fixo ou móvel"
              :mask="['(##)  ####-####', '(##) # ####-####']"
            />
          </div>

          <div class="form-group">
            <label for="desc">Data de Nascimento</label>
            <input v-model="client.birth" type="date" class="form-control" id="desc">
          </div>

          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import { TheMask } from "vue-the-mask";
export default {
  components: { TheMask },
  data() {
    return {
      client: {}
    };
  },
  methods: {
    checkForm() {
      if (this.client.name.length > 2) {
        this.createClient();
      }else{
          alert('O campo do nome precisa ter no minimo 3 carateres!');
      }
    },
    createClient() {
      let uri = "/clients";
      this.axios
        .post(uri, this.client)
        .then(response => {
          alert(response.data);
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  }
};
</script>
