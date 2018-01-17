<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Barang <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo anchor('barang','Daftar Barang') ?></li>
                <li><?php echo anchor('barang/input','Penerimaan Barang') ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Peminjaman Barang <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo anchor('pinjam','Daftar Peminjaman') ?></li>
                <li><?php echo anchor('kembali','Pengembalian Barang') ?></li>
                <li><?php echo anchor('kembali/belum','Barang Belum Kembali') ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo anchor('laporan','Laporan Daftar Barang') ?></li>
                <li><?php echo anchor('laporan/c_kembali','Laporan Pengembalian Barang') ?></li>
                <li><?php echo anchor('laporan/status','Laporan Status Barang') ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Referensi <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo anchor('referensi/referensiB','Jenis Barang') ?></li>
                <li><?php echo anchor('referensi/pengguna','Daftar Pengguna') ?></li>
              </ul>
            </li>
            <li><span class="badge"><?php echo anchor('laporan','Warning'); ?>45</span></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>