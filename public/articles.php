<?php
include "../part/head.php";


// 전화번호 세팅
$dbHost = "site4.blog.oa.gg";
$dbPort = 3306;
$dbId = "site4";
$dbPw = "sbs123414";
$dbName = 'site4';

// 전화걸기
$dbConn = mysqli_connect($dbHost, $dbId, $dbPw, $dbName, $dbPort) or die("DB CONNECTION ERROR");

// 전화연결이 성공했다면 이 부분 실행됨

if ( isset($_GET['cateItemId']) == false ) {
    $_GET['cateItemId'] = 0;
}

$cateItemId = $_GET['cateItemId'];

$cateItemName = '전체';

if ( $cateItemId ) {
    $sql = "
    SELECT name
    FROM cateItem
    WHERE id = '{$cateItemId}'
    ";
    $rs = mysqli_query($dbConn, $sql);
    $row = mysqli_fetch_assoc($rs);
    $cateItemName = $row['name'];
}

// 상대방에게 할말 적기
$sql = "
SELECT *
FROM article
";

if ( $cateItemId ) {
    $sql .= "
    WHERE cateItemId = '{$cateItemId}'
    ";
}

$sql .= "
ORDER BY id DESC
";

// 말하고 응답받기
$rs = mysqli_query($dbConn, $sql);
$articles = [];
while ( true ) {
    $row = mysqli_fetch_assoc($rs);
    if ( $row == null ) {
        break;
    }
    $articles[] = $row;
}
?>



<div class="con main-title">
    <h1><?=$cateItemName?></h1>
</div>

<!--
<div class="self-development-menu con flex flex-jc-c flex-ai-c">
    <ul class="flex flex-jc-c flex-ai-c">
        <li><a href="#">HTML</a></li>
        <li><a href="#">CSS</a></li>
        <li><a href="#">Java Script</a></li>
        <li><a href="#">The Rest</a></li>
    </ul>
</div>
-->

<ul class="text-list con">
    <?php foreach ( $articles as $article ) { ?>
    <ul class="inner">
            <li class="inner-2 flex">
                <div class="title flex">
                    <a href="detail.php?id=<?=$article['id']?>">
                        <h1><?=$article['title']?></h1>
                    </a>
                </div>
                <div class="summary">
                    <a href="detail.php?id=<?=$article['id']?>">
                        <span>
                            <?=$article['summary']?>
                        </span>
                    </a>
                </div>
                <div class="date">
                    <a href="detail.php?id=<?=$article['id']?>">
                        <?=substr($article['regDate'], 0, 10)?>
                    </a>
                </div>
            </li>
            <li class="title-img flex flex-jc-end">
                <a href="detail.php?id=<?=$article['id']?>">
                    <img src="<?=$article['thumbImgUrl']?>" alt="">
                </a>
            </li>
    </ul>
    <?php } ?>
</ul>




<?php
    include "../part/foot.php"
?>