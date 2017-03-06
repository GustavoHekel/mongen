<template lang="html">
    <div class="row">
        <div class="card">
            <div class="header">
                <h4 class="title">
                    Mis estudios
                    <button :disabled="maxStudiesCount" @click="newStudy" class="btn btn-success pull-right">Agregar estudio</button>
                </h4>
                <p class="category">
                    Aquí se muestran todos tus estudios registrados.
                </p>
            </div>
            <div class="content">
                <app-studies-table></app-studies-table>
            </div>
        </div>
    </div>
</template>

<script>
import StudiesTable from './tables/StudiesTable.vue';

export default {
    components: {
        appStudiesTable: StudiesTable
    },
    computed: {
        maxStudiesCount () {
            return this.$store.getters.studiesCount >= 5
        }
    },
    methods: {
        newStudy () {
            location.href = '/mi-cv/estudios/nuevo'
        }
    }
}
</script>

<style lang="css">
</style>
