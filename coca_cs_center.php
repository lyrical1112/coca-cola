<?php
    session_start();

    include "connect.php";

    $sql_typing = "SELECT * FROM coca_cs";

    $result = mysqli_query($conn, $sql_typing);
    $table_cnt = mysqli_affected_rows($conn);

    if($result == false){
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/coca_HF.css" rel="stylesheet">
    <link href="css/coca_cs_center.css" rel="stylesheet">
    <link href="css/swiper-bundle.min.css" rel="stylesheet" />
</head>

<body>
    <header>
        <div class="wrapper">
            <div class="brand">
                <a href="index.html">
                    <img src="img/logo.png" alt="logo">
                </a>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="coca_about.html" class="to-right-underline">About COCA</a>
                        <div class="nav_top">
                            <ul class="wrapper">
                                <li><a href="coca_about.html" class="to-right-underline">회사소개</a></li>
                                <li><a href="coca_history.html" class="to-right-underline">History</a></li>
                                <li><a href="coca_social.html" class="to-right-underline">사회공헌</a></li>
                                <li><a href="coca_factory.html" class="to-right-underline">사업장정보</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="coca_product.html" class="to-right-underline">Product</a>
                        <div class="nav_top">
                            <ul class="wrapper">
                                <li><a href="coca_product.html" class="to-right-underline">탄산음료</a></li>
                                <li><a href="" class="to-right-underline">이온음료</a></li>
                                <li><a href="" class="to-right-underline">티 & 커피</a></li>
                                <li><a href="" class="to-right-underline">워터</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="coca_story_media.html" class="to-right-underline">COCA Story</a>
                        <div class="nav_top">
                            <ul class="wrapper">
                                <li><a href="coca_story_media.html" class="to-right-underline">Media</a></li>
                                <li><a href="coca_story_brand.html" class="to-right-underline">브랜드스토리</a></li>
                                <li><a href="" class="to-right-underline">라이프</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="coca_info.html" class="to-right-underline">CS center</a>
                        <div class="nav_top">
                            <ul class="wrapper">
                                <li><a href="coca_info.html" class="to-right-underline">개인정보처리방침</a></li>
                                <li><a href="coca_faq.html" class="to-right-underline">FAQ</a></li>
                                <li><a href="coca_cs_center.php" class="to-right-underline">고객상담센터</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="search">
                        <a>
                            <img src="img/search.svg" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>

    <main>
        <div class="title">
            <div class="inner-header flex">
                <h1>CS Center</h1>
            </div>
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
        </div>
        <section id="sec1">
            <h2>
                CS Center > 고객상담센터
            </h2>
        </section>
        <section id="sec2">
            <article class="txt_area">
                <div class="bbslist">
                    <form action="" method="post">
                        <ul>
                            <li class="left">총 <?=$table_cnt?> 번</li>
                            <li class="right">
                                <span class="searchform">
                                    <input type="text" name="search_text" id="search_text" placeholder="제목, 내용">
                                    <button type="submit" class="btn_resp size_b">검색</button>
                                </span>
                            </li>
                        </ul>
                    </form>
                    <div class="res_table">
                        <ul class="thead">
                            <li style="width: 60px;">번호</li>
                            <li>제목</li>
                            <li style="width: 150px;">등록일</li>
                            <li style="width: 100px;">작성자</li>
                        </ul>
                        <?php
                            while($table = mysqli_fetch_array($result)){
                                echo '
                                        <ul class="tbody">
                                        <li class="mo_hide">'.$table["Num"].'</li>
                                        <li class="subject">
                                            <a style="color:#000" href="coca_cs_View.php?num='.$table["Num"].' ">'.$table["Title"].'</a>
                                            </li>
                                        <li>'.$table["Write_day"].'</li>
                                        <li>'.$table["UserName"].'</li>
                                    </ul>';
                            }
                        ?>
                    </div>
                    <div id="pagingDisplay" class="paging_nav">
                        <a href="" class="on red">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                        <a href="">4</a>
                        <a href="" class="next"></a>
                        <a href="coca_cs_Write.html" class="cs_inquire"><input type="button" value="문의하기"></a>
                    </div>
                </div>
            </article>
        </section>

    </main>

    <div class="footer1">
        <div class="wrapper clearfix footer2">
            <a href="index.html" class="brand">
                <img src="img/logo.png" alt="logo">
            </a>
            <div class="copyright">
                <div>주소 : 서울시 종로구 새문안로 68 흥국생명빌딩 18층 한국 코카-콜라 (110-786)</div>
                <div>코카-콜라 음료(주) 고객상담실 : 080-024-5999 (상담 시간: 월 ~ 금 09:00 ~ 18:00)</div>
            </div>
            <div class="bot_nav">
                <ul>
                    <li><a href="coca_about.html" class="to-right-underline2"> About COCA </a></li>
                    <li><a href="coca_product.html" class="to-right-underline2"> Product </a></li>
                    <li><a href="coca_story_media.html" class="to-right-underline2"> COCA Story </a></li>
                    <li><a href="coca_info.html" class="to-right-underline2"> CS center </a></li>
                </ul>
            </div>
            <div class="links">
                <button>
                    <span>Family Site</span>
                    <i class="fa fa-caret-up"></i>
                </button>
                <ul>
                    <li>
                        <a href="https://www.coca-colajourney.co.kr/" target="_blank">
                            <span>코카콜라 저니</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.lghnh.com:984/index.jsp" target="_blank">
                            <span>LG 생활건강</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.ccbk.co.kr/index.jsp" target="_blank">
                            <span>코카콜라 음료</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.coca-cola.com/" target="_blank">
                            <span>Global coca-cola</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="cs_nav">
                <ul>
                    <li><a href="coca_info.html" class="to-right-underline2">개인정보처리방침</a></li>
                    <li><a href="coca_cs_center.php" class="to-right-underline2">고객상담센터</a></li>
                    <li><a href="coca_faq.html" class="to-right-underline2">FAQ</a></li>
                </ul>
            </div>
            <div class="sns_btn">
                <div>
                    <a href="https://www.facebook.com/Coca-Cola" target="_blank"><img src="img/facebook.svg"
                            alt="코카콜라 페이스북"></a>
                </div>
                <div>
                    <a href="https://www.instagram.com/coke.style/" target="_blank"><img src="img/instagram.svg"
                            alt="코카콜라 인스타그램"></a>
                </div>
                <div>
                    <a href="https://www.youtube.com/user/openhappinesskorea" target="_blank"><img src="img/youtube.svg"
                            alt="코카콜라 유튜브"></a>
                </div>
            </div>
        </div>
    </div>
    <div id="top_btn">
        <a href="#">
            <img src="img/main/ico_top_btn.svg" alt="">
        </a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/common.js"></script>
</body>

</html>