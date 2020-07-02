    <?php
    include "../part/head.php"
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
                <div class="text flex flex-1-0-0 flex-ai-c">
                        Sang Won's Blog에 찾아와주셔서<br>감사합니다. <br>제가 지금까지 공부한 자료와 저의 일상들이 기록되어 있는 공간입니다. 부족하지만, 많은 글들을 보시면서 함께
                        공감하길 원해요.
                   
                </div>
            </div>

        </section>
        <section class="con flex">
        </section>
        <section></section>
    </div>

    <!-- 주요 소식 -->
    <div class="recentStories con">
        <span class="main-title">Recent Stories</span>
        <div class="story-list flex con">
            <div class="story flex flex-jc-c flex-ai-c">
                <div class="title-img">
                    <a href=""><img src="/resource/img/story-img-1.jpg" alt=""></a></div>
                <div class="issue-1">
                    <a class="" href="">Self-Development</a>
                    <a class="" href="">20-06-29</a>
                </div>
                <div class="issue-2">
                    <a href=""><?=$article['title']?></a>
                    <a href="">"내용이 들어가는 부분입니다.내용이 들어가는 부분입니다.내용이 들어가는 부분입니다...."</a>
                </div>
            </div>
            <div class="story flex flex-jc-c flex-ai-c">
                <div class="title-img">
                    <a href=""><img src="/resource/img/story-img-1.jpg" alt=""></a></div>
                <div class="issue-1">
                    <a class="" href="">Self-Development</a>
                    <a class="" href="">20-06-29</a>
                </div>
                <div class="issue-2">
                    <a href="">제목들어갑니다.</a>
                    <a href="">"내용이 들어가는 부분입니다.내용이 들어가는 부분입니다.내용이 들어가는 부분입니다...."</a>
                </div>
            </div>
            <div class="story flex flex-jc-c flex-ai-c">
                <div class="title-img">
                    <a href=""><img src="/resource/img/story-img-1.jpg" alt=""></a></div>
                <div class="issue-1">
                    <a class="" href="">Self-Development</a>
                    <a class="" href="">20-06-29</a>
                </div>
                <div class="issue-2">
                    <a href="">제목들어갑니다.</a>
                    <a href="">"내용이 들어가는 부분입니다.내용이 들어가는 부분입니다.내용이 들어가는 부분입니다...."</a>
                </div>
            </div>
            <div class="story flex flex-jc-c flex-ai-c">
                <div class="title-img">
                    <a href=""><img src="/resource/img/story-img-1.jpg" alt=""></a></div>
                <div class="issue-1">
                    <a class="" href="">Self-Development</a>
                    <a class="" href="">20-06-29</a>
                </div>
                <div class="issue-2">
                    <a href="">제목들어갑니다.</a>
                    <a href="">"내용이 들어가는 부분입니다.내용이 들어가는 부분입니다.내용이 들어가는 부분입니다...."</a>
                </div>
            </div>
        </div>
    </div>


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
