(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()



// if (typeof window !== "undefined") {
//   const urlWithoutHash = window.location.href.split("#")[0];
//   window.history.replaceState(null, null, urlWithoutHash);
// }





// Rumus Kalkulator Kebutuhan


// const resultElem = document.getElementById("hasil");
// const resultElem2 = document.getElementById("hasil-hitungan");
// const btnSubmit = document.getElementById('btn-hitung');
// const btr = document.getElementById('hasil');
// const btr2 = document.getElementById('hasil-hitungan');


// btnSubmit.addEventListener("click", function (event) {
  
//   const usia = document.getElementById("usia").value;
//   const tinggi = document.getElementById("tinggi").value;const berat = document.getElementById('berat').value;
//   const jenisKelamin = document.querySelector('input[name="flexRadioDefault"]:checked').value;
//   const olahraga = document.getElementById('olahraga').value;
//   const aktivitas = document.getElementById('inputaktivitas').value;


//   if (jenisKelamin == 0) {
//     let bmr = parseInt(10 * berat + 6.25 * tinggi - 5 * usia + 5);
//     let tdee = parseInt(bmr * olahraga);
//     btr.style.display = "block";
//     btr2.style.display = "block";
    

//     resultElem.innerHTML = `
//     <div class="d-none justify-content-center d-lg-flex d-md-none d-sm-none" >
//     <div class="hasil-hitung" id="result">
//     <h4 class="mb-3"> Hasil Hitung</h4>
//     <p> Kebutuhan kalori harian kamu adalah ${tdee} kkal/hari. jika kamu tidak olahraga ${bmr}
//     <br>
//     Kebutuhan kalori harian kamu adalah 1172 kkal/hari. Berat badan kamu masih Belum Ideal. Jika kamu ingin menaikkan berat badan! kamu membutuhkan 1406 kkal/hari.Kalori Anda adalah ${tdee} jika tidak olahraga ${bmr}
//     </div>
//     </div>
//     `

//     resultElem2.innerHTML = `
//     <div class="d-flex justify-content-center d-lg-none d-xl-none d-sm-flex" >
//     <div class="hasil-hitung" id="result">
//     <h4 class="mb-3"> Hasil Hitung</h4>
//     <p> Kebutuhan kalori harian kamu adalah ${tdee} kkal/hari. jika kamu tidak olahraga ${bmr}
//     <br>
//     Kebutuhan kalori harian kamu adalah 1172 kkal/hari. Berat badan kamu masih Belum Ideal. Jika kamu ingin menaikkan berat badan! kamu membutuhkan 1406 kkal/hari.Kalori Anda adalah ${tdee} jika tidak olahraga ${bmr}
//     </div>
//     </div>
//   `
    
//      // Mengosongkan nilai input setelah submit
//      document.getElementById("usia").value = "";
//      document.getElementById("tinggi").value = "";
//      document.getElementById("berat").value = "";
//      document.querySelector('input[name="flexRadioDefault"]:checked').checked = false;
//      document.getElementById("olahraga").value = "";
//      document.getElementById("inputaktivitas").value = "";
//   } else {
//     let bmr = parseInt(10 * berat + 6.25 * tinggi - 5 * usia - 161);
//     let tdee = parseInt(bmr * olahraga);
//     btr.style.display = "block";
//     btr2.style.display = "block";
    

//     resultElem.innerHTML = `
//     <div class="d-none justify-content-center d-lg-flex d-md-none d-sm-none" >
//     <div class="hasil-hitung" id="result">
//     <h4 class="mb-3"> Hasil Hitung</h4>
//     <p> Kebutuhan kalori harian kamu adalah ${tdee} kkal/hari. jika kamu tidak olahraga ${bmr}
//     <br>
//     Kebutuhan kalori harian kamu adalah 1172 kkal/hari. Berat badan kamu masih Belum Ideal. Jika kamu ingin menaikkan berat badan! kamu membutuhkan 1406 kkal/hari.Kalori Anda adalah ${tdee} jika tidak olahraga ${bmr}
//     </div>
//     </div>
//     `

//     resultElem2.innerHTML = `
//     <div class="d-flex justify-content-center d-lg-none d-xl-none d-sm-flex" >
//     <div class="hasil-hitung" id="result">
//     <h4 class="mb-3"> Hasil Hitung</h4>
//     <p> Kebutuhan kalori harian kamu adalah ${tdee} kkal/hari. jika kamu tidak olahraga ${bmr}
//     <br>
//     Kebutuhan kalori harian kamu adalah 1172 kkal/hari. Berat badan kamu masih Belum Ideal. Jika kamu ingin menaikkan berat badan! kamu membutuhkan 1406 kkal/hari.Kalori Anda adalah ${tdee} jika tidak olahraga ${bmr}
//     </div>
//     </div>
//   `

//    // Mengosongkan nilai input setelah submit
//    document.getElementById("usia").value = "";
//    document.getElementById("tinggi").value = "";
//    document.getElementById("berat").value = "";
//    document.querySelector('input[name="flexRadioDefault"]:checked').checked = false;
//    document.getElementById("olahraga").value = "";
//    document.getElementById("inputaktivitas").value = "";
//   }

  // resultElem.textContent = `sekai : ${usia}  sekai : ${tinggi} ${berat} ${jenisKelamin} ${olahraga} ${aktivitas}`;

// });
