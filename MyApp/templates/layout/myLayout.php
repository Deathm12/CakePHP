<head>
    <?= $this->Html->css('my.css') ?>
</head>
<body>
    <h1>
        Titre du site
    </h1>
<!-- <?= $this->Html->image("Image.jpg") ?> -->
</body>

<main class="main">
    <div class="container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</main>
