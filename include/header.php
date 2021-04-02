<!-- <meta charset="UTF-8"> -->
<?php



?>


<div id="header">
    <div class="topNav">
        <ul>
            <li class="active"><a href="./index.php">Home</a></li>
            <li><a href="./recent.php">Latest</a></li>
            <li><a href="./genre.php">Genre</a></li>
            <!-- <li><a href="./search.php">About</a></li> -->
        </ul>
    </div>
    <div class="searchNav">
        <a href="#"><i class="fas fa-search"></i></a>
    </div>
</div>      


<script>
            
    // 내비게이션 active, 페이지 연결 
    const pathname=window.location.pathname;
    const topNavLi=document.querySelectorAll('#header .topNav ul li');

    for(let i=0; i<topNavLi.length; i++){
        topNavLi[i].classList.remove('active');
    }
    // console.log(topNavLi.length);
    if(pathname.includes('index')){
        topNavLi[0].classList.add('active');
    }else if(pathname.includes('recent')){
        topNavLi[1].classList.add('active');
    }else if(pathname.includes('genre')){
        topNavLi[2].classList.add('active');
    }else if(pathname.includes('detail')){
        topNavLi[2].classList.add('active');
    
    }

    console.log(topNavLi[0]);







</script>
