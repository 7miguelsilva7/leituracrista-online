self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('video-store').then(function(cache) {
     return cache.addAll([
       '/hinario/',
       '/hinario/index.html',
       '/hinario/index.js',
       '/hinario/style.css',
       '/hinario/img/numero.png',
       '/hinario/img/indice.png',
       '/hinario/img/numero.png',
       '/hinario/css/icon.png'
     ]);
   })
 );
});

self.addEventListener('fetch', function(e) {
  console.log(e.request.url);
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});
