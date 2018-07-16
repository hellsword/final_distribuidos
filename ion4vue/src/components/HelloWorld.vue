<template>
  <div id="app">
    
      <v-form v-model="valid">
        <v-text-field v-model="name" :rules="nameRules" :counter="10" label="RUT:" required></v-text-field>
        <v-text-field v-model="name" :rules="nameRules" :counter="10" label="Nombres:" required></v-text-field>
        <v-text-field v-model="name" :rules="nameRules" :counter="10" label="Apellidos:" required></v-text-field>
        <v-menu ref="menu" :close-on-content-click="false" v-model="menu" :nudge-right="40" lazy transition="scale-transition" offset-y full-width min-width="290px">
          <v-text-field slot="activator" v-model="date" label="Fecha de nacimiento:" prepend-icon="event" readonly></v-text-field>
          <v-date-picker ref="picker" v-model="date" :max="new Date().toISOString().substr(0, 10)" min="1950-01-01" @change="save"></v-date-picker>
        </v-menu>

        <div class="file-field input-field">
        <div class="btn">
            <span>Subir</span>
            <input type="file"
                   :multiple="multiple"
            >
        </div>
        <div class="file-path-wrapper">
            <v-text-input class="file-path validate"></v-text-input>
        </div>
    </div>

      </v-form>

  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      drawer: null,
      valid: false,
      date: null,
      menu: false,
      name: '',
      nameRules: [
        v => !!v || 'Name is required',
        v => v.length <= 10 || 'Name must be less than 10 characters'
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+/.test(v) || 'E-mail must be valid'
      ]
    }
  },
  watch: {
    menu (val) {
      val && this.$nextTick(() => (this.$refs.picker.activePicker = 'YEAR'))
    }
  },
  methods: {
      desconectar: function(){

          /*
          var urlKeeps = 'http://localhost:8000/api/home';
              axios.get(urlKeeps).then(response => {
                  this.usuarios = response.data;
              });
              */

          this.$router.replace('/')
      },
      save (date) {
        this.$refs.menu.save(date)
      }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
