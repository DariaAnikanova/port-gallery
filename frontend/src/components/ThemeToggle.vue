<template>
  <v-switch label="Dark Theme" @change="toggleTheme()"></v-switch>
</template>

<script>
export default {
  name: "ThemeToggle",

  data: () => ({
    darkTheme: false,
  }),
  methods: {
    toggleTheme() {
      this.$vuetify.theme.dark = !this.$vuetify.theme.dark;
    },
  },
};
</script>
