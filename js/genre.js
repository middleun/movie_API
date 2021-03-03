$(function(){

    

         // 장르별로 데이터 불러오기 함수 cf.recent.js
        function getGenre(gen, box, slideId){
                let getGenre = [];
        
                $.ajax({
                    // '+gen+' 로 genre만 따로 분리
                    url: 'https://yts.mx/api/v2/list_movies.json?genre='+gen+'&page=1&limit=15',
                    success : function(data){
                        console.log(data);
                        for(let i=0; i < data.data.movies.length; i++){
                            // if(data.data.movies[i].title == ''){
                            //     data.data.movies[i].title = 'No Title';
                            // }
                            let genreHTML=  `<div class="slideBox">
                                                <div>
                                                    <img src="${data.data.movies[i].medium_cover_image}" alt="">
                                                    <div class="slideTxt">
                                                        <h3>${data.data.movies[i].title}</h3>
                                                        <p class="rating"><i class="fas fa-star">${data.data.movies[i].rating}</i></p>
                                                    </div>
                                                    <a href="/movie_api/detail.html?id=${data.data.movies[i].id}">Detail</a>
                                                </div>
                                            </div>
                                            <!-- end of slide box -->`;

                                    getGenre += genreHTML;            
                        }
                        // actionCon, romanceCon->box로 파라미터 정리
                        $(box).append(getGenre);
                        // console.log(data.data.movies[0].title);

                        // lightslider 적용
                        // 파라미터 정리
                        $(slideId).lightSlider({
                            
                            item:5,
                            slideMove:1,
                            auto:true,
                            loop:true,
                            speed:400,
                            pager:true
                        });  
                    }
                    
                });

        }
        // 실제 파라미터 적용
        getGenre('action','.actionCon','#actionSlide');
        getGenre('romance','.romanceCon','#romanceSlide');
        getGenre('drama','.dramaCon','#dramaSlide');


    

    


});