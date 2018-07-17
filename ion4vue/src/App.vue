<template>
  <div id="app">
    
    <!-- PLANTILLA PARA LOS DEMAS COMPONENTES -->
    <v-app id="inspire">

      <v-navigation-drawer clipped fixed v-model="drawer" app>
        <v-list dense>

          <v-list-tile avatar>
            <v-list-tile-avatar>
              <img src="https://randomuser.me/api/portraits/men/85.jpg" >
            </v-list-tile-avatar>

            <v-list-tile-content>
              <v-list-tile-title>{{$username}}</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>

          <v-list-tile @click="desconectar">
            <v-list-tile-action>
              <v-icon>dashboard</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Dashboard</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>

          <v-list-tile @click="desconectar">
            <v-list-tile-action>
              <v-icon>settings</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Settings</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>

        </v-list>
      </v-navigation-drawer>

      <v-toolbar app fixed clipped-left dark color="primary">
        <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
        <v-toolbar-title>Application</v-toolbar-title>
      </v-toolbar>


      <v-content>
        <v-container fluid fill-height>
          <v-layout justify-center >
            <v-flex>
              <!-- Aqui se mostrara el contenido de las rutas -->
              <router-view/>

            </v-flex>
          </v-layout>
        </v-container>
      </v-content>


      <v-footer app fixed>
        <span> Universidad Católica del Maule &copy; </span>
      </v-footer>
    </v-app>

  </div>
</template>

<script>
export default {
  name: 'App',
  data: function() {
      return{
          drawer: null
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
      }
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
