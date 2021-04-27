<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feelm So Good :영화상세정보</title>
   <!-- seo -->
   <meta name="keywords" content="영화 검색 사이트, API, 영화, 공공데이터">
    <meta name="title" content="Feelm So Good : 영화검색사이트">
    <meta name="subject" content="영화검색">
    <meta name="description" content="네이버와 yts의 공공데이터인 영화 API를 활용한 영화 검색 사이트입니다.">
    <meta name="author" content="eunallaco@gmail.com, 이중은">
    <meta name="robots" content="index,follow">
    <meta name="copyright" content="copyrights 2021 LEEJUNGEUN.">

    <!-- open graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Feelm So Good :영화검색사이트">
    <meta property="og:description" content="네이버와 yts의 오픈api를 활용한 영화 검색 사이트입니다.">
    <meta property="og:image" content="http://middleun.dothome.co.kr/movie_api/img/movie_api_bg.jpg">
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

        <!-- header -->
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/movie_api/include/header.php";?>    
        
        <section id="detailSec">
            <div class="center">     

                <span class="border"></span>
                <!-- 데이터로 들어가는 곳 /detail.js -->
            </div>
        </section>       
        <!-- end of detail section -->      
        
        <footer>
            <div class="center">
                <p>[Movie Api Project] Feelm So Good || Designed by Leejungeun </p>
            </div>
        
        </footer>
            
            

    </div>  


    <!-- <-- jquery CDN link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    

    <!-- detail page jQuery link -->
    <script src="./js/detail.js"></script>

     

</body>
</html>