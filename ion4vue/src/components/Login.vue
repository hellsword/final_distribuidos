<template>

    <div>
        <img src=".././assets/logo.png"><br>
        <v-card-text>
            <v-form>
                <v-text-field prepend-icon="person" label="RUT" type="text" v-model="rut"></v-text-field>
                <v-text-field prepend-icon="lock" label="Contraseña" type="password" v-model="password"></v-text-field>
            </v-form>
        </v-card-text>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="primary" v-on:click="conectar">Login</v-btn>
        </v-card-actions>
        {{usuarios}}
    </div>

</template>


<script>

export default {
    data: function() {
        return{
            rut: "",
            password: "",
            usuarios: "",
        }
    },
    methods: {
        //inicia sesion
        conectar: function(){

            /*
            var urlKeeps = 'http://192.168.0.13:8000/api/home';
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

