<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>
    <link rel="stylesheet" href="/resource/common.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/resource/common.js"></script>
</head>

<body>
    <!-- 모바일 바 -->
    <div class="mobile-bar  visible-sm-down flex">
        <!-- 모바일 사이드 바 -->
        <div class="mobile-top-bar visible-sm-down flex flex-1-0-0">
            <a href="#" onclick="return false;" class="btn-toggle-mobile-side-bar flex-as-c">
                <div></div>
                <div></div>
                <div></div>
            </a>
        </div>
        <!-- 모바일 로고 바 -->
        <div class="mobile-logo visible-sm-down flex flex-jc-c flex-ai-c flex-1-0-0">
            <a href="# flex flex-jc-c flex-ai-c"></a>
        </div>
        <!-- 오른쪽 사이드 이름 -->
        <div class="side-name-bar flex flex-1-0-0 flex-jc-end flex-ai-c">
            <span>Sang _ Won's Blog</span>
        </div>
    </div>
    <!-- 모바일 서브 메뉴 바bg -->
    <div class="mobile-side-bar-bg"></div>
    <!-- 모바일 서브 메뉴 바 -->
    <div class="mobile-side-bar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">About Me</a></li>
            <li><a href="#">SNS</a></li>
        </ul>
    </div>

    <!-- 탑바 -->
    <div class="top-bar visible-md-up">
        <div class="con height-100p flex">
            <!-- 로고(아직 없음) -->
            <a href="/" class="logo flex flex-ai-c">
                <i class="fas fa-clone"></i>
            </a>
            <!-- 메뉴 박스 -->
            <nav class="menu-box-1 flex flex-1-0-0">
                <ul class="flex flex-1-0-0">
                    <li class="flex-1-0-0 flex"><a href="/"
                            class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>Home</span></a></li>
                    <li class="flex-1-0-0 flex"><a href="/list.php"
                            class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>Articles</span></a>
                    </li>
                    <li class="flex-1-0-0 flex"><a href="/aboutMe.php"
                            class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>About Me</span></a>
                    </li>
                    <li class="flex-1-0-0 flex">
                        <a href="#" class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>SNS</span></a>
                        <ul>
                            <li>
                                <a href="https://github.com/jhs512" target="_blank">
                                    GITHUB
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/jhs512" target="_blank">
                                    FACEBOOK
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/jhs512" target="_blank">
                                    INSTA
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
