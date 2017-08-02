<div class="page-head">
    <div class="page-title">
        <h1>
            <?php echo (isset($page['title']) ? $page['title'] : ''); ?>
            <?php if(isset($page['sub_title'])): ?>
                <small><?php echo $page['sub_title']; ?></small>
            <?php endif; ?>
        </h1>
    </div>
</div>