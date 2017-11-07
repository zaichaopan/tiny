<?php require __DIR__ ."/../layout/header.view.php"; ?>

<ul>
<?php foreach($tasks as $task):?>
    <li><?= $task->title ?></li>
<?php endforeach; ?>
<ul>

<?php require __DIR__ .'/../layout/footer.view.php'; ?>

