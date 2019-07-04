var cache_name = 'leituraCristaApp';
var cached_urls = [
  '/app/',
  '/app/css/main.css',
  '/app/images',
  '/app/css/normalize.css',
  '/app/css/typo.css',
  '/app/js/custom.js',
'/app/404.html',
'/app/acontecimentos-profeticos',
'/app/a-mulher---seu-lugar-nas-escrituras',
'/app/a-obra-do-evangelho',
'/app/a-oracao-e-as-reunioes-de-oracao',
'/app/a-ordem-de-deus',
'/app/ao-seu-nome',
'/app/a-total-suficiencia-de-cristo',
'/app/a-vinda-do-senhor',
'/app/book',
'/app/cartas-aos-evangelistas',
'/app/categories',
'/app/css',
'/app/favicon.ico',
'/app/humans.txt',
'/app/images',
'/app/index.html',
'/app/index.xml',
'/app/js',
'/app/luz-para-as-almas-ansiosas',
'/app/manifest.json',
'/app/o-caminho-de-deus-para-o-descanso-poder-e-consagracao',
'/app/os-desapontamentos-da-vida',
'/app/robots.txt',
'/app/scripts',
'/app/sitemap.xml',
'/app/sounds',

'/app/sw.js.bkp',
'/app/sw.js-foot',
'/app/sw.js-head',
'/app/sw.js-livros',
'/app/tags',
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
