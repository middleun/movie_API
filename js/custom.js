$(function(){
    const searchBox = document.querySelectorAll(".searchBox");
    console.log(searchBox);    
    
    //*** Search Box focus event ****//
    const FOCUS = "focus"
    function focusIn(e){
        // console.dir(e.target);
        const parent = e.target.parentNode;
        parent.classList.add(FOCUS);
    }

    function focusOut(e){
        const parent = e.target.parentNode;
        parent.classList.remove(FOCUS);
    }
    
    searchBox.forEach(function(event){
        event.addEventListener("focusin", focusIn);
        event.addEventListener("focusout", focusOut);
    });  

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
    const searchNav=searchBox[0];
    // console.log(searchNav);
    const topNav=document.querySelector('.topNav ul');
    // console.log(searchNav);
    if(pathname == '/movie_api/' || pathname.includes('index')){
        searchNav.remove();
        topNav.style.justifyContent="space-around";
    }else{
        searchNav.style.display="flex";
    }

});
