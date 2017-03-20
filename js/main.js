String.prototype.replaceAll = function (find, replace) {
  var str = this;
  return str.replace(new RegExp(find.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'), 'g'), replace);
};
var debtNs = (function (states_) {
  'use strict';
  var postInfo = {};
  var isValid = true;
  var lastStep = 6;
  var regexPatterns = {
    '\\d{3}': /\d{3}/,
    '\\d{4}': /\d{4}/
  }

  var keyValPostInfoDic = ['channel', 'Recording_URL', 'Debt'];

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
    if (index < 4) {
      postInfo[keyValPostInfoDic[index - 1]] = $(this).text();
    }
    if (parseInt(index) === lastStep) {
      var formObj = {};
      $.each($('form').serializeArray(), function (i, input) {
        formObj[input.name] = input.value;
      });
      $.extend(postInfo, formObj);
      var debtarr = postInfo.Debt.replaceAll('$', '').replaceAll(',', '').split('-');
      postInfo.Debt = (debtarr[1] - debtarr[0]) / 2;
      $.ajax({
        type: "POST",
        url: 'api/addUser',
        data: postInfo,
        success: function (response) {
          console.log(response);
          debtDiv.fadeOut(function () {
            $('.sec-' + (parseInt(index) + 1)).delay(1).fadeIn();
          });
        }
      });
    } else {
      debtDiv.fadeOut(function () {
        $('.sec-' + (parseInt(index) + 1)).delay(1).fadeIn();
      });
    }
    console.log(debtNs.postInfo);
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
      $(input).parents(".form-group").find('p').hide();
    } else {
      $(input).parents(".form-group").find('p').show();
    }
    return isValid;
  }

  function checkStrVal(input) {
    var inp = $(input);
    if (inp.attr('maxlength') !== undefined && parseInt(inp.val().length > inp.attr('maxlength'))) {
      return false;
    }
    if (inp.attr('minlength') !== undefined && parseInt(inp.attr('minlength')) > inp.val().length) {
      return false;
    }
    if (inp.attr('pattern') !== undefined && !regexPatterns[inp.attr('pattern')].test(input.value)) {
      return false;
    }
    return input.value !== '' && input.value !== undefined;
  }

  function fillStates() {
    $('#states ul').append(createLiList(states_));
  }

  function isValidPostalCode(input) {
    var ret = /^([0-9]{5})(?:[-\s]*([0-9]{4}))?$/.test(input.value);
    if (ret) {
      $(input).parents(".form-group").find('p').hide();
    } else {
      $(input).parents(".form-group").find('p').show();
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
    var inputs = $('.sec-6 input');
    debtNs.isValid = debtNs.validateInputs(inputs);
    if (debtNs.isValid) {
      var phones = [];
      inputs.each(function () {
        phones.push($(this).val());
      });
      debtNs.postInfo.primary_phone = phones.join('');
    }
  });

  $('.debt a').on('click', debtNs.nextStep);
  debtNs.fillStates();
  $('#states li').on('click', function () {
    debtNs.postInfo.state = $(this).attr('id');
    $('#states p').hide();
    $('#statesUl span').text($(this).text());
  });

});