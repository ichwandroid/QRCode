<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QRCode Scanner</title>
  <link rel="manifest" href="manifest.json">
</head>
<body>
  
</body>
<script>
  window.addEventListener('load', () => {
    registerSW();
  });
  
  // Register the Service Worker
  async function registerSW() {
    if ('serviceWorker' in navigator) {
      try {
        await navigator
        .serviceWorker
        .register('serviceworker.js');
      }
      catch (e) {
        console.log('SW registration failed');
      }
    }
  }
</script>
</html>