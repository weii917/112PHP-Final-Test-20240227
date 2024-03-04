<?php
$que = $Que->find(['id' => $_GET['id']]);
?>

<fieldset>
    <legend>目前位置: 首頁 > 問卷調查 > <?= $que['text']; ?></legend>
    <form action="./api/vote.php" method="post">

        <h4><?= $que['text']; ?></h4>

        <?php
        $opts = $Que->all(['subject_id' => $_GET['id']]);
        foreach ($opts as $idx => $opt) {
            $total = ($que['vote'] != 0) ? $que['vote'] : '1';
            $rate = round($opt['vote'] / $total, 2);
        ?>
            <div style="display:flex;margin:5px 0">
                <div style="width:50%"><?= ($idx + 1) . ". " . $opt['text']; ?></div>
                <div style="width:<?= (40 * $rate); ?>%;height:20px;background-color:#ccc"></div>
                <div style="width:10%"><?= $opt['vote']; ?>票(<?= (100 * $rate); ?>%)</div>
            </div>

        <?php
        }
        ?>
        <div class="ct"><input type="button" onclick="location.href='?do=que'" value="返回"></div>
    </form>
</fieldset>