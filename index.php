<?php
  require_once('./functions.php');
  require_once('./data.php');
?>


<!-- <div class="embla">
  <div class="embla__viewport">
    <div class="embla__container">
      <?php foreach ($project['images'] as $image) : ?>
        <div class="embla__slide">
          <img src="<?= $image ?>" alt="">
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div> -->

<!DOCTYPE html>
<html lang="<?= current_lang_code() ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fermín Ares</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Open+Sans:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/styles/main.css">
  <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
  <script src="assets/scripts/main.js"></script>
</head>
<body>
  <header class="header">
    <nav class="navbar max-width">
      <ul class="navbar__menu">
        <?php foreach ($navbar as $item) : ?>
          <li class="navbar__menu__item">
            <a class="navbar__menu__link" href="<?= $item['link'] ?>">
              <?= __($item['label']) ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    </nav>
  </header>
  <section id="intro" class="section">
    <div class="max-width intro-content">
      <img class="intro-img" src="/assets/imgs/me.jpg" alt="">
      <h1 class="intro-title">
        <span class="intro-name">Fermín Ares</span><br>
        <b class="intro-subtitle">Software Developer</b>
      </h1>
    </div>
  </section>
  <section id="about" class="section">
    <div class="max-width">
      <h2 class="section__title">
        <?= __('About Me') ?>
      </h2>
      <p class="about-copy">
        Hi, I'm a Freelance Software Developer working from La Paloma, Uruguay 🏖️<br><br>
        Most of my experience is in web development working on both simple projects like landing pages and complex ones like e-commerce, web apps, etc. I’ve worked both alone and with teams for companies like StartApp Labs, Om Lab, GenuineBee and December Labs, and I have plenty of experience working remotely.<br><br>
        If you have a project you think I can help you with don't hesitate to tell me about it 👨‍💻
      </p>
    </div>
  </section>
  <section id="projects" class="section">
    <div class="max-width">
      <h2 class="section__title">
        <?= __('Projects') ?>
      </h2>
      <ul class="projects__list">
        <?php foreach ($projects as $project) : ?>
          <li class="projects__item">
            <button type="button" class="projects__btn">
              <h3 class="project__title">
                <?= $project['name'] ?>
                <?= $project['emoji'] ?>
              </h3>
              <span class="project__copy">
                <?= __($project['description']) ?>
              </span>
              <h4 class="project__technologies-title">
                <?= __('Construido con:') ?>
              </h4>
              <ul class="project__technologies">
                <?php foreach ($project['technologies'] as $technology) : ?>
                  <li class="project__technology">
                    <img class="project__technology__img" src="<?= $technologies[$technology]['logo'] ?>" alt="<?= $technologies[$technology]['name'] ?>">
                  </li>
                <?php endforeach ?>
              </ul>
              <div class="project__links">
                <?php foreach ($project['links'] as $link) : ?>
                  <a class="project__link" href="<?= $link['href'] ?>" target="_blank" rel="<?= $link['rel'] ?>">
                    <span>
                      <?= __($link['label']) ?>
                    </span>
                    <span>
                      <?= __($link['icon']) ?>
                    </span>
                  </a>
                <?php endforeach ?>
              </div>
            </button>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </section>
  <!-- <section id="technologies" class="section">
    <div class="max-width">
      <h2 class="section__title">
        <?= __('Technologies, Tools & Frameworks') ?>
      </h2>
      <ul class="technologies__list">
        <?php foreach ($technologies as $name => $items) : ?>
          <li class="technology technology--<?= $name ?> technology--span-<?= count($items) ?>">
            <ul class="technology__list">
              <?php foreach ($items as $item) : ?>
                <li class="technology__item">
                  <img class="technology__img" src="<?= $item['logo'] ?>" alt="">
                  <?= $item['name'] ?>
                </li>
              <?php endforeach ?>
            </ul>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </section>
  <section id="languages" class="section">
    <h2 class="section__title">
      Languages
    </h2>
    <ul>
      
    </ul>
  </section> -->
  <section id="contact" class="section">
    <div class="max-width">
      <h2 class="section__title">
        Contact Me
      </h2>
      <form class="form" action="" novalidate>
        <div class="form__group">
          <label for="name" class="form__label">
            <?= __('Name') ?>
          </label>
          <input class="form__input" id="name" type="text" name="name" required>
        </div>
        <div class="form__group">
          <label for="email" class="form__label">
            <?= __('Email') ?>
          </label>
          <input class="form__input" id="email" type="email" name="email" required>
        </div>
        <div class="form__group">
          <label for="message" class="form__label">
            <?= __('Message') ?>
          </label>
          <textarea name="message" id="message" cols="30" rows="10" required></textarea>
        </div>
        <button type="submit" class="btn">
          <?= __('Send') ?>
        </button>
      </form>
    </div>
  </section>
  <footer class="footer">
    <h2 class="footer__title">
      Links
    </h2>
    <ul class="footer__list">
      <?php foreach ($footer as $item) : ?>
        <li class="footer__item">
          <a class="footer__link" href="<?= $item['link'] ?>">
            <img class="footer__logo" src="<?= $item['icon'] ?>" alt="">
            <?= $item['label'] ?>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </footer>
</body>
</html>