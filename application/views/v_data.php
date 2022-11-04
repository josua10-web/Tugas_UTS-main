<main role="main" class="container">
    <div class="card">
        <div class="card-header"><h4><?php echo $judul?></h4></div>
        <div class="card-body"> <a href="<?php echo base_url('web/create');?>" class="btn btn-success">Tambah Data</a></div>
        <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($bio as $b ) {?>
            <tr>
                <td><?php echo $b->nama?></td>
                <td><?php echo $b->alamat?></td>
                <td><?php echo $b->pekerjaan?></td>
                <td>
                    
                <li class="list-group-item">
        <a href="<?php echo base_url(); ?>web/edit/<?php echo $b->id; ?>" class="btn btn-info">Ubah</a>

				<a href="<?php echo base_url(); ?>web/hapus/<?php echo $b->id; ?>" class="btn btn-danger" onclick="return confirm('yakin'); ">Hapus</a>
                </td>
            </tr>
        <?php }?>
    </table>
    </div>
</main>