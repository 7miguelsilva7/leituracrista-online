const v = "3";
addEventListener('install', e => e.waitUntil(
  caches.open(v).then(cache => cache.addAll([
    
    '/tests/sw-sample/',
    '/tests/sw-sample/index.html'
  
  ]))
));

addEventListener('fetch', e => {
  console.log('fetch', e.request);
  e.respondWith(
    caches.match(e.request).then(cachedResponse =>
      cachedResponse || fetch(e.request)
    )
  );
});

addEventListener('activate', e => {
  e.waitUntil(caches.keys().then(keys => {
    return Promise.all(keys.map(key => {
      if (key != v) return caches.delete(key);
    }));
  }));
});

addEventListener('message', e => {
  if (e.data === 'skipWaiting') {
    skipWaiting();
  }
});