require('./bootstrap');

  var pwaInstallBtn = document.getElementById('pwa-install');
  let isInitiatePwa = false;
  pwaInstallBtn.style.display = 'none';
  window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent the mini-infobar from appearing on mobile
    e.preventDefault();
    window.deferredPrompt = e;
    pwaInstallBtn.style.display = 'block';
  });

  pwaInstallBtn.addEventListener('click', (e) => {
    // Show the install prompt
    const deferredPrompt = window.deferredPrompt;
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === 'accepted') {
        console.log('User accepted the install prompt');
      } else {
        console.log('User dismissed the install prompt');
      }
    });
  });

  window.addEventListener('appinstalled', (evt) => {
      pwaInstallBtn.style.display = 'none'
      window.deferredPrompt = null
    // Log install to analytics
    // console.log('INSTALL: Success');
  });