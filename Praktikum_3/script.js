function tampil(){
    alert("Halo");
    //menampilkan pop up Halo
}

let x = window.prompt("Masukan Nama Anda");
window.alert('Halo ' + x);
//menampilkan pop up untuk input nama
//menampilkan pop up halo dan nama yang dimasukan

let warna = document.getElementById('warna');
warna.addEventListener('change',(event) =>{
    document.body.style.backgroundColor = warna.value; 
});
//merubah warna backround



