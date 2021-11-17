<template>
    <main>
        <Navbar />
        <div class="container mt-4">
            <router-view></router-view>
        </div>
    </main>
</template>

<script>
import Navbar from "@/components/Navbar.vue";

export default {
    components: {
        Navbar,
    },
};
</script>
