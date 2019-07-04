
var cache_name = 'leituraCristaApp';
var cached_urls = [
  '/app/',
  '/app/index.html',
  '/app/css/main.css',
  '/app/images',
  '/app/css/normalize.css',
  '/app/css/typo.css',
  '/app/js/custom.js',
  '/app/ao-seu-nome',
  '/app/a-obra-do-evangelho',



acontecimentos-profeticos.md
a-mulher-seu-lugar-nas-escrituras.md
a-obra-do-evangelho.md
a-oracao-e-as-reunioes-de-oracao.md
a-ordem-de-deus.md
ao-seu-nome.md
ao-seu-nome.md~
a-total-suficiencia-de-cristo.md
a-vinda-do-senhor.md
cartas-aos-evangelistas.md
luz-para-as-almas-ansiosas.md
o-caminho-de-deus-para-o-descanso-poder-e-consagracao.md
os-desapontamentos-da-vida.md


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
          if (cacheName.startsWith('pages-cache-') && staticCacheName !== cacheName) {
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
