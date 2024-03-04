<fieldset style="width:90%;margin:auto">
    <legend>新增文章</legend>
    <form action="./api/add_news.php" method="post">


        <table style="width:100%;margin:auto">
            <tr>
                <td>文章標題</td>
                <td><input style="width:70%" type="text" name="title" id=""></td>
            </tr>
            <tr>
                <td>
                    文章分類
                </td>
                <td>
                    <select name="type" id="">
                        <option value="1">健康新知</option>
                        <option value="2">菸害防治</option>
                        <option value="3">癌症防治</option>
                        <option value="4">慢性病防治</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td>文章內容</td>
                <td><textarea name="text" style="width:70%;height:200px"></textarea></td>
            </tr>

        </table>
        <div class="ct">
            <td>
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
        </div>
    </form>
</fieldset>