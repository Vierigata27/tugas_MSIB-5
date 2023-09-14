class Gempa {
    constructor(lokasi, skala) {
        this.lokasi = lokasi;
        this.skala = skala;
    }

    dampak() {
        let Hasil_kerusakan = "";

        if (this.skala >= 0 && this.skala <= 2) {
            Hasil_kerusakan = "Tidak terasa";
        } else if (this.skala > 2 && this.skala <= 4) {
            Hasil_kerusakan = "Bangunan retak-retak";
        } else if (this.skala > 4 && this.skala <= 6) {
            Hasil_kerusakan = "Bangunan roboh";
        } else {
            Hasil_kerusakan = "Bangunan roboh dan berpotensi tsunami";
        }
        document.write("<tr>");
        document.write("<td> " + this.lokasi + "</td>");
        document.write("<td> " + this.skala + "</td>");
        document.write("<td> " + Hasil_kerusakan + "</td>");
        document.write("</tr>");
    }
}

// Membuat objek gempa
let gempa1 = new Gempa("Aceh", 9.1);
let gempa2 = new Gempa("Palu", 7.4);
let gempa3 = new Gempa("Palu", 5.9);
let gempa4 = new Gempa("Nias", 8.7);
let gempa5 = new Gempa("Blitar", 5.7);

// Memanggil fungsi dampak dari dalam class
gempa1.dampak();
gempa2.dampak();
gempa3.dampak();
gempa4.dampak();
gempa5.dampak();
