<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1>Tasks</h1>
    <a href="/task/create" class="btn btn-primary">Add Task</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= $task['id'] ?></td>
                <td><?= $task['title'] ?></td>
                <td><?= $task['description'] ?></td>
                <td>
                    <a href="/task/edit/<?= $task['id'] ?>" class="btn btn-warning">Edit</a>
                    <a href="/task/delete/<?= $task['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
