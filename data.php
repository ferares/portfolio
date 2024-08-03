<?php

$navbar = [
  ['label' => 'Intro', 'link' => '#intro'],
  ['label' => 'About', 'link' => '#about'],
  ['label' => 'Projects', 'link' => '#projects'],
  ['label' => 'Contact', 'link' => '#contact'],
];

$technologies = [];

$projects = [
  [
    'name' => 'BusesUY',
    'links' => [
      [
        'label' => 'Try it!',
        'href' => 'https://buses.uy',
        'rel' => '',
        'icon' => '🚀',
      ],
    ],
    'description' => 'A search engine for medium & long distance bus lines in Uruguay.',
    'emoji' => '🚌',
    'technologies' => ['laravel', 'typescript', 'postgresql', 'android', 'go'],
    'images' => [
      '/assets/imgs/projects/busesuy/1.png',
      '/assets/imgs/projects/busesuy/2.png',
      '/assets/imgs/projects/busesuy/3.png',
    ],
  ],
  [
    'name' => 'Arbolado Urbano',
    'links' => [
      [
        'label' => 'Try it!',
        'href' => 'https://arboladourbano.com',
        'rel' => '',
        'icon' => '🎉',
      ],
      [
        'label' => 'View project',
        'href' => 'https://github.com/ferares/arboles-client',
        'rel' => 'noopener noreferrer nofollow',
        'icon' => '🧑‍💻',
      ],
    ],
    'description' => 'An interactive web tool for exploring data gather from different census about city trees.',
    'emoji' => '🌳',
    'technologies' => ['laravel', 'typescript', 'mysql'],
    'images' => [
      '/assets/imgs/projects/arboladourbano/1.png',
      '/assets/imgs/projects/arboladourbano/2.png',
      '/assets/imgs/projects/arboladourbano/3.png',
    ],
  ],
  [
    'name' => 'Papelapp',
    'links' => [
      [
        'label' => 'Try it!',
        'href' => 'https://papelapp.ares.uy',
        'rel' => '',
        'icon' => '🚀',
      ],
      [
        'label' => 'View project',
        'href' => 'https://github.com/ferares/papelapp',
        'rel' => 'noopener noreferrer nofollow',
        'icon' => '🧑‍💻',
      ],
    ],
    'description' => 'An app for figuring out the cost per meter of toilet paper rolls.',
    'emoji' => '🧻',
    'technologies' => ['typescript', 'html', 'css'],
    'images' => [
      '/assets/imgs/projects/papelapp/1.png',
      '/assets/imgs/projects/papelapp/2.png',
      '/assets/imgs/projects/papelapp/3.png',
    ],
  ],
  [
    'name' => 'Écouter',
    'links' => [
      [
        'label' => 'View project',
        'href' => 'https://github.com/ferares/ecouter',
        'rel' => 'noopener noreferrer nofollow',
        'icon' => '🧑‍💻',
      ],
    ],
    'description' => 'A web site for language teachers and students to access the accompanying audio tracks from their text books with ease.',
    'emoji' => '👂',
    'technologies' => ['typescript', 'html', 'css'],
    'images' => [
      '/assets/imgs/projects/ecouter/1.png',
      '/assets/imgs/projects/ecouter/2.png',
      '/assets/imgs/projects/ecouter/3.png',
    ],
  ],
  [
    'name' => 'Postales',
    'links' => [
      [
        'label' => 'Try it!',
        'href' => 'https://postales.ares.uy/random',
        'rel' => '',
        'icon' => '🎉',
      ],
      [
        'label' => 'View project',
        'href' => 'https://github.com/ferares/random-pictures',
        'rel' => 'noopener noreferrer nofollow',
        'icon' => '🧑‍💻',
      ],
    ],
    'description' => 'A collaborative API for uploading and then accessing photos of sceneries tagged with their corresponding locations and photographers.',
    'emoji' => '📸',
    'technologies' => ['typescript', 'node', 'mongodb'],
    'images' => [],
  ],
  [
    'name' => 'Bitácora',
    'links' => [
      [
        'label' => 'View project',
        'href' => 'https://github.com/ferares/trip-timeline',
        'rel' => 'noopener noreferrer nofollow',
        'icon' => '🧑‍💻',
      ],
    ],
    'description' => 'A web app for sharing the itinerary of your next trip with family and friends so they can follow along from home in real time.',
    'emoji' => '🧳',
    'technologies' => ['typescript', 'next', 'node', 'sqlite'],
    'images' => [
      '/assets/imgs/projects/bitacora/1.png',
      '/assets/imgs/projects/bitacora/2.png',
      '/assets/imgs/projects/bitacora/3.png',
    ],
  ],
];

$technologies = [
  'wcag' => ['name' => 'WCAG 2.1', 'logo' => '/assets/imgs/logos/a11y.svg'],
  'nvda' => ['name' => 'NVDA', 'logo' => '/assets/imgs/logos/nvda.png'],
  'vo' => ['name' => 'VoiceOver', 'logo' => '/assets/imgs/logos/voiceover.png'],
  'orca' => ['name' => 'Orca', 'logo' => '/assets/imgs/logos/orca.svg'],
  'html' => ['name' => 'HTML', 'logo' => '/assets/imgs/logos/html.svg'],
  'css' => ['name' => 'CSS', 'logo' => '/assets/imgs/logos/css.svg'],
  'js' => ['name' => 'JavaScript', 'logo' => '/assets/imgs/logos/javascript.svg'],
  'angular' => ['name' => 'Angular', 'logo' => '/assets/imgs/logos/angular.svg'],
  'react' => ['name' => 'React', 'logo' => '/assets/imgs/logos/react.svg'],
  'php' => ['name' => 'PHP', 'logo' => '/assets/imgs/logos/php.svg'],
  'laravel' => ['name' => 'Laravel', 'logo' => '/assets/imgs/logos/laravel.svg'],
  'wordpress' => ['name' => 'WordPress', 'logo' => '/assets/imgs/logos/wordpress.svg'],
  'node' => ['name' => 'Node.js', 'logo' => '/assets/imgs/logos/nodejs.svg'],
  'typescript' => ['name' => 'TypeScript', 'logo' => '/assets/imgs/logos/typescript.svg'],
  'linux' => ['name' => 'Linux', 'logo' => '/assets/imgs/logos/linux.svg'],
  'windows' => ['name' => 'Windows', 'logo' => '/assets/imgs/logos/windows.svg'],
  'macos' => ['name' => 'MacOS', 'logo' => '/assets/imgs/logos/apple.svg'],
  'postgresql' => ['name' => 'PostgreSQL', 'logo' => '/assets/imgs/logos/postgresql.svg'],
  'mysql' => ['name' => 'MySQL', 'logo' => '/assets/imgs/logos/mysql.svg'],
  'mongodb' => ['name' => 'MongoDB', 'logo' => '/assets/imgs/logos/mongodb.svg'],
  'python' => ['name' => 'Python', 'logo' => '/assets/imgs/logos/python.svg'],
  'django' => ['name' => 'Django', 'logo' => '/assets/imgs/logos/django.svg'],
  'ios' => ['name' => 'iOS', 'logo' => '/assets/imgs/logos/apple.svg'],
  'android' => ['name' => 'Android', 'logo' => '/assets/imgs/logos/android.svg'],
  'go' => ['name' => 'GO', 'logo' => '/assets/imgs/logos/go.svg'],
];

$footer = [
  [
    'label' => 'GitHub',
    'link' => 'https://github.com/ferares',
    'icon' => '/assets/imgs/logos/github.svg',
  ],
  [
    'label' => 'Linkedin',
    'link' => 'https://www.linkedin.com/in/ferm%C3%ADn-ares-0249b71ab/',
    'icon' => '/assets/imgs/logos/linkedin.svg',
  ],
];