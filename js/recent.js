// 최신순으로 데이터 불러오기 cf.yts api
$(function(){

    let currentPage=0;

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
                                                    <img src="${data.data.movies[i].medium_cover_image}" alt="">
                                                </div>
                                                <h3 class="movieTit">${data.data.movies[i].title}</h3>
                                            </div>
                                      </div>`;

                            getDatas += recentHTML;            
                }
                $(".container").append(getDatas);
                // console.log(data.data.movies[0].title);
            }
        });
        currentPage=page;
        // console.log(typeof(page));
    }

    $(".numBtns button.pageNum").click(function(){
        let btnValue = Number($(this).attr('value'));
        $(".recentMovieWrap").remove();
        $(".loading").show();
        getData(btnValue);
    });

    getData(1);

    $(document).ajaxComplete(function(){
        $(".loading").hide();
    });

});