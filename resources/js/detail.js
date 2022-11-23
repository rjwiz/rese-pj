window.addEventListener("DOMContentLoaded", function () {
    const inputDate = document.getElementById("input-date");
    inputDate.addEventListener("blur", function (e) {
        const outputDate = document.getElementById("output-date");
        outputDate.textContent = e.target.value;
    });

    const inputTime = document.getElementById("input-time");
    inputTime.addEventListener("blur", function (e) {
        const outputTime = document.getElementById("output-time");
        outputTime.textContent = e.target.value;
    });

    const inputNum = document.getElementById("input-num");
    inputNum.addEventListener("blur", function (e) {
        const outputNum = document.getElementById("output-num");
        outputNum.textContent = e.target.value+"人";
    });
});
