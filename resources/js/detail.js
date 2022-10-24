window.addEventListener("DOMContentLoaded", function () {
    const inputDate = document.getElementById("input-date");
    const outputDate = document.getElementById("output-date");

    inputDate.addEventListener("blur", function (e) {
        outputDate.textContent = e.target.value;
    });
});

window.addEventListener("DOMContentLoaded", function () {
    const inputTime = document.getElementById("input-time");
    const outputTime = document.getElementById("output-time");

    inputTime.addEventListener("blur", function (e) {
        outputTime.textContent = e.target.value;
    });
});

window.addEventListener("DOMContentLoaded", function () {
    const inputNum = document.getElementById("input-num");
    const outputNum = document.getElementById("output-num");

    inputNum.addEventListener("blur", function (e) {
        outputNum.textContent = e.target.value;
    });
});
