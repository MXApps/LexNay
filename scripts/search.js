//SEARCH SITE
const f = document.getElementById('search-form');
const q = document.getElementById('search-btn');
const google = 'https://www.google.com/search?q=site%3A+';
const site = 'lexnay.000webhostapp.com';

function submitted(event) {
  event.preventDefault();
  const url = google + site + '+' + q.value;
  const win = window.open(url, '_blank');
  win.focus();
}

f.addEventListener('submit', submitted);