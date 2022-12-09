<html>

    <head>
        <meta charset="utf-8">
        <title>survey read（受信）</title>
        <link rel="stylesheet" href="css/deqs.css">
        
    </head>

    <body>


        <table border="4" style="border-collapse: collapse ;border-color:black">
            <?php 

                $file = fopen('./data/data.txt', 'r');   //ファイルopenしたら表の見出しを作成
                echo "<tr>\n";
                echo "<th>日付</th><th>名前</th><th>年齢</th><th>性別</th><th>QOLスコア</th>";
                echo "</tr>\n";
                while(!feof($file)){    //1行ずつ読み込みをループして、表にはめていく
                    $line = fgets($file);
                    if (trim($line) != null){

                        list($date,$namae,$age,$gender,$qol) = explode("/",$line);

                        echo "<tr>\n";
                        echo "<td>$date</td><td>$namae</td><td>$age</td><td>$gender</td><td>$qol</td>";
                        echo "</tr>\n";
                    }
                }

                fclose($file);  //ファイル閉じる

            ?>
        </table>

    </body>

</html>
