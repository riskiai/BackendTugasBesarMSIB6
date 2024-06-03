@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 40px">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 text-center" style="position: relative">
                <h1 class="fw-bold">FAQ</h1>
                <hr
                    style="
            width: 100px;
            border-top: 2px solid #000;
            position: relative;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 5px; /* Menambahkan margin atas */
          " />

                <img src="{{ asset('assets/img/FAQ.png') }}" alt="Search" class="img-fluid" />
            </div>


            <div class="col-6">
                <!-- Form untuk "Apa itu program magang?" -->
                <div class="form-group border rounded p-3 mb-3"
                    style="background-color: #074173; position: relative; color: #ffffff;">
                    <input type="checkbox" id="toggle-penjelasan">
                    <label for="toggle-penjelasan">
                        Apa itu program magang?
                    </label>
                    <!-- Simbol 'v' di sebelah kanan form -->
                    <span class="arrow arrow-symbol"
                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
                        <i class="bi bi-chevron-down"></i>
                    </span>
                </div>
                <!-- Penjelasan yang akan muncul saat tombol ditekan -->
                <div id="penjelasan-program-magang" class="penjelasan"
                    style="
          display: none;
          padding: 5px;
          border: 1px solid #ddd;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          background-color: #074173;
          margin-bottom: 10px;
          color: #ffffff;
          font-size: 14px;
      ">
                    Program magang adalah suatu program di mana seseorang,biasanya seorang pelajar atau mahasiswa bekerja di
                    sebuag perusahaan atau organisasi untuk mendapatkan pengalaman kerja praktis dalam bidang yang di minati
                    atau dengan sesuai dengan jurusan studynya.
                </div>

                <!-- JavaScript untuk mengatur tampilan penjelasan saat tombol ditekan -->
                <script>
                    const togglePenjelasanElement = document.getElementById("toggle-penjelasan");
                    const penjelasanElement = document.getElementById("penjelasan-program-magang");
                    const arrowSymbol = document.querySelector('.arrow-symbol');

                    togglePenjelasanElement.addEventListener("change", function() {
                        if (this.checked) {
                            penjelasanElement.style.display = "block";
                            arrowSymbol.innerHTML =
                                `<i class="bi bi-chevron-up"></i>`; // Mengubah tanda panah menjadi '^' saat tombol ditekan ke bawah
                        } else {
                            penjelasanElement.style.display = "none";
                            arrowSymbol.innerHTML =
                                `<i class="bi bi-chevron-down"></i>`; // Mengubah kembali tanda panah menjadi 'v' saat tombol ditekan ke atas
                        }
                    });

                    // Tambahan: Ubah tanda panah menjadi '^' ketika tombol ditekan ke atas
                    togglePenjelasanElement.addEventListener("click", function() {
                        if (!this.checked) {
                            arrowSymbol.textContent = '^'; // Mengubah menjadi '^' ketika tombol ditekan ke atas
                        }
                    });
                </script>


                <!-- Form untuk "Apa manfaat mengikuti program magang?" -->
                <div class="form-group border rounded p-3 mb-3"
                    style="background-color: #074173; position: relative; color: #ffffff;">
                    <input type="checkbox" id="toggle-manfaat">
                    <label for="toggle-manfaat">
                        Apa manfaat mengikuti program magang?
                    </label>
                    <!-- Simbol 'v' di sebelah kanan form -->
                    <span class="arrow arrow-symbol-manfaat"
                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
                        <i class="bi bi-chevron-down"></i>
                    </span>
                </div>
                <!-- Penjelasan yang akan muncul saat tombol ditekan -->
                <div id="manfaat-program-magang" class="penjelasan"
                    style="
          display: none;
          padding: 5px;
          border: 1px solid #ddd;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          background-color: #074173;
          margin-bottom: 10px;
          color: #ffffff;
          font-size: 14px;
      ">
                    Program magang memberikan manfaat berupa pengalaman kerja praktis, peluang untuk memperluas jaringan
                    profesional, pembelajaran langsung dari para ahli industri, pengembangan keterampilan kerja, serta
                    peningkatan peluang kerja di masa depan.
                </div>

                <!-- JavaScript untuk mengatur tampilan penjelasan saat tombol ditekan -->
                <script>
                    const toggleManfaatElement = document.getElementById("toggle-manfaat");
                    const manfaatElement = document.getElementById("manfaat-program-magang");
                    const arrowSymbolManfaat = document.querySelector('.arrow-symbol-manfaat');

                    toggleManfaatElement.addEventListener("change", function() {
                        if (this.checked) {
                            manfaatElement.style.display = "block";
                            // Mengubah tanda panah menjadi '^'
                            arrowSymbolManfaat.innerHTML =
                                `<i class="bi bi-chevron-up"></i>`;
                        } else {
                            manfaatElement.style.display = "none";
                            // Mengubah kembali tanda panah menjadi 'v'
                            arrowSymbolManfaat.innerHTML =
                                `<i class="bi bi-chevron-down"></i>`;
                        }
                    });

                    // Tambahan: Ubah tanda panah menjadi '^' ketika tombol ditekan ke atas
                    toggleManfaatElement.addEventListener("click", function() {
                        if (!this.checked) {
                            arrowSymbolManfaat.textContent = '^'; // Mengubah menjadi '^' ketika tombol ditekan ke atas
                        }
                    });
                </script>



                <!-- Form untuk "Apakah program magang ini berbayar?" -->
                <div class="form-group border rounded p-3 mb-3"
                    style="background-color: #074173; position: relative; color: #ffffff;">
                    <input type="checkbox" id="toggle-berbayar">
                    <label for="toggle-berbayar">
                        Apakah program magang ini berbayar?
                    </label>
                    <!-- Simbol 'v' di sebelah kanan form -->
                    <span class="arrow arrow-symbol-berbayar"
                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
                        <i class="bi bi-chevron-down"></i>
                    </span>
                </div>
                <!-- Penjelasan yang akan muncul saat tombol ditekan -->
                <div id="berbayar-program-magang" class="penjelasan"
                    style="
          display: none;
          padding: 5px;
          border: 1px solid #ddd;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          background-color: #074173;
          margin-bottom: 10px;
          color: #ffffff;
          font-size: 14px;
      ">
                    Tergantung pada programnya. Beberapa magang bersifat berbayar, sementara yang lain mungkin tidak.
                </div>

                <!-- JavaScript untuk mengatur tampilan penjelasan saat tombol ditekan -->
                <script>
                    const toggleBerbayarElement = document.getElementById("toggle-berbayar");
                    const berbayarElement = document.getElementById("berbayar-program-magang");
                    const arrowSymbolBerbayar = document.querySelector('.arrow-symbol-berbayar');

                    toggleBerbayarElement.addEventListener("change", function() {
                        if (this.checked) {
                            berbayarElement.style.display = "block";
                            arrowSymbolBerbayar.innerHTML =
                                `<i class="bi bi-chevron-up"></i>`; // Mengubah tanda panah menjadi '^' saat tombol ditekan ke bawah
                        } else {
                            berbayarElement.style.display = "none";
                            arrowSymbolBerbayar.innerHTML =
                                `<i class="bi bi-chevron-down"></i>`; // Mengubah kembali tanda panah menjadi 'v' saat tombol ditekan ke atas
                        }
                    });

                    // Tambahan: Ubah tanda panah menjadi '^' ketika tombol ditekan ke atas
                    toggleBerbayarElement.addEventListener("click", function() {
                        if (!this.checked) {
                            arrowSymbolBerbayar.textContent = '^'; // Mengubah menjadi '^' ketika tombol ditekan ke atas
                        }
                    });
                </script>


                <!-- Form untuk "Apakah program magang ini bersertifikat?" -->
                <div class="form-group border rounded p-3 mb-3"
                    style="background-color: #074173; position: relative; color: #ffffff;">
                    <input type="checkbox" id="toggle-sertifikat">
                    <label for="toggle-sertifikat">
                        Apakah program magang ini bersertifikat?
                    </label>
                    <!-- Simbol 'v' di sebelah kanan form -->
                    <span class="arrow arrow-symbol-sertifikat"
                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
                        <i class="bi bi-chevron-down"></i>
                    </span>
                </div>
                <!-- Penjelasan yang akan muncul saat tombol ditekan -->
                <div id="sertifikat-program-magang" class="penjelasan"
                    style="
          display: none;
          padding: 5px;
          border: 1px solid #ddd;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          background-color: #074173;
          margin-bottom: 10px;
          color: #ffffff;
          font-size: 14px;
      ">
                    Iya, banyak magang yang menawarkan sertifikasi yang dapat meningkatkan kredibilitas dan nilai tambah
                    bagi peserta.
                </div>

                <!-- JavaScript untuk mengatur tampilan penjelasan saat tombol ditekan -->
                <script>
                    const toggleSertifikatElement = document.getElementById("toggle-sertifikat");
                    const sertifikatElement = document.getElementById("sertifikat-program-magang");
                    const arrowSymbolSertifikat = document.querySelector('.arrow-symbol-sertifikat');

                    toggleSertifikatElement.addEventListener("change", function() {
                        if (this.checked) {
                            sertifikatElement.style.display = "block";
                            arrowSymbolSertifikat.innerHTML =
                                `<i class="bi bi-chevron-up"></i>`; // Mengubah tanda panah menjadi '^' saat tombol ditekan ke bawah
                        } else {
                            sertifikatElement.style.display = "none";
                            arrowSymbolSertifikat.innerHTML =
                                `<i class="bi bi-chevron-down"></i>`; // Mengubah kembali tanda panah menjadi 'v' saat tombol ditekan ke atas
                        }
                    });

                    // Tambahan: Ubah tanda panah menjadi '^' ketika tombol ditekan ke atas
                    toggleSertifikatElement.addEventListener("click", function() {
                        if (!this.checked) {
                            arrowSymbolSertifikat.textContent = '^'; // Mengubah menjadi '^' ketika tombol ditekan ke atas
                        }
                    });
                </script>

            </div>
        </div>
    </div>
@endsection
