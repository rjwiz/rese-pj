/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/search.js ***!
  \********************************/
$(function () {
  searchWord = function searchWord() {
    var searchText = $(this).val(),
      targetText;
    $(".shop__card").each(function () {
      targetText = $(this).text();
      if (targetText.indexOf(searchText) != -1) {
        $(this).removeClass("hidden");
      } else {
        $(this).addClass("hidden");
      }
    });
  };
  $("#search-text").on("input", searchWord);
});
$(function () {
  searchCategories = function searchCategories() {
    var searchCategory = $(this).val(),
      targetCategory;
    $(".shop__card").each(function () {
      targetCategory = $(this).val();
      if (targetCategory.indexOf(searchCategory) != -1) {
        $(this).removeClass("hidden");
      } else {
        $(this).addClass("hidden");
      }
    });
  };
  $("#search-category").on("change", searchCategories);
});
/******/ })()
;