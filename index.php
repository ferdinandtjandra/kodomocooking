<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>EASE料理教室</title>
    <link rel="shortcut icon" type="image/x-icon" href="static/favicon.ico">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link href="static/css/reset.css" rel="stylesheet" type="text/css" media="all" />
    <link href="static/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="static/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="static/slick/slick-theme.css"/>
    <script type="text/javascript" src="static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="static/slick/slick.min.js"></script>
    <script>
      (function(d) {
        var config = {
          kitId: 'xpy7tfw',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
 </head>
 <body>
   <header>
     <div class="fv_area">
       <div class="fv_img">
         <img src="static/images/img_fv_3.png" alt="">
       </div>
       <div class="fv_logo">
         <img src="static/images/fv_logo.svg" alt="EASE 出張料理教室">
       </div>
     </div><!---/fv_area--->

       <div class="menu">
        <div class="el_humburger"><!--ハンバーガーボタン-->
            <div class="el_humburger_wrapper">
                <span class="el_humburger_bar top"></span>
                <span class="el_humburger_bar middle"></span>
                <span class="el_humburger_bar bottom"></span>
            </div>
        </div>
        <div class="navi"><!--ナビゲーション-->
          <div class="navi_inner">
              <div class="navi_item">
                <a href="#about" class="navi_link">
                  EASE料理教室について
                </a>
              </div>
              <div class="navi_item">
                <a href="#point" class="navi_link">
                  EASE料理教室の特徴
                </a>
              </div>
              <div class="navi_item">
                <a href="#help" class="navi_link">
                  お子さまの手伝い内容
                </a>
              </div>
              <div class="navi_item">
                <a href="#profile" class="navi_link">
                  オーナーシェフプロフィール
                </a>
              </div>
              <div class="navi_item">
                <a href="#lesson" class="navi_link">
                  レッスン内容・料金
                </a>
              </div>
              <div class="navi_item">
                <a href="#step" class="navi_link">
                  レッスン当日までの流れ
                </a>
              </div>
              <div class="navi_item">
                <a href="#contact" class="navi_link bb">
                  お問い合わせ・お申し込み
                </a>
              </div>
          </div>
        </div>
      </div><!---/sp_menu--->
   </header>
   <main>
     <section id="about">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="sp_none">
             <div class="about_wrap">
               <div class="about_left">
                 <img src="static/images/bg_top_left_pc.svg" alt="">
               </div>
               <div class="about_text_area">
                 <h1 class="about_title">
                   <span>新宿EASEオーナーシェフの</span><br>
                   子供の嫌いをなくす出張料理教室
                 </h1>
                 <p class="about_detail_text">
                   お子さまの好き嫌い、少食に悩んでいませんか？<br>
                   実は子供は味覚が発達していないので、好き嫌いがあるのは当然なんです。<br>
                   そこでEASEが提案するのは”お子さまとお母さんが一緒に料理を楽しむ”ということ。<br>
                   <br>
                   ご飯を作るのは楽しい、さらに一緒に食べたら美味しい。<br>
                  そんな体験から、お子さまの食育を進めていくのはいかがでしょうか？<br>
                   料理を通して食材や食事に興味を持ち、食べられたら褒めて成功体験をさせる。<br>
                   食育に関して悩んでいたり困っている顔をお子さまに見せるよりも、ちょっと手間がかかってもお子様と一緒に楽しく料理をしてみませんか？<br>
                   EASEでは小さいお子さまでも簡単な、野菜をちぎる・きのこをさくことから一緒に料理を始められます。<br>
                   楽しい時間や経験がきっかけで、食べてくれることもあるんです！<br>
                   <br>
                   ぜひお子さまの食育や好き嫌いにお悩みの方は、「料理は一緒に作るの楽しいよ」「一緒に食べたら美味しいよ」をお子様と共有してみませんか？
                 </p>
               </div>
               <div class="about_right">
                 <img src="static/images/bg_top_right_pc.svg" alt="">
               </div>
             </div>
           </div>
           <!---about_pc--->
           <div class="sp_block">
             <div class="about_wrap">
               <div class="about_left">
                 <img src="static/images/bg_top_left.svg" alt="">
               </div>
               <div class="about_text_area">
                 <div class="about_title">
                   <span>新宿EASEオーナーシェフの</span><br>
                   子供の嫌いをなくす出張料理教室
                 </div>
               </div>
               <div class="about_right">
                 <img src="static/images/bg_top_right.svg" alt="">
               </div>
             </div>
             <p class="about_detail_text">
               お子さまの好き嫌い、少食に悩んでいませんか？<br>
               実は子供は味覚が発達していないので、好き嫌いがあるのは当然なんです。<br>
               そこでEASEが提案するのは”お子さまとお母さんが一緒に料理を楽しむ”ということ。<br>
               <br>
               ご飯を作るのは楽しい、さらに一緒に食べたら美味しい。<br>
              そんな体験から、お子さまの食育を進めていくのはいかがでしょうか？<br>
               料理を通して食材や食事に興味を持ち、食べられたら褒めて成功体験をさせる。<br>
               食育に関して悩んでいたり困っている顔をお子さまに見せるよりも、ちょっと手間がかかってもお子様と一緒に楽しく料理をしてみませんか？<br>
               EASEでは小さいお子さまでも簡単な、野菜をちぎる・きのこをさくことから一緒に料理を始められます。<br>
               楽しい時間や経験がきっかけで、食べてくれることもあるんです！<br>
               <br>
               ぜひお子さまの食育や好き嫌いにお悩みの方は、「料理は一緒に作るの楽しいよ」「一緒に食べたら美味しいよ」をお子様と共有してみませんか？
             </p>
           </div>
           <!---about_sp--->
         </div>
       </div>
     </section><!---#about--->
     <section id="point">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="common_title_block">
             <h2 class="common_title">EASE料理教室の特徴</h2>
             <img src="static/images/line.svg" alt="" class="line_img">
           </div>
           <div class="point_box_wrap">
             <div class="point_box_block">
               <h3 class="point_title_left">
                 <img src="static/images/point_1.svg" alt="point1">
                 親子で一緒に楽しめる、子供参加型料理教室
               </h3>
               <div class="point_box">
                 <div class="point_box_img">
                   <img src="static/images/img_point1_s.png" alt="">
                 </div>
                 <div class="point_box_text_right">
                   この料理教室は、お子さまと一緒に行います。<br>
                   一緒に楽しんで作ることによって、親子関係も良好になります。
                 </div>
               </div>
             </div>
             <div class="point_box_block">
               <h3 class="point_title_right">
                 <img src="static/images/point_2.svg" alt="point2">
                 子供がおいしく食べる調理法を教えます！
               </h3>
               <div class="point_box">
                 <div class="point_box_img">
                   <img src="static/images/img_point2_s.png" alt="">
                 </div>
                 <div class="point_box_text_left">
                   調理法でお子さまが嫌い・苦手な食べ物が食べられる場合があります。<br>
                   嫌いをなくす為の調理法をお教えします！
                 </div>
               </div>
             </div>
             <div class="point_box_block">
               <h3 class="point_title_left">
                 <img src="static/images/point_3.svg" alt="point1">
                 親子の料理風景を撮影します！
               </h3>
               <div class="point_box">
                 <div class="point_box_img">
                   <img src="static/images/img_point3_s.png" alt="">
                 </div>
                 <div class="point_box_text_right">
                   親子で料理する家庭でも、以外と料理風景の写真は撮ってないかと思います。<br>
                   親子の良い思い出に。
                 </div>
               </div>
             </div>
           </div>
           <div class="common_btn_area">
             <a href="#contact" class="common_btn">
               お問い合わせ・お申し込みはこちら
             </a>
           </div>
         </div>
       </div>
     </section><!---/point--->
     <section id="help">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="common_title_block">
             <h2 class="common_title">お子さまの手伝い内容</h2>
             <img src="static/images/line.svg" alt="" class="line_img">
           </div>
           <h3 class="common_sub_title">
             小さなお子さまでも安心して楽しんでいただけます
           </h3>
           <div class="help_box_wrap">
             <div class="help_box">
               <div class="help_box_img">
                 <img src="static/images/help1.png" alt="">
               </div>
               <div class="case_text">
                 <div class="case_title">
                   <img src="static/images/dot_left.svg" alt="">
                   2歳児の場合
                   <img src="static/images/dot_right.svg" alt="">
                 </div>
                 <ul class="case_list">
                   <li class="case_item">
                     ・野菜をちぎる
                   </li>
                   <li class="case_item">
                     ・野菜を洗う
                   </li>
                   <li class="case_item">
                     ・キノコをさく
                   </li>
                 </ul>
               </div>
               <div class="help_box_bottom_img_left">
                 <img src="static/images/2years_old_img.svg" alt="">
               </div>
             </div><!---2歳児--->
             <div class="help_box">
               <div class="help_box_img">
                 <img src="static/images/help2.png" alt="">
               </div>
                <div class="case_text">
                  <div class="case_title">
                    <img src="static/images/dot_left.svg" alt="">
                    5歳児の場合
                    <img src="static/images/dot_right.svg" alt="">
                  </div>
                  <ul class="case_list">
                    <li class="case_item">
                      ・野菜を切る
                    </li>
                    <li class="case_item">
                      ・材料を混ぜる
                    </li>
                    <li class="case_item">
                      ・味付け
                    </li>
                    <li class="case_item">
                      ・盛り付け
                    </li>
                  </ul>
                </div>
               <div class="help_box_bottom_img_right">
                 <img src="static/images/5years_old_img.svg" alt="">
               </div>
             </div><!---/5歳児--->
           </div>
           <div class="common_btn_area">
             <a href="#contact" class="common_btn">
               お問い合わせ・お申し込みはこちら
             </a>
           </div>
         </div>
       </div>
     </section><!---/help--->
     <section id="profile">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="common_title_block">
             <h2 class="common_title">オーナーシェフプロフィール</h2>
             <img src="static/images/line.svg" alt="" class="line_img">
           </div>
           <div class="profile_area">
             <div class="profile_img">
               <img src="static/images/owner_img.png" alt="">
             </div>
             <div class="profile_detail">
               <h3 class="profile_name_top">
                 新宿ダイニング＆バーEASE オーナー
               </h3>
               <div class="block">
                 <div class="profile_name_bottom">
                   羽賀
                 </div>
               </div>
               <p class="profile_text">
                 3人娘のお父さんで、新宿３丁目にあるダイニング＆バーEASEのオーナーシェフです。<br>
                 <br>
                関東の幼稚園にて<span>「嫌いを無くす料理講座」</span>を10園ほど公演しています。<br>
                <br>
                子供が食に興味を持つには、少し手伝い、褒められ、一緒に美味しいと食べることです。<br>
                そのお手伝いができたらと思います。
               </p>
             </div>
           </div>
           <div class="menu_slide_area">
             <h3 class="store_menu_title">
               EASEでは、こんなお料理を提供しています
             </h3>
             <ul class="ease_menu_list">
               <li class="ease_menu_item" style="background-image:url(static/images/ease_menu01.jpg)">
               </li>
               <li class="ease_menu_item" style="background-image:url(static/images/ease_menu02.jpg)">
               </li>
               <li class="ease_menu_item" style="background-image:url(static/images/ease_menu03.jpg)">
               </li>
               <li class="ease_menu_item" style="background-image:url(static/images/ease_menu04.jpg)">
               </li>
               <li class="ease_menu_item" style="background-image:url(static/images/ease_menu05.jpg)">
               </li>
             </ul>
           </div>
           <div class="common_btn_area">
             <a href="#contact" class="common_btn">
               お問い合わせ・お申し込みはこちら
             </a>
           </div>
         </div>
       </div>
     </section><!---/profile--->
     <section id="lesson">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="common_title_block">
             <h2 class="common_title">レッスン内容・料金</h2>
             <img src="static/images/line.svg" alt="" class="line_img">
           </div>
           <h3 class="common_sub_title mb_50">
             メニュー例
           </h3>
           <div class="lesson_menu_box_wrap">
             <div class="lesson_menu_box">
               <div class="popularity_icon">
                 <img src="static/images/popularity_icon.png" alt="人気メニュー">
               </div>
               <div class="lesson_menu_img" style="background-image:url(static/images/menu01.jpg)">
               </div>
               <h2 class="lesson_menu_title">子供は大好きクリームシチュー</h2>
               <p class="lesson_menu_text">
                 市販のルーを使わないので食べ飽きない味付け。<br>
                 短時間で出来上がります。
               </p>
             </div>
             <div class="lesson_menu_box">
               <div class="popularity_icon">
                 <img src="static/images/popularity_icon.png" alt="人気メニュー">
               </div>
               <div class="lesson_menu_img" style="background-image:url(static/images/menu02.jpg)">
               </div>
               <h2 class="lesson_menu_title">チキングリル</h2>
               <p class="lesson_menu_text">
                 簡単な下処理で、子供も食べる柔らかいグリルです。
               </p>
             </div>
             <div class="lesson_menu_box">
               <div class="lesson_menu_img" style="background-image:url(static/images/menu03.jpg)">
               </div>
               <h2 class="lesson_menu_title">ちょっぴり贅沢なアヒージョ</h2>
               <p class="lesson_menu_text">
                 ちょっとしたお誕生日などのパーティーメニュー。<br>
                 パンを浸けて、大人気分
               </p>
             </div>
             <div class="lesson_menu_box">
               <div class="lesson_menu_img" style="background-image:url(static/images/menu04.jpg)">
               </div>
               <h2 class="lesson_menu_title">野菜たっぷりトマトスープ</h2>
               <p class="lesson_menu_text">
                 野菜を沢山とれる食べるスープです。
               </p>
             </div>
           </div>
           <div class="lesson_price_box">
             <h2 class="lesson_price_box_title">
               <img src="static/images/cutlery_icon.svg" alt="">
               新宿EASEオーナーシェフの出張料理教室
               <img src="static/images/cutlery_icon.svg" alt="">
             </h2>
             <div class="lesson_price_box_content">
               <ul class="lesson_content_list">
                 <li class="lesson_content_item">
                   <h3 class="lesson_content_title">
                     レッスン時間
                   </h3>
                   <div class="lesson_content_text">
                     90分
                   </div>
                 </li>
                 <li class="lesson_content_item">
                   <h3 class="lesson_content_title">
                     食材費
                   </h3>
                   <div class="lesson_content_text">
                     実費<br>
                     <span class="supplement">＊基本冷蔵庫にあるものを使用します。<br>
                     無いものが実費となります。</span>
                   </div>
                 </li>
                 <li class="lesson_content_item">
                   <h3 class="lesson_content_title">
                     料理内容
                   </h3>
                   <div class="lesson_content_text">
                     基本<br>
                     メイン　1品<br>
                     スープ　1品<br>
                     サラダ　1品<br>
                     <span class="supplement">＊メニューはご相談ください</span>
                   </div>
                 </li>
                 <li class="lesson_content_item">
                   <h3 class="lesson_content_title">
                     料金
                   </h3>
                   <div class="lesson_content_text">
                     <span class="price">9,900</span>円
                   </div>
                 </li>
               </ul>
               <div class="lesson_content_img">
                 <img src="static/images/lesson_img.png" alt="">
               </div>
             </div>
           </div>
           <div class="common_btn_area">
             <a href="#contact" class="common_btn">
               お問い合わせ・お申し込みはこちら
             </a>
           </div>
         </div>
       </div>
     </section><!---/lesson--->
     <section id="step">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="common_title_block">
             <h2 class="common_title">レッスン当日までの流れ</h2>
             <img src="static/images/line.svg" alt="" class="line_img">
           </div>
           <div class="step_box_wrap">
             <div class="step_box">
               <div class="step_box_flg_img">
                 <img src="static/images/step_flg01.svg" alt="step1">
               </div>
               <div class="step_box_inner">
                 <div class="step_box_img" style="background-image:url(static/images/step01.jpg)">
                 </div>
                 <h3 class="step_box_title">
                   まずはお気軽に<br>お問い合わせください！
                 </h3>
                 <p class="step_box_text">
                   お電話もしくはお問い合わせフォームより、ご連絡ください。<br>
                   お決まりの方は作りたいもの、お子さまに食べてほしい食材・メニューをお知らせください。<br>
                   まだ迷っている…という方も、お気軽にご相談ください！
                 </p>
               </div>
             </div>
             <div class="step_box">
               <div class="step_box_flg_img">
                 <img src="static/images/step_flg02.svg" alt="step2">
               </div>
               <div class="step_box_inner">
                 <div class="step_box_img" style="background-image:url(static/images/step02.jpg)">
                 </div>
                 <h3 class="step_box_title">
                   食材に合ったメニューを<br>ご提案します
                 </h3>
                 <p class="step_box_text">
                   作りたいメニューがお決まりでない場合、お子さまに食べてほしい食材に合ったメニューをご提案致します。<br>
                   （レッスンで作る品数は基本はメイン、スープ、サラダの3品となります。）
                 </p>
               </div>
             </div>
             <div class="step_box">
               <div class="step_box_flg_img">
                 <img src="static/images/step_flg03.svg" alt="step3">
               </div>
               <div class="step_box_inner">
                 <div class="step_box_img" style="background-image:url(static/images/step03.jpg)">
                 </div>
                 <h3 class="step_box_title">
                   メニュー・日程を<br>決めたらご予約完了！
                 </h3>
                 <p class="step_box_text">
                   メニュー・日程が決まりましたらご予約が完了です。<br>
                   当日オーナーシェフが、ご自宅にお伺いします！<br>
                   当日までに食材のご準備をお願いいたします。（必要な食材は事前にお知らせします）
                 </p>
               </div>
             </div>
           </div>
           <div class="common_btn_area">
             <a href="#contact" class="common_btn">
               お問い合わせ・お申し込みはこちら
             </a>
           </div>
         </div>
       </div>
     </section><!---/step--->
     <section id="contact">
       <div class="common_wrap">
         <div class="common_inner">
           <div class="common_title_block">
             <h2 class="common_title">お問い合わせ・お申し込み</h2>
             <img src="static/images/line.svg" alt="" class="line_img">
           </div>
           <div class="tel_box_wrap">
             <div class="tel_box">
               <div class="tel_text">
                 お電話でのお問い合わせはこちら
               </div>
               <a href="tel:0333587701" class="tel_number">
                 <img src="static/images/icon_tel.svg" alt="電話番号">
                 03-3358-7701
               </a>
             </div>
           </div>
           <div class="contact_wrap">
             <h3 class="common_sub_title mb_50">
               お問い合わせフォーム
             </h3>
             <!-- <form action="thanks.html"> -->
              <form id="formease" method="POST" action="sendEmail.php" enctype='multipart/form-data' >
                <input type="hidden" name="from_lp" value="ease">
               <div class="input_area">
                 <div class="input_block">
                   <div class="input_title">
                     お名前<span class="required">＊必須 </span>
                   </div>
                   <div class="input_box">
                     <?php 
                     if(isset($_SESSION['name'])){
                        if(empty($_SESSION['name'])) {  
                          echo '<p class="error">お名前を入力してください</p>';
                        }
                     }
                     ?>
                     
                     <input type="text" name="name"  value="<?php 
                     if(isset($_SESSION['name'])){
                        if(!empty($_SESSION['name'])) {  
                          echo $_SESSION['name'];
                        }
                     }
                     ?>" class="input" >
                   </div>
                 </div>
                 <div class="input_block">
                   <div class="input_title"> 
                     お電話番号<span class="required">＊必須</span>
                   </div>
                   <div class="input_box">

                   <?php 
                     if(isset($_SESSION['tel'])){
                        if(empty($_SESSION['tel'])) {  
                          echo '<p class="error">お電話番号を入力してください</p>';
                        }
                     }
                     ?>
                     
                     <input type="tel" name="tel" value="<?php 
                     if(isset($_SESSION['tel'])){
                        if(!empty($_SESSION['tel'])) {  
                          echo $_SESSION['tel'];
                        }
                     }
                     ?>" class="input" >
                   </div>
                 </div>
                 <div class="input_block">
                   <div class="input_title">
                     ご住所<span class="required">＊必須</span>
                   </div>
                   <div class="input_box">


                   <?php 
                     if(isset($_SESSION['address'])){
                        if(empty($_SESSION['address'])) {  
                          echo '<p class="error">ご住所を入力してください</p>';
                        }
                     }
                     ?>
                     
                     <input type="text" name="address" value="<?php 
                     if(isset($_SESSION['address'])){
                        if(!empty($_SESSION['address'])) {  
                          echo $_SESSION['address'];
                        }
                     }
                     ?>" class="input" >
                   </div>
                 </div>
                 <div class="input_block">
                   <div class="input_title">
                     メールアドレス<span class="required">＊必須</span>
                   </div>
                   <div class="input_box">
                   <?php 
                     if(isset($_SESSION['email'])){
                        if(empty($_SESSION['email'])) {  
                          echo '<p class="error">メールアドレスを入力してください</p>';
                        }
                     }
                     ?>
                     
                     <input type="email" name="email" value="<?php 
                     if(isset($_SESSION['email'])){
                        if(!empty($_SESSION['email'])) {  
                          echo $_SESSION['email'];
                        }
                     }
                     ?>" class="input" >
                   </div>
                 </div>


                 <div class="input_block">
                   <div class="input_title">
                     お問い合わせ内容<span class="required">＊必須</span>
                   </div>
                   <div class="input_box">

                   <?php 
                     if(isset($_SESSION['note'])){
                        if(empty($_SESSION['note'])) {  
                          echo '<p class="error">お問い合わせ内容を入力してください</p>';
                        }
                     }
                     ?>
                     
                     <textarea name="note" rows="8" cols="" class="textarea" >
                    <?php 
                     if(isset($_SESSION['note'])){
                        if(!empty($_SESSION['note'])) {  
                          echo $_SESSION['note'];
                        }
                     }
                     ?> </textarea>
                   </div>
                 </div>
               </div>
               <div class="common_btn_area">
                 <button type="submit" name="" class="submit_btn">
                   この内容で送信する
                 </button>
               </div>
             </form>
           </div>
         </div>
       </div>
     </section><!---/contact--->
   </main>
   <footer>
     <div class="common_wrap">
       <div class="common_inner">
         <a href="index.html" class="footer_logo">
           <img src="static/images/footer_logo.svg" alt="EASE">
         </a>
         <div class="copy_right">
           Copyright &copy; EASE ALL RIGHTS RESERVED.
         </div>
       </div>
     </div>
   </footer>

   <script type="text/javascript" src="static/js/common.js"></script>
 </body>
</html>
