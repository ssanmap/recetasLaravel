<template>
    <div>
        <span >{{formatearFecha}}</span >
    </div>
</template>

<script>
    export default {
        name:'FechaReceta',
        props: ['fecha'],

        computed:{
                formatearFecha(){
                    return moment(this.fecha).format('DD MMMM YYYY')
                }
        },
      mounted() {
          console.log('la fecha es', this.fecha)
      },
    }
</script>

<style lang="scss" scoped>

</style>
