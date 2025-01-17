<main>
    <h2>Créer un nouveau post</h2>
    <form x-ref="createPost" id="createPost" action="" method="post">
        <div>
            <label for="title">Titre :</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Contenu :</label>
            <textarea id="content" name="content" rows="4" required></textarea>
        </div>

        <div id="images" x-data="{ images_url: [] }">
            <?php include_once './addImage.php'; ?>
            <template x-for="image_url in images_url">
                <p x-text="image_url"></p>
            </template>
        </div>
        <button type="submit" name="createPost">Publier le Post</button>
    </form>

    </main>