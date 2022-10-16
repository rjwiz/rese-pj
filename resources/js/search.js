$(function () {
    searchWord = function () {
        var searchText = $(this).val(), // 検索ボックスに入力された値
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
  searchCategory = function () {
    var searchCategory = $('#search-category option:selected')
    
    $(".shop__card").each(function () {

    });
  };
});