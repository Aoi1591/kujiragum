<?php
if ($_GET['preview']) {
header("Location: /wp". $_SERVER["REQUEST_URI"]);
exit;
}
?>
<?php require('./wp/wp-blog-header.php'); ?>
<?php require 'header.php';?>

<img src="img/main.jpg" alt="写真その１">
<h2>Q:放課後デイサービスとは？</h2>
<p>障がいのある（療育が必要と認められる）子どもたちを放課後や長期休暇中（春休みや夏休み）
      に生活能力向上のため訓練および社会との交流促進等を継続的に支援する施設です。
      また、障がいのある子どもへの療育の場、居場所としての役割とともに、家族に変わって一時的
      なケアを行うことで【家族へのレスパイトケア（休息）】としての役割も担っています。</p>
<h2>１日の流れ（例）</h2>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
else :
    echo '<p>No content found</p>';
endif;
?>

<?php require'fotter.php';?>