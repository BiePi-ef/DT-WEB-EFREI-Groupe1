document.addEventListener('DOMContentLoaded', function() {
    const sortSelect = document.getElementById('sortPosts');
    sortSelect.addEventListener('change', function() {
        console.log('Tri changé à:', this.value);
    });

    const createPostBtn = document.getElementById('createPostBtn');
    createPostBtn.addEventListener('click', function() {
        window.location.href = 'createPost.php';
    });

    const loginBtn = document.getElementById('loginBtn');
    loginBtn.addEventListener('click', function() {
        window.location.href = 'login.php';
    });
});
