
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="js/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="css/deqs.css">
    <title>ドライアイQOLチェック票</title>
</head>

<body>
    <header>
        <h1>ドライアイQOLチェック票（全15問）</h1>
    </header>
    <main>
        <h2>目の症状と日常生活についての質問票</h2>
        <h3>この質問票は、あなたがどの程度さまざまな目の症状を感じておられるか、あるいは日常生活でどのような<br>
            問題を感じておられるかについてお聞かせいただき、健康管理の参考にさせていただくものです。<br> 
            質問に対しては難しく考えることなく、あなたの印象でお答えください。 </h3>
        
        <form action="survey_write.php" method="post">

                ご記入日: <input id="date" type="date" class="box"  name="date">
                お名前:   <input id="namae" type="text" class="box" name="namae">
                年齢：    <input id="age" type="text" class="box" name="age">
                性別：   <select id="gender" type="text" class="box" name="gender">
                            <option value="NA">無</option>
                            <option value="男">男</option>
                            <option value="女">女</option>
                        </select>
            
            <h4>この１週間で次のような症状がありましたか？</h4>

            <p id="quest1" style="background-color: #8dc3f5">問１）目がゴロゴロする（異物感）</p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta1" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta1" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta1" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta1" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta1" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)

                <input type="radio" name="tb1" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb1" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb1" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb1" value="4"><span class="sb4">選択肢４</span>
            </p>

            <p id="quest2" style="background-color: #8dc3f5">問２）目が乾く）</p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta2" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta2" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta2" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta2" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta2" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)
            
                <input type="radio" name="tb2" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb2" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb2" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb2" value="4"><span class="sb4">選択肢４</span>
            </p>

            <p id="quest3" style="background-color: #8dc3f5">問３）目が痛い</p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta3" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta3" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta3" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta3" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta3" value="4"><span class="sa5">選択肢５</span>

            
            <p>B欄(程度)
            
                <input type="radio" name="tb3" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb3" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb3" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb3" value="4"><span class="sb4">選択肢４</span>
            </p>

            <p id="quest4" style="background-color: #8dc3f5">問４）目が疲れる</p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta4" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta4" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta4" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta4" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta4" value="4"><span class="sa5">選択肢５</span>

            
            <p>B欄(程度)
            
                <input type="radio" name="tb4" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb4" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb4" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb4" value="4"><span class="sb4">選択肢４</span>
            </p>

            <p id="quest5" style="background-color: #8dc3f5">問５）まぶたが重たい</p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta5" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta5" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta5" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta5" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta5" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)
            
                <input type="radio" name="tb5" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb5" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb5" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb5" value="4"><span class="sb4">選択肢４</span>
            </p>
            
            <p id="quest6" style="background-color: #8dc3f5">問６）目が赤くなる</p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta6" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta6" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta6" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta6" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta6" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)
            
                <input type="radio" name="tb6" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb6" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb6" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb6" value="4"><span class="sb4">選択肢４</span>
            </p>
            
            <p id="quest7" style="background-color: #8dc3f5">問７）目を開けているのがつらい</p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta7" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta7" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta7" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta7" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta7" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)
            
                <input type="radio" name="tb7" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb7" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb7" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb7" value="4"><span class="sb4">選択肢４</span>
            </p>
                        
            <p id="quest8" style="background-color: #8dc3f5">問８）目を使􀀀ていると物がかすんで見える</p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta8" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta8" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta8" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta8" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta8" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)
            
                <input type="radio" name="tb8" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb8" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb8" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb8" value="4"><span class="sb4">選択肢４</span>
            </p>

            <p id="quest9" style="background-color: #8dc3f5">問９）光をまぶしく感じる</p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta9" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta9" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta9" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta9" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta9" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)
            
                <input type="radio" name="tb9" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb9" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb9" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb9" value="4"><span class="sb4">選択肢４</span>
            </p>

            <p id="quest10" style="background-color: #8dc3f5">問１０）新聞、雑誌、本などを読んでいる時、目の症状が悪くなる</p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta10" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta10" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta10" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta10" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta10" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)
            
                <input type="radio" name="tb10" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb10" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb10" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb10" value="4"><span class="sb4">選択肢４</span>
            </p>

            <p id="quest11" style="background-color: #8dc3f5">問１１）テレビを見ている時、パソコン・ケータイを使っている時に目の症状が悪くなる </p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta11" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta11" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta11" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta11" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta11" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)
            
                <input type="radio" name="tb11" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb11" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb11" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb11" value="4"><span class="sb4">選択肢４</span>
            </p>

            <p id="quest12" style="background-color: #8dc3f5">問１２）目の症状のため 集中力が低下する" </p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta12" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta12" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta12" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta12" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta12" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)
            
                <input type="radio" name="tb12" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb12" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb12" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb12" value="4"><span class="sb4">選択肢４</span>
            </p>

            <p id="quest13" style="background-color: #8dc3f5">問１３）目の症状のため 仕事・家事・勉強に差し障りがある 集中力が低下する </p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta13" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta13" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta13" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta13" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta13" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)
            
                <input type="radio" name="tb13" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb13" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb13" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb13" value="4"><span class="sb4">選択肢４</span>
            </p>

            <p id="quest14" style="background-color: #8dc3f5">問１４）目の症状のため 外出を控えがち </p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta14" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta14" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta14" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta14" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta14" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)
            
                <input type="radio" name="tb14" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb14" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb14" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb14" value="4"><span class="sb4">選択肢４</span>
            </p>
        
            <p id="quest15" style="background-color: #8dc3f5">問１５）目の症状のため 気分が晴れない</p>
            <p>A欄(頻度)
            
                <input type="radio" name="ta15" value="0"><span class="sa1">選択肢１</span>
                <input type="radio" name="ta15" value="1"><span class="sa2">選択肢２</span>
                <input type="radio" name="ta15" value="2"><span class="sa3">選択肢３</span>
                <input type="radio" name="ta15" value="3"><span class="sa4">選択肢４</span>
                <input type="radio" name="ta15" value="4"><span class="sa5">選択肢５</span>

            </p>
            <p>B欄(程度)
            
                <input type="radio" name="tb15" value="1"><span class="sb1">選択肢１</span>
                <input type="radio" name="tb15" value="2"><span class="sb2">選択肢２</span>
                <input type="radio" name="tb15" value="3"><span class="sb3">選択肢３</span>
                <input type="radio" name="tb15" value="4"><span class="sb4">選択肢４</span>
            </p>

            <input type="submit" value="送信">

        </form>

    </main>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script src="js/deqs.js"></script>
</body>

</html>