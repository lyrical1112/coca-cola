<?php
    include "connect.php";
    session_start();

    $border_num = $_GET["num"];
    $sql_Typing = "SELECT * FROM coca_cs WHERE num = ". $border_num;
    $result = mysqli_query($conn, $sql_Typing);
    $row = mysqli_fetch_array($result);
    
    if($result == false){
        echo mysqli_error($conn);
    }
    else{
        $coca_Title = $row["Title"];
        $coca_Name = $row["UserName"];
        $coca_Date = $row["Write_day"];
        $coca_Txts = nl2br($row["Dscr"]);
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
                                <li><a href="coca_about.html" class="to-right-underline">íėŽėę°</a></li>
                                <li><a href="coca_history.html" class="to-right-underline">History</a></li>
                                <li><a href="coca_social.html" class="to-right-underline">ėŽíęģĩí</a></li>
                                <li><a href="coca_factory.html" class="to-right-underline">ėŽėėĨė ëģī</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="coca_product.html" class="to-right-underline">Product</a>
                        <div class="nav_top">
                            <ul class="wrapper">
                                <li><a href="coca_product.html" class="to-right-underline">íė°ėëĢ</a></li>
                                <li><a href="" class="to-right-underline">ėīėĻėëĢ</a></li>
                                <li><a href="" class="to-right-underline">í° & ėŧĪíž</a></li>
                                <li><a href="" class="to-right-underline">ėí°</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="coca_story_media.html" class="to-right-underline">COCA Story</a>
                        <div class="nav_top">
                            <ul class="wrapper">
                                <li><a href="coca_story_media.html" class="to-right-underline">Media</a></li>
                                <li><a href="coca_story_brand.html" class="to-right-underline">ëļëëėĪí ëĶŽ</a></li>
                                <li><a href="" class="to-right-underline">ëžėīí</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="coca_info.html" class="to-right-underline">CS center</a>
                        <div class="nav_top">
                            <ul class="wrapper">
                                <li><a href="coca_info.html" class="to-right-underline">ę°ėļė ëģīėēëĶŽë°ĐėđĻ</a></li>
                                <li><a href="coca_faq.html" class="to-right-underline">FAQ</a></li>
                                <li><a href="coca_cs_center.php" class="to-right-underline">ęģ ę°ėëīėží°</a></li>
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
            <h2  class="C_sub_title">
                CS Center > ęģ ę°ėëīėží° > ëŽļė ėėą íėļ
            </h2>
        </section>
        <section id="sec2">
            <table class="tableform">
                <tr class="table_1">
                    <th>ė ëŠĐ</th>
                    <td colspan="3">
                        <?=$coca_Title?>
                    </td>
                </tr>
                <tr class="table_2">
                    <th>ėėąė</th>
                    <td>
                        <?=$coca_Name?>
                    </td>
                    <th>ë ė§</th>
                    <td class="table_date">
                        <?=$coca_Date?>
                    </td>
                </tr>
                <tr class="table_3">
                    <td colspan="4">
                        <?=$coca_Txts?>
                    </td>
                </tr>
            </table>
            <form action="coca_cs_center.php">
                <div class="table_btn">
                    <a href="coca_cs_center.php"><input type="button" value="í ėļ"> </a>
                </div>
            </form>
        </section>

    </main>

    <div class="footer1">
        <div class="wrapper clearfix footer2">
            <a href="index.html" class="brand">
                <img src="img/logo.png" alt="logo">
            </a>
            <div class="copyright">
                <div>ėĢžė : ėėļė ėĒëĄęĩŽ ėëŽļėëĄ 68 íĨęĩ­ėëŠëđëĐ 18ėļĩ íęĩ­ ė―ėđī-ė―ëž (110-786)</div>
                <div>ė―ėđī-ė―ëž ėëĢ(ėĢž) ęģ ę°ėëīėĪ : 080-024-5999 (ėëī ėę°: ė ~ ęļ 09:00 ~ 18:00)</div>
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
                            <span>ė―ėđīė―ëž ė ë</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.lghnh.com:984/index.jsp" target="_blank">
                            <span>LG ėíęąīę°</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.ccbk.co.kr/index.jsp" target="_blank">
                            <span>ė―ėđīė―ëž ėëĢ</span>
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
                    <li><a href="coca_info.html" class="to-right-underline2">ę°ėļė ëģīėēëĶŽë°ĐėđĻ</a></li>
                    <li><a href="coca_cs_center.php" class="to-right-underline2">ęģ ę°ėëīėží°</a></li>
                    <li><a href="coca_faq.html" class="to-right-underline2">FAQ</a></li>
                </ul>
            </div>
            <div class="sns_btn">
                <div>
                    <a href="https://www.facebook.com/Coca-Cola" target="_blank"><img src="img/facebook.svg"
                            alt="ė―ėđīė―ëž íėīėĪëķ"></a>
                </div>
                <div>
                    <a href="https://www.instagram.com/coke.style/" target="_blank"><img src="img/instagram.svg"
                            alt="ė―ėđīė―ëž ėļėĪíę·ļëĻ"></a>
                </div>
                <div>
                    <a href="https://www.youtube.com/user/openhappinesskorea" target="_blank"><img src="img/youtube.svg"
                            alt="ė―ėđīė―ëž ė íëļ"></a>
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