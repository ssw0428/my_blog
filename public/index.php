<?php
include "../part/head.php";

$dbHost = "site4.blog.oa.gg";
$dbPort = 3306;
$dbId = "site4";
$dbPw = "sbs123414";
$dbName = 'site4';

// 전화걸기
$dbConn = mysqli_connect($dbHost, $dbId, $dbPw, $dbName, $dbPort) or die("DB CONNECTION ERROR");


// 상대방에게 할말 적기
$sql = "
SELECT *
FROM article
ORDER BY id DESC
LIMIT 4
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
<!-- 메인페이지  -->
<div class="main-page con">
    <section class="container con">
        <div class="blog-name flex flex-jc-c">
            <h1>
                Hello :)
            </h1>
            <br>
            <h1 style="line-height:150%">
                Sang Won's Blog
            </h1>
        </div>

        <div class="self-introduction flex">
            <!-- 슬라이더 -->
            <div class="main-slider">
                <div class="slides">
                    <div class="active" style="background-image:url(../resource/img/main-slide-2.jpg);"></div>
                    <div style="background-image:url(../resource/img/main-slide-4.jpg);"></div>
                    <div style="background-image:url(../resource/img/main-slide-3.jpg);"></div>
                    <div style="background-image:url(../resource/img/main-slide-1.jpg);"></div>
                    <div style="background-image:url(../resource/img/main-slide-5.jpg);"></div>
                </div>

                <div class="side-bars">
                    <div>
                        <span>
                            <i class="fas fa-angle-left"></i>
                        </span>
                    </div>
                    <div>
                        <span>
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="my-img">
                <img src="/resource/img/img-2.png" alt="">
            </div>
            <div class="text flex flex-1-0-0 flex-ai-c">
                Sang Won's Blog에 찾아와주셔서 감사합니다. <br>제가 지금까지 공부한 자료와 저의 일상들이 기록되어 있는 공간입니다. 부족하지만, 많은 글들을 보시면서 함께
                공감하길 원해요.
            </div>
        </div>

    </section>
    <section class="con flex">
    </section>
    <section></section>
</div>

<!-- 주요 소식 -->
<span class="flex main-title con">Recent Stories</span>
<div class="recentStories flex con">
    <?php foreach ( $articles as $article ) { ?>
    <div class="story-list flex flex-ai-c flex-jc-c" >
        <div class="story flex flex-jc-c flex-ai-c">
            <div class="title-img flex flex-jc-c">
                <a href="detail.php?id=<?=$article['id']?>">
                    <img src="<?=$article['thumbImgUrl']?>" alt="">
                </a>
            </div>
            <div class="issue-1">
                <a class="" href="">Self-Development</a>
                <a href="detail.php?id=<?=$article['id']?>">
                    <?=substr($article['regDate'], 0, 10)?>
                </a>
            </div>
            <div class="issue-2">
                <a href="detail.php?id=<?=$article['id']?>">
                    <?=$article['title']?>
                </a>
                <a href="detail.php?id=<?=$article['id']?>">
                    <span>
                        <?=$article['summary']?>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<ul class="more-content">
    <li class="content">
        <h1>
            더 많은 글을 보고 싶다면?
        </h1>
    </li>
    <li class="click">
        <a href="">
            MORE
        </a>
    </li>
</ul>

<!--
<div class="main-bar con">
    <span>My Profile</span>

    <div class="profile-bar flex">

        <div class="my-img">
            <a href="#">
                <img src="../resource/img/img-2.png" alt="">
            </a>
        </div>

        <div class="profile-list">
            <div class="name">
                <span>이름: 서상원</span>
            </div>
            <div class="old">
                <span>나이: 95.04.28 / 26살</span>
            </div>
            <div class="hobby">
                <span>취미: 사진찍기, IT기기 정보</span>
            </div>
            <div class="e-mail">
                <span>e-mail: ssw0428@naver.com</span>
            </div>
            <div class="phone">
                <span>phone-number: 010-3496-4521</span>
            </div>
            <div></div>
        </div>
    </div>
</div>
-->

<?php
include "../part/foot.php"
?>