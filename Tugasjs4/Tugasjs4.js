function data_pembeli() {
    let forms = document.getElementById('plg');
    let nama = forms.nama.value;
    let produk = forms.produk.value;
    let jumlah = forms.jumlah.value;
    let harga_barang;

    switch (produk) {
        case 'TV':
            harga_barang = 2000000;
            break;
        case 'AC':
            harga_barang = 3000000;
            break;
        case 'Kulkas':
            harga_barang = 4000000;
            break;
        default:
            harga_barang = 0;
            break;
    }

    // harga kotor
    let harga_kotor = harga_barang * jumlah;

    // diskon barang
    let diskon = 0;
    if (produk === 'Kulkas' && jumlah >= 3) {
        diskon = 0.3 * harga_kotor; 
    } else if (produk === 'AC' && jumlah >= 3) {
        diskon = 0.2 * harga_kotor; 
    } else {
        diskon = 0.1 * harga_kotor; 
    }

    // ppn
    let ppn = 0.1 * (harga_kotor - diskon);

    // harga bayar
    let total_harga = (harga_kotor - diskon) + ppn;

    let data = `
        Data Pembelian
        \nNama : ${nama}
        \nProduk : ${produk}
        \nJumlah : ${jumlah}
        \nHarga Kotor : Rp ${harga_kotor.toLocaleString('id-ID')}
        \nDiskon : Rp ${diskon.toLocaleString('id-ID')}
        \nPPN : Rp ${ppn.toLocaleString('id-ID')}
        \nTotal : Rp ${total_harga.toLocaleString('id-ID')}
    `;

    alert(data);
}

