const Home = () => import("./components/Home.vue");
const Contacto = () => import("./components/Contacto.vue");

//Importar componentes entrada
const Mostrar = () => import("./components/entrada/Mostrar.vue");
const Crear = () => import("./components/entrada/Crear.vue");
const Editar = () => import("./components/entrada/Editar.vue");

export const routes = [
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
        path: "/crear",
        component: Crear,
    },
    {
        name: "editarEntradas",
        path: "/editar/:id",
        component: Editar,
    },
];
