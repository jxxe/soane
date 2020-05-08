<div class="caption-slider">
    <ul id="caption-slider-ul">
        <?php foreach( get_field('images') as $image ) { ?>
            <li>
                <span><?php echo $image['caption']; ?></span>
            </li>
        <?php } ?>
    </ul>
</div>