<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog et Actualités</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="blog">
            <div class="container">
                <h2>Blog et Actualités</h2>
                <div class="blog-list">
                    <div class="blog-post">
                        <h3>Actualité 1</h3>
                        <p>Date: 01/05/2024</p>
                        <p>Résumé de l'actualité ou de l'article de blog. Cliquez pour lire la suite...</p>
                        <a href="article_1.php" class="btn">Lire la suite</a>
                    </div>
                    <div class="blog-post">
                        <h3>Actualité 2</h3>
                        <p>Date: 15/04/2024</p>
                        <p>Résumé de l'actualité ou de l'article de blog. Cliquez pour lire la suite...</p>
                        <a href="article_2.php" class="btn">Lire la suite</a>
                    </div>
                    <!-- Ajoutez d'autres articles ici -->
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>