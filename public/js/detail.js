/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/detail.js ***!
  \********************************/
window.addEventListener("DOMContentLoaded", function () {
  var inputDate = document.getElementById("input-date"); // ①
  var outputDate = document.getElementById("output-date"); // ①

  inputDate.addEventListener("blur", function (e) {
    outputDate.textContent = e.target.value;
  });
});
window.addEventListener("DOMContentLoaded", function () {
  var inputTime = document.getElementById("input-time"); // ①
  var outputTime = document.getElementById("output-time"); // ①

  inputTime.addEventListener("blur", function (e) {
    outputTime.textContent = e.target.value;
  });
});
window.addEventListener("DOMContentLoaded", function () {
  var inputNum = document.getElementById("input-num"); // ①
  var outputNum = document.getElementById("output-num"); // ①

  inputNum.addEventListener("blur", function (e) {
    outputNum.textContent = e.target.value;
  });
});
/******/ })()
;