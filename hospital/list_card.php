<?php require_once 'template/header.php'; ?>
<?php $cards = cardmap::findAll();?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card block">
                <div class="card-header">
                    <h5 class="mb-0">Места проведения</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                        <tr>
                            <th>Пациент</th>
                            <th>Необязательная информация о пациенте</th>
                            <th>Диагноз</th>
                            <th>Поступление</th>
                            <th>Дата поступления</th>
                            <th>Больничная палата</th>
                            <th>Телефон больничной палаты</th>
                            <th>Дата выписки</th>
                            <th>Причина выписки</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($cards as $key => $card) {
                            print("
                                <tr>
                                    <td>{$card['patient_id']}</td>
                                    <td>{$card['patient_neob']}</td>
                                    <td>{$card['diagnose']}</td>
                                    <td>{$card['postup']}</td>
                                    <td>{$card['data_postup']}</td>
                                    <td>{$card['hospital_ward_id']}</td>
                                    td>{$card['ward_telephone']}</td>
                                </tr>
                            ");
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'template/footer.php'; ?><?php
