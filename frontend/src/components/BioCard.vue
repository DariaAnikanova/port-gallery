<template>
  <v-card
    flat
    class="px-2 px-sm-4 px-md-16 py-6 py-md-8 d-flex flex-column flex-md-row rounded-lg"
  >
    <v-avatar size="150px" class="align-self-center">
      <v-img :src="user.profile_picture"></v-img>
    </v-avatar>

    <div class="d-flex flex-column">
      <v-card-title class="font-weight-black text-h4 text-break">{{
        user.name
      }}</v-card-title>
      <v-card-subtitle class="grey--text font-weight-black pb-0 text-subtitle-1"
        >Bio</v-card-subtitle
      >
      <v-card-text>
        <p class="grey--text bio text-body-1 mb-0">{{ user.bio }}</p>
      </v-card-text>
    </div>

    <v-card-text
      class="grey--text contact-info d-flex flex-column justify-center pt-0"
    >
      <v-card-subtitle
        class="grey--text pt-md-4 pa-0 text-subtitle-1 font-weight-black"
        >Phone</v-card-subtitle
      >
      <p class="pink--text text-subtitle-1 text--lighten-1">
        {{ user.phone }}
      </p>
      <v-card-subtitle class="grey--text pa-0 text-subtitle-1 font-weight-black"
        >Email</v-card-subtitle
      >
      <p class="pink--text text-subtitle-1 text--lighten-1">
        {{ user.email }}
      </p>
    </v-card-text>
  </v-card>
</template>

<script>
export default {
  name: "PhotoCard",

  data: () => ({}),
  computed: {
    user() {
      return this.$store.state.userData;
    },
  },
};
</script>
<style lang="scss" scoped>
.contact-info > p {
  margin: 0;
  line-height: 1.25rem;
}

.bio {
  line-height: 1.25rem;
  font-size: 1rem;
}
</style>
