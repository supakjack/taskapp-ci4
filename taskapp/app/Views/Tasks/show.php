<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
Tasks
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>Tasks</h1>
<a href="<?= site_url('tasks') ?>">&laquo; backk to index</a>
<dl>
    <dt>ID</dt>
    <dd><?= $task->id ?></dd>

    <dt>Description</dt>
    <dd> <?= esc($task->description) ?></dd>

    <dt>created_at</dt>
    <dd> <?= $task->created_at ?></dd>

    <dt>updated_at</dt>
    <dd> <?= $task->updated_at ?></dd>
</dl>
<a href="<?= site_url('tasks/edit/' . $task->id) ?>">Edit</a>
<a href="<?= site_url('tasks/delete/' . $task->id) ?>">Delete</a>
<?= $this->endSection() ?>