<?php
if ($_GET['preview']) {
header("Location: /wp". $_SERVER["REQUEST_URI"]);
exit;
}
?>
<?php require('./wp/wp-blog-header.php'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="../css/index.css">
<?php require 'header.php';?>
<div class="top">
  <ul class="photo">
   <li>
     <img src="../img/main1.jpg" alt="写真その１">
    </li>
  </ul>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/index.js"></script>
  <div class="question">
    <p>Q:放課後デイサービスとは？</p>
  </div>
    <p>障がいのある（療育が必要と認められる）子どもたちを放課後や長期休暇中（春休みや夏休み）
      に生活能力向上のため訓練および社会との交流促進等を継続的に支援する施設です。
      また、障がいのある子どもへの療育の場、居場所としての役割とともに、家族に変わって一時的
      なケアを行うことで【家族へのレスパイトケア（休息）】としての役割も担っています。
    <h2>１日の流れ（例）</h2>
    <p class="transfer">送迎・来所</p>
  <div class="tra-hr"><hr></div>
    <p class="start">始まりの会</p>
    <img class="sta-img" src="../img/朝.jpg" alt="朝">
  <div class="sta-hr"><hr></div>
    <p class="homework">宿題</p>
    <img class="home-img" src="../img/宿題.png" alt="宿題">
    <img class="homme2-img" src="../img/宿題2.png" alt="宿題2">
  <div class="hom-hr"><hr></div>
    <p class="stretch">みんなで体操</p>
    <img class="str-img" src="../img/体操.png" alt="体操">
  <div class="str-hr"><hr></div>
    <p class="program">各種療育プログラム</p>
    <img class="pro-img" src="../img/プログラム.png" alt="プログラム">
  <div class="pro-hr"><hr></div> 
    <p class="home">帰りの会</p>
  <div class="home-hr"><hr></div>
    <p class="back_home">送迎・帰宅</p>
    <img class="back-img"src="../img/送迎.png" alt="送迎">
  </div>
</div>

<?php require'fotter.php';?>