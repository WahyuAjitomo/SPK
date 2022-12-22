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
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Daftar Komponen</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Processor</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">VGA</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Motherboard</a></li>
				<li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">RAM</a></li>
				<li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">PSU</a></li>
				<li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Penyimpanan</a></li>
              </ul>
            </div>
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
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-warning">{{ error }}</div>
        @endforeach
        @endif
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
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit komponen</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form action="{{ route('komponen.update', $itemkomponen->id) }}" method="post" class="forms-sample">
                    {{ method_field('patch') }}
                    @csrf
                      <div class="form-group">
                        <label for="nama_komponen">Nama</label>
                        <input type="text" name="nama_komponen" class="form-control" id="nama_komponen" value="{{ $itemkomponen->name_komponen }}" placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <label for="criteria_id">Tipe</label>
                        <select name="criteria_id" id="criteria_id" class="form-control">
                          @foreach ($itemcriteria as $criterias)
                            <option value="{{ $criterias->id }}">{{ $criterias->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="nilai">Nilai</label>
                        <input type="text" name="nilai" class="form-control" id="nilai" value="{{ $itemkomponen->nilai }}" placeholder="Nilai">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <a button role="button" href="{{ route('komponen.index') }}" class="btn btn-dark">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
      </div>
@endsection