@extends('layouts.app')
@section('content')
    <section>
        <div class="fullscreen-bg">
            <img src="{{ asset('assets/img/About_as.png') }}" alt="" class="bordered-img" />
            <div class="overlay">
                <div class="container">
                    <div class="text mt-5">
                        <h2 class="overlay-text">
                            {{ $artikel->judul }}
                        </h2>
                        <div class="date-and-content">
                            <h6>
                                {{ $artikel->created_at->diffForHumans() }}
                            </h6>
                            <p>
                                {{ $artikel->konten}}
                            </p>
                        </div>

                        <div>
                            <h5>Tantangan:</h5>
                            <ol>
                                <li>
                                    Tingginya Persaingan: Industri teknologi seringkali
                                    dibanjiri oleh pelamar yang berkompeten dan berbakat.
                                    Persaingan yang ketat dapat membuat sulit bagi magang untuk
                                    memperoleh pengalaman yang diinginkan atau bahkan
                                    mendapatkan posisi magang tersebut.
                                </li>
                                <li>
                                    Kesenjangan Pengetahuan: Teknologi terus berkembang dengan
                                    cepat, dan seringkali magang harus beradaptasi dengan
                                    teknologi-teknologi baru yang mungkin belum dipelajari
                                    sebelumnya.
                                </li>
                                <li>
                                    Tuntutan Kinerja Tinggi: Industri teknologi dikenal dengan
                                    ritme kerja yang cepat dan tuntutan kinerja yang tinggi.
                                    Magang mungkin merasa tertekan untuk menyelesaikan
                                    tugas-tugas dengan cepat dan akurat.
                                </li>
                                <li>
                                    Ketergantungan pada Teknologi: Terkadang, terlalu bergantung
                                    pada teknologi dapat mengurangi interaksi sosial antar rekan
                                    kerja, yang mana dapat mengurangi kesempatan untuk membangun
                                    hubungan dan jaringan profesional.
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div>
                        <h5>tips sukses:</h5>
                        <ol>
                            <li>
                                Tingginya Persaingan: Industri teknologi seringkali dibanjiri
                                oleh pelamar yang berkompeten dan berbakat. Persaingan yang
                                ketat dapat membuat sulit bagi magang untuk memperoleh
                                pengalaman yang diinginkan atau bahkan mendapatkan posisi
                                magang tersebut.
                            </li>
                            <li>
                                Kesenjangan Pengetahuan: Teknologi terus berkembang dengan
                                cepat, dan seringkali magang harus beradaptasi dengan
                                teknologi-teknologi baru yang mungkin belum dipelajari
                                sebelumnya.
                            </li>
                            <li>
                                Tuntutan Kinerja Tinggi: Industri teknologi dikenal dengan
                                ritme kerja yang cepat dan tuntutan kinerja yang tinggi.
                                Magang mungkin merasa tertekan untuk menyelesaikan tugas-tugas
                                dengan cepat dan akurat.
                            </li>
                            <li>
                                Ketergantungan pada Teknologi: Terkadang, terlalu bergantung
                                pada teknologi dapat mengurangi interaksi sosial antar rekan
                                kerja, yang mana dapat mengurangi kesempatan untuk membangun
                                hubungan dan jaringan profesional.
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="image-container">
                    <img src="{{ asset('assets/img/gambarartikel 1.png') }}" alt="Deskripsi Gambar" class="side-image" />
                </div>
            </div>
        </div>
    </section>
@endsection
