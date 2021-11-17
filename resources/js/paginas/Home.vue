<template>
    <main class="container">
        <div v-for="entrada in entradas" v-bind:key="entrada.id">
            <router-link
                class="text-blue-500 text-2xl"
                :to="{ name: 'mostrarEntrada', params: { id: entrada.id } }"
            >
                <h2>{{ entrada.titulo }}</h2>
            </router-link>
            <p class="pb-2">{{ entrada.subtitulo }}</p>
            <hr class="" />
        </div>
    </main>
</template>

//TODO: Arreglar router link :to
<script>
export default {
    name: "entradas",
    data() {
        return {
            entradas: [],
        };
    },
    mounted() {
        this.getEntradas();
    },

    methods: {
        async getEntradas() {
            await axios
                .get("api/entradas")
                .then((res) => {
                    console.log(res);
                    console.log(this.$route);
                    this.entradas = res.data;
                })
                .catch((err) => {
                    console.error(err);
                    this.entradas = [];
                });
        },
    },
};
</script>
