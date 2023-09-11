@extends('layouts.main')
@section('meta_keywords','Pelayanan CUC Group Home RUKUN')
@section('meta_description','Dokter Visit, Proffesional Caregiver, Housekeeping, FnB, Emergency Services')

@section('content')
@include('partials.header')
<main id="main">
  <div class="row our-staff-container">
    <div class="our-staff-header">
    Our Staff
    </div>
  </div>
  <div class="row our-staff-icon-container">
    <div class="col our-staff-icon">
      <div class="row our-staff-icon-img">
        <img src="../img/icon_cuc_1.png" alt="CUC Rukun GroupHome">
      </div>
      <div class="row our-staff-content">
        Doctor Visit
      </div>
    </div>
    <div class="col our-staff-icon">
      <div class="row our-staff-icon-img">
        <img src="../img/icon_cuc_2.png" alt="CUC Rukun GroupHome">
      </div>
      <div class="row our-staff-content">
        Professional Caregiver
      </div>
    </div>
    <div class="col our-staff-icon">
      <div class="row our-staff-icon-img">
        <img src="../img/icon_cuc_3.png" alt="CUC Rukun GroupHome">
      </div>
      <div class="row our-staff-content">
        Housekeeping
      </div>
    </div>
    <div class="col our-staff-icon">
      <div class="row our-staff-icon-img">
        <img src="../img/icon_cuc_4.png" alt="CUC Rukun GroupHome">
      </div>
      <div class="row our-staff-content">
        Food & Beverage Service
      </div>
    </div>
    <div class="col our-staff-icon">
      <div class="row our-staff-icon-img">
        <img src="../img/icon_cuc_5.png" alt="CUC Rukun GroupHome">
      </div>
      <div class="row our-staff-content">
        Emergency Service
      </div>
    </div>
  </div>

</main>
@endsection