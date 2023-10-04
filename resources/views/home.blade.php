@extends('layouts.main')
@section('meta_keywords', 'CUC Group Home')
@section('meta_description', 'CUC Group Home melayani senior dengan fokus pada interaksi sosial dan aktivitas sehari-hari yang optimal. Senior dengan demensia dapat berpartisipasi dari pagi hingga sore sebagai member atau menetap sebagai warga dalam hunian yang intim dan kekeluargaan.')

@section('content')
@include('partials.topbar')
@include('partials.header')
<section id="intro">
  <div class="intro-container">
      <h1 class="pb-0">Group Home</h1>
      <p class="pb-0">&</p>
      <h1 class="pb-0">Dementia Day Program</h1>
      <br>
      <div class="title-card">
          <p class="card-content">
              <a class="book-now" href="https://api.whatsapp.com/send?phone=6281399795339" target="_blank">BOOK NOW FOR EARLY BIRD PRICES</a>
          </p>
          <p class="about-us">
            <a href="#home" class="scroll-link">About Us</a>
          </p>
      </div>
      
  </div>
</section>
  <div id="home" class="row home-container">
    <div class="col-lg-8 home">
      <div class="home-header">
        About Us
      </div>
      <div class="home-content">
        <p>Group Home melayani senior dengan fokus pada interaksi sosial dan aktivitas sehari-hari yang optimal. Senior dengan demensia dapat berpartisipasi dari pagi hingga sore sebagai member atau menetap sebagai warga dalam hunian yang intim dan kekeluargaan.</p>
        <p>Dengan filosofi kesejahteraan secara menyeluruh, suasana yang akrab dan penuh interaksi memberi kenyamanan bagi senior dengan demensia atau Alzheimer dalam menjalankan kesehariannya.</p>
        <p>Tim Group Home menyajikan ragam kegiatan setiap hari untuk mengoptimalkan kualitas hidup warga, seperti olah raga, kegiatan motorik dan kognitif, selain juga kegiatan rumah tangga sehari-hari. Staf yang ramah dan terlatih selalu berada di tempat 24-jam untuk mendukung segala kebutuhan dasar hidup warga, dari bantuan makan, pengaturan obat-obatan, mandi, berbusana, perawatan tubuh, bantuan mobilitas, dan lainnya.</p>
        <span class="">
          <a href="https://api.whatsapp.com/send?phone=6281399795339" target="_blank">BOOK NOW FOR EARLY BIRD PRICES</a>
        </span>
      </div>
    </div>
    {{-- <div class="col-lg-4 home-images">

    </div>  --}}
  </div>

@endsection