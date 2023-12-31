@extends('layouts.main')
@section('container')
<h1 class="mb-4 text-center">Manage Your Money </h1>
<hr>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/crsatu.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/crdua.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/crtiga.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<br>
<div class="mt-3">
    <h3 class="mb-3">Manajemen keuangan menurut para ahli:</h3>
    <h4>1. Harry G. Guthmann dan Herbert E. Dougall</h4>
    <p>Dalam pandangan Guthmann dan Dougall melalui bukunya yang berjudul Corporate Financial Policy, pengelolaan
        keuangan adalah suatu kegiatan yang berkaitan erat dengan perencanaan, pengembangan, pengendalian, dan
        penatausahaan setiap dana yang digunakan dalam bisnis.</p>
    <h4>2. J.F. Bradley</h4>
    <p>Sedangkan J.F. Bradley memiliki definisi yang berbeda mengenai pengertian manajemen keuangan.

        Dalam bukunya yang berjudul Administrative Financial Management, Bradley mengungkapkan bahwa manajemen keuangan
        merupakan aspek manajemen bisnis untuk mengatur penggunaan modal perusahaan. Tidak hanya itu, pemilihan sumber
        permodalan juga harus diperhatikan untuk mencapai tujuan.</p>
    <h4>3. Joseph L. Massie</h4>
    <p>Definisi berbeda dijelaskan oleh Joseph L. Massie, penulis The Essentials of Management. Massie mengatakan bahwa
        manajemen keuangan adalah kegiatan usaha yang bertanggung jawab untuk memperoleh dan menggunakan dana perusahaan
        untuk mencapai operasi yang efektif.</p>
</div>
@endsection