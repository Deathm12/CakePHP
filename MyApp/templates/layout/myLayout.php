<head>
    <?= $this->Html->css('my.css') ?>
</head>

<body>
    <h1>
        Titre du site
    </h1>
    <a href = "/home/page2">page2</a>
    <a href = "/home/page3">page3</a>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
</body>

<?= $this->Html->image("Image.jpg", ['class'=>'img']) ?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>À propos</h4>
        <p>Quelques informations sur le site web.</p>
      </div>
      <div class="col-md-3">
        <h4>Liens utiles</h4>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">À propos</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h4>Nous contacter</h4>
        <ul>
          <li><a href="tel:+1234567890">Téléphone</a></li>
          <li><a href="mailto:contact@example.com">Email</a></li>
          <li><a href="#">Adresse</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
