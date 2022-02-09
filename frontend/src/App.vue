<template>
  <v-app app>
    <div class="bg" :class="this.$vuetify.theme.dark ? 'bg-dark' : ''"></div>
    <v-app-bar app flat>
      <v-btn depressed to="/"> Version 1 </v-btn>
      <v-btn depressed to="/v2" class="ml-2"> Version 2 </v-btn>
      <v-spacer></v-spacer>
      <theme-toggle />
    </v-app-bar>
    <v-main>
      <v-container :fluid="this.$vuetify.breakpoint.smAndDown">
        <router-view />
      </v-container>
    </v-main>
    <v-footer app fixed class="d-flex justify-center">
      <small> &copy; Nick Reynolds - 20XX</small>
    </v-footer>
  </v-app>
</template>

<script>
import ThemeToggle from "./components/ThemeToggle.vue";

export default {
  components: { ThemeToggle },
  name: "App",

  data: () => ({
    //
  }),
};
</script>

<style lang="scss">
.bg {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url("./assets/landscape6.jpeg") center / cover no-repeat;
  filter: blur(5rem);

  &-dark {
    filter: blur(5rem) saturate(5) contrast(100%);
  }
}
</style>
