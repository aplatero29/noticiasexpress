<template>
    <main class="container">
        <div>
            <p class="py-2">{{ entrada.subtitulo }}</p>
        </div>
    </main>
</template>

<script>
export default {
    name: "mostrarEntrada",
    data() {
        return {
            id: this.$route.params.id,
            entrada: {},
        };
    },
    mounted() {
        this.getEntrada();
    },

    methods: {
        async getEntrada() {
            await axios
                .get(`/api/entradas/${this.id}`)
                .then((res) => {
                    console.log(res);
                    this.entrada = res.data;
                })
                .catch((err) => {
                    console.error(err);
                    this.entrada = {};
                });
        },
    },
};
</script>
