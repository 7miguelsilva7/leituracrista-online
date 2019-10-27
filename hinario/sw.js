var CURRENT_CACHES = {
  offline: 'offlineHinario-v2'
};
var OFFLINE_URL = [
'/hinario/',
'/hinario/css/css.css',
'/hinario/img/indice.png',
'/hinario/img/numero.png'
]
;

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CURRENT_CACHES)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(OFFLINE_URL);
      })
  );
});

function createCacheBustedRequest(url) {
  let request = new Request(url, {cache: 'reload'});
  if ('cache' in request) {
    return request;
  }
  let bustedUrl = new URL(url, self.location.href);
  bustedUrl.search += (bustedUrl.search ? '&' : '') + 'cachebust=' + Date.now();
  return new Request(bustedUrl);
}
});

self.addEventListener('activate', event => {
  let expectedCacheNames = Object.keys(CURRENT_CACHES).map(function(key) {
    return CURRENT_CACHES[key];
  });
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (expectedCacheNames.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

self.addEventListener('fetch', event => {
  if (event.request.mode === 'navigate' ||
      (event.request.method === 'GET' &&
       event.request.headers.get('accept').includes('text/html'))) {
    event.respondWith(
      fetch(event.request).catch(error => {
        return caches.match(OFFLINE_URL);
      })
    );
  }
});