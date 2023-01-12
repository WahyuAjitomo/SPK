@extends('layouts.app')
@section('content')


<div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{ url('assets/images/faces/face15.jpg') }}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('home') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('criteria.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Kriteria</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Daftar Komponen</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('komponen.index') }}">Masukkan Komponen</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('alternative.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Alternatif</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Hasil</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <div class="card-body">
        @if ($message = Session::get('error'))
            <div class="alert alert-warning">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-warning">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabel Nilai</h4>
                    <div class="d-flex mb-2" style="float: right;">
                        <a href="">
                        </a></div>
                    <p class="card-description"> Tabel nilai untuk sistem penunjang keputusan
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Code </th>
                            <th> Nama </th>
                            <th> Rangking </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="table-info">
                            <td> 1 </td>
                            <td> A1 </td>
                            <td> Rizki </td>
                            <td> 1 </td>
                          </tr>
                          <tr class="table-info">
                            <td> 2 </td>
                            <td> A2 </td>
                            <td> Adli </td>
                            <td> 2 </td>
                          </tr>
                          <tr class="table-info">
                            <td> 3 </td>
                            <td> A3 </td>
                            <td> Kevin </td>
                            <td> 3 </td>
                          </tr>
                          <tr class="table-info">
                            <td> 4 </td>
                            <td> A4 </td>
                            <td> Tarisha </td>
                            <td> 4 </td>
                          </tr>
                          <tr class="table-info">
                            <td> 5 </td>
                            <td> A5 </td>
                            <td> Kiki </td>
                            <td> 5 </td>
                          </tr>
                          <tr class="table-info">
                            <td> 6 </td>
                            <td> A6 </td>
                            <td> Alfachri </td>
                            <td> 6 </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
      </div>
@endsection