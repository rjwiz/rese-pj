window.addEventListener("DOMContentLoaded", function () {
    const inputDate = document.getElementById("input-date"); // ①
    const outputDate = document.getElementById("output-date"); // ①

    inputDate.addEventListener("blur", function (e) {
        outputDate.textContent = e.target.value;
    });
});


window.addEventListener("DOMContentLoaded", function () {
    const inputTime = document.getElementById("input-time"); // ①
    const outputTime = document.getElementById("output-time"); // ①

    inputTime.addEventListener("blur", function (e) {
        outputTime.textContent = e.target.value;
    });
});

window.addEventListener("DOMContentLoaded", function () {
    const inputNum = document.getElementById("input-num"); // ①
    const outputNum = document.getElementById("output-num"); // ①

    inputNum.addEventListener("blur", function (e) {
        outputNum.textContent = e.target.value;
    });
});
