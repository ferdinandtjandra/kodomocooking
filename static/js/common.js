
//変数定義
   var navigationOpenFlag = false;
   var navButtonFlag = true;
   var focusFlag = false;

   //ハンバーガーメニュー
   $(function(){
       $(document).on('click','.el_humburger',function(){
           if(navButtonFlag){
               spNavInOut.switch();
               //一時的にボタンを押せなくする
               setTimeout(function(){
                   navButtonFlag = true;
               },200);
               navButtonFlag = false;
           }
       });
   });

   //ナビ開く処理
   function spNavIn(){
       $('body').removeClass('js_humburgerClose');
       $('body').addClass('js_humburgerOpen');
       setTimeout(function(){
           focusFlag = true;
       },200);
       setTimeout(function(){
           navigationOpenFlag = true;
       },200);
   }

   //ナビ閉じる処理
   function spNavOut(){
       $('body').removeClass('js_humburgerOpen');
       $('body').addClass('js_humburgerClose');
       setTimeout(function(){
           $(".uq_spNavi").removeClass("js_appear");
           focusFlag = false;
       },200);
       navigationOpenFlag = false;
   }

   //ナビ開閉コントロール
   var spNavInOut = {
       switch:function(){
           if($('body.spNavFreez').length){
               return false;
           }
           if($('body').hasClass('js_humburgerOpen')){
               spNavOut();
           } else {
               spNavIn();
           }
       }
   };

   $(".ease_menu_list").slick({
     autoplay: true,
     autoplaySpeed: 2500,
     speed: 800,
     dots: true,
     arrows: false,
     centerMode: true,
     centerPadding: '30%',
     responsive: [
        {
         breakpoint: 640,
         settings: {
           centerPadding: '0%'
         }
        }
      ]
      });

      $(function(){
      $('a[href^="#"]').click(function(){
        var speed = 1000;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        $('body').removeClass('js_humburgerOpen');
        $('body').addClass('js_humburgerClose');
        return false;
      });
    });
