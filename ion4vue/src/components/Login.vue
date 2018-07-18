<template>

    <div>
        <img src=".././assets/logo.png"><br>
        <v-card-text>
            <v-form>
                <v-text-field prepend-icon="person" label="RUT" type="text" v-model="username" :rules="usernameRules"></v-text-field>
                <v-text-field prepend-icon="lock" label="Contraseña" type="password" v-model="password" :rules="passwordRules"></v-text-field>
            </v-form>
        </v-card-text>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="primary" v-on:click="conectar">Login</v-btn>
        </v-card-actions>
        {{error}}
    </div>

</template>


<script>

import Vue from 'vue'

export default {
    data: function() {
        return{
            username: "",
            password: "",
            usuarios: "",
            error: "",
            usernameRules: [
                v => !!v || 'Este campo es requerido',
                v => v.length <= 10 || 'RUT debe tener menos de 10 caracteres',
                v => v.length >= 6 || 'RUT debe tener al menos 6 caracteres'
            ],
            passwordRules: [
                v => !!v || 'Este campo es requerido',
                v => v.length <= 14 || 'La contraseña debe tener menos de 14 caracteres',
                v => v.length >= 6 || 'La contraseña debe tener al menos 6 caracteres'
            ],
        }
    },
    methods: {
        //inicia sesion
        conectar: function(){

            
            console.log(this.$client_id)
            console.log(this.$client_secret)
            console.log(this.$grant_type)
            console.log(this.$token)
            

            
            var urlKeeps = 'http://192.168.0.13:8000/oauth/token';
            axios.post(urlKeeps, {
                //se asignan las variables globales ubicadas en main.js
                client_id: this.$client_id,
                client_secret: this.$client_secret,
                grant_type: this.$grant_type,
                username: this.username,
                password: this.password
            },
            {
                headers: { 'Content-Type': 'application/json' }
            }
            ).then(response => {
                Vue.prototype.$token = response.data.access_token,
                Vue.prototype.$username = this.username,
                this.error = '',
                this.username = '',
                this.password = ''
                this.$router.replace('zzz')
            }).catch(error => {
                this.errors = 'No se pudo crear su servicio';
                this.error = "Usuario y/o contraseña no validos"
            });
            


            /*
            var urlKeeps = 'http://192.168.0.13:8000/api/auth';
                axios.get(urlKeeps).then(response => {
                    this.usuarios = response.data;
                });
              */  
            
            //this.$router.replace('zzz')
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

