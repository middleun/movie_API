$(function(){
    // 주소 읽는 함수 cf.search.js

    let getDetail=[];
    let detailID = document.location.href.split("=")[1];
    // console.log(detailID);

    

    $.ajax({
        url:'https://yts.mx/api/v2/movie_details.json?movie_id='+detailID+'&with_images=true&with_cast=true',
        success: function(detailData){
            console.log(detailData.data);

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
           
                let detailHTML = `<div class="detailUp clear">
                                    <div class="detailImg">
                                        <img src="${detailData.data.movie.medium_cover_image}" alt="${detailData.data.movie.title} 이미지">
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
                                                <img src="${detailData.data.movie.medium_screenshot_image1}" alt="${detailData.data.movie.title} 스크린샷 이미지 1">  
                                            </li>
                                            <li>
                                                <img src="${detailData.data.movie.medium_screenshot_image2}" alt="${detailData.data.movie.title} 스크린샷 이미지 2">  
                                            </li>
                                            <li>
                                                <img src="${detailData.data.movie.medium_screenshot_image3}" alt="${detailData.data.movie.title} 스크린샷 이미지 3">  
                                            </li>                                               
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- end of detail section -->`;
                getDetail = detailHTML; 
                // console.log(detailData.data.movie.cast[0].name);
                $("#detailSec .center").append(detailHTML);
                $(".detailCast").append(castName);  
                
                let detailDes=document.querySelector(".detailDes");
                let desTxt=detailDes.innerText;
                // console.log(desTxt);

                // Detail Description cut
                function cutTxt(){
                    let winWidth=window.innerWidth;
                    // console.log(winWidth);                    
                    if(desTxt.length >= 150){
                        if(winWidth <= 650){                            
                            detailDes.innerText=desTxt.substr(0,150)+"...";
                        }else{
                            detailDes.innerText=desTxt;
                        }
                    }else{
                        return;
                    }
                }                
                window.addEventListener("resize", cutTxt);
                    
                    
                    
                    
                

                
           
        }

       
       

    });

    


});