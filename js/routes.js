
var routes = [
  {
    path: '/',
    url: './index.php',
  },
  // Default route (404 page). MUST BE THE LAST
  {
    path: '(.*)',
    url: './pages/404.html',
  },
];
