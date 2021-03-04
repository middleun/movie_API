<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Detail</title>

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
            <?php include $_SERVER["DOCUMENT_ROOT"]. "./movie_api/include/header.php";?>    
            
            <div class="detailSec">
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


    


    <-- jquery CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    

    <script>
        
        $(function(){
            // 주소 읽는 함수 cf.search.js

            // let getDetail=[];
            let detailID = document.location.href.split("=")[1];
            // console.log(detailID);

            

            $.ajax({
                url:'https://yts.mx/api/v2/movie_details.json?movie_id='+detailID+'&with_images=true&with_cast=true',
                success: function(detailData){
                    console.log(detailData);
                    let detailHTML = `<div class="detailUp clear">
                                        <div class="detailImg">
                                            <img src="${detailData.data.movie.medium_cover_image}" alt="">
                                        </div>
                                        <div class="detailInfo">
                                            <h3>${detailData.data.movie.title}</h3>
                                            <ul>
                                                
                                                <li class="detailYear">${detailData.data.movie.year}</li>
                                                <li class="detailCast">${detailData.data.movie.cast[0].name}</li>
                                                <li class="detailGenre">${detailData.data.movie.genres}</li>
                                                <li class="detailRating"><i class="fas fa-star">${detailData.data.movie.rating}</i></li>
                                            </ul>
                                        </div>
                                        
                                        <div class="detailTxt">
                                            <h3>detail</h3>
                                            <div class="txtBox">
                                                <span class="detailDes">${detailData.data.movie.description_intro}</span>
                                            </div>

                                        </div>
                                    </div>   

                                    <div class="detailDown">
                                        <div class="detailThumb">
                                            <ul>
                                                <li>
                                                    <img src="${detailData.data.movie.medium_screenshot_image1}" alt="">  
                                                </li>
                                                <li>
                                                    <img src="${detailData.data.movie.medium_screenshot_image2}" alt="">  
                                                </li>
                                                <li>
                                                    <img src="${detailData.data.movie.medium_screenshot_image3}" alt="">  
                                                </li>                                               
                                            </ul>

                                        </div>
                                    </div>
                                    
                                    <!-- end of detail section -->`;
                    getDetail = detailHTML; 
                    // console.log(detailData.data.movie.cast[0].name);
                    

                    $(".detailSec").append(detailHTML);
                }
               

            });



        });
    </script>

</body>
</html>