$(function(){
    // 주소 받아오는 함수
    let searchValue = document.location.href.split("=")[1];
    let decodeValue = decodeURI(searchValue);
    // console.log(decodeValue);
    //  한글로 검색하면 encode한 코드가 결과로 나옴.so,decode해줘야
    

    $.ajax({
       type:"POST",
       url:"./data/api.php",
       data: {
           search_value: decodeValue,
       },
       success:function(data){  
           let obj=JSON.parse(data);  
            //    console.log(obj);
            //    console.log(obj.items);

            if(obj.items.length == 0){
                alert("데이터가 없습니다");
                location.href="./index.php"
            }
            let itemContents =[];
            $.each(obj.items, function(i, item){
                console.log(item);
                let itemHTML =  `<div class="conBox">
                                    <div class="imgBox">
                                        <img src="${item.image}" alt="${item.title}이미지">
                                        <div class="moreBox">
                                            <a href="${item.link}" target="_blank" rel="noopener" title="'${item.title}' 네이버 영화 상세페이지 바로가기"><i class="fas fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="txtBox">
                                        <h2> ${item.title}</h2>
                                        <p class="director"><i class="fas fa-video">  ${item.director}</i></p>
                                        <p class="date"><i class="fas fa-calendar-alt">  ${item.pubDate}</i></p>
                                        <p class="rating"><i class="fas fa-star"> ${item.userRating}</i></p>
                                    </div>  
                                </div>`
                        itemContents.push($(itemHTML).get(0));                                  
            });
                    

            $("#resultSec .center").append(itemContents);

            
            // imagesLoaded 
            $("#resultSec").imagesLoaded(function() {
                if(obj.items.length <= 4){
                    $("#resultSec").height("calc(100vh - 200px");
                    $("#resultSec .center").height("100%");
                    $("#resultSec .center").css("justify-content","center");
                    $("#resultSec .center").css("align-items","center");
                }
                
            });

        }       

        
    });
});