var cacheName = '&&versaoreadinenglish19-08-19-23:24:23&&versao';

var cacheFiles = [
  '/app/readinenglish/',
  '/app/readinenglish/index.html',
  '/app/readinenglish/css/main.css',
  '/app/readinenglish/css/normalize.css',
  '/app/readinenglish/css/typo.css',
  '/app/readinenglish/js/custom.js',
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
'/app/readinenglish/christ-your-griefs-has-borne/index.html',
'/app/readinenglish/god-s-x-rays/index.html',
'/app/readinenglish/his-last-chance/index.html',
'/app/readinenglish/historyofsite/index.html',
'/app/readinenglish/is-god-a-policeman/index.html',
'/app/readinenglish/it-s-all-on-before/index.html',
'/app/readinenglish/jesus-loves-me/index.html',
'/app/readinenglish/just-lippen-to-jesus/index.html',
'/app/readinenglish/just-take-it/index.html',
'/app/readinenglish/my-last-chance/index.html',
'/app/readinenglish/never-perish/index.html',
'/app/readinenglish/new-york-world-trade-center-under-attack/index.html',
'/app/readinenglish/pull-me-up-janet/index.html',
'/app/readinenglish/put-my-finger-there/index.html',
'/app/readinenglish/ready-for-the-race/index.html',
'/app/readinenglish/ready-to-die/index.html',
'/app/readinenglish/romans-1-1/index.html',
'/app/readinenglish/the-book-seller/index.html',
'/app/readinenglish/the-doctor-s-discovery/index.html',
'/app/readinenglish/the-jailbird-s-song/index.html',
'/app/readinenglish/the-nurse-s-mistake/index.html',
'/app/readinenglish/the-right-way/index.html',
'/app/readinenglish/the-stairs/index.html',
'/app/readinenglish/tsunami-the-picture-of-a-nightmare/index.html',


];

//Installing
//Pre-cache App Shell
self.addEventListener('install', function(event) {
  console.log("From SW: Install Event");
  self.skipWaiting();
  event.waitUntil(
    caches.open(cacheName)
    .then(function(cache){
      return cache.addAll(cacheFiles)
    })
  );
});

//Activating
//Clean up
self.addEventListener('activate', function(event) {
  console.log("From SW: Activate Event");
  self.clients.claim();
  event.waitUntil(
    caches.keys()
      .then(function(cacheKeys){
        var deletePromises = [];
        for(var i = 0; i < cacheKeys.length; i++){
          if(cacheKeys[i] != cacheName){
            deletePromises.push(caches.delete(cacheKeys[i]));
          }
        }
        return Promise.all(deletePromises);
      })
  );
});