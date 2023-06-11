const keyword = document.getElementById("keyword");
const searchContainer = document.getElementById("search-container");

//event ketika kita mengetikkna keyword pencarian//
keyword.onkeyup = function () {
  fetch("ajax/search.php?keyword=" + keyword.value) //mengambil data dari halaman lain //
    .then((response) => response.text())
    .then((text) => (searchContainer.innerHTML = text));
};
