$(function(){
    let searchValue = document.location.href.split("=")[1];
    let decodeValue = decodeURI(searchValue);
    console.log(decodeValue);
    //  한글로 검색하면 encode한 코드가 결과로 나옴.so,decode해줘야
    

    $.ajax({
       type:"POST",
       url:"../movie_api/data/api.php",
       data: {
           search_value: decodeValue,
       },
       success:function(data){  
           let obj=JSON.parse(data);  
        //    console.log(obj);
        //    console.log(obj.items);

        if(obj.items.length == 0){
            alert("데이터가 없습니다");
            location.href="/movie_api/index.html"
        }
        let itemContents =[];
        $.each(obj.items, function(i, item){
            // console.log(item.title);
            let itemHTML =  `<div class="gridItem">
                                <div class="imgBox">
                                    <img src="${item.image}" alt="">
                                </div>
                                <div class="txtBox">

                                    <h2> ${item.title}</h2>
                                    <p> ${item.director}</p>
                                    <p> ${item.pubDate}</p>
                                    <p> ${item.userRating}</p>
                                </div>    

                            </div>`
                    itemContents.push($(itemHTML).get(0));                                  
        });
        $(".grid").append(itemContents);

        
  
         $(".grid").imagesLoaded(function() {
        //  $(".grid").masonry('appended', itemContents);
      });
        

       }, 
    });
});