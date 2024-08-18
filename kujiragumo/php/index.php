<?php
if ($_GET['preview']) {
header("Location: /wp". $_SERVER["REQUEST_URI"]);
exit;
}
?>
<?php require('./wp/wp-blog-header.php'); ?>
<?php require 'header.php';?>

<link rel="stylesheet" href="../css/index.css">
<img src="img/main.jpg" alt="写真その１">
<div class="question">
<p>Q:放課後デイサービスとは？</p>
</div>
<p>障がいのある（療育が必要と認められる）子どもたちを放課後や長期休暇中（春休みや夏休み）<br>
      に生活能力向上のため訓練および社会との交流促進等を継続的に支援する施設です。<br>
      また、障がいのある子どもへの療育の場、居場所としての役割とともに、家族に変わって一時的<br>
      なケアを行うことで【家族へのレスパイトケア（休息）】としての役割も担っています。</p>
<p>１日の流れ（例）</p>
<p class="transfer">送迎・来所</p>
<div class="tra-hr"><hr></div>
<p class="start">始まりの会</p>
<div class="sta-hr"><hr></div>
<p class="homework">宿題</p>
<div class="hom-hr"><hr></div>
<p class="stretch">みんなで体操</p>
<div class="str-hr"><hr></div>
<p class="program">各種療育プログラム</p>
<div class="pro-hr"><hr></div>
<p class="home">帰りの会</p>
<div class="home-hr"><hr></div>
<p class="transfer_home">送迎・帰宅</p>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
else :
    echo '<p>No content found</p>';
endif;
?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div>
                <?php the_excerpt(); ?>
            </div>
        </article>
        <?php
    endwhile;

    // Pagination (ページネーション)
    the_posts_pagination(array(
        'prev_text' => 'Previous',
        'next_text' => 'Next',
    ));
else :
    echo '<p>No posts found</p>';
endif;
?>


<?php require'fotter.php';?>