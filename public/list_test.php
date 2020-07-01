<?php
include "../part/head.php";
?>

<?php
$dbConn = mysqli_connect("site4.blog.oa.gg", "site4", "sbs123414", "site4", 3306) or die("DB CONNECTION ERROR");

$cateItemId = $_GET['cateItemId'];

$sql = "
SELECT *
FROM cateItem
WHERE id = {$cateItemId}
";
$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);
$cateItemName = $row['name'];

$sql = "
SELECT *
FROM article
WHERE cateItemId = {$cateItemId}
ORDER BY ID DESC
";
$rs = mysqli_query($dbConn, $sql);
$articleRows = [];
while ( true ) {
    $row = mysqli_fetch_assoc($rs);

    if ( $row == null ) {
        break;
    }

    $articleRows[] = $row;
}
?>

<?php foreach ( $articleRows as $article ) { ?>
<!--
    <h1>카테고리 : <?=$cateItemName?></h1>
    <div>
    <a href="./detail.php?id=<?=$article['id']?>">번호 : <?=$article['id']?>, 제목 : <?=$article['title']?>, 작성날짜 : <?=$article['regDate']?></a>
</div>
-->
<?php } ?>

<!-- 주요 소식 -->
<h1 class="con">
    <span class="main-title">Recent Stories</span>
</h1>

<div style="border: 1px solid red" class="recentStories con flex flex-wrap">

    <?php foreach ( $articleRows as $article ) { ?>
    <div class="story-list flex con">
        <div class="story flex flex-jc-c flex-ai-c">
            <div class="title-img">
                <a href=""><img src="https://ssw0428.github.io/img1/blog/article/1/[%ED%81%AC%EA%B8%B0%EB%B3%80%ED%99%98]alexandar-todov-Im8ylpB8SpI-unsplash.jpg" alt=""></a></div>
            <div class="issue-1">
                <a class="" href="">Self-Development</a>
                <a class="" href="">20-06-29</a>
            </div>
            <div class="issue-2">
                <a href=""><?=$article['title']?></a>
                <a href="">"내용이 들어가는 부분입니다.내용이 들어가는 부분입니다.내용이 들어가는 부분입니다...."</a>
            </div>
        </div>

    </div>
    <?php } ?>
</div>