self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('video-store').then(function(cache) {
     return cache.addAll([
       '/hinario/teste/',
       '/hinario/teste/index.html',
       '/hinario/teste/index.js',
       '/hinario/teste/style.css',
       '/hinario/teste/images/fox1.jpg',
       '/hinario/teste/images/fox2.jpg',
       '/hinario/teste/images/fox3.jpg',
       '/hinario/teste/images/fox4.jpg'
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
