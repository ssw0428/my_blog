<?php
include "../part/head.php";
?>
<?php
$conn = mysqli_connect("site4.blog.oa.gg", "site4", "sbs123414", "site4", 3306);

mysqli_query($conn, "SET NAMES utf8mb4");

$id = $_GET['id'];
$sql = "
SELECT *
FROM article
WHERE id = {$id}
";
$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($rs);
?>

<link rel="stylesheet" href="/resource/index.css">
<!-- 하이라이트 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/highlight.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/styles/default.min.css">
<!-- 하이라이트 라이브러리, 언어 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/css.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php-template.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/sql.min.js"></script>
<!-- 코드 미러 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/codemirror.min.css" />
<!-- 토스트 UI 에디터, 자바스크립트 코어 -->
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-viewer.min.js"></script>
<!-- 토스트 UI 에디터, 신택스 하이라이트 플러그인 추가 -->
<script
    src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight-all.min.js">
</script>
<!-- 토스트 UI 에디터, CSS 코어 -->
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

<div class="title-list con-2">
    <h1 class="title con"><?=$row['title']?></h1>
    <div class="con name">
        by 서상원
    </div>
    <div class="date">
        <div class="">
            등록날짜 : <?=$row['regDate']?>
        </div>
        <div class="">
            수정날짜 : <?=$row['updateDate']?>
        </div>
    </div>

    <div class="con" style="display:none;" id="origin1">
        <?=$row['body']?>
    </div>
    <div class="con" id="viewer1"></div>
</div>
<script>
    // 유튜브 플러그인 시작
    function youtubePlugin() {
        toastui.Editor.codeBlockManager.setReplacer("youtube", function (youtubeId) {
            // Indentify multiple code blocks
            const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;

            // Avoid sanitizing iframe tag
            setTimeout(renderYoutube.bind(null, wrapperId, youtubeId), 0);

            return `<div id="${wrapperId}"></div>`;
        });
    }

    function renderYoutube(wrapperId, youtubeId) {
        const el = document.querySelector(`#${wrapperId}`);

        el.innerHTML = `<iframe width="420" height="315" src="https://www.youtube.com/embed/${youtubeId}"></iframe>`;
    }
    // 유튜브 플러그인 끝

    // repl 플러그인 시작
    function replPlugin() {
        toastui.Editor.codeBlockManager.setReplacer("repl", function (replUrl) {
            var postSharp = "";
            if (replUrl.indexOf('#') !== -1) {
                var pos = replUrl.indexOf('#');
                postSharp = replUrl.substr(pos);
                replUrl = replUrl.substr(0, pos);
            }

            if (replUrl.indexOf('?') === -1) {
                replUrl += "?dummy=1";
            }

            replUrl += "&lite=true";
            replUrl += postSharp;

            // Indentify multiple code blocks
            const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;

            // Avoid sanitizing iframe tag
            setTimeout(renderRepl.bind(null, wrapperId, replUrl), 0);

            return "<div id=\"" + wrapperId + "\"></div>";
        });
    }

    function renderRepl(wrapperId, replUrl) {
        const el = document.querySelector(`#${wrapperId}`);

        var urlParams = getUrlParams(replUrl);

        var height = 400;

        if (urlParams.height) {
            height = urlParams.height;
        }

        el.innerHTML = '<iframe height="' + height + 'px" width="100%" src="' + replUrl +
            '" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>';
    }
    // repl 플러그인 끝

    // codepen 플러그인 시작
    function codepenPlugin() {
        toastui.Editor.codeBlockManager.setReplacer("codepen", function (codepenUrl) {
            // Indentify multiple code blocks
            const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;

            // Avoid sanitizing iframe tag
            setTimeout(renderCodepen.bind(null, wrapperId, codepenUrl), 0);

            return "<div id=\"" + wrapperId + "\"></div>";
        });
    }

    function renderCodepen(wrapperId, codepenUrl) {
        const el = document.querySelector(`#${wrapperId}`);

        var urlParams = getUrlParams(codepenUrl);

        var height = 400;

        if (urlParams.height) {
            height = urlParams.height;
        }

        el.innerHTML = '<iframe height="' + height + '" style="width: 100%;" scrolling="no" title="" src="' +
            codepenUrl + '" frameborder="no" allowtransparency="true" allowfullscreen="true"></iframe>';
    }
    // repl 플러그인 끝

    // lib 시작
    function getUrlParams(url) {
        var params = {};

        url.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (str, key, value) {
            params[key] = value;
        });
        return params;
    }
    // lib 끝
    var editor1__initialValue = $('#origin1').html();
    var editor1 = new toastui.Editor({
        el: document.querySelector('#viewer1'),
        height: '600px',
        initialValue: editor1__initialValue,
        viewer: true,
        initialEditType: "markdown",
        previewStyle: "vertical",
        plugins: [toastui.Editor.plugin.codeSyntaxHighlight, youtubePlugin, replPlugin, codepenPlugin]
    });
</script>
<ul class="comment con-2">
    <li class="comment-name">
        <span>댓글쓰기 1</span>
    </li>
    <li class="comment-viewer">
        <span>
            잘보고갑니다.
        </span>
    </li>
    <li class="comment-write">
        <span>좋은 댓글은 블로거에게 큰 힘이 됩니다.</span>
    </li>
</ul>
<div class="con-2 menu">
    <a href="#" onclick="history.back();">[뒤로가기]</a>
    <a href="/list.php">[리스트]</a>
    <a href="#" onclick="history.front();">[앞으로가기]</a>
</div>

<?php
include "../part/foot.php";
?>