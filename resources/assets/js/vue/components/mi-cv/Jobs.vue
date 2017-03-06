<template lang="html">
    <div class="row">
        <div class="card">
            <div class="header">
                <h4 class="title">
                    Mis trabajos
                    <button :disabled="maxJobsCount" @click="newJob" class="btn btn-success pull-right">Agregar trabajo</button>
                </h4>
                <p class="category">
                    Aquí se muestran todos tus trabajos registrados.
                </p>
            </div>
            <div class="content">
                <app-jobs-table></app-jobs-table>
            </div>
        </div>
    </div>
</template>

<script>
import JobsTable from './tables/JobsTable.vue';

export default {
    components: {
        appJobsTable: JobsTable
    },
    computed: {
        maxJobsCount () {
            return this.$store.getters.jobsCount >= 5
        }
    },
    methods: {
        newJob () {
            location.href = '/mi-cv/trabajos/nuevo'
        }
    }
}
</script>

<style lang="css">
</style>
