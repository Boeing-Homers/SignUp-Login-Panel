// javascript used for changing icon colors and label size and style.

var input = document.getElementsByClassName("input-email");
var label = document.getElementsByClassName("label-email");
var input1 = document.getElementsByClassName("input-password");
var label1 = document.getElementsByClassName("label-password");
var input2 = document.getElementsByClassName("input-user");
var label2 = document.getElementsByClassName("label-user");

var mailicon = document.getElementsByClassName("mailicon");
var passicon = document.getElementsByClassName("passicon");
var usericon = document.getElementsByClassName("usericon");
var i;
var j;
var k;

for (j = 0; j < input1.length; j++) {
  input1[j].addEventListener("focus", focusFunction);
  input1[j].addEventListener("blur", blurFunction);

  function focusFunction() {
    for (j = 0; j < label1.length; j++) {
      label1[j].style.fontSize = "12px";
      label1[j].style.textTransform = "uppercase";
      label1[j].style.fontWeight = "bold";
      label1[j].style.letterSpacing = "1px";
    }
    for (j = 0; j < passicon.length; j++) {
      passicon[j].style.filter =
        "invert(69%) sepia(55%) saturate(4421%) hue-rotate(183deg) brightness(102%) contrast(99%)";
    }
  }
  function blurFunction() {
    for (j = 0; j < label1.length; j++) {
      label1[j].style.fontSize = "16px";
      label1[j].style.textTransform = "none";
      label1[j].style.fontWeight = "normal";
      label1[j].style.letterSpacing = "0";
    }
    for (j = 0; j < passicon.length; j++) {
      passicon[j].style.filter =
        "invert(63%) sepia(13%) saturate(715%) hue-rotate(182deg) brightness(91%) contrast(92%)";
    }
  }
}

for (i = 0; i < input.length; i++) {
  input[i].addEventListener("focus", focusFunction);
  input[i].addEventListener("blur", blurFunction);

  function focusFunction() {
    for (i = 0; i < label.length; i++) {
      label[i].style.fontSize = "12px";
      label[i].style.textTransform = "uppercase";
      label[i].style.fontWeight = "bold";
      label[i].style.letterSpacing = "1px";
    }
    for (i = 0; i < mailicon.length; i++) {
      mailicon[i].style.filter =
        "invert(69%) sepia(55%) saturate(4421%) hue-rotate(183deg) brightness(102%) contrast(99%)";
    }
  }
  function blurFunction() {
    for (i = 0; i < label.length; i++) {
      label[i].style.fontSize = "16px";
      label[i].style.textTransform = "none";
      label[i].style.fontWeight = "normal";
      label[i].style.letterSpacing = "0";
    }
    for (i = 0; i < mailicon.length; i++) {
      mailicon[i].style.filter =
        "invert(63%) sepia(13%) saturate(715%) hue-rotate(182deg) brightness(91%) contrast(92%)";
    }
  }
}

for (k = 0; k < input2.length; k++) {
  input2[k].addEventListener("focus", focusFunction);
  input2[k].addEventListener("blur", blurFunction);

  function focusFunction() {
    for (k = 0; k < label2.length; k++) {
      label2[k].style.fontSize = "12px";
      label2[k].style.textTransform = "uppercase";
      label2[k].style.fontWeight = "bold";
      label2[k].style.letterSpacing = "1px";
    }
    for (k = 0; k < usericon.length; k++) {
      usericon[k].style.filter =
        "invert(69%) sepia(55%) saturate(4421%) hue-rotate(183deg) brightness(102%) contrast(99%)";
    }
  }
  function blurFunction() {
    for (k = 0; k < label2.length; k++) {
      label2[k].style.fontSize = "16px";
      label2[k].style.textTransform = "none";
      label2[k].style.fontWeight = "normal";
      label2[k].style.letterSpacing = "0";
    }
    for (k = 0; k < usericon.length; k++) {
      usericon[k].style.filter =
        "invert(63%) sepia(13%) saturate(715%) hue-rotate(182deg) brightness(91%) contrast(92%)";
    }
  }
}
