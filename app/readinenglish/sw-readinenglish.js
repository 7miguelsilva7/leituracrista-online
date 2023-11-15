let CURRENT_CACHES_RIE = {
  offline_rie: 'readinenglish-APP'
};


const OFFLINE_URL_RIE = 'index.html';

var OFFLINE_URLs_RIE = [
  '/app/readinenglish/',
  '/app/readinenglish/index.html',
  '/app/readinenglish/css/main.css',
  '/app/readinenglish/css/normalize.css',
  '/app/readinenglish/css/typo.css',
  '/app/readinenglish/js/custom.js',
  '/app/readinenglish/img/voltar.png',
  '/app/readinenglish/img/up.png',
  '/app/readinenglish/closeWindow.html',
  
   ];
 
// configura página inicial ao recaregar a página em modo offline_rie
  self.addEventListener('install', event => {
    event.waitUntil(
      fetch(createCacheBustedRequest(OFFLINE_URL_RIE)).then(function(response) {
        return caches.open(CURRENT_CACHES_RIE.offline_rie).then(function(cache) {
          return cache.put(OFFLINE_URL_RIE, response);
        });
      })
    );

    // instala todos arquivos do site indicados em OFLINE_URLs
  self.addEventListener('install', function(event) {
    // Perform install steps
    event.waitUntil(
      caches.open(CURRENT_CACHES_RIE.offline_rie)
        .then(function(cache) {
          console.log('Opened cache');
          return cache.addAll(OFFLINE_URLs_RIE);
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
  let expectedCacheNames = Object.keys(CURRENT_CACHES_RIE).map(function(key) {
    return CURRENT_CACHES_RIE[key];
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
        return caches.match(OFFLINE_URL_RIE);
      })
    );
  }
}); 