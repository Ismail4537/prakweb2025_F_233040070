const kelas = ["A", "B", "C", "D", "E"];

const [senin, selasa, rabu, kamis, jumat] = kelas;
console.log("kelas senin : " + senin); // Output: A
console.log("kelas rabu : " + rabu); // Output: C
console.log("");

const siswa = {
  nama: "Andi",
  umur: 6,
  kelas: "B",
};

const { nama, umur } = siswa;
console.log("Nama siswa: " + nama); // Output: Andi
console.log("Umur siswa: " + umur); // Output: 6
console.log("");

const { nama: n, umur: u } = siswa;
console.log("Nama siswa: " + n); // Output: Andi
console.log("Umur siswa: " + u); // Output: 6
