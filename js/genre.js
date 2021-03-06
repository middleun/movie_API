$(function(){     

       
       
         // 장르별로 데이터 불러오기 함수 cf.recent.js
        function getGenre(gen, box, slideId){
                let getGenres = [];
        
                $.ajax({
                    // '+gen+' 로 genre만 따로 분리
                    url: 'https://yts.mx/api/v2/list_movies.json?genre='+gen+'&page=10&limit=15',
                    success : function(data){
                        console.log(data);
                        for(let i=0; i < data.data.movies.length; i++){
                            // if(data.data.movies[i].title == ''){
                            //     data.data.movies[i].title = 'No Title';
                            // }
                            let genreHTML=  `<div class="slideBox">
                                                <div>
                                                    <div class="slideImg">
                                                        <img src="${data.data.movies[i].medium_cover_image}" alt="">
                                                        <div class="moreBox">
                                                            <a href="/movie_api/detail.php?id=${data.data.movies[i].id}"><i class="fas fa-search"></i></a>
                                                        </div>
                                                    </div>    
                                                    <div class="slideTxt">
                                                        <h3>${data.data.movies[i].title}</h3>
                                                        <p class="rating"><i class="fas fa-star">  ${data.data.movies[i].rating}</i></p>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <!-- end of slide box -->`;

                                    getGenres += genreHTML;            
                        }
                        // actionCon, romanceCon->box로 파라미터 정리
                        $(box).append(getGenres);
                        // console.log(data.data.movies[0].title);

                        // lightslider 적용
                        // 파라미터 정리
                        $(slideId).lightSlider({
                            
                            item:5,
                            slideMove:1,
                            auto:true,
                            loop:true,
                            speed:400,
                            pager:true,
                            responsive : [
                                {
                                    breakpoint:1024,
                                    settings: {
                                        item:4,
                                        slideMove:1,
                                        // slideMargin:6
                                      }
                                },
                                {
                                    breakpoint:850,
                                    settings: {
                                        item:3,
                                        slideMove:1,
                                        // slideMargin:6
                                      }
                                },
                                {
                                    breakpoint:500,
                                    settings: {
                                        item:2,
                                        slideMove:1
                                      }
                                }
                            ]
                        });  
                    }
                    
                });
                // 새로고침할 때 로딩박스 show
                $(".loadingBox").show();

        }

        let getGenres = ['all', 'action', 'romance', 'comedy', 'animation'];

        for (let i = 0; i < getGenres.length; i++){   
            getGenre(getGenres[i], '.' + getGenres[i] + 'Con', '#'+getGenres[i] + 'Slide');
        }

        // // 실제 파라미터 적용
        // getGenre('action','.actionCon','#actionSlide');
        // getGenre('romance','.romanceCon','#romanceSlide');
        // getGenre('comedy','.comedyCon','#comedySlide');
        // getGenre('animation','.animationCon','#animationSlide');


        // genre tab activate
        $(".genreTab button").click(function(){ 
                      
            $(".genreTab button").removeClass("active");
            $(this).addClass("active");  
            
            if(this.innerTxt == "All"){
                $(".genrePan").show();
            }else{
                let gerIdx=$(this).index();
                // console.log(gerIdx);
                                        
                $(".genrePan .genreBox").hide();       
                $(".genrePan .genreBox").eq(gerIdx).show();
                $(".genrePan").css("margin","10px auto");

            }    
       
        });



        // loading box hide
        $(document).ajaxComplete(function(){
            $(".loadingBox").hide();
        });


    

    


});