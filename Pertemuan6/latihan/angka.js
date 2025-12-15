const angka = [-1, 2, 3, -4, 5, -6, 7, 8, -9, 10];
let angkaBaru = [];

const arrFilter = angka.filter((a) => {
  if (a >= 0) {
    angkaBaru.push(a);
  }
});

console.log(angkaBaru);

const angkaBaru0 = angka.map((a) => a * 2);
console.log(angkaBaru0);

const angkaBaru1 = angka.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
console.log(angkaBaru1);
