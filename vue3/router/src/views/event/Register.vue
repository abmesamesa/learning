<template>
  <p>Registration form here</p>
  <button @click="register">Register Me!</button>
</template>

<script>
export default {
  props: ['event'],
  methods: {
    register() {
      // If registration API call is successful
      // Push back to the event details
      this.$router.push({
        name: 'EventDetails',
        // we can omit this line as the id is expected (router index.js) and it will be injected by default
        params: { id: this.event.id }
      })
    }
  }
}
</script>
