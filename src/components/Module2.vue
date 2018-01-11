<template>
  <div class="card-field--details">
    <div class="details-title"><h2>Field Details</h2></div>

    <div id="details">
      <form action="" method="post" onsubmit="return validate()">
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

            <label for="email">E-mail</label>
            <input name="email" id="email"  v-model="form.validation" value="" required="required" aria-required="true" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" title="Your email address" type="email" spellcheck="false" size="30" />
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

        <input id="submit" type='submit' value='Check Form'>

      </form>

      <div class="card-field--groups">
        <h3>Field Groups</h3>
        <span>Choose a group from this input</span>
      </div><!-- groups -->

    </div><!-- #details -->
  </div><!-- details -->
</template>

<script>
function addEvent(node, type, callback) {
  if (node.addEventListener) {
    node.addEventListener(
      type,
      function(e) {
        callback(e, e.target);
      },
      false
    );
  } else if (node.attachEvent) {
    node.attachEvent("on" + type, function(e) {
      callback(e, e.srcElement);
    });
  }
}

//identify whether a field should be validated
//ie. true if the field is neither readonly nor disabled,
//and has either "pattern", "required" or "aria-invalid"
function shouldBeValidated(field) {
  return (
    !(field.getAttribute("readonly") || field.readonly) &&
    !(field.getAttribute("disabled") || field.disabled) &&
    (field.getAttribute("pattern") || field.getAttribute("required"))
  );
}

//field testing and validation function
function instantValidation(field) {
  //if the field should be validated
  if (shouldBeValidated(field)) {
    //the field is invalid if:
    //it's required but the value is empty
    //it has a pattern but the (non-empty) value doesn't pass
    var invalid =
      (field.getAttribute("required") && !field.value) ||
      (field.getAttribute("pattern") &&
        field.value &&
        !new RegExp(field.getAttribute("pattern")).test(field.value));

    //add or remove the attribute is indicated by
    //the invalid flag and the current attribute state
    if (!invalid && field.getAttribute("aria-invalid")) {
      field.removeAttribute("aria-invalid");
    } else if (invalid && !field.getAttribute("aria-invalid")) {
      field.setAttribute("aria-invalid", "true");
    }
  }
}

var fields = [
  document.getElementsByTagName("input"),
  document.getElementsByTagName("textarea")
];
for (var a = fields.length, i = 0; i < a; i++) {
  for (var b = fields[i].length, j = 0; j < b; j++) {
    addEvent(fields[i][j], "change", function(e, target) {
      instantValidation(target);
    });
  }
}

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
