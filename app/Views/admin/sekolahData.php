<?= $this->extend('_Layout/_template/_admin/templateSekolahData'); ?>


<?= $this->section('content'); ?>

<!-- MAIN ISI -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="card">

                <div class="card-body">
                    <div class="card-title"></div>
                    <?php if (session()->getFlashdata('alert')) : ?>
                        <div class="card-body">
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <?= session()->getFlashdata('alert'); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    <?php endif; ?>

                    <a href="/admin/data/sekolah/tambah" class="btn btn-primary m-1 mb-4 bi bi-plus" role="button">Tambah</a>

                    <table class="table" style="width:100%" id="table1">
                        <thead>
                            <tr>
                                <th>Nama Sekolah</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Akreditasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tampilSekolah as $S) : ?>
                                <tr>
                                    <td><?= $S->nama_sekolah; ?></td>
                                    <td><?= $S->alamat_sekolah; ?></td>
                                    <td><?= $S->status; ?></td>
                                    <td><?= $S->akreditasi; ?></td>
                                    <td>
                                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <a href="/admin/data/sekolah/edit/<?= $S->id_sekolah; ?>" class="btn btn-primary bi bi-pencil-square" role="button"></a>
                                        </div>
                                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <form action="/admin/delete_Sekolah/<?= $S->id_sekolah; ?>" method="post">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger bi bi-trash" onclick="return confirm('Yakin Hapus Data?')"></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>


                </div>
            </div>

            <div class="card card-title">
                <div class="card-body">
                    <div class="map" id="map"></div>
                </div>
            </div>



        </div>
        </div>
    </section>

</main><!-- End #main -->


<?= $this->endSection(); ?>