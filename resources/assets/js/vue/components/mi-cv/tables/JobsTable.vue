<template lang="html">
    <table class="table table-hover">
        <thead>
            <tr>
                <th v-for="header in headers">{{ header }}</th>
            </tr>
        </thead>
        <tbody>
            <template v-for="job in jobs">
                <tr>
                    <td>{{ job.lugar }}</td>
                    <td>{{ job.puesto_es }}</td>
                    <td>
                        <button @click="view(job.id_trabajo)" class="btn btn-simple btn-info btn-icon table-action" title="Ver"><i class="fa fa-image"></i></button>
                        <button @click="edit(job.id_trabajo)" class="btn btn-simple btn-warning btn-icon table-action" title="Editar"><i class="fa fa-edit"></i></button>
                        <button @click="remove(job.id_trabajo)" class="btn btn-simple btn-danger btn-icon table-action" title="Eliminar"><i class="fa fa-remove"></i></button>
                    </td>
                </tr>
            </template>
        </tbody>
    </table>
</template>

<script>
import swal from 'sweetalert'

export default {
    data () {
        return {
            headers: ['EMPRESA', 'PUESTO', 'ACCIONES'],
            jobs: null
        }
    },
    methods: {
        view (id) {
            location.href = `trabajos/${id}`
        },
        edit (id) {
            location.href = `trabajos/${id}/editar`
        },
        remove (id) {
            const vm = this
            swal({
                title: "Estás seguro?",
        	    text: "No vas a poder deshacer esta acción",
        	    type: "warning",
        	    showCancelButton: true,
        	    confirmButtonText: "Si, eliminar!",
        	    cancelButtonText: "No, cancelar!",
        	    closeOnConfirm: false,
        	    closeOnCancel: false,
                showLoaderOnConfirm: true
            }, function(isConfirm) {
                if (isConfirm) {
                    vm.$http.delete(`trabajos/${id}`).then(response => {
                        if (response.ok) {
                            vm.$store.dispatch('decrementJobsCount')
                            let job = vm.jobs.find(job => job.id_trabajo === id)
                            vm.jobs.splice(vm.jobs.indexOf(job), 1)
                            swal(
                                'Eliminado!',
                                'El trabajo fue borrado.',
                                'success'
                            );
                        }
                    })
                } else {
                    swal("Cancelado", "Tu trabajo no fue eliminado :)", "error");
                }
            });
        }
    },
    mounted () {
        this.$http.get('trabajos/listado').then(response => {
            return response.json()
        }).then(data => {
            this.$store.dispatch('setJobsCounter', data.data)
            this.jobs = data.data
        })
    }
}
</script>

<style lang="css">
</style>
