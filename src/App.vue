<template>
  <div id="app">
    <h1>Commercial Property - Add Field</h1>
    <div class="card-field">
      <Module1/>
      <Module2/>
    </div><!-- .card-field -->
  </div>
</template>

<script>
import Module1 from './components/Module1.vue'
import Module2 from './components/Module2.vue'

export default {
  name: 'app',
  components: {
    Module1,
    Module2
  }
}
</script>

<style>
</style>
