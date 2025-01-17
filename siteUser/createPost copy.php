<main>
    <h2>Créer un nouveau post</h2>
    <form x-data="{ images_url: [] }" id="createPost" action="" method="post">
        <div>
            <label for="formTitle">Titre :</label>
            <input type="text" id="formTitle" name="formTitle" required>
        </div>
        <div>
            <label for="formContent">Contenu :</label>
            <textarea id="formContent" name="formContent" rows="4"></textarea>
        </div>

        <div id="images">
            <?php include_once './addImage.php'; ?>
            <template x-for="image_url in images_url">
                <p x-text="image_url"></p>
            </template>
        </div>
        <button type="submit" x-on:click="postCreatePOST(images_url)">Publier le Post</button>
    </form>

    </main>