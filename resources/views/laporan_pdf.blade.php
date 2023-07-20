<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Produk</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Menu</th>
    <th>Kategory</th>
    <th>Price</th>
    <th>stock</th>
    
  </tr>
  @php
      $no=1;
  @endphp
  @foreach ($data as $item)
  <tr>
    <td>{{$no++}}</td>
    <td>
        {{ $item->nama }}
    </td>
    <td>
        {{$item->katagory->name}}
     </td>
    <td>
        {{ $item->harga }}
    </td>
    <td>
        {{ $item->stock }}
    </td>
    <!-- {{-- <td>  <img src="../imag/{{$item->img}}" alt="" class="avatar avatar-sm me-3"></td> --}} -->
  </tr>
  @endforeach
</table>

</body>
</html>