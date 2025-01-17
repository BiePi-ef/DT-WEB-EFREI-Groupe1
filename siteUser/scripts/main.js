// document.addEventListener('DOMContentLoaded', function() {
//     const sortSelect = document.getElementById('sortPosts');
//     // sortSelect.addEventListener('change', function() {
//     //     console.log('Tri changé à:', this.value);
//     // });

//     const searchInput = document.getElementById('searchInput');
//     const postsFeed = document.getElementById('postsFeed');

//     // searchInput.addEventListener('input', function() {
//     //     const searchTerm = this.value;
        
//     //     fetch(`search.php?query=${encodeURIComponent(searchTerm)}`)
//     //         .then(response => response.text())
//     //         .then(data => {
//     //             postsFeed.innerHTML = data;
//     //         })
//     //         .catch(error => console.error('Erreur:', error));
//     // });

//     // const createPostBtn = document.getElementById('createPostBtn');
//     // createPostBtn.addEventListener('click', function() {
//     //     window.location.href = '?page=createPost';
//     //     console.log("test");
//     // });
// });

function addLinkToList(link, list) {
    const linkCopy = link; 
    document.getElementById("image_url").value = "";
    return list.push(linkCopy);
}

function postCreatePOST(images_url){
    
    const title = document.getElementById('formTitle').value;
    console.log(title);
    const content = document.getElementById('formContent').value;

    console.log("entered function")
    fetch("http://localhost/Projet%20Web/siteUser/indexUser.php" + "/get", {
        method: 'POST',
        headers: {
            'Content-Type':'application/x-www-form-urlencoded'
        },
        body: JSON.stringify({
            'createPost': true,
            'title': title,
            'content': content,
            'images_url': images_url
        })
    })
    .then((response) => response.json())
    .then((json) => console.log(json))
    .catch(error => {
        console.error(error);
    });
}