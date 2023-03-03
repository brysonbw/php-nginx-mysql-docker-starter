<?php
$title = $message = 'Minimal PHP & Nginx Docker Starter';
$technologies = [
    [
        'name' => 'PHP',
        'link' => 'https://phptherightway.com/'
    ],
    [
        'name' => 'Nginx',
        'link' => 'https://docs.nginx.com/'
    ],
    [
        'name' => 'PDO',
        'link' => 'https://www.php.net/manual/en/book.pdo.php'
    ],
    [
        'name' => 'MySQL',
        'link' => 'https://dev.mysql.com/doc/refman/8.0/en/tutorial.html'
    ],
    [
        'name' => 'Docker',
        'link' => 'https://docs.docker.com/'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
   overflow: hidden;
}

body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex: 1 1 auto;
    height: 100vh;
    margin: 0;
    font-size: 16px;
	background: #171717;
	color: #ffffff;
    font-family: Arial, Helvetica, sans-serif;
}

ul {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

h1 {
    text-align: center;
}

li{
    list-style: none;
    margin: 10px;   
}

a {
    color: lightgreen;
    text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
  
  /* Screens smaller than 480px */
  @media (max-width: 480px) {
    h1 {
        font-size: 1.2rem;
    }
    
    li {
        font-size: .9rem; 
    }
  }


</style>

<body>
<h1><?= $message ?></h1>
<main>
        <ul>
    <?php foreach($technologies as $item): ?>
            <li>
                <a href="<?= $item['link'] ?>" rel="noopener noreferrer"><?= $item['name']?></a>
            </li>
    <?php endforeach; ?>
        </ul>
</main>
</body>
</html>