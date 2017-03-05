<template lang="html">
    <table class="table table-hover">
        <thead>
            <tr>
                <th v-for="header in headers">{{ header }}</th>
            </tr>
        </thead>
        <tbody>
            <template v-for="trabajo in trabajos">
                <tr>
                    <td>{{ trabajo.lugar }}</td>
                    <td>{{ trabajo.puesto_es }}</td>
                    <td>
                        <button @click="view(trabajo.id_trabajo)" class="btn btn-simple btn-info btn-icon table-action" title="Ver"><i class="fa fa-image"></i></button>
                        <button @click="edit(trabajo.id_trabajo)" class="btn btn-simple btn-warning btn-icon table-action" title="Editar"><i class="fa fa-edit"></i></button>
                        <button @click="remove(trabajo.id_trabajo)" class="btn btn-simple btn-danger btn-icon table-action" title="Eliminar"><i class="fa fa-remove"></i></button>
                    </td>
                </tr>
            </template>
        </tbody>
    </table>
</template>

<script>
import swal from 'sweetalert'
import CvTableWithActions from './tables/CvTableWithActions.vue'

export default {
    data () {
        return {
            headers: ['EMPRESA', 'PUESTO', 'ACCIONES'],
            trabajos: null
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
                    // this.$http.delete(`trabajos/${id}`).then(response => {
                    //     if (response.ok) {
                    //         swal(
                    //             'Eliminado!',
                    //             'El trabajo fue borrado.',
                    //             'success'
                    //         );
                    //     }
                    // })
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
            this.trabajos = data.data
        })
    }
}
</script>

<style lang="css">
</style>
