<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeelmSoGood</title>

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
            <?php include $_SERVER["DOCUMENT_ROOT"]. "./movie_api/include/header.php";?>  
        
            
            <div class="genreSec">
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
                <div class="drama genreBox">
                    <div class="slideCon dramaCon" id="dramaSlide">
                    </div>

                </div>
                <!-- end of drama -->
            </div>
           
          

                       
            
            
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