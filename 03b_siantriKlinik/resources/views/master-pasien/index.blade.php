@extends('layouts')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              
              <p>
                <a href="/master-pasien/create" class="btn btn-primary">Tambah</a>
              </p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ama
                    </th>
                    <th data-type="date" data-format="YYYY/DD/MM">Tanggal Lahir</th>
                    <th>Nomor Telpon</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($items as $item)
                  <tr>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->tanggal_lahir}}</td>
                    <td>{{$item->nomor_telpon}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>
                      <a>Edit</a>
                      <a>Hapus</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
