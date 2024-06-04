<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .post-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid black;
            border-radius: 5px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9ff;
            cursor: pointer;
        }

        li:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="post-container">
        <h1>Post Page</h1>
        <div id="postDetails"></div>
    </div>
</body>
<script>
    // Post Page
    document.addEventListener("DOMContentLoaded", function() {
        const urlParams = new URLSearchParams(window.location.search);
        const postId = urlParams.get("id");

        fetch(`https://jsonplaceholder.typicode.com/posts/${postId}`)
            .then(response => response.json())
            .then(post => {
                const postDetails = document.getElementById("postDetails");
                postDetails.innerHTML = `
                    <h3>Title: ${post.title}</h3>
                    <p>Body: ${post.body}</p>
                `;
            })
            .catch(error => console.error("Error fetching posts:", error));
    });
</script>
</html>