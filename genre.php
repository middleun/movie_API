<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feelm So Good : 장르별페이지</title>
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

    <!-- light slider css link -->
    <link rel="stylesheet" href="./plugin/lightslider.css">

    <!-- style css link -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- media css link -->
    <link rel="stylesheet" href="./css/media.css">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>

<body>
    <div class="wrap">  
        <div class="overlay"></div>   
            
        <!-- header -->
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/movie_api/include/header.php";?>              
    
        <div class="loadingBox">
            <img src="./img/loading_8.gif" alt="">
        </div>          
        
        <section id="genreSec">
            <div class="center">     

                <div class="genreTab">
                    <button type="button" class="action"><i class="fas fa-hand-rock"></i><span>Action</span></button>
                    <button type="button" class="romance"><i class="fas fa-heart"></i><span>Romance</span></button>
                    <button type="button" class="comedy"><i class="fas fa-laugh-squint"></i><span>Comedy</span></button>
                    <button type="button" class="animation"><i class="fas fa-hat-wizard"></i><span>Animation</span></button>
                    <button type="button" class="sci-fi"><i class="fas fa-robot"></i><span>sci-fi</span></button>
                    <button type="button" class="thriller"><i class="fas fa-skull-crossbones"></i><span>Thriller</span></button>
                    <button type="button" class="adventure"><i class="fas fa-binoculars"></i><span>Adventure</span></button>
                    <button type="button" class="more" onclick="window.open('https://www.imdb.com/feature/genre/','_blank')"><i class="fas fa-plus-circle"></i><span>More Genre</span></button>
                </div>
                <!-- end of genre Tab -->

                <div class="genrePan">
                    <div class="action genreBox">       
                        <div class="slideCon actionCon" id="actionSlide">                          
                        </div>
                        <!-- end of slideCon -->
                    </div>
                    <!-- end of action -->
                    <div class="romance genreBox">
                        <div class="slideCon romanceCon" id="romanceSlide">
                        </div>
                    </div>
                    <!-- end of romance -->
                    <div class="comedy genreBox">
                        <div class="slideCon comedyCon" id="comedySlide">
                        </div>
                    </div>
                    <!-- end of comedy -->
                    <div class="animation genreBox">
                        <div class="slideCon animationCon" id="animationSlide">
                        </div>
                    </div>
                    <!-- end of animation -->
                    <div class="sci-fi genreBox">
                        <div class="slideCon sci-fiCon" id="sci-fiSlide">
                        </div>
                    </div>
                    <!-- end of sci-fi -->
                    <div class="thriller genreBox">
                        <div class="slideCon thrillerCon" id="thrillerSlide">
                        </div>
                    </div>
                    <!-- end of thriller -->
                    <div class="adventure genreBox">
                        <div class="slideCon adventureCon" id="adventureSlide">
                        </div>
                    </div>
                    <!-- end of adventure -->
                </div>
                <!-- end of genre panel -->
            </div>

        </section>
        <!-- end of genre section --> 

        <footer>
            <div class="center">
                <p>[Movie Api Project] Feelm So Good || Designed by Leejungeun</p>
                <a href="https://github.com/middleun/movie_API" target="_blank" title="깃허브 바로가기"> <i class= "fab fa-github"></i></a>
            </div>
        </footer>                       
            

    </div>


    <!-- jquery CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- lightslider jQuery link -->
    <script src="./plugin/lightslider.js"></script>
        
    <!-- genre page jQuery link -->
    <script src="./js/genre.js"></script>

    <!-- main js -->
    <script src='./js/custom.js'></script>
</body>
</html>