<?php 
    $video_title = get_sub_field('video_title');
    $video_embed = get_sub_field('video_player');
?>

<section class="section--video-player">
    <div class="section__video-container center">
       <div class="title">
            <h2><?php echo $video_title; ?></h2>
       </div>
       <div class="player">
            <?php echo $video_embed; ?>
       </div>
    </div>
</section>