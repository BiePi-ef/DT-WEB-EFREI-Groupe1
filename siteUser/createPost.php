    <main>
        <h2>Créer un nouveau post</h2>
        <form action="" method="POST">
            <div>
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label for="content">Contenu :</label>
                <textarea id="content" name="content" rows="4" required></textarea>
            </div>
            <div>
                <label for="image_url">Ajouter un lien d'image :</label>
                <input type="text" id="image_url" name="image_url" placeholder="lien d'image" required>
            </div>
            <button type="submit">Publier le Post</button>
        </form>

    </main>