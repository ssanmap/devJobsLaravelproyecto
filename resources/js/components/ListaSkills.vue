<template>
    <div>
        <ul class="flex flex-wrap justify-center">
            <li class="border border-gray-500 px-10 py-3 mb-3 rounded mr-4"
             v-for="(skill, i) in this.skills"
             v-bind:key="i"
             @click="activar($event)">{{skill}}</li>
        </ul>
        <input type="hidden" name="skills" id="skills">
    </div>
</template>

<script>
    export default {
        props: ['skills'],
        data() {
            return {
                habilidades: new Set()
            }
        },
        mounted() {
            console.log(this.skills);
        },
        methods: {
            activar(e){

                if( e.target.classList.contains('bg-teal-400') ){
                         e.target.classList.remove('bg-teal-400');
                         this.habilidades.delete(e.target.textContent);
                }else{
                        e.target.classList.add('bg-teal-400');
                        this.habilidades.add(e.target.textContent);
                }
                const stringHabilidades = [...this.habilidades];
                document.querySelector('#skills').value = stringHabilidades;

            }
        },

    }
</script>

<style lang="scss" scoped>

</style>
