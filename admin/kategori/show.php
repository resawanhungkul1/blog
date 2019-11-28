
  
<?php foreach ($kategori->show($data['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
   $slug = preg_replace(
  '/[^a-z0-9]+/i',
     '-',
    trim(strtolower($data['slug']))
     );
}
?>
<div class="modal fade kategori-<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="proses.php?aksi=update" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit kategori </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" readonly>
                        <label>Nama Slug</label>
                        <input type="text" name="slug" value="<?php echo $data['slug']; ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"  data-dismiss="modal" class="btn btn-block btn-primary">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

