<?php
$this->extend('/Admin/Common/index');
$this->set('statusBarSettings', [
    'pathway' => __dx($po, 'admin', 'tags')
]);
?>

<?= $this->Table->start() ?>
    <thead>
        <th class="main-column">
            <?= __d('admin', 'title') ?>
        </th>

        <?php if (TRANSLATION_ACTIVE): ?>
            <th></th>
        <?php endif; ?>
        <th></th>

    </thead>

    <tbody>
        <tr v-for="record in records" :key="record.id" v-cloak>

            <th scope="row">
                <?= $this->Table->editLink() ?>
            </th>

            <?php if (TRANSLATION_ACTIVE): ?>
                <td>
                    <?= $this->Table->translationStatus() ?>
                </td>
            <?php endif; ?>

            <td>
                <div class="table__actions">
                    <?php echo $this->Table->editAction() ?>
                    <?php echo $this->Table->deleteAction() ?>
                </div>
            </td>

        </tr>

        <?= $this->Table->empty() ?>

    </tbody>

<?= $this->Table->end() ?>
