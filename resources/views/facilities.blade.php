@extends('layouts.main')
@section('meta_keywords','Fasilitas CUC GroupHome RUKUN')
@section('meta_description','Dengan filosofi kesejahteraan secara menyeluruh, suasana yang akrab dan penuh interaksi memberi kenyamanan bagi senior dengan demensia atau Alzheimer dalam menjalankan kesehariannya. Layanan kami yang komprehensif dirancang untuk memastikan kesejahteraan, kenyamanan, dan kebahagiaan. Berikut adalah fasilitas yang kami tawarkan')

@section('content')
@include('partials.header')
<main id="main">
  <div class="row facilities-container">
    <div class="col-lg-8 facilities">
      <div class="facilities-header">
        Facilities
      </div>
      <div class="facilities-content">
        <p>
          Dengan filosofi kesejahteraan secara menyeluruh, suasana yang akrab dan penuh interaksi memberi kenyamanan bagi senior dengan demensia atau Alzheimer dalam menjalankan kesehariannya. Layanan kami yang komprehensif dirancang untuk memastikan kesejahteraan, kenyamanan, dan kebahagiaan. Berikut adalah fasilitas yang kami tawarkan :
        </p>
        <ul>
            <li><b>Kamar Pribadi atau sharing</b></li>
            <li><b>Activity Program</b></li>
            <li><b>Wellness Monitoring</b></li>
            <li><b>Area kegiatan indoor dan outdoor</b></li>
            <li><b>Food & Beverage</b></li>
            <li><b>Housekeeping dan Laundry</b></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4 facilities-images">
    </div>
  </div>

</main>
@endsection