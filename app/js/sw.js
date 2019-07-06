 self.addEventListener('install', function(e) {
        e.waitUntil(
           caches.open('default-cache').then(function(cache) {
              return cache.addAll([
  '/app/',
  '/app/index.html',
  '/app/index.xml',
  '/app/sitemap.xml',
  '/app/css/main.css',
  '/app/css/normalize.css',
  '/app/css/typo.css',
  '/app/js/custom.js',
  '/app/404.html',
'/app/acontecimentos-profeticos/index.html',
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
 ])
        }).then(function() {
            return self.skipWaiting();
        }));
    });

    self.addEventListener('activate', function(e) {
        e.waitUntil(self.clients.claim());
    });

    self.addEventListener('fetch', function(e) {
        e.respondWith(
            caches.match(e.request).then(function(response) {
                return response || fetch(e.request);
            })
        );
    });