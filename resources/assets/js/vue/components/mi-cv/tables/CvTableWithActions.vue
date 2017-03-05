<template lang="html">
    <table class="">
        <thead>
            <tr>
                <th v-for="head in headers">{{ head }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <template v-for="row in rows">
                    <td>{{ row.instituto }}</td>
                    <td>{{ row.carrera }}</td>
                    <td>{{ row.acciones }}</td>
                </template>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    props: ['rows', 'headers'],
    data() {
        return {
            // rows: [{
            //     instituto: 'UTN',
            //     carrera: 'Paseador de perros',
            //     acciones: 'Me hago caca'
            // }]

        }
    }
}
</script>

<style lang="css">
</style>
