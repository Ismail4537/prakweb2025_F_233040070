const namaToko = "Toko Serba Ada";
const hargaBuku = 50000;
const hargaPensil = 2000;

function hitungTotal(jmlBuku, jmlPensil) {
  return jmlBuku * hargaBuku + jmlPensil * hargaPensil;
}

function cetakStruk(total) {
  console.log(namaToko);
  console.log("Total Belanja: Rp " + total);
}

module.exports = { hitungTotal, cetakStruk };
