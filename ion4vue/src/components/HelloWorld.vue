<template>
  <div id="app">
    
    {{usuarios}}
      <v-form v-model="valid">
        <v-text-field v-model="name" :rules="nameRules" :counter="10" label="RUT:" required></v-text-field>
        <v-text-field v-model="name" :rules="nameRules" :counter="10" label="Nombres:" required></v-text-field>
        <v-text-field v-model="name" :rules="nameRules" :counter="10" label="Apellidos:" required></v-text-field>
        <v-menu ref="menu" :close-on-content-click="false" v-model="menu" :nudge-right="40" lazy transition="scale-transition" offset-y full-width min-width="290px">
          <v-text-field slot="activator" v-model="date" label="Fecha de nacimiento:" prepend-icon="event" readonly></v-text-field>
          <v-date-picker ref="picker" v-model="date" :max="new Date().toISOString().substr(0, 10)" min="1950-01-01" @change="save"></v-date-picker>
        </v-menu>
        <v-btn color="primary" v-on:click="desconectar">blaaaa</v-btn>
    
      </v-form>

  </div>
</template>

<script>

export default {
  name: 'HelloWorld',
  data () {
    return {
      usuarios: '',
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

          
          var urlKeeps = 'http://192.168.0.13:8000/api/details';
                axios.post(urlKeeps,{
                  headers: { 
                    Authorization: "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImE1NDI0MmUwYTBjNDEzNDU5NTJiZDU0MGVhZjI2MjZjNTRhNTNiMDg5MzZiMzU5NDU2NTJiYTY0NzQxOWRmZWM3MWIwZDA4ZTdkNDk1NzgzIn0.eyJhdWQiOiIxIiwianRpIjoiYTU0MjQyZTBhMGM0MTM0NTk1MmJkNTQwZWFmMjYyNmM1NGE1M2IwODkzNmIzNTk0NTY1MmJhNjQ3NDE5ZGZlYzcxYjBkMDhlN2Q0OTU3ODMiLCJpYXQiOjE1MzE4MDg3NDMsIm5iZiI6MTUzMTgwODc0MywiZXhwIjoxNTYzMzQ0NzQzLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.UPKlQJcoMPJjAKM5-ip2KOUlKuJe8YdrR-gReaYfPUpYutOO1V_C8k8UUPpbOfq5a3O2uauLAtfdhJ2yATitXg36aLXivWR5nEokfbhP-e-Jj0T7Zf1NCOBrk6XDO8hS7gW1UmT4JIIRIK4yrn6p2VHBXn1Yzpe8K33ZTv0PWYYb-C8Mz8oyCu4HG_N5RK2uwpkW2JRVcNDrCLdNOZm0bYxzcEytidKd2nC0bkoyW6pAGkbc16uKJqGOjtbLu8lWPqXr4-tiZFExoaonxxi0HtVwm1zzZDfsdLIZYf7vpBCfLK_vhAsZfOsrrvaTPZ-xo6q-JVykPMLqkn8AwGs3wPwgQHQw2ZWgOBiQdqw5j9dU-tj4QhPeuxdf97gytLKz5EMuzsauiVTeyz1JA3HnpZGgyTHOejzwLKcJ0nFggnkPQq6lqcUDLxNKGIX1FAIj5BbNKwTfSllhDXCVQpDcT5LfbUoVVR1D2PNKX4yCUzEmEaAmWyWDZo7lE1OEe39e_goOsC33JpTHJry5vuwH9wc2h4n5LGHNJKNajhqJSfAQLjSHx79Q3uUVB7Fx9SrahqVPyii9N1U1WMQAs1bXiY0naGsFoBfUZBQiOVAyOXOooNgYB6KGyYXFvd_TaRgMZ5kZ_EK6PFvlP2LqWLjb7dhY2u2A3ENt4m4_D5odj2M",
                    Accept: 'application/json',
                    'Content-Type': 'application/json;charset=UTF-8',
          "Access-Control-Allow-Origin": "*",
                  },
                }).then(response => {
                    this.usuarios = response.data;
                });
           
           console.log("datos:   "+this.usuarios)

          //this.$router.replace('/')
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
