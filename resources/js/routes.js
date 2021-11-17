const Home = () => import("./paginas/Home.vue");
const Contacto = () => import("./paginas/Contacto.vue");

//Importar paginas entrada
const Mostrar = () => import("./paginas/entradas/Mostrar.vue");
const Crear = () => import("./paginas/entradas/Crear.vue");
const Editar = () => import("./paginas/entradas/Editar.vue");

export const routes = [
    /*     {
        path: "*",
        component: 404,
    }, */
    {
        name: "home",
        path: "/",
        component: Home,
    },
    {
        name: "contacto",
        path: "/contacto",
        component: Contacto,
    },
    {
        name: "mostrarEntrada",
        path: "/entrada/:id",
        component: Mostrar,
    },
    {
        name: "crearEntradas",
        path: "/entrada/crear",
        component: Crear,
    },
    {
        name: "editarEntradas",
        path: "/entrada/editar",
        component: Editar,
    },
];
