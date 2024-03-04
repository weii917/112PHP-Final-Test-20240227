<?php
$que = $Que->find(['id' => $_GET['id']]);
?>

<fieldset>
    <legend>目前位置: 首頁 > 問卷調查 > <?= $que['text']; ?></legend>
    <form action="./api/vote.php" method="post">


        <h4><?= $que['text']; ?></h4>

        <?php
        $opts = $Que->all(['subject_id' => $_GET['id']]);
        foreach ($opts as $opt) {
        ?>
            <div>
                <input type="radio" name="opt" value="<?= $opt['id']; ?>">
                <?= $opt['text']; ?>
            </div>

        <?php
        }
        ?>
        <div class="ct"><input type="submit" value="我要投票"></div>
    </form>
</fieldset>