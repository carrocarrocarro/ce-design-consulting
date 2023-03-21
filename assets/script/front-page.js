const heroMessage = document.querySelector('#hero-message');

const urlTexts = [
    'www.your-dream.com',
    'www.your-business.com',
    'www.your-idea.com'
];

/* const urlText = 'www.yourdream.com';  *///the text the will be typed
const speed = '100'; // typespeed in ms
let i = 0;

function typeWriter() {

    if(i < urlTexts.length) {
        const urlText = urlTexts[i];

        if(heroMessage.innerHTML.length < urlText.length) {
            heroMessage.innerHTML += urlText.charAt(heroMessage.innerHTML.length);
        } else{
            i++;
            setTimeout(() => {
                heroMessage.innerHTML = "";
                setTimeout(typeWriter,0);
            },2000);
            return;
        }
        setTimeout(typeWriter,speed);
    } else {
        i = 0;
        setTimeout(() => {
            heroMessage.innerHTML = "";
            setTimeout(typeWriter,0);
        }, 2000);
    }
}

typeWriter();
