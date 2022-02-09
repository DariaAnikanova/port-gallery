<template>
  <div>
    <bio-card></bio-card>
    <v-row class="pt-4 pt-sm-6">
      <v-col cols="12" sm="6" md="4" v-for="photo in album" :key="photo.id">
        <photo-card :photo="photo" />
      </v-col>
    </v-row>
  </div>
</template>

<script>
import PhotoCard from "../components/PhotoCard.vue";
import BioCard from "../components/BioCard.vue";

export default {
  name: "Version1",
  components: {
    PhotoCard,
    BioCard,
  },
  computed: {
    album() {
      return this.$store.state.album;
    },
  },
};
</script>
