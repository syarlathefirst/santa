<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>Daftar Berita</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="a">Home</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
</ol>
</div>
</div>
</div><!
</section>
<section class="content">

<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Berita</h3>

        <div class="card-tools">
            <butten type="button class"btn btn-tool" dart-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></1></button>
</div>
</div>
<div class="box-body">
    <h3>Laporan Berita</h3>
    <form method="post" action="<?= base_url('berita/cetak_laporan') ?>">
        <div class="box-body">
            <div class="form-group">
                <label>Dari Tanggal:</label>
                <input type="date" name="tanggal_dari" required>

                <label>Sampai Tanggal:</label>
                <input type="date" name="tanggal_sampai" required>
</div>
<div class="box-footer">
    <button type="submit" class="btn btn-primary"> Tampilkan Laporan</button>
</div>
</form>
</div>
<div class="card-footer">
    Footer
</div>
</div>
</div>
</section>
</div>
