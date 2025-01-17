<link rel="stylesheet" href="styles/yourPosts.css">

        <h2>Vos Posts</h2>

        <?php if (empty($posts)){ ?>
            <p>Aucun post trouvé.</p>
        <?php } else { ?>
            <?php include_once './postsFeed.php'; ?>
        <?php } ?>
    </main>

