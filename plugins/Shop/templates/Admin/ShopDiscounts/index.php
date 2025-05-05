<?php
$this->extend('/Admin/Common/index');
$this->set('statusBarSettings', [
    'pathway' => __dx($po, 'admin', 'discounts')
]);
?>

<?= $this->Table->start() ?>
    <thead>
        <th class="main-column">
            <?= __d('admin', 'title') ?>
        </th>

        <th class="main-column">
            <?= __dx($po, 'admin', 'discount_percentage') ?>
        </th>

        <th>
            <?= __dx($po, 'admin', 'active') ?>
        </th>

        <th></th>

    </thead>

    <tbody>
        <tr v-for="record in records" :key="record.id" v-cloak>

            <th scope="row">
                <?= $this->Table->editLink() ?>
            </th>

            <td>
                {{ record.percentage }}%
            </td>

            <td>
                <?php echo $this->Table->toggler('active') ?>
            </td>

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
