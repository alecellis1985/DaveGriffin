var debtNs = (function (states_) {
  'use strict';
  var postInfo = {};
  var isValid = true;
  var nsFunctions = {
    nextStep: nextStep,
    isValidPostalCode: isValidPostalCode,
    fillStates: fillStates,
    postInfo: postInfo,
    validateInputShowWarning: validateInputShowWarning,
    validateInputs: validateInputs,
    isValid: isValid
  };

  return nsFunctions;

  function nextStep() {
    if (!debtNs.isValid) {
      return;
    }
    var debtDiv = $(this).parents('.debt');
    var classes = debtDiv.attr('class').split(' ');
    var index = classes[1].split('-')[1];
    postInfo[index] = $(this).text();
    debtDiv.fadeOut(function () {
      $('.sec-' + (parseInt(index) + 1)).delay(1).fadeIn();
    });
  }

  function validateInputs(inputs) {
    var isValid = true;
    var length = inputs.length;
    for (var i = 0; i < length; i++) {
      if (!validateInputShowWarning(inputs[i])) {
        isValid = false;
      }
    }
    return isValid;
  }

  function validateInputShowWarning(input) {
    var isValid = checkStrVal(input);
    if (isValid) {
      $(input).next("p").hide();
    } else {
      $(input).next("p").show();
    }
    return isValid;
  }

  function checkStrVal(input) {
    return input.value !== '' && input.value !== undefined;
  }

  function fillStates() {
    $('#states ul').append(createLiList(states_));
  }

  function isValidPostalCode(input) {
    var ret = /^([0-9]{5})(?:[-\s]*([0-9]{4}))?$/.test(input.value);
    if (ret) {
      $(input).next("p").hide();
    } else {
      $(input).next("p").show();
    }
    return ret;
  }

  function createLiList(array) {
    //Fastest way to add elements to dom
    var list = [];
    for (var i = 0; i < array.length; i++) {
      list[list.length] = "<li id='" + array[i].code + "'>" + array[i].name + "</li>";
    }
    return list.join('');
  }

})(states_);


$(document).ready(function () {
  $('#location').on('click', function (e) {
    var isValid = true;

    isValid = debtNs.isValidPostalCode($('.sec-4 input')[0]);

    if (debtNs.postInfo.state === undefined) {
      isValid = false;
      $('#states p').show();
    }

    debtNs.isValid = isValid;
  });

  $('#name').on('click', function (e) {
    debtNs.isValid = debtNs.validateInputs($('.sec-5 input'));
  });

  $('#phoneNr').on('click', function (e) {
    debtNs.isValid = debtNs.validateInputs($('.sec-6 input'));
  });

  $('.debt a').on('click', debtNs.nextStep);
  debtNs.fillStates();
  $('#states li').on('click', function () {
    debtNs.postInfo.state = $(this).attr('id');
    $('#states p').hide();
    $('#statesUl span').text($(this).text());
  });



});