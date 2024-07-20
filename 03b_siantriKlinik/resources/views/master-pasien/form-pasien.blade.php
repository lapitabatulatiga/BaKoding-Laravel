@extends('layouts')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Validation</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Validation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Data Pasien</h5>
              <p>Isi data lengkap</p>

              <!-- Browser Default Validation -->
              <form class="row g-3" action="/master-pasien/store" method="post">
                @csrf
                <div class="col-md-8">
                  <label for="validationDefault01" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="validationDefault01" name="nama" required>
                </div>
                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="validationDefault02" name="tanggal_lahir" value="" required>
                </div>
                <div class="col-md-6">
                  <label for="validationDefaultUsername" class="form-label">Nomor Telpon</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="nomor_telpon" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationDefault03" class="form-label">email</label>
                  <input type="email" class="form-control" name="email" id="validationDefault03" required>
                </div>
                <div class="col-md-12">
                  <label for="validationDefault05" class="form-label">Alamat</label>
                  <input type="text" class="form-control" name="alamat" id="validationDefault05" required>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
              </form>
              <!-- End Browser Default Validation -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main><!-- End #main -->
@endsection