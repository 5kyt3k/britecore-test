<template>
  <div class="card-field--details">
    <div class="details-title"><h2>Field Details</h2></div>

    <div id="details">
      <form>
        <div class="row">
          <div class="col-sm-6">
            <label for="display-label">Display Label</label>
            <input type="text" id="display-label" v-model.lazy="form.label">
          </div>

          <div class="col-sm-6">
            <label for="reference-name">Reference Name</label>
            <input type="text" id="reference-name" :value="form.label">
          </div>

          <div class="col-sm-6">
            <label for="default-value">Default Value</label>
            <input type="text" id="default-value" v-model="form.default">

            <label for="custom-validation">Custom Validation</label>
            <input type="text" id="custom-validation" v-model="form.validation">
          </div>

        </div><!-- .row -->

        <div class="row">
          <div class="col-sm-12">
            <h4>Tags</h4>
          </div>
          <div class="col-sm-6">
            Tag Group
            <div id="tag-group">
              <li>Vinmaster</li>
              <li>ISO</li>
              <li>Tag 3</li>
            </div>
          </div><!-- .col-sm-6 -->
          <div class="col-sm-6">
            Tags
            <div id="tags">
              {{tag}}
            </div><!-- .tags -->
          </div><!-- .col-sm-6 -->
        </div><!-- .row -->

      </form>

      <div class="card-field--groups">
        <h3>Field Groups</h3>
        <span>Choose a group from this input</span>
      </div><!-- groups -->

    </div><!-- #details -->
  </div><!-- details -->
</template>

<script>
export default {
  data() {
    return {
      form : {
        label: '',
        default:'',
        validation:''
      },
      tag:'',
    }
  }
}
</script>

<styles>
</styles>
