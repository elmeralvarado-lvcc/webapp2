<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .posts-container {
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
    <div class="posts-container">
        <h1>Posts Page</h1>
        <ul id="postLists">
            <?php

            require 'config.php';

            if (!isset($_SESSION['user_id'])) {
                header("Location: index.php");
                exit;
            }

            $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            try {
                $pdo = new PDO($dsn, $user, $password, $options);

                if ($pdo) {
                    $user_id = $_SESSION['user_id'];

                    $query = "SELECT * FROM `posts` WHERE userId = :id";
                    $statement = $pdo->prepare($query);
                    $statement->execute([':id' => $user_id]);

                    /*
                     * First approach using fetchAll and foreach loop
                     */
                    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($rows as $row) {
                        // echo '<li data-id="' . $row['id'] . '">' . $row['title'] . '</li>';
                        echo '<li><a href="post.php?id=' . $row['id'] . '">' . $row['title'] . '</li>';
                    }

                    /*
                     * Second approach using fetch and while loop
                     */
                    // while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    // echo '<li data-id="' . $row['id'] . '">' . $row['title'] . '</li>';
                    // echo '<li><a href="post.php?id=' . $row['id'] . '">' . $row['title'] . '</li>';
                    // }
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            ?>
        </ul>
    </div>
</body>
<script>
    // Redirect to post.php with the ID of the clicked post
    // document.addEventListener("DOMContentLoaded", function () {
    //     const postLists = document.getElementById("postLists");
    //     postLists.addEventListener("click", function (event) {
    //         if (event.target.tagName === "LI") {
    //             const id = event.target.getAttribute("data-id");
    //             window.location.href = `post.php?id=${id}`;
    //         }
    //     });
    // });
</script>

</html>