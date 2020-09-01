const darkBtn = document.getElementById('dark');
const lightBtn = document.getElementById('light');
const solarBtn = document.getElementById('solar');
const body = document.body;

// Apply cached theme on reload

const theme = localStorage.getItem('theme');
const isSolar = localStorage.getItem('isSolar')

if (theme) {
    body.classList.add(theme);
    isSolar && body.classList.add('solar');
}

// Btn Event Handlers

darkBtn.onclick = () => {
    body.classList.replace('light', 'dark');
    localStorage.setItem('theme', 'dark');
};

lightBtn.onclick = () => {
    body.classList.replace('dark', 'light');
    localStorage.setItem('theme', 'light');

};

solarBtn.onclick = () => {
    if (body.classList.contains('solar')) {
        body.classList.remove('solar');
        solarBtn.style.cssText = `
        `
        solarBtn.innerText = 'Solarize';
        localStorage.removeItem('isSolar');
    } else {
        solarBtn.style.cssText = `
        `
        body.classList.add('solar');
        localStorage.setItem('isSolar', 'true');
    }
};