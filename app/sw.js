// sw.js

var cacheName = 'leituraCristaAPP-V1';

var filesToCache = [
  '/',
  '/index.html', 
  '/index.xml',
  '/sitemap.xml',
  '/css/main.css',
  '/css/normalize.css',
  '/css/typo.css',
  '/js/custom.js',
  '/404.html','/acontecimentos-profeticos/index.html',
'/a-mulher---seu-lugar-nas-escrituras/index.html',
'/a-obra-do-evangelho/index.html',
'/a-oracao-e-as-reunioes-de-oracao/index.html',
'/a-ordem-de-deus/index.html',
'/ao-seu-nome/index.html',
'/a-total-suficiencia-de-cristo/index.html',
'/a-vinda-do-senhor/index.html',
'/cartas-aos-evangelistas/index.html',
'/luz-para-as-almas-ansiosas/index.html',
'/o-caminho-de-deus-para-o-descanso-poder-e-consagracao/index.html',
'/os-desapontamentos-da-vida/index.html',

];

self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open(cacheName)
        .then(function(cache) {
            console.info('[sw.js] cached all files');
            return cache.addAll(filesToCache);
        })
    );
});


self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.match(event.request)
        .then(function(response) {
            if(response){
                return response
            }
            else{
                // clone request stream
                // as stream once consumed, can not be used again
                var reqCopy = event.request.clone();
                
                return fetch(reqCopy, {credentials: 'include'}) // reqCopy stream consumed
                .then(function(response) {
                    // bad response
                    // response.type !== 'basic' means third party origin request
                    if(!response || response.status !== 200 || response.type !== 'basic') {
                        return response; // response stream consumed
                    }

                    // clone response stream
                    // as stream once consumed, can not be used again
                    var resCopy = response.clone();


                    // ================== IN BACKGROUND ===================== //

                    // add response to cache and return response
                    caches.open(cacheName)
                    .then(function(cache) {
                        return cache.put(reqCopy, resCopy); // reqCopy, resCopy streams consumed
                    });

                    // ====================================================== //


                    return response; // response stream consumed
                })
            }
        })
    );
});

self.addEventListener('activate', function(event) {
    event.waitUntil(
        caches.keys()
        .then(function(cacheNames) {
            return Promise.all(
                cacheNames.map(function(cName) {
                    if(cName !== cacheName){
                        return caches.delete(cName);
                    }
                })
            );
        })
    );
});