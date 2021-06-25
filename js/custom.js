$(function(){
    // search input
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
        const keyCodeNum = e.keyCode;
        if(keyCodeNum == 13){
            searchMovie();
        }
    });


    // navigation active, link each page 
    const pathname=window.location.pathname;
    const topNavLi=document.querySelectorAll('header .topNav ul li');
    // console.log(pathname);

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

    // search navigation 
    const searchNav=document.querySelector('.searchNav');
    const topNav=document.querySelector('.topNav ul');
    // console.log(searchNav);
    if(pathname == '/movie_api/' || pathname.includes('index')){
        searchNav.remove();
        topNav.style.justifyContent="space-around";
    }else{
        searchNav.style.display="flex";
    }

    // console.log(topNavLi[0]);
   
});