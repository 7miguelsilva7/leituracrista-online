var cache_name = 'leituraCristaApp';
var cached_urls = [
  '/app/',
  '/app/css/main.css',
  '/app/images',
  '/app/css/normalize.css',
  '/app/css/typo.css',
  '/app/js/custom.js',
404.html
acontecimentos-profeticos
a-mulher---seu-lugar-nas-escrituras
a-obra-do-evangelho
a-oracao-e-as-reunioes-de-oracao
a-ordem-de-deus
ao-seu-nome
a-total-suficiencia-de-cristo
a-vinda-do-senhor
book
cartas-aos-evangelistas
categories
css
favicon.ico
humans.txt
images
index.html
index.xml
js
luz-para-as-almas-ansiosas
manifest.json
o-caminho-de-deus-para-o-descanso-poder-e-consagracao
os-desapontamentos-da-vida
robots.txt
scripts
sitemap.xml
sounds
sw.js
sw.js.bkp
sw.js-foot
sw.js-head
sw.js-livros
tags
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
