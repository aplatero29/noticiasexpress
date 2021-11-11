<template>
    <main class="container">
        <div v-for="entrada in entradas" :key="entrada.id">
            <router-link class= "text-blue-500 text-2xl" :to="{ name: 'mostrarEntradas', params: { id }}">{{ entrada.titulo }}</router-link>
            <p class="py-2">{{ entrada.subtitulo }}</p>
            <hr />
        </div>
    </main>
</template>

<script>
export default {
    name: "verEntrada",
    data() {
        return {
            entrada: [],
        };
    },
    mounted() {
        this.getEntrada();
    },

    methods: {
        async getEntrada() {
            await axios
                .get(`api/entradas/${this.$route.params.id}`)
                .then((res) => {
                    console.log(res);
                    this.entrada = res.data;
                })
                .catch((err) => {
                    console.error(err);
                    this.entrada = [];
                });
        },
    },
};
</script>

