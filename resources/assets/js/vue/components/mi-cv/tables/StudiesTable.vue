<template lang="html">
    <table class="table table-hover">
        <thead>
            <tr>
                <th v-for="header in headers">{{ header }}</th>
            </tr>
        </thead>
        <tbody>
            <template v-for="study in studies">
                <tr>
                    <td>{{ study.instituto_es }}</td>
                    <td>{{ study.carrera_es }}</td>
                    <td class="td-actions">
                        <button @click="view(study.id_estudio)" class="btn btn-simple btn-info btn-icon table-action" title="Ver"><i class="fa fa-image"></i></button>
                        <button @click="edit(study.id_estudio)" class="btn btn-simple btn-warning btn-icon table-action" title="Editar"><i class="fa fa-edit"></i></button>
                        <button @click="remove(study.id_estudio)" class="btn btn-simple btn-danger btn-icon table-action" title="Eliminar"><i class="fa fa-remove"></i></button>
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
            headers: ['INSTITUTO', 'CARRERA', 'ACCIONES'],
            studies: null
        }
    },
    methods: {
        view (id) {
            location.href = `estudios/${id}`
        },
        edit (id) {
            location.href = `estudios/${id}/editar`
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
                    vm.$http.delete(`estudios/${id}`).then(response => {
                        if (response.ok) {
                            vm.$store.dispatch('decrementStudiesCount')
                            let study = vm.studies.find(study => study.id_estudio === id)
                            vm.studies.splice(vm.studies.indexOf(study), 1)
                            swal(
                                'Eliminado!',
                                'El estudio fue borrado.',
                                'success'
                            );
                        }
                    })
                } else {
                    swal("Cancelado", "Tu estudio no fue eliminado :)", "error");
                }
            });
        }
    },
    mounted () {
        this.$http.get('estudios/listado').then(response => {
            return response.json()
        }).then(data => {
            this.$store.dispatch('setStudiesCounter', data.data)
            this.studies = data.data
        })
    }
}
</script>

<style lang="css">
</style>
