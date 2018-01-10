<template>
  <div class="card-field--types">
    <h2>Field Types</h2>

    <div class="field-types--filter">
      <input type="text" placeholder="Filter Types.."/>
    </div><!-- filter -->

    <div id="type--text" class="type" @click="selected = 1" :class="{highlight:selected == 1}">
      <h4>H Text</h4>
      <h5>Definition</h5>
      <span>String of text</span>
    </div><!-- text -->
    <div id="type--date" class="type"  @click="selected = 2" :class="{highlight:selected == 2}">
      <h4>Date</h4>
    </div><!-- date -->
    <div id="type--vin" class="type" @click="selected = 3" :class="{highlight:selected == 3}">
      <h4>VIN</h4>
    </div><!-- vin -->

  </div><!-- types -->
</template>

<script>
export default {

  data() {
    return{
      selected: undefined
    }
  },
  methods: {
    myFilter: function(){
        this.isActive = !this.isActive;
      // some code to filter users
    }
  }
}
</script>

<style>
</style>
