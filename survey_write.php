<?php

function h($val){
    return htmlspecialchars($val,ENT_QUOTES);
}

$score = 0;

$date = $_POST['date'];
$namae = $_POST['namae'];
$gender = $_POST['gender'];
$age = $_POST['age'];

$ta1 = $_POST['ta1'];
$tb1 = $_POST['tb1'];
if($ta1 != 0 ){ $score =$score + $tb1; } 

$ta2 = $_POST['ta2'];
$tb2 = $_POST['tb2'];
if($ta2 != 0 ){ $score =$score + $tb2; } 

$ta3 = $_POST['ta3'];
$tb3 = $_POST['tb3'];
if($ta3 != 0 ){ $score =$score + $tb3; } 

$ta4 = $_POST['ta4'];
$tb4 = $_POST['tb4'];
if($ta4 != 0 ){ $score =$score + $tb4; } 

$ta5 = $_POST['ta5'];
$tb5 = $_POST['tb5'];
if($ta5 != 0 ){ $score =$score + $tb5; } 

$ta6 = $_POST['ta6'];
$tb6 = $_POST['tb6'];
if($ta6 != 0 ){ $score =$score + $tb6; } 

$ta7 = $_POST['ta7'];
$tb7 = $_POST['tb7'];
if($ta7 != 0 ){ $score =$score + $tb7; } 

$ta8 = $_POST['ta8'];
$tb8 = $_POST['tb8'];
if($ta8 != 0 ){ $score =$score + $tb8; } 

$ta9 = $_POST['ta9'];
$tb9 = $_POST['tb9'];
if($ta9 != 0 ){ $score =$score + $tb9; } 

$ta10 = $_POST['ta10'];
$tb10 = $_POST['tb10'];
if($ta10 != 0 ){ $score =$score + $tb10; } 

$ta11 = $_POST['ta11'];
$tb11 = $_POST['tb11'];
if($ta11 != 0 ){ $score =$score + $tb11; } 

$ta12 = $_POST['ta12'];
$tb12 = $_POST['tb12'];
if($ta12 != 0 ){ $score =$score + $tb12; } 

$ta13 = $_POST['ta13'];
$tb13 = $_POST['tb13'];
if($ta13 != 0 ){ $score =$score + $tb13; } 

$ta14 = $_POST['ta14'];
$tb14 = $_POST['tb14'];
if($ta14 != 0 ){ $score =$score + $tb14; } 

$ta15 = $_POST['ta15'];
$tb15 = $_POST['tb15'];
if($ta15 != 0 ){ $score =$score + $tb15; } 

$qol = $score/15*25;


// if(isset($_POST['ta1'])) {
//     $ta1 = $_POST['ta1'];
//     echo '選択1A：' . $ta1 . '<br>';
// } else {
//     echo '問１Aが選択されていません。<br>';
// }


// ファイル操作の基本は、
// １．open
// ２．処理
// ３．close の３つがセットです。

// ファイルに書き込む内容を用意。まずは日付を保存する。
date_default_timezone_set('Asia/Tokyo');
$time = date('Y-m-d H:i:s');

// １．open
// aモードでファイルをオーブン
$file = fopen('data/data.txt', 'a');

// ２．処理-1
//ファイルへの書き込み。"\n"は「ファイル内での改行」を指示する記述。ブラウザでいう<br>とのようなもの。
// fwrite($file, h($time). "\n");

// fwrite($file, h($date). "\n");
// fwrite($file, h($namae). "\n");
// fwrite($file, h($age). "\n");
// fwrite($file, h($gender). "\n");

// ２．処理-2
// $timeや$nameをファイルに書き込む際、区切り文字として、 /(スラッシュ)を結合しています。
$str = $date . ' / ' . h($namae) . ' / ' .  h($age) . ' / ' . h($gender) . ' / ' . 
                    $qol . ' / ' . 
                    h($ta1) . ' / ' . h($tb1) . ' / ' . 
                    h($ta2) . ' / ' . h($tb2). ' / ' . 
                    h($ta3) . ' / ' . h($tb3). ' / ' . 
                    h($ta4) . ' / ' . h($tb4). ' / ' . 
                    h($ta5) . ' / ' . h($tb5). ' / ' . 
                    h($ta6) . ' / ' . h($tb6). ' / ' . 
                    h($ta7) . ' / ' . h($tb7). ' / ' . 
                    h($ta8) . ' / ' . h($tb8). ' / ' . 
                    h($ta9) . ' / ' . h($tb9). ' / ' . 
                    h($ta10) . ' / ' . h($tb10). ' / ' . 
                    h($ta11) . ' / ' . h($tb11). ' / ' . 
                    h($ta12) . ' / ' . h($tb12). ' / ' . 
                    h($ta13) . ' / ' . h($tb13). ' / ' . 
                    h($ta14) . ' / ' . h($tb14). ' / ' . 
                    h($ta15) . ' / ' . h($tb15);

fwrite($file, $str . "\n");


// ３．close 
fclose($file);

// r 読み込みのみでオープンします。
// r+ 読み込み/書込み用にオープンします。

// w 書込みのみでオープンします。内容をまず削除、ファイルがなければ作成
// w+ 読み込み/書込み用でオープンします。内容をまず削除、ファイルがなければ作成

// a 追加書込み用のみでオープンします。ファイルがなければ作成
// a+ 読み込み/追加書込み用でオープンします。ファイルがなければ作成

?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="survey_read.php">確認する</a></li>
        <li><a href="survey.php">新しい入力</a></li>
    </ul>
</body>

</html>
