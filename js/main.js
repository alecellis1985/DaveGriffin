var debtNs = (function () {
  'use strict';

  var nsFunctions = {
    nextStep: nextStep
  };

  return nsFunctions;

  function nextStep() {
    var debtDiv = $(this).parents('.debt');
    var classes = debtDiv.attr('class').split(' ');
    var index = classes[1].split('-')[1];
    debtDiv.fadeOut(function () {
      $('.sec-' + (parseInt(index) + 1)).delay(1).fadeIn();
    });
    console.log('clickedIndx:' + index);


  }
})();


$(document).ready(function () {
  $('.debt a').on('click', debtNs.nextStep);
});