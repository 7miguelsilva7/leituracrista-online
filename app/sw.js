// sw.js

var cacheName = 'leituraCristaAPP-V1';

var filesToCache = [
  '/app/',
  '/app/index.html', 
  '/app/index.xml',
  '/app/sitemap.xml',
  '/app/css/main.css',
  '/app/css/normalize.css',
  '/app/css/typo.css',
  '/app/js/custom.js',
  '/app/404.html','/app/acontecimentos-profeticos/index.html',
'/app/a-mulher---seu-lugar-nas-escrituras/index.html',
'/app/a-obra-do-evangelho/index.html',
'/app/a-oracao-e-as-reunioes-de-oracao/index.html',
'/app/a-ordem-de-deus/index.html',
'/app/ao-seu-nome/index.html',
'/app/a-total-suficiencia-de-cristo/index.html',
'/app/a-vinda-do-senhor/index.html',
'/app/cartas-aos-evangelistas/index.html',
'/app/luz-para-as-almas-ansiosas/index.html',
'/app/o-caminho-de-deus-para-o-descanso-poder-e-consagracao/index.html',
'/app/os-desapontamentos-da-vida/index.html',

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