self.addEventListener('install', e => {
    e.waitUntil(
        caches.open('ebussines-pwa-cache').then(cache => {
                return cache.addAll ([
                        '/',
                        'index.php',
                        'fileadmin',
                        'typo3',
                        'typo3conf',
                        'typo3temp',
                ]);
        })
    );
});