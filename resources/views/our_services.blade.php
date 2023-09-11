@extends('layouts.main')
@section('meta_keywords', 'Services CUC Group home RUKUN')
@section('meta_description', 'Manfaat Tinggal di Group Home : Tempat tinggal aman dan nyaman,Makanan bergizi,Aktivitas menarik,Interaksi sosial yang optimal,Dukungan yang penuh pengertian')

@section('content')
@include('partials.header')
<main id="main">
  <div class="row our-services-container">
    <div class="col-lg-6 our-services">
      <div class="our-services-header">
        Our Services
      </div>
      <div class="our-services-subheader">
        Group Home Resident
      </div>
      <div class="our-services-content">
          <p>
            Senior dengan demensia memerlukan perhatian lebih dalam kehidupan sehari-hari akibat penurunan kognitifnya. Maka interaksi sosial yang bermakna adalah kunci dari perawatan demensia. Staf yang ramah dan terlatih selalu berada di tempat 24-jam untuk mendukung segala kebutuhan dasar hidup warga.
          </p>
          <p style="margin-bottom: 10px !important;">
              Manfaat Tinggal di Group Home :
          </p>
          <ul>
              <li>Tempat tinggal aman dan nyaman</li>
              <li>Makanan bergizi</li>
              <li>Aktivitas menarik</li>
              <li>Interaksi sosial yang optimal</li>
              <li>Dukungan yang penuh pengertian</li>
          </ul>
      </div>
    </div>
    <div class="col-lg-5 our-services-card-container">
      <div class="our-services-card">
        <h2>Dementia Day Program</h2>
        <p>Senior yang tinggal bersama keluarga jugadapat berpartisipasi dalam Dementia Activit yyang diselenggarakan.</p>
        <ul>
            <li><b>Ragam kegiatan sepanjang hari : senam,games, seni karya, musik, dan lainnya.</b></li>
            <li><b>Activity Program jam 09:00 – 15:00 <br> (Senin – Jumat)</b></li>
            <li><b>Snack time</b></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row our-services-image">
      <img src="../../img/img_rukun_cuc_2.jpg" alt="" style="width: 100%">
  </div>

</main>
@endsection