var cacheName = '&&versaoreadinenglish19-07-30-08:08:02&&versao';

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(cacheName)
      .then(cache => cache.addAll([
        '/app/readinenglish/',
  '/app/readinenglish/index.html',
  '/app/readinenglish/css/main.css',
  '/app/readinenglish/css/normalize.css',
  '/app/readinenglish/css/typo.css',
  '/app/readinenglish/js/custom.js',
  '/app/readinenglish/closeWindow.html',
  '/app/readinenglish/historyofsite/index.html',
'/app/readinenglish/ready-for-the-race/index.html',
'/app/readinenglish/ready-to-die/index.html',
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