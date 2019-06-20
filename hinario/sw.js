const version = "0.6.14";
const cacheName = `Hinario-${version}`;
self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(cacheName).then(cache => {
      return cache.addAll([
  '/hinario/',
  '/hinario/index.html',
  '/hinario/index.js',
  '/hinario/style.css',
  '/hinario/img/numero.png',
  '/hinario/img/indice.png',
  '/hinario/img/numero.png'
      ])
          .then(() => self.skipWaiting());
    })
  );
});

self.addEventListener('activate', event => {
  event.waitUntil(self.clients.claim());
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.open(cacheName)
      .then(cache => cache.match(event.request, {ignoreSearch: true}))
      .then(response => {
      return response || fetch(event.request);
    })
  );
});
