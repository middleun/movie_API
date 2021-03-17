<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeelmSoGood</title>

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
            
            
            <div class="loadingBox">
                <img src="./img/loading_8.gif" alt="">
            </div>          

            
            <!-- end of loading Box -->

            <div class="recentSec section">
                <div class="movieContainer clear">
                        
                </div>
                    <!-- end of container -->

                <div class="numContainer">
                    <div class="numBtns">
                        <button type="button" class="prev arrow"><i class="fas fa-angle-left"></i></button>
                        <button type="button" class="pageNum" value=1>1</button>
                        <button type="button" class="pageNum" value=2>2</button>
                        <button type="button" class="pageNum" value=3>3</button>
                        <button type="button" class="pageNum" value=4>4</button>
                        <button type="button" class="pageNum" value=5>5</button>
                        <button type="button" class="next arrow"><i class="fas fa-angle-right"></i></button>

                    </div>
                </div>
                    <!-- end of number container -->
            </div>
            <!-- end of recent section -->

            
            
            
        </div>

    </div>


    <!-- jquery CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="../movie_api/js/recent.js"></script>

    

    <script>
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

    
    </script>
</body>
</html>