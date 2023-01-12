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
            <a class="nav-link" href="{{ route('nilai.index') }}">
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
                    <h4 class="card-title">Edit Data</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form action="{{ route('alternative.update', $itemalternative->id) }}" method="post" class="forms-sample">
                    {{ method_field('patch') }}
                    @csrf
                      <div class="form-group">
                        <label for="code_alternative">Code</label>
                        <input type="text" name="code_alternative" class="form-control" id="code_alternative" value="{{ $itemalternative->code_alternative }}" placeholder="Code">
                      </div>
                      <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $itemalternative->name }}" placeholder="Nama">
                      </div>
                      <label for="criteria_id">Processor</label>
                        <select name="komponen_id" id="komponen_id" class="form-control">
                          @foreach ($itemkomponen as $komponen)
                            <option value="{{ $komponen->id }}">{{ $komponen->nama_komponen }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ({{ $komponen->nilai }})</option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <a button role="button" href="{{ route('alternative.index') }}" class="btn btn-dark">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
      </div>
@endsection