function tambahPenumpang(nama, penumpang) {
  if (penumpang.length == 0) {
    penumpang.push(nama);
    return penumpang;
  }

  for (let i = 0; i < penumpang.length; i++) {
    if (penumpang[i] == undefined) {
      penumpang[i] = nama;
      return penumpang;
    }

    if (penumpang[i] == nama) {
      console.log(nama + " sudah ada di dalam angkot.");
      return penumpang;
    }
  }
  penumpang.push(nama);
  return penumpang;
}

let penumpang = [];

penumpang = tambahPenumpang("Asep", penumpang);
penumpang = tambahPenumpang("Budi", penumpang);
penumpang = tambahPenumpang("Asep", penumpang);
penumpang = tambahPenumpang("Cici", penumpang);
console.log(penumpang);
