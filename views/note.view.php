<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>
</head>
<body>
<h2><?=$note['title']?></h2>
    <p><?=$note['content']?></p>
    <p>Publiée le <?=$note['title']?> par <strong><?=$note['name']?></strong></p>
    <p><a href="/notes">Retour à la liste des notes</a></p>
</body>
</html>