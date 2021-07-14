$(function(){
    const searchBox = document.querySelector(".searchBox");
    // console.log(searchBox);
    // const searchInput = searchBox.querySelector(".searchInput");
    // console.log(searchInput);
    // const sendBtn = searchBox.querySelector(".sendBtn");
    // console.dir(sendBtn);

    //*** Search Box focus event ****//
    const FOCUS = "focus"
    function focusIn(){
        searchBox.classList.add(FOCUS);
    }

    function focusOut(){
        searchBox.classList.remove(FOCUS);
    }
    searchBox.addEventListener("focusin", focusIn);
    searchBox.addEventListener("focusout", focusOut);    


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

    // // when press enter key
    document.addEventListener("keydown", function(e){
        const keyCode = e.code;
        // console.log(keyCode);
        if(keyCode == "Enter"){
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

});
