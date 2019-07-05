var cache_name = 'leituraCristaApp';
var cached_urls = [
  '/app/',
  '/app/index.html',
  '/app/index.xml',
  '/app/sitemap.xml',
  '/app/css/main.css',
  '/app/css/normalize.css',
  '/app/css/typo.css',
  '/app/js/custom.js',
  '/app/404.html',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/404.html',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/acontecimentos-profeticos',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/a-mulher---seu-lugar-nas-escrituras',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/a-obra-do-evangelho',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/a-oracao-e-as-reunioes-de-oracao',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/a-ordem-de-deus',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/ao-seu-nome',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/a-total-suficiencia-de-cristo',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/a-vinda-do-senhor',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/book',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/cartas-aos-evangelistas',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/categories',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/css',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/favicon.ico',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/humans.txt',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/images',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/index.html',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/index.xml',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/js',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/luz-para-as-almas-ansiosas',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/manifest.json',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/o-caminho-de-deus-para-o-descanso-poder-e-consagracao',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/os-desapontamentos-da-vida',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/robots.txt',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/scripts',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/sitemap.xml',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/sounds',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/sw.js',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/sw.js.bkp',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/sw.js-foot',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/sw.js-head',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/sw.js-livros',
'/app//opt/lampp/htdocs/leituracrista/app/leituracrista/public/tags',
];

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cache_name)
    .then(function(cache) {
      return cache.addAll(cached_urls);
    })
  );
});

self.addEventListener('activate', function(event) {
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.map(function(cacheName) {
          if (cacheName.startsWith('leituraCristaApp') && staticCacheName !== cacheName) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

self.addEventListener('fetch', function(event) {
    console.log('Fetch event for ', event.request.url);
    event.respondWith(
      caches.match(event.request).then(function(response) {
        if (response) {
          console.log('Found ', event.request.url, ' in cache');
          return response;
        }
        console.log('Network request for ', event.request.url);
        return fetch(event.request).then(function(response) {
          if (response.status === 404) {
            return caches.match('fourohfour.html');
          }
          return caches.open(cached_urls).then(function(cache) {
           cache.put(event.request.url, response.clone());
            return response;
          });
        });
      }).catch(function(error) {
        console.log('Error, ', error);
        return caches.match('/app/index.html');
      })
    );
  });
