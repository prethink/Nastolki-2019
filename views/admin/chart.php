<?php
$title = 'Графики';
include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="text-center"><h2>График регистраций за год:</h2></div>
    <div id="chart1" style="height: 250px;"></div>
<script>var month_data = [
        {"period": "2019-01", "regCount": <?php echo $reg[1]['count']?>},
        {"period": "2019-02", "regCount": <?php echo $reg[2]['count']?>},
        {"period": "2019-03", "regCount": <?php echo $reg[3]['count']?>},
        {"period": "2019-04", "regCount": <?php echo $reg[4]['count']?>},
        {"period": "2019-05", "regCount": <?php echo $reg[5]['count']?>},
        {"period": "2019-06", "regCount": <?php echo $reg[6]['count']?>},
        {"period": "2019-07", "regCount": <?php echo $reg[7]['count']?>},
        {"period": "2019-08", "regCount": <?php echo $reg[8]['count']?>},
        {"period": "2019-09", "regCount": <?php echo $reg[9]['count']?>},
        {"period": "2019-10", "regCount": <?php echo $reg[10]['count']?>},
        {"period": "2019-11", "regCount": <?php echo $reg[11]['count']?>},
        {"period": "2019-12", "regCount": <?php echo $reg[12]['count']?>}
    ];
    Morris.Line({
        element: 'chart1',
        data: month_data,
        xkey: 'period',
        ykeys: ['regCount'],
        labels: ['Количество регистрация за месяц'],
        smooth: false
    });</script>

    <div class="text-center"><h2>График новостей по месяцам:</h2></div>
    <div id="chart2" style="height: 250px;"></div>
    <script>var month_data = [
            {"period": "2019-01", "regCount": <?php echo $news[1]['count']?>},
            {"period": "2019-02", "regCount": <?php echo $news[2]['count']?>},
            {"period": "2019-03", "regCount": <?php echo $news[3]['count']?>},
            {"period": "2019-04", "regCount": <?php echo $news[4]['count']?>},
            {"period": "2019-05", "regCount": <?php echo $news[5]['count']?>},
            {"period": "2019-06", "regCount": <?php echo $news[6]['count']?>},
            {"period": "2019-07", "regCount": <?php echo $news[7]['count']?>},
            {"period": "2019-08", "regCount": <?php echo $news[8]['count']?>},
            {"period": "2019-09", "regCount": <?php echo $news[9]['count']?>},
            {"period": "2019-10", "regCount": <?php echo $news[10]['count']?>},
            {"period": "2019-11", "regCount": <?php echo $news[11]['count']?>},
            {"period": "2019-12", "regCount": <?php echo $news[12]['count']?>}
        ];
        Morris.Line({
            element: 'chart2',
            data: month_data,
            xkey: 'period',
            ykeys: ['regCount'],
            labels: ['Новостей за месяц'],
            smooth: false
        });</script>

    <div class="text-center"><h2>График коментариев за год по пользователям:</h2></div>
    <form method="post">
        <div class="input-group">
            <input type="text" name="name" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit" name="generate">Создать отчет о пользователе</button>
            </div>
        </div>
    </form>
    <div id="chart3" style="height: 250px;"></div>
<?php if($result):?>
    <script>var month_data = [
            {"period": "2019-01", "regCount": <?php echo $result[1]['count']?>},
            {"period": "2019-02", "regCount": <?php echo $result[2]['count']?>},
            {"period": "2019-03", "regCount": <?php echo $result[3]['count']?>},
            {"period": "2019-04", "regCount": <?php echo $result[4]['count']?>},
            {"period": "2019-05", "regCount": <?php echo $result[5]['count']?>},
            {"period": "2019-06", "regCount": <?php echo $result[6]['count']?>},
            {"period": "2019-07", "regCount": <?php echo $result[7]['count']?>},
            {"period": "2019-08", "regCount": <?php echo $result[8]['count']?>},
            {"period": "2019-09", "regCount": <?php echo $result[9]['count']?>},
            {"period": "2019-10", "regCount": <?php echo $result[10]['count']?>},
            {"period": "2019-11", "regCount": <?php echo $result[11]['count']?>},
            {"period": "2019-12", "regCount": <?php echo $result[12]['count']?>}
        ];
        Morris.Line({
            element: 'chart3',
            data: month_data,
            xkey: 'period',
            ykeys: ['regCount'],
            labels: ['Коментариев пользователя <?php echo $name?> за месяц'],
            smooth: false
        });</script>
<?php else:?>
    <div class="text-center"><h2>Введите пользователя</h2></div>
<?php endif;?>




<?php include ROOT . '/views/layouts/footer.php'; ?>