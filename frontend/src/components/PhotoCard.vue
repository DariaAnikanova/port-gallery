<template>
  <v-card
    flat
    height="30vh"
    :key="photo.id"
    class="rounded-lg d-flex flex-column"
  >
    <v-img
      :alt="'Photo of ' + photo.title"
      :src="photo.img"
      class="d-flex align-end"
      height="60%"
    >
      <v-card-title class="white--text">{{ photo.title }}</v-card-title>
    </v-img>
    <v-card-text :class="this.$route.name == 'Version1' ? 'px-8' : ''">
      {{ photo.description }}

      <div class="d-flex align-center">
        <v-icon v-if="photo.featured" large color="red">mdi-heart</v-icon>
        <v-spacer></v-spacer>
        <p class="grey--text mb-0">{{ photo.date }}</p>
      </div>
    </v-card-text>
  </v-card>
</template>

<script>
export default {
  name: "PhotoCard",
  data: () => ({}),
  props: { photo: Object },
};
</script>
