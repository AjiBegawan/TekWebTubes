<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Horizontal form</h2>
  <form class="form-horizontal" action="<?php echo base_url(). 'ctoko/prosestambah'; ?>" method="POST">

    <div class="form-group">
      <label class="control-label col-sm-2" for="id">ID Barang</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id" placeholder="ID Barang" name="id">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama Barang</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" placeholder="Nama Barang" name="nama">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="harga">Harga Barang</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="harga" placeholder="Harga Barang" name="harga">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="stok">Stok Barang</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="stok" placeholder="Stok Barang" name="stok">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="foto">Foto Barang</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="foto" placeholder="Stok Barang" name="foto">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
