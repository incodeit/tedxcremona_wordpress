<?php 
    $video_title = get_sub_field('video_title');
    $video_embed = get_sub_field('video_player');
?>
<style>
    
</style>
<section class="section--video-player">
    <div class="section__video-container center">
       <div class="title">
            <h2><?php echo $video_title; ?></h2>
       </div>
       <div class="container max-width-5 mx-auto ">
        <div class="player img-fluid">
              <?php echo $video_embed; ?>
        </div>
       </div>
    </div>
</section>
