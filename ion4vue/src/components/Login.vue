<template>

    <ion-app>
    <ion-header>
      <ion-toolbar class="primary">
        <ion-title>Ionic 4 Vue</ion-title>
      </ion-toolbar>
    </ion-header>
    <ion-content padding>

        
        <h3>Iniciar sesión</h3>

        <img src=".././assets/logo.png"><br>

        <ion-item class="ion-item">
            <ion-label ><ion-icon name="md-person"></ion-icon> RUT: </ion-label>
            <ion-input floating type="text" v-model="rut" placeholder="18456235"></ion-input>
        </ion-item>

        <ion-item class="ion-item">
            <ion-label ><ion-icon name="md-key"></ion-icon> Contraseña:</ion-label>
            <ion-input floating type="password" v-model="password" placeholder="*************"></ion-input>
        </ion-item> 

        <br>
        <ion-button block v-on:click="conectar"> Conectar </ion-button>

        <p>¿No tienes cuenta? Crea una pero ya!!!</p>

        {{usuarios}}
    </ion-content>
  </ion-app>

</template>


<script>

export default {
    data: function() {
        return{
            rut: "",
            password: "",
            usuarios: ""
        }
    },
    methods: {
        //inicia sesion
        conectar: function(){

            /*
            var urlKeeps = 'http://localhost:8000/api/home';
                axios.get(urlKeeps).then(response => {
                    this.usuarios = response.data;
                });
                */

            this.$router.replace('zzz')
        }
    }
}
</script>

<style scoped>
    .ion-item{
        text-align: center;
    }
    .login{
        margin-top: 40px;
    }
    input{
        margin: 10px 0;
        width: 20%;
        padding: 15px;
    }
    button{
        margin-top: 20px;
        width: 20%;
        cursor: pointer;
    }
    p{
        margin-top: 40px;
        font-size: 13px;
    }
    p a{
        text-decoration: underline;
        cursor: pointer;
    }
</style>

