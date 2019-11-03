<div class="container">
<div>
    <?php if(isset($_POST['email'])): ?>
    <div class="float-right">
        <a class="btn btn-primary" href="<?= BASEURL; ?>/editor/index/<?= $data['blog']['entry_id']; ?>">Edit</a>
        <a class="btn btn-danger" href="<?= BASEURL; ?>/editor/delete/<?= $data['blog']['entry_id']; ?>">Delete</a>
    </div>
    <?php endif; ?>
    <h3><?= $data['blog']['title']; ?></h3>

</div>
<div>
    <p><?= $data['blog']['entry_text']; ?><p>
</div>
</div>

</div>