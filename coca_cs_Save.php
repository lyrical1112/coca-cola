<?php
    include "connect.php";
    session_start();

    $edit_title = 
    $edit_user =
    $edit_date = 
    $edit_memo =
    $edit_pw = "";                

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $edit_title = $_POST['title'];
        $edit_user = $_POST['name'];
        $edit_date = $_POST['date'];
        $edit_memo = $_POST['content'];
        $edit_pw = $_POST['pw'];
    }
    
    $strConver = nl2br($edit_memo);

    include "connect.php";
    $sql_Typing = "INSERT INTO coca_cs(Title,Write_day,Dscr,UserName,Pw) 
    VALUES( '$edit_title', '$edit_date', '$edit_memo', '$edit_user', '$edit_pw')";

    $result = mysqli_query($conn, $sql_Typing);
    
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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/coca_HF.css" rel="stylesheet">
    <link href="css/coca_cs_Write.css" rel="stylesheet">

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
                                <li><a href="coca_about.html" class="to-right-underline">????????????</a></li>
                                <li><a href="coca_history.html" class="to-right-underline">History</a></li>
                                <li><a href="coca_social.html" class="to-right-underline">????????????</a></li>
                                <li><a href="coca_factory.html" class="to-right-underline">???????????????</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="coca_product.html" class="to-right-underline">Product</a>
                        <div class="nav_top">
                            <ul class="wrapper">
                                <li><a href="coca_product.html" class="to-right-underline">????????????</a></li>
                                <li><a href="" class="to-right-underline">????????????</a></li>
                                <li><a href="" class="to-right-underline">??? & ??????</a></li>
                                <li><a href="" class="to-right-underline">??????</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="coca_story_media.html" class="to-right-underline">COCA Story</a>
                        <div class="nav_top">
                            <ul class="wrapper">
                                <li><a href="coca_story_media.html" class="to-right-underline">Media</a></li>
                                <li><a href="coca_story_brand.html" class="to-right-underline">??????????????????</a></li>
                                <li><a href="" class="to-right-underline">?????????</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="coca_info.html" class="to-right-underline">CS center</a>
                        <div class="nav_top">
                            <ul class="wrapper">
                                <li><a href="coca_info.html" class="to-right-underline">????????????????????????</a></li>
                                <li><a href="coca_faq.html" class="to-right-underline">FAQ</a></li>
                                <li><a href="coca_cs_center.php" class="to-right-underline">??????????????????</a></li>
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
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
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
            <h2 class="C_sub_title">
                CS Center > ?????????????????? > ?????? ?????? ??????
            </h2>
        </section>
        <section id="sec2">
            <table class="tableform">
                <tr class="table_1">
                    <th>??????</th>
                    <td colspan="3">
                        <?=$edit_title?>
                    </td>
                </tr>
                <tr class="table_2">
                    <th>?????????</th>
                    <td>
                        <?=$edit_user?>
                    </td>
                    <th>??????</th>
                    <td class="table_date">
                        <?=$edit_date?>
                    </td>
                </tr>
                <tr class="table_3">
                    <td colspan="4">
                        <?=$strConver?>
                    </td>
                </tr>
            </table>
            <div class="table_btn">
                <a href="coca_cs_center.php"  class="cs_inquire"><input type="submit" value="??? ???"></a>
            </div>
        </section>

    </main>

    <div class="footer1">
        <div class="wrapper clearfix footer2">
            <a href="index.html" class="brand">
                <img src="img/logo.png" alt="logo">
            </a>
            <div class="copyright">
                <div>?????? : ????????? ????????? ???????????? 68 ?????????????????? 18??? ?????? ??????-?????? (110-786)</div>
                <div>??????-?????? ??????(???) ??????????????? : 080-024-5999 (?????? ??????: ??? ~ ??? 09:00 ~ 18:00)</div>
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
                            <span>???????????? ??????</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.lghnh.com:984/index.jsp" target="_blank">
                            <span>LG ????????????</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.ccbk.co.kr/index.jsp" target="_blank">
                            <span>???????????? ??????</span>
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
                    <li><a href="coca_info.html" class="to-right-underline2">????????????????????????</a></li>
                    <li><a href="coca_cs_center.php" class="to-right-underline2">??????????????????</a></li>
                    <li><a href="coca_faq.html" class="to-right-underline2">FAQ</a></li>
                </ul>
            </div>
            <div class="sns_btn">
                <div>
                    <a href="https://www.facebook.com/Coca-Cola" target="_blank"><img src="img/facebook.svg"
                            alt="???????????? ????????????"></a>
                </div>
                <div>
                    <a href="https://www.instagram.com/coke.style/" target="_blank"><img src="img/instagram.svg"
                            alt="???????????? ???????????????"></a>
                </div>
                <div>
                    <a href="https://www.youtube.com/user/openhappinesskorea" target="_blank"><img src="img/youtube.svg"
                            alt="???????????? ?????????"></a>
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
    <script src="js/script.js"></script>
</body>

</html>