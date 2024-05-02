<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        
    </div>

    <div class="card" style="width:60%; margin-bottom:120px;">
      <div class="card-body">

      <?php foreach ($coin as $i) : ?>
        <form action="<?php echo base_url('coin/DataCoin/updateDataAksi')?>" method="POST">
      
        <div class="form-group">
          <label for="">Nama Coin</label>
          <input type="hidden" name="id_coin" class="form-control" value="<?php echo $i->id_coin ?>">
          <input type="text" name="nama_coin" class="form-control" value="<?php echo $i->nama_coin ?>">
          <?php echo form_error('nama_coin','<div class="text-small text-danger"></div>') ?>
        </div>

        <div class="form-group">
          <label for="">Harga Entry</label>
          <input type="text" name="harga_entry" class="form-control" value="<?php echo $i->harga_tp ?>">
          <?php echo form_error('harga_entry','<div class="text-small text-danger"></div>') ?>
        </div>

        <div class="form-group">
          <label for="">Harga TP</label>
          <input type="text" name="harga_tp" class="form-control" value="<?php echo $i->harga_entry ?>">
          <?php echo form_error('harga_tp','<div class="text-small text-danger"></div>') ?>
        </div>

        <div class="form-group">
          <label for="">Moonbag</label>
          <input type="text" name="moonbag" class="form-control" value="<?php echo $i->moonbag ?>">
          <?php echo form_error('moonbag','<div class="text-small text-danger"></div>') ?>
        </div>

         <div class="form-group">
          <label for="">Photo</label>
          <input type="file" name="photo" class="form-control">
          <?php echo form_error('photo','<div class="text-small text-danger"></div>') ?>
        </div>

        <button type="submit" class="btn btn-success">Update</button>

        </form>

        <?php endforeach; ?>
      </div>
    </div>


</div>
<!-- /.container-fluid -->



