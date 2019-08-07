var cacheName = '&&versaoreadinenglish19-08-07-06:48:03&&versao';

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
  '/app/readinenglish/a-changed-life/index.html',
'/app/readinenglish/a-home-higher-than-mountains/index.html',
'/app/readinenglish/a-stealthy-attack-from-a-hidden-enemy/index.html',
'/app/readinenglish/his-last-chance/index.html',
'/app/readinenglish/historyofsite/index.html',
'/app/readinenglish/my-last-chance/index.html',
'/app/readinenglish/new-york-world-trade-center-under-attack/index.html',
'/app/readinenglish/ready-for-the-race/index.html',
'/app/readinenglish/ready-to-die/index.html',
'/app/readinenglish/the-jailbird-s-song/index.html',
'/app/readinenglish/the-stairs/index.html',
'/app/readinenglish/tsunami-the-picture-of-a-nightmare/index.html',
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