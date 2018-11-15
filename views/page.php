<div>
    <?= $page[0]['text'] ?>
</div>
<br />
<div>
    <?php foreach ($pages as $p ){ ?>
        <?php if($p['num'] == $page[0]['num']){ ?>
            <b><?= $p['num'] ?>
        <?php } else { ?>
            <a href="?action=page&book=<?= $book ?>&page=<?= $p['num'] ?>"><?= $p['num'] ?></a>
        <?php } ?>
    <?php } ?>
</div>