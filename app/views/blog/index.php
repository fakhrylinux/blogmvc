<div class="container">
    <div class="row">



        <?php foreach ($data['blog'] as $blog) : ?>
            <div class="col-sm-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?= BASEURL; ?>/blog/entry/<?= $blog['entry_id']; ?>"><?= $blog['title']; ?></a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Created at <?= $blog['date_created']; ?></h6>
                        <p class="card-text"><?= $blog['intro']; ?>...</p>
                        <a href="<?= BASEURL; ?>/blog/entry/<?= $blog['entry_id']; ?>" class="card-link">Read More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </div>

    <nav aria-label="Blog Pages">
        <ul class="pagination justify-content-center">
            <?php
            $page = (int) $data['page'];
            $startLoop = $page;
            $totalPages = (int) $data['totalPages'];
            $difference = $totalPages - $page;
            if ($difference <= 5) {
                $startLoop = $totalPages - 5;
            }
            $endLoop = $startLoop + 4;

            if ($page > 1) :
                ?>
                <li class="page-item"><a class="page-link" href="<?= BASEURL; ?>/blog/index/1/">First</a></li>
                <li class="page-item"><a class="page-link" href="<?= BASEURL . "/" . ($page - 1); ?>">&lt;&lt;</a></li>
            <?php endif; ?>

            <?php for ($i = $startLoop; $i <= $endLoop; $i++) : ?>
                <li class="page-item"><a class="page-link" href="<?= BASEURL . "/" . $i; ?>"><?= $i; ?></a></li>
            <?php endfor; ?>

            <?php if ($page <= $endLoop) : ?>
                <li class="page-item"><a class="page-link" href="<?= BASEURL . "/blog/index/" . ($page + 1); ?>">>></a></li>
                <li class="page-item"><a class="page-link" href="<?= BASEURL . "/blog/index/" . $totalPages; ?>">Last</a></li>

            <?php endif; ?>
        </ul>
    </nav>
    <br /><br />
</div>