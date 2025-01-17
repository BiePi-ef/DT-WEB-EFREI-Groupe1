
<div id="formImage" x-data="{ image_url : '' }">
        <label for="image_url">Ajouter un lien d'image :</label>
        <input form="addImageForm" x-model="image_url" type="text" id="image_url" name="image_url" placeholder="lien d'image" required>
        <button type="button" name="addImageButton" x-on:click="addLinkToList(image_url, images_url)">Ajouter une image</button>
</div>