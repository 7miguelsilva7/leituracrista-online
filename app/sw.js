var cacheName = '&&versaoleituraCristaApp-19-07-28-22:21:59&&versao';

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(cacheName)
      .then(cache => cache.addAll([
        '/app/',
  '/app/index.html',
  '/app/css/main.css',
  '/app/css/normalize.css',
  '/app/css/typo.css',
  '/app/js/custom.js',
  '/app/closeWindow.html',
  '/app/a2hs/index.html',
'/app/audioplayer/index.html',
'/app/chapter-a-day/index.html',
'/app/dashboard/index.html',
'/app/eduquiz/index.html',
'/app/inicio/index.html',
'/app/leituracrista-online/index.html',
'/app/mudaReferencias/index.html',
'/app/Pure-JavaScript-CRUD-Operations-with-Html/index.html',
'/app/readTranslate/index.html',
'/app/testarLinks/index.html',
]))
  );
});

self.addEventListener('message', function (event) {
  if (event.data.action === 'skipWaiting') {
    self.skipWaiting();
  }
});

self.addEventListener('fetch', function (event) {
  event.respondWith(
    caches.match(event.request)
      .then(function (response) {
        if (response) {
          return response;
        }
        return fetch(event.request);
      })
  );
});