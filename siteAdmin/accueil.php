<div class="content">
    <div class="posts-header">
        <h2>Derniers posts</h2>
        <select id="sortPosts">
            <option value="newest">Plus récent</option>
            <option value="oldest">Moins récent</option>
        </select>
    </div>
    <div class="right-section">
                <form action="search.php" method="GET" class="search-form">
                    <input type="text" id="searchInput" name="query" placeholder="Rechercher..." class="search-input">
                    <button type="submit" class="search-button">🔍</button>
                </form>
            </div>
        </div>

    <?php include_once './postsFeed.php'; ?>


   