<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ナビゲーションメニュー</title>
    <link href="../nav/nav.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet"> -->

</head>

<body>
<div class="menu-container">
    <nav class="vertical-nav">
    <ul>
        <li><a href="../課題チェックリスト/kadaiChecklist.php" class="<?= $currentPage == 'kadaiChecklist.php' ? 'active' : '' ?>">課題チェックリスト</a></li>
        <li><a href="../学生課題進捗一覧/student_list.php" class="<?= $currentPage == 'student_list.php' ? 'active' : '' ?>">学生課題進捗一覧</a></li>

        <details <?= in_array($currentPage, ['addkamoku.php', 'kamokuList.php']) ? 'open' : '' ?>>
            <summary>科目管理</summary>
            <li><a href="../科目追加/addkamoku.php" id="inside-link" class="<?= $currentPage == 'addkamoku.php' ? 'active' : '' ?>">科目追加</a></li>
            <li><a href="../科目管理リスト/kamokuList.php" id="inside-link" class="<?= $currentPage == 'kamokuList.php' ? 'active' : '' ?>">科目変更削除</a></li>
        </details>

        <details <?= in_array($currentPage, ['kadai_add.php', 'kadaiList.php']) ? 'open' : '' ?>>
            <summary>課題管理</summary>
            <li><a href="../課題追加/kadai_add.php" id="inside-link" class="<?= $currentPage == 'kadai_add.php' ? 'active' : '' ?>">課題追加</a></li>
            <li><a href="../課題管理リスト/kadaiList.php" id="inside-link" class="<?= $currentPage == 'kadaiList.php' ? 'active' : '' ?>">課題変更削除</a></li>
        </details>

        <li><a href="../履修登録管理/kamokuUser.php" class="<?= $currentPage == 'kamokuUser.php' ? 'active' : '' ?>">履修登録</a></li>
        <li><a href="../スタンプ管理画面/stamp.php" class="<?= $currentPage == 'stamp.php' ? 'active' : '' ?>">スタンプ管理</a></li>
        <li><a href="../CSVアップロード/CSV_upload_teacher.php" class="<?= $currentPage == 'CSV_upload_teacher.php' || $currentPage == 'CSV_upload_student.php' ? 'active' : '' ?>">CSV一括登録</a></li>
        <li><a href="../アカウント追加/add_teacher.php" class="<?= $currentPage == 'add_teacher.php' || $currentPage == 'add_student.php' ? 'active' : '' ?>">アカウント追加</a></li>
        <li><a href="../パスワード変更/passhenkou.php" class="<?= $currentPage == 'passhenkou.php' ? 'active' : '' ?>">パスワード変更</a></li>
    </ul>

        <div class="clock"> <!-- 時計 -->
            <p class="clock-date"></p>
            <p class="clock-time"></p>
        </div>

        <!-- 時計のJavaScript -->
        <script src="../nav/clock.js"></script>
    </nav>
   
</div>
</body>
</html>