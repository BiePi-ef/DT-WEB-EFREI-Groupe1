<div class = "content">
    <div class="posts-header h2">
        <h2>Vos Posts</h2>
    </div>

        <?php if (empty($posts)){ ?>
            <p>Aucun post trouvé.</p>
        <?php } else { ?>
            <?php include_once './postsFeed.php'; ?>
        <?php } ?>
</div>

