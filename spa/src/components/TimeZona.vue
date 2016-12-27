<template>
    <div>
        <h3>Times que irão para a Libertadores</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="time in timesLibertadores">
                <td>
                    <img :src="time.escudo" style="height: 30px; width: 30px;">
                    <strong>{{time.nome}}</strong>
                </td>
            </tr>
            </tbody>
        </table>
        <h3>Times que irão serão rebaixados</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="time in timesRebaixados">
                <td>
                    <img :src="time.escudo" style="height: 30px; width: 30px;">
                    <strong>{{time.nome}}</strong>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script type="text/javascript">
    import store from '../store';

    export default {
        computed: {
            timesLibertadores(){
                return store.getters.timesLibertadores;
            },
            timesRebaixados(){
                return store.getters.timesRebaixados;
            },
        }
    };
</script>