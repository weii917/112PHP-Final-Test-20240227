<fieldset>
    <legend>目前位置: 首頁 > 問卷調查</legend>

    <table style="width:100%;margin:auto;text-align:center">
        <tr>

            <th style="width:10%;">編號</th>
            <th style="width:60%;">問卷題目</th>
            <th style="width:10%;">投票總數</th>
            <th style="width:10%;">結果</th>
            <th style="width:10%;">狀態</th>
            <th></th>

        </tr>
        <?php

        $rows = $Que->all(['subject_id' => 0, 'sh' => 1]);
        foreach ($rows as $idx => $row) {

        ?>
            <td><?= ($idx + 1) . ". "; ?></td>
            <td style="text-align: left;">
                <?= $row['text']; ?>
            </td>
            <td>
                <?= $row['vote']; ?>
            </td>
            <td>
                <a href="?do=result&id=<?= $row['id']; ?>">結果</a>
            </td>
            <td>
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <a href="?do=vote&id=<?= $row['id']; ?>">參與投票</a>
                <?php
                } else {
                ?>
                    <span>請先登入</span>
                <?php
                }
                ?>

            </td>
            </tr>
        <?php
        }
        ?>
    </table>

</fieldset>
<script>

</script>