/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/detail.js ***!
  \********************************/
window.addEventListener("DOMContentLoaded", function () {
  var inputDate = document.getElementById("input-date");
  inputDate.addEventListener("blur", function (e) {
    var outputDate = document.getElementById("output-date");
    outputDate.textContent = e.target.value;
  });
  var inputTime = document.getElementById("input-time");
  inputTime.addEventListener("blur", function (e) {
    var outputTime = document.getElementById("output-time");
    outputTime.textContent = e.target.value;
  });
  var inputNum = document.getElementById("input-num");
  inputNum.addEventListener("blur", function (e) {
    var outputNum = document.getElementById("output-num");
    outputNum.textContent = e.target.value + "人";
  });
});
/******/ })()
;