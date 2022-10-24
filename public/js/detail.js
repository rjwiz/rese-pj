/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/detail.js ***!
  \********************************/
window.addEventListener("DOMContentLoaded", function () {
  var inputDate = document.getElementById("input-date");
  var outputDate = document.getElementById("output-date");
  inputDate.addEventListener("blur", function (e) {
    outputDate.textContent = e.target.value;
  });
});
window.addEventListener("DOMContentLoaded", function () {
  var inputTime = document.getElementById("input-time");
  var outputTime = document.getElementById("output-time");
  inputTime.addEventListener("blur", function (e) {
    outputTime.textContent = e.target.value;
  });
});
window.addEventListener("DOMContentLoaded", function () {
  var inputNum = document.getElementById("input-num");
  var outputNum = document.getElementById("output-num");
  inputNum.addEventListener("blur", function (e) {
    outputNum.textContent = e.target.value;
  });
});
/******/ })()
;