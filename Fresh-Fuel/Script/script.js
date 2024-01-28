document.querySelector("#check").addEventListener("change", function () {
  let main = document.querySelector("main");
  let footer = document.querySelector("footer");

  if (this.checked) {
    main.classList.add("mainDel");
    footer.classList.add("footerDel");
  } else {
    main.classList.remove("mainDel");
    footer.classList.remove("footerDel");
  }
});
