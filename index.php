<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="./dist/css/styles.css">
    <meta charset="utf-8">
    <title>Britecore - Test Project</title>
  </head>
  <body>
    <div id="app">
      <h1>Commercial Property - Add Field</h1>

      <div class="card-field">

        <div class="card-field--types">
          <h2>Field Types</h2>
          <div class="field-types--filter">
            <input type="text" v-model="search" placeholder="Filter Types.."/>
          </div><!-- filter -->

          <div id="type--text" class="type" v-bind:class="{ active: isActive }">
            <h4>H Text</h4>
            <h5>Definition</h5>
            <span>String of text</span>
          </div><!-- text -->
          <div id="type--date" class="type">
            <h4>Date</h4>
          </div><!-- date -->
          <div id="type--vin" class="type">
            <h4>VIN</h4>
          </div><!-- vin -->

        </div><!-- types -->

        <div class="card-field--details">

          <div class="details-title"><h2>Field Details</h2></div>

          <div id="details">
            <form>
              <div class="row">
                <div class="col-sm-6">
                  <label for="display-label">Display Label</label>
                  <input type="text" id="display-label" v-model="form.label">
                </div>

                <div class="col-sm-6">
                  <label for="reference-name">Reference Name</label>
                  <input v-on:blur type="text" id="reference-name" v-model="form.reference">
                </div>

                <div class="col-sm-6">
                  <label for="default-value">Default Value</label>
                  <input type="text" id="default-value" v-model="form.default">

                  <label for="custom-validation">Custom Validation</label>
                  <input type="text" id="custom-validation" v-model="form.validation">
                </div>
                data: {{$data | json 2}}
              </div><!-- .row -->

              <div class="row">
                <div class="col-sm-12">
                  <h4>Tags</h4>
                </div>
                <div class="col-sm-6">
                  Tag Group
                  <div id="tag-group"></div>
                </div><!-- .col-sm-6 -->
                <div class="col-sm-6">
                  Tags
                  <div id="tags">
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

      </div><!-- .card-field -->
    </div>
    <footer>
      <script src="./dist/js/scripts.js"></script>
    </footer>
  </body>
</html>
