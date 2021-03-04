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
    
    

    <!-- detail page jQuery link -->
    <script src="./js/detail.js"></script>

</body>
</html>