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
                // console.log(item.title);
                let itemHTML =  `<div class="gridItem">
                                    <div class="moreBox">
                                        <a href="${item.link}"><i class="fas fa-search"></i></a>
                                    </div>
                                    <div class="conBox">
                                        <div class="imgBox">
                                            <img src="${item.image}" alt="">
                                        </div>
                                        <div class="txtBox">

                                            <h2> ${item.title}</h2>
                                            <p class="director"> ${item.director}</p>
                                            <p class="date"> ${item.pubDate}</p>
                                            <p class="rating"><i class="fas fa-star"> ${item.userRating}</i></p>
                                        </div>  
                                    </div>  

                                </div>`
                        itemContents.push($(itemHTML).get(0));                                  
            });
            if(obj.items.length <= 3){
                $(".grid").css("transform","translateX(0)");
                $(".grid").css("left","45%");
            }
        

            $(".grid").append(itemContents);

            
            // masonry 적용
            $(".grid").imagesLoaded(function() {
                $('.grid').masonry({
                    itemSelector: '.gridItem',
                    columnWidth: '.gridSizer',
                    percentPosition: true,
                });
            });

        }       

        
    });
});