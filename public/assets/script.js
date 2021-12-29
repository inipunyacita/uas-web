window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navmenu");
  navbar.classList.toggle("sticky", window.scrollY > 0);
});

const total = document.getElementById("total");
let harga;

function autoJumlah() {
  const selProduk = document.getElementById("produk").value;
  const inpJumlah = document.getElementById("jumlah").value;
  if (selProduk == 1) {
    harga = 2000;
  } else if (selProduk == 2) {
    harga = 12000;
  } else if (selProduk == 3) {
    harga = 7000;
  } else if (selProduk == 4) {
    harga = 5000;
  } else {
    harga = 0;
  }
  total.innerHTML = inpJumlah * harga;
}
