<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feelm So Good : Genre</title>
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

    <!-- light slider css link -->
    <link rel="stylesheet" href="./plugin/lightslider.css">

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

            
        
            <div class="loadingBox">
                <img src="./img/loading_8.gif" alt="">
            </div>          
            
            <div class="genreSec">
                <div class="genreTab">
                    <button type="button" class="all"><span>All</span></button>
                    <button type="button" class="action"><span>Action</span></button>
                    <button type="button" class="romance"><span>Romance</span></button>
                    <button type="button" class="comedy"><span>Comedy</span></button>
                    <button type="button" class="animation"><span>Animation</span></button>
                    <button type="button" class="sci-fi"><span>sci-fi</span></button>
                    <button type="button" class="thriller"><span>thriller</span></button>
                    <button type="button" class="mystery"><span>mystery</span></button>
                    <button type="button" class="adventure"><span>Adventure</span></button>

                </div>
                <!-- end of genre Tab -->

                <div class="genrePan">
                    <div class="all genreBox">
                        <div class="slideCon allCon" id="allSlide">
                        </div>

                    </div>
                    <div class="action genreBox">
                    
                        
                        
                        <div class="slideCon actionCon" id="actionSlide">
                            <!-- <div class="slideBox">
                                <div>
                                    <img src="/movie_api/img/sample.jpg" alt="">
                                    <div class="slideTxt">
                                        <h3>Title</h3>
                                        <p class="rating"></p>
                                    </div>
                                    <a href="#">Detail</a>
                                </div>
                            </div>
                            end of slide box -->
                            
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
                    <div class="mystery genreBox">
                        <div class="slideCon mysteryCon" id="mysterySlide">
                        </div>

                    </div>
                    <!-- end of mystery -->
                    <div class="adventure genreBox">
                        <div class="slideCon adventureCon" id="adventureSlide">
                        </div>

                    </div>
                    <!-- end of adventure -->


                </div>
                <!-- end of genre panel -->
            </div>
            <!-- end of genre section -->
           
          

                       
            
            
        </div>

    </div>


    <!-- jquery CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- lightslider jQuery link -->
    <script src="./plugin/lightslider.js"></script>

        
    <!-- genre page jQuery link -->
    <script src="./js/genre.js"></script>

    

    <!-- <script>
        $(function(){
            function searchMovie(){
                let searchResult=$(".searchInput").val();
                if(!searchResult){
                    alert("검색어를 입력해주세요");
                    return false;
                }
                location.href="/movie_api/search.html?key=" + searchResult;
            }


            $(".sendBtn").click(function(){
                searchMovie();
            });

            // press enter
            document.addEventListener('keydown', function(e){
                const keyCode = e.keyCode;
                if(keyCode == 13){
                    searchMovie();
                }
            });
           
        });

    
    </script> -->
</body>
</html>