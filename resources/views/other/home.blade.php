@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="section-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Selamat Datang, {{ Auth::user()->name }}</h4>
                    </div>
                    <div class="card-body">
                        <h5>Introduce CareerCast</h5>
                        <p>CareerCast merupakan Aplikasi berbasis Web untuk memprediksi dan merekomendasikan pekerjaan
                            setelah lulus kuliah nanti</p>

                        <h6>Anda Login Sebagai {{ Auth::user()->role->role }}</h6>
                        @if (Auth::user()->role_id == 1)
                            <p>Alumni dapat memberikan pendataan terkait pekerjaan dan nilai mata kuliah yang dulu pernah
                                ditempuh <br> data tersebut digunakan untuk memprediksi pekerjaan yang nanti akan dicari
                                oleh mahasiswa</p>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Silahkan lakukan pendataan</h4>
                                </div>
                            </div>
                        @else
                            <p>Mahasiswa dapat melakukan prediksi, hasil prediksi diperoleh dari pendataan alumni <br>
                                Pekerjaan yang akan direkomendasikan antara berikut :</p>
                            <ul>
                                <li>Programmer</li>
                                <li>ERP Consultant</li>
                                <li>IT Analyst</li>
                                <li>Data Analyst</li>
                                <li>Manager Project</li>
                            </ul>
                            <p>Aplikasi ini masih dalam tahap pengembangan dan masih akan dilakukan pembaruan terkait data
                                pekerjaan supaya mempermudah mahasiswa mencari pekerjaan</p>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Silahkan lakukan prediksi</h4>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
