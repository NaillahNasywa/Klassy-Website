@extends('layout.db')

@section('content')
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
            </div>
        <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">ADD DATA</h4>
              </div>
              <div class="card-body">
                  <div class="basic-form">
    <form action="{{ route('Pengguna.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <input type="text" class="form-control"  name="user" id="user">
        </div>
        <div class="mb-3">
            <label for="returned" class="form-label">pilih menu</label>
            <select class="form-select mb-3" name="menu_id">
              @foreach ($menu as $item)
                  <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jmlh_pesan" class="form-label">Order Quantity</label>
            <input type="number" class="form-control"  name="jmlh_pesan" id="jmlh_pesan">
        </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">nohp</label>
            <input type="number" class="form-control"  name="nohp" id="nohp">
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Description</label>
            <input type="text" class="form-control"  name="keterangan" id="keterangan">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@endsection