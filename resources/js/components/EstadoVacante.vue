<template>
    <div>
            <span @click="cambiarEstado"
            :class="claseEstadoVacante()"
            :key="estadoVacanteData"
            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ">
                    {{estadoVacante}}
            </span>
    </div>
</template>

<script>
    export default {
        props:['estado', 'vacanteId'],
        mounted() {
            this.estadoVacanteData = Number(this.estado)
        },
        data() {
            return {
                estadoVacanteData: null,

            }
        },
        methods: {
            cambiarEstado(){
               if(this.estadoVacanteData === 1){
                   this.estadoVacanteData = 0;
               }else{
                    this.estadoVacanteData = 1;
               }
            //    enviar a axios
            const params = {
                estado: this.estadoVacanteData
            }
                axios
                    .post('/vacantes/' + this.vacanteId, params)
                    .then(resp => console.log(resp))
                    .catch(error => console.log(error))
            },
            claseEstadoVacante(){
                return this.estadoVacanteData === 1 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'
            }
        },
        computed: {
            estadoVacante(){
                return this.estadoVacanteData === 1 ? 'Activa' : 'Inactiva'
            }
        },

    }
</script>

<style lang="scss" scoped>

</style>
