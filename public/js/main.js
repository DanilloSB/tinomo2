if ('serviceWorker' in navigator) {
        console.log("Installing ServiceWorker...");
        navigator.serviceWorker.register('/public/sw.js')
        .then(function(registration) {
            console.log('Registration successful, scope is:', registration.scope);
        })
        .catch(function(error) {
            console.log('Service worker registration failed, error:', error);
        });
  };