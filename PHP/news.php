<?php
// Establish database connection
$host = 'localhost';
$dbname = 'id22107921_contact_us';
$username = 'id22107921_zaibi92';
$password = 'Fast.1122';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

// Fetch articles from database
try {
    $stmt = $pdo->prepare("SELECT title, description FROM articles LIMIT 8");
    $stmt->execute();
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/news.css">
  <link rel="icon" type="image/png" href="Images/favicon.png">
  <title>News</title>
</head>

<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  display: flex;
  flex-wrap: wrap;
}

.column {
  flex: 1 1 50%;
}

.article {
  background-color: #f9f9f9;
  padding: 20px;
  margin-bottom: 20px;
}

.article img {
  max-width: 100%;
  border-radius: 2%;
}

.article h2 {
  margin-top: 0;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
}

.logo {
  width: 100px;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline;
  margin-right: 20px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
}

.signup {
  padding: 5px 10px;
  background-color: #fff;
  color: #333;
  border: 1px solid #333;
  border-radius: 5px;
}

.signup a {
  text-decoration: none;
  color: #333;
}

footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

.footer-links a {
  color: #fff;
  text-decoration: none;
  margin: 0 10px;
}

/* Media queries for responsive design */
@media only screen and (max-width: 768px) {
  header {
    flex-direction: column;
    padding: 20px;
  }

  .logo {
    width: 80px; 
    margin-bottom: 10px;
  }

  nav ul {
    text-align: center;
  }

  nav ul li {
    display: block;
    margin: 10px 0;
  }
  .column {
    flex: 1 1 100%;
  }
}

</style>



<body>
  <header>
    <a href="index.html" >
        <img src="Images/logo.png" alt="Logo" class="logo">
    </a>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="product.html">Products</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
    <div class="signup"><a href="Signup.html">Sign Up</a></div>
  </header>

  <div class="container">
    <?php foreach ($articles as $key => $article): ?>
    <div class="column">
      <div class="article">
        <img src="Images/Blue\ Tesla.jpg" alt="Image <?php echo $key + 1; ?>">
        <h2><?php echo $article['title']; ?></h2>
        <p><?php echo $article['description']; ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <footer>
    <div class="footer-links">
      <a href="#">Contact</a>
      <a href="#">News</a>
      <a href="#">Updates</a>
    </div>
  </footer>
</body>
</html>
