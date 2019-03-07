<?php include('partials/header.view.php'); ?>

<h1>To Do List</h1>
<hr>


<ul>
    <?php foreach ($tasks as $task) : ?>
    <li>

        <strong>Task: </strong>
        <?php if ($task->completed) : ?>
        <strike><?= $task->description; ?> </strike>
        <hr>
        <?php else : ?>
        <?= $task->description;  ?>
        <hr>
        <?php endif; ?>

    </li>
    <?php endforeach; ?>

</ul>



<?php require 'partials/footer.view.php'; ?> 