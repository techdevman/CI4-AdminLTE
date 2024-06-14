<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1>Edit Task</h1>
    <form action="/task/update/<?= $task['id'] ?>" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="<?= $task['title'] ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" required><?= $task['description'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="submit" class="btn btn-secondary">Cancel</button>
    </form>
</div>
<?= $this->endSection() ?>
