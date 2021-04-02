$(function(){
    // 주소 읽는 함수 cf.search.js

    let getDetail=[];
    let detailID = document.location.href.split("=")[1];
    // console.log(detailID);

    

    $.ajax({
        url:'https://yts.mx/api/v2/movie_details.json?movie_id='+detailID+'&with_images=true&with_cast=true',
        success: function(detailData){
            // console.log(detailData.data.movie.cast[0].name);

            let castName = [];
            // cast자체 데이터가 없음! so, cast == undefined
            if(detailData.data.movie.cast == undefined){
                castName = "";
            } else {
                for(let i=0; i < detailData.data.movie.cast.length; i++){
                    let castLi = `<b>${detailData.data.movie.cast[i].name +'</br>'}</b>`;
                    castName += castLi;          
                }
            }
            

            // console.log(detailData);

            //for(let i=0; i < detailData.data.movie.cast.length; i++){
                // if(!detailData.data.movie.cast){
                //     $(".detailCast").css({"display":"none"});
                // }

                // if(detailData.data.movie.cast.length == 0){
                //     detailData.data.movie.cast[0].name = 'No Data';
                // }

                let detailHTML = `<div class="detailUp clear">
                                    <div class="detailImg">
                                        <img src="${detailData.data.movie.medium_cover_image}" alt="">
                                    </div>
                                    <div class="detailInfo">
                                        <h3>${detailData.data.movie.title_long}</h3>
                                        <ul>
                                            
                                            <li class="detailYear"></li>
                                            <li class="detailCast"></li>
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
                $(".detailCast").append(castName);
            //}

           
        }
       

    });

    // cutting txt on detailTxt
        // cutting text each boxes
        let desTxt = $(".txtBox");

        
            // let allTxt = detailTxt.find(".detailDes").text();

        
            function cutTxt() {
                let txtHeight = $(".detailTxt").height();
                let desHeight = $(desTxt).height();

            console.log(txtHeight, desHeight);

                
            }
                    // if(desHeight > txtHeight){

                    // }

        //         if (txtWidth < 800) {
        //             mainWebBox.eq(i).find(".cutTxt").text(allTxt.substr(0, 20) + '...');
        
        //         } else {
        //             mainWebBox.eq(i).find(".cutTxt").text(allTxt.substr(0, 40) + '...');
        
        //         }
        //     }

        //    $(window).resize(function () {
        //        cutTxt()
       
        //    });
        //    cutTxt()

          



});