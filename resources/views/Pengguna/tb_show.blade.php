@extends('layout.db')

@section('content')
<div class="content-wrapper">  
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <h4 class="card-title">DETAILS DATA :</h4>
        <div class="row my-4">
          <!-- Small table -->
          <div class="col-md-12">
            <div class="card shadow">
              <div class="card-body">
                <!-- table -->
                <div id="dataTable-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="col-sm-12 col-md-6">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table datatables dataTable no-footer" id="dataTable-1" role="grid" aria-describedby="dataTable-1_info">
    <h4>user  : {{$Pengguna->user }}<h4><hr>
    <h4>Order Name : {{$Pengguna->menu['nama']}}<h4><hr>
    <h4>Order Quantity : {{$Pengguna->jmlh_pesan}}<h4><hr>
    <h4>nohp : {{$Pengguna->nohp}}<h4><hr>
    <h4>Description : {{$Pengguna->keterangan}}<h4>
</tbody>
</table> 
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
             