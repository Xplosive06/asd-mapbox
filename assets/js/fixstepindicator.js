function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i,
    steps = document.getElementsByClassName("step");
  for (i = 0; i < steps.length; i++) {
    steps[i].className = steps[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  steps[n].className += " active";
}
