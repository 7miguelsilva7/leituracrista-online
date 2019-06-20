var CACHE_NAME = 'my-site-cache-v1';
var urlsToCache = [
  '/hinario/',
  '/hinario/index.html',
  '/hinario/index.js',
  '/hinario/style.css',
  '/hinario/img/numero.png',
  '/hinario/img/indice.png',
  '/hinario/img/numero.png'
];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        // Cache hit - return response
        if (response) {
          return response;
        }
        return fetch(event.request);
      }
    )
  );
});