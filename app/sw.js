var cache_name = 'leituraCristaApp';
var cached_urls = [
  '/app/',
  '/app/index.html',
  '/app/css/main.css',
  '/app/css/normalize.css',
  '/app/css/typo.css',
  '/app/js/custom.js',
  '/app/closeWindow.html',


  '/app/acontecimentos-profeticos/index.html',
'/app/a-historia-da-greja/index.html',
'/app/a-história-da-igreja/index.html',
'/app/a-mulher---seu-lugar-nas-escrituras/index.html',
'/app/a-obra-do-evangelho/index.html',
'/app/a-oracao-e-as-reunioes-de-oracao/index.html',
'/app/a-ordem-de-deus/index.html',
'/app/ao-seu-nome/index.html',
'/app/a-total-suficiencia-de-cristo/index.html',
'/app/a-vinda-do-senhor/index.html',
'/app/cartas-aos-evangelistas/index.html',
'/app/luz-para-as-almas-ansiosas/index.html',
'/app/o-caminho-de-deus-para-o-descanso-poder-e-consagracao/index.html',
'/app/os-desapontamentos-da-vida/index.html',

];

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cache_name)
    .then(function(cache) {
      return cache.addAll(cached_urls);
    })
  );
});

let staticCacheName = true

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