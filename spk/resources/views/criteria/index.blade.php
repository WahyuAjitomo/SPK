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
                <li class="nav-item"> <a class="nav-link" href="{{ route('komponen.index') }}">Processor</a></li>
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
                    <h4 class="card-title">Tabel Kriteria</h4>
                    <div class="d-flex mb-2" style="float: right;">
                        <a href="{{ route('criteria.create') }}">
                            <button class="btn btn-primary ms-2">Tambah</button>
                        </a></div>
                    <p class="card-description"> Tabel kriteria untuk sistem penunjang keputusan
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Code </th>
                            <th> Nama </th>
                            <th> Bobot </th>
                            <th> Penyesuaian </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($itemcriteria as $criteria)
                          <tr class="table-info">
                            <td> {{ ++$no }} </td>
                            <td> {{ $criteria->code }} </td>
                            <td> {{ $criteria->name }} </td>
                            <td> {{ $criteria->bobot }} </td>
                            <td> 
                                <a href="{{ route('criteria.edit', $criteria->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">Edit</a>
                                <form action="{{ route('criteria.destroy', $criteria->id) }}" method="post" style="display:inline;">
                                @csrf
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-sm btn-danger mb-2">
                                    Hapus
                                </button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $itemcriteria->links() }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
      </div>
@endsection