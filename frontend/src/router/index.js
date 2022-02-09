import Vue from "vue";
import VueRouter from "vue-router";
import Version1 from "../views/Version1.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Version1",
    component: Version1,
  },
  {
    path: "/v2",
    name: "Version2",
    component: () =>
      import(/* webpackChunkName: "Version2" */ "../views/Version2.vue"),
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
