// **** 메인페이지 Recent Movie Section 관련 함수 
$(function(){
    
    // page 초기화
    let currentPage=1;
    // page개수 함수 설정
    const pageNumLength = $(".numBtns button.pageNum").length;

    // 최신순으로 데이터 불러오기 함수 cf.yts api
    function getData(page){
        let getDatas=[];
        $.ajax({
            // 한 페이지당 10개씩 보여주기
            url:'https://yts.mx/api/v2/list_movies.json?sort_by=year&order_by=desc&limit=10&page=' + page,
            
            success:function(data){
                for(let i=0; i < data.data.movies.length; i++){
                    if(data.data.movies[i].title == ''){
                        data.data.movies[i].title = 'No Title';
                    }
                    let recentHTML=  `<div class="recentMovieWrap">
                                            <div class="recentMovies">
                                                <div class="movieImg">
                                                    <img src="${data.data.movies[i].medium_cover_image}" alt="${data.data.movies[i].title}이미지">
                                                    <div class="moreBox">
                                                        <a href="/movie_api/detail.php?id=${data.data.movies[i].id}" title="${data.data.movies[i].title}상세페이지 링크"><i class="fas fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <h3 class="movieTit">${data.data.movies[i].title}</h3>
                                            </div>
                                      </div>`;

                            getDatas += recentHTML;            
                }
                $(".movieContainer").append(getDatas);
                // console.log(data.data.movies[0].title);
            }
        });
        currentPage=page;
        // console.log(typeof(page));
    }

    // 번호 클릭시 이미지 10개씩 연결 
    $(".numBtns button.pageNum").click(function(){
        let btnValue = Number($(this).attr('value'));
        // 한 번에 한 페이지만 보이도록(이렇게 안 하면 페이지 누적되어 나타남)
        $(".recentMovieWrap").remove();
        // 새로고침할 때 로딩박스 show
        $(".loadingBox").show();
        getData(btnValue);

        let btnIdx = $(this).index();

        $(".numBtns button").removeClass("active");
        $(".numBtns button").eq(btnIdx).addClass("active");

    });

    // prev,next함수 파라미터 정리 
    function goToPrevNext(a,b){
        if(currentPage == a){
            return false;
        }else{
            $(".recentMovieWrap").remove();
            
            getData(b);
            $(".loadingBox").show();
            $(".numBtns button").removeClass("active");
            $(".numBtns button").eq(currentPage).addClass("active");

        }

    }

    // prev 버튼 함수
    $(".numBtns button.prev").click(function(){
        goToPrevNext(1, currentPage -1);
        // console.log(currentPage);

    });
    // next 버튼 함수
    $(".numBtns button.next").click(function(){
        goToPrevNext(pageNumLength, currentPage +1);

    });


    $(".numBtns button").eq(1).trigger("click");

    // loading box hide
    $(document).ajaxComplete(function(){
        $(".loadingBox").hide();
    });

});