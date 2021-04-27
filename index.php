<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영화검색은 Feelm So Good</title>

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
             

        <!-- header -->
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/movie_api/include/header.php";?>           
    
        
        <!-- serach section -->
        <section id="searchSec">
            <div class="center">
                <div class="quoteTxt">
                    <h2><i class="fas fa-quote-left"></i>Do The Next Right Thing<i class="fas fa-quote-right"></i></h2>
                </div>
                <div class="searchBox">
                    
                    <input type="text" class="searchInput focusEvent" placeholder="search movie">
                    <button type="button" class="sendBtn" onkeyup="keydown();"><i class="fas fa-search"></i></button>

                    
                </div>                    
            </div>      

            
        </section>
        <!-- end of search section -->
          

                       
            
            
        

    </div>


    

    <!-- jquery CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function(){
            function searchMovie(){
                let searchResult=$(".searchInput").val();
                if(!searchResult){
                    alert("검색어를 입력해주세요");
                    return false;
                }
                location.href="./search.php?key=" + searchResult;
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

    
    </script>
</body>
</html>