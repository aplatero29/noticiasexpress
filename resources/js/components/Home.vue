<template>
    <main class="container">
        <div v-for="entrada in entradas" :key="entrada.id">
            <router-link class= "text-blue-500 text-2xl" :to="{ path: '/entrada', query: { id: 'id'}}">{{ entrada.titulo }}</router-link>
            <p class="py-2">{{ entrada.subtitulo }}</p>
            <hr />
        </div>
    </main>
</template>

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
