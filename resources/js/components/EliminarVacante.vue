<template>
    <div>
        <button
        class="text-red-600 hover:text-red-900  mr-5"
        @click="eliminarVacante"
        >Eliminar</button>
    </div>
</template>

<script>
    export default {
        props: ['vacanteId'],


        methods: {
            eliminarVacante(){
                // console.log('eliminando ....', this.vacanteId)
                this.$swal.fire({
                    title: 'Deseas eliminar esta vacante?',
                    text: "Una vez eliminada no se puede recuperar!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'No',
                    confirmButtonText: 'Si, eliminar'
                    }).then((result) => {
                    if (result.value) {

                        const params = {
                            id: this.vacanteId,
                            _method: 'delete'
                        }

                        // enviar peticion a axios
                        axios.post(`/vacantes/${this.vacanteId}`, params)
                            .then(resp => {
                                console.log(resp);

                                      this.$swal.fire(
                                        'Eliminado!',
                                        resp.data.mensaje,
                                        'success'
                                        );

                                        // eliminar del dom
                            this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                            })
                            .catch(error => console.log(error))

                    }
                    })
            }
        },
    }
</script>

<style>

</style>
