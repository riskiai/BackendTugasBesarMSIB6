@extends('layouts.app')
<style>
    <style>.lowongan-container {
        position: relative;
        width: 100%;
    }

    .lowongan-container img {
        width: 100%;
        height: auto;
    }

    .lowongan-container .text {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px;
    }
</style>

</style>
@section('content')
    <section>
        <div class="fullscreen-bg">
            <img src="{{ asset('assets/img/About_as.png') }}" alt="About Us" class="img-fluid w-100" />
        </div>

        <div class="container-fluid" style="margin-top: 10px;">
            <div class="container my-3 py-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Tampilan pertama dengan tiga item di tengah -->
                        <div class="carousel-item active">
                            <div class="row workingspace justify-content-center">
                                <!-- Item 1 -->
                                <div class="col-lg-4 d-flex justify-content-center" style="margin-top: 20px;">
                                    <div class="lowongan-container text-center">
                                        <img src="{{ asset('assets/img/team/team-1.jpg') }}" alt="Nadhif L. A. Rahim"
                                            class="img-fluid rounded">
                                        <div class="text">
                                            <h6>Nadhif L. A. Rahim</h6>
                                            <p style="font-size: smaller;">Full-Stack</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="col-lg-4 d-flex justify-content-center" style="margin-top: 20px;">
                                    <div class="lowongan-container text-center">
                                        <img src="{{ asset('assets/img/team/team-2.jpg') }}" alt="Riski A. Ilham"
                                            class="img-fluid rounded">
                                        <div class="text">
                                            <h6>Riski A. Ilham</h6>
                                            <p style="font-size: smaller;">Project Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="col-lg-4 d-flex justify-content-center" style="margin-top: 20px;">
                                    <div class="lowongan-container text-center">
                                        <img src="{{ asset('assets/img/team/team-3.jpg') }}" alt="Dito Kurnia"
                                            class="img-fluid rounded">
                                        <div class="text">
                                            <h6>Dito Kurnia</h6>
                                            <p style="font-size: smaller;">Front-End</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row workingspace justify-content-center">
                                <!-- Item 4 -->
                                <div class="col-lg-4 d-flex justify-content-center" style="margin-top: 20px;">
                                    <div class="lowongan-container text-center">
                                        <img src="{{ asset('assets/img/team/team-3.jpg') }}" alt="Pascal Z. Maliangkay"
                                            class="img-fluid rounded">
                                        <div class="text">
                                            <h6>Pascal Z. Maliangkay</h6>
                                            <p style="font-size: smaller;">UI/UX Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 5 -->
                                <div class="col-lg-4 d-flex justify-content-center" style="margin-top: 20px;">
                                    <div class="lowongan-container text-center">
                                        <img src="{{ asset('assets/img/team/team-2.jpg') }}" alt="Kristofel S. Lanpada"
                                            class="img-fluid rounded">
                                        <div class="text">
                                            <h6>Kristofel S. Lanpada</h6>
                                            <p style="font-size: smaller;">Dev-Ops</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Additional carousel items can be added here if needed -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
