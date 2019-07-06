var CACHE_NAME = 'test-cache-v4';
var urlsToCache = [
  '/app/',
  '/app/index.html',
  '/app/index.xml',
  '/app/sitemap.xml',
  '/app/css/main.css',
  '/app/css/normalize.css',
  '/app/css/typo.css',
  '/app/js/custom.js',
  '/app/404.html',
'/app/acontecimentos-profeticos/index.html',
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

self.addEventListener('install', function (event) {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function (cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
  return self.skipWaiting();
});

self.addEventListener('activate', function(event) {
  event.waitUntil(
    caches.keys().then(function(keyList) {
      return Promise.all(keyList.map(function(key) {
        if (key !== CACHE_NAME) {
          return caches.delete(key);
        }
      }));
    }) 
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.open(CACHE_NAME).then(function(cache){
      return cache.match(event.request)
        .then(function(response) {
          if (response) {
          console.log('SERVED FROM CACHE');
            return response;
          }
          return fetch(event.request).then(function(response){
              console.log('Response from network is:', response);
              return response;
          });
        }
      )
    })
  );
});