(function () {
  const menuToggle = document.querySelector(".menu-toggle");

  menuToggle.onclick = function (e) {
    const body = document.querySelector("body");
    const hypertexts = document.getElementsByClassName("option");

    body.classList.toggle("hide-sidebar");

    for (let hypertext of hypertexts) {
      hypertext.classList.toggle("hide-sidebar-text");
    }
  };
})();

function isNumberKey(event) {
  return event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57);
}
