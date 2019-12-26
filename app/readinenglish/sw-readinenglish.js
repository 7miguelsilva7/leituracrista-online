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
  
  '/app/readinenglish/a-blessed-blunder/index.html',
'/app/readinenglish/a-changed-life/index.html',
'/app/readinenglish/a-daring-challenge/index.html',
'/app/readinenglish/after-this/index.html',
'/app/readinenglish/a-home-higher-than-mountains/index.html',
'/app/readinenglish/a-man-of-his-word/index.html',
'/app/readinenglish/anchored/index.html',
'/app/readinenglish/an-irish-soldier-s-sacrifice/index.html',
'/app/readinenglish/are-you-acquainted-with-the-author/index.html',
'/app/readinenglish/arrested-by-a-song/index.html',
'/app/readinenglish/a-stealthy-attack-from-a-hidden-enemy/index.html',
'/app/readinenglish/a-true-shark-story/index.html',
'/app/readinenglish/a-valiant-captain/index.html',
'/app/readinenglish/between-two-slides/index.html',
'/app/readinenglish/catptain-coutts-substitute/index.html',
'/app/readinenglish/christ-is-coming/index.html',
'/app/readinenglish/christ-your-griefs-has-borne/index.html',
'/app/readinenglish/does-god-exist/index.html',
'/app/readinenglish/god-s-x-rays/index.html',
'/app/readinenglish/his-last-chance/index.html',
'/app/readinenglish/historyofsite/index.html',
'/app/readinenglish/is-god-a-policeman/index.html',
'/app/readinenglish/it-s-all-on-before/index.html',
'/app/readinenglish/jesus-loves-me/index.html',
'/app/readinenglish/just-lippen-to-jesus/index.html',
'/app/readinenglish/just-take-it/index.html',
'/app/readinenglish/let-your-bucket-down/index.html',
'/app/readinenglish/my-last-chance/index.html',
'/app/readinenglish/never-perish/index.html',
'/app/readinenglish/new-york-world-trade-center-under-attack/index.html',
'/app/readinenglish/only-one-church/index.html',
'/app/readinenglish/pull-me-up-janet/index.html',
'/app/readinenglish/put-my-finger-there/index.html',
'/app/readinenglish/ready-for-the-race/index.html',
'/app/readinenglish/ready-to-die/index.html',
'/app/readinenglish/romans-1-1/index.html',
'/app/readinenglish/saved-by-a-sheep/index.html',
'/app/readinenglish/should-i-use-a-paraphrase-of-the-bible/index.html',
'/app/readinenglish/sorry/index.html',
'/app/readinenglish/the-book-seller/index.html',
'/app/readinenglish/the-changed-word/index.html',
'/app/readinenglish/the-doctor-s-discovery/index.html',
'/app/readinenglish/the-jailbird-s-song/index.html',
'/app/readinenglish/the-nurse-s-mistake/index.html',
'/app/readinenglish/the-prodigal-son/index.html',
'/app/readinenglish/the-right-way/index.html',
'/app/readinenglish/the-stairs/index.html',
'/app/readinenglish/tsunami-the-picture-of-a-nightmare/index.html',
'/app/readinenglish/what-does-the-bible-teach-about-the-trinity/index.html',
'/app/readinenglish/what-is-the-bible-in-basic-english-bbe/index.html',
'/app/readinenglish/what-is-trinitarianism/index.html',
'/app/readinenglish/who-is-god/index.html',
'/app/readinenglish/who-is-jesus-christ/index.html',
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