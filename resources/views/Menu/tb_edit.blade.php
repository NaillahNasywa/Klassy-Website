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
                  <h4 class="card-title">EDIT DATA</h4>
              </div>
              <div class="card-body">
                  <div class="basic-form">
    <form action="{{route('Menu.update',$Menu->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="foto" class="form-label">Photo</label>
            <input type="file" class="form-control"  name="foto" value="{{$Menu->foto}}" id="foto">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Menu</label>
            <input type="text" class="form-control"  name="nama" value="{{$Menu->nama}}" id="nama">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">katagory</label>
            <select class="custom-select form-control input-custom" id="nama" name="katagory_id">
                @foreach ($katagory as $data)
                    <option value="{{ $data->id }}"
                        @if ($Menu->Menu_id == $data->id)
                            selected
                        @endif
                    >{{ $data->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Price</label>
            <input type="text" class="form-control"  name="harga" value="{{$Menu->harga}}" id="harga">
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="text" class="form-control"  name="stock" value="{{$Menu->stock}}" id="stock">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
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