
// Share the petition page

const URL = 'http://127.0.0.1:8000/petitions/create/1';
const fbPetition = document.getElementById('fb_petition');
fbPetition.addEventListener('click', () => {
    const navUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + URL;
    window.open(navUrl , '_blank');
});

const tweetPetition = document.getElementById('twitter_petition');
tweetPetition.addEventListener('click', () => {
    const navUrl =
    'https://twitter.com/intent/tweet?text=' +
    'Va visiter ce lien '+ URL +' pour signer la pétition.';
    window.open(navUrl, '_blank');
});


const telegramPetition = document.getElementById('telegram_petition');
telegramPetition.addEventListener('click', () => {
    const navUrl = 'https://t.me/share/url?url={'+ URL + '}&text={Signe la pétition}';
    window.open(navUrl, '_blank');
});

const whatsappPetition = document.getElementById('whatsapp_petition');
whatsappPetition.addEventListener('click', () => {
    const navUrl = 'whatsapp://send?text=Va signer la pétition, plus on sera mieux ça sera lolilol'+ URL;
    window.open(navUrl, '_blank');
});
