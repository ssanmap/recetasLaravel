<template>
    <div>
        <input type="submit" @click="eliminarReceta" class="btn btn-danger mb-2 d-block w-100" value="Eliminar">
    </div>
</template>

<script>
    export default {
        props: ['recetaId'],
        mounted(){
            console.log('receta actual' , this.recetaId)
        },methods: {
            eliminarReceta(){
                this.$swal({
                    title:'¿Deseas eliminar esta receta?',
                    text: 'Una vez eliminada , no se puede recuperar',
                    icon:'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si',
                    cancelButtonText: 'No',

                }).then((result) =>{
                    if(result.value){
                        const params = {
                            id:this.recetaId
                        }

                        // enviar peticion al servidor
                        axios.post(`recetas/${this.recetaId}`, {params, _method: 'delete'})
                        .then(respuesta => {

                             this.$swal({
                            title: 'Receta Eliminada',
                            text: 'Se elimino la receta',
                            icon: 'success'
                        });
                        // eliminar del dom

                        this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);

                        })
                        .catch( error =>{
                            console.log(error);
                        })


                    }
                })
            }
        },


    }
</script>

<style lang="scss" scoped>

</style>
