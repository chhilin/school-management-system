import "./assets/main.css";

import { createApp } from "vue";
import { createPinia } from "pinia";
// import index from './components'

import App from "./App.vue";
import router from "./router";
import "./assets/main.css";

const app = createApp(App);
// import TeacherList from "@/components/teacher/TeacherList.vue";
// import CartList from "@/components/CartList.vue";

// app.component("teacher-list", TeacherList);
// // app.component("cart-list", CartList);

app.use(createPinia());
app.use(router);

app.mount("#app");
