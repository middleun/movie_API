<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feelm So Good : Movie Detail</title>
    <meta name="keywords" content="영화 검색 사이트, API, Movie api, 공공데이터">
   <meta name="subject" content="api 활용 영화검색사이트, Feelm So Good">
   <meta name="description" content="네이버와 yts의 오픈api를 활용한 영화 검색 사이트입니다.">
   <meta name="author" content="eunallaco@gmail.com, 이중은">
   <!-- <meta name="robots" content="index,follow"> -->
   <meta name="copyright" content="copyrights 2021 LEEJUNGEUN.">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Feelm So Good : Movie API">
   <meta property="og:description" content="네이버와 yts의 오픈api를 활용한 영화 검색 사이트입니다.">
   <meta property="og:image" content="http://middleun.dothome.co.kr/movie_api/img/favicon_32x32.png">
   <meta property="og:url" content="https://middleun.dothome.co.kr/movie_api">

    <!-- favicon link -->
    <link rel="icon" href="./img/favicon_32x32.png"/>

    <!-- reset css link -->
    <link rel="stylesheet" href="./css/reset.css">

    <!-- style css link -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- media css link -->
    <link rel="stylesheet" href="./css/media.css">

    <!-- animation css link -->
    <link rel="stylesheet" href="./css/animation.css">



    <!-- font awesome link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

</head>
<body>
    <div class="wrap">     
        <div class="overlay"></div> 
        <div class="center">     

            <!-- header -->
            <?php include $_SERVER["DOCUMENT_ROOT"]. "/movie_api/include/header.php";?>    
            
            <div class="detailSec">
                <span class="border"></span>
                <!-- <div class="detailImg">
                    <img src="" alt="">
                </div>
                <div class="detailInfo">
                    <ul>
                        <li class="detailTit">{movie.title}</li>
                        <li class="detailYear"></li>
                        <li class="detailCast"></li>
                        <li class="detailGenre"></li>
                    </ul>
                </div>
                <div class="detailTxt">
                    <h3>detail</h3>
                    <div class="txtBox">
                        <span class="detailDes"></span>
                    </div>

                </div> -->

            </div>
            <!-- end of detail section -->
           
        
            
                                
            
            
        </div>

    </div>


    


    <!-- <-- jquery CDN link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    

    <!-- detail page jQuery link -->
    <script src="./js/detail.js"></script>

     

</body>
</html>