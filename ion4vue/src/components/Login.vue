<template>

    <div>
        <img src=".././assets/logo.png"><br>
        <v-card-text>
            <v-form>
                <v-text-field prepend-icon="person" label="RUT" type="text" v-model="email"></v-text-field>
                <v-text-field prepend-icon="lock" label="Contraseña" type="password" v-model="password"></v-text-field>
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

export default {
    data: function() {
        return{
            email: "",
            password: "",
            usuarios: "",
            error: ""
        }
    },
    methods: {
        //inicia sesion
        conectar: function(){

            console.log(this.$client_id)
            console.log(this.$client_secret)
            console.log(this.$grant_type)
            console.log(this.$token)
            this.$token = 'zzzzzzzzzzzzzzzzzzzz'

            this.$router.replace('zzz')
            /*
            var urlKeeps = 'http://192.168.0.13:8000/oauth/token';
            axios.post(urlKeeps, {
                client_id: 6,
                client_secret: 'NqJYLx6oOGdRFhoDP50zU57jW4u9L0JkElE4QsqE',
                grant_type: 'password',
                username: this.email,
                password: this.password
            },
            {
                headers: { 'Content-Type': 'application/json' }
            }
            ).then(response => {
                this.error = response.data.access_token,
                this.email = '',
                this.password = ''
                //this.$router.replace('zzz')
            }).catch(error => {
                this.errors = 'No se pudo crear su servicio';
                this.error = "Usuario y/o contraseña no validos"
            });
            */


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

