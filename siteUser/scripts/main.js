document.addEventListener('DOMContentLoaded', function() {
    const sortSelect = document.getElementById('sortPosts');
    // sortSelect.addEventListener('change', function() {
    //     console.log('Tri changé à:', this.value);
    // });

    const searchInput = document.getElementById('searchInput');
    const postsFeed = document.getElementById('postsFeed');

    // searchInput.addEventListener('input', function() {
    //     const searchTerm = this.value;
        
    //     fetch(`search.php?query=${encodeURIComponent(searchTerm)}`)
    //         .then(response => response.text())
    //         .then(data => {
    //             postsFeed.innerHTML = data;
    //         })
    //         .catch(error => console.error('Erreur:', error));
    // });

    // const createPostBtn = document.getElementById('createPostBtn');
    // createPostBtn.addEventListener('click', function() {
    //     window.location.href = '?page=createPost';
    //     console.log("test");
    // });
});
