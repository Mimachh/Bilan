// Partage sur les réseaux sociaux


export function linkFacebook(e) {
    const navUrl = 'https://www.facebook.com/sharer/sharer.php?u='+e;
    window.open(navUrl , '_blank');
};

// export function linkFacebook2(e) {
//     const navUrl = 'https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/';
//     window.open(navUrl , '_blank');
// }

export function linkTwitter(e) {
    const navUrl =
    'https://twitter.com/intent/tweet?text=' + e
    window.open(navUrl, '_blank');
}

// export function linkTwitter2(e) {
//     const navUrl =
//     'https://twitter.com/intent/tweet?text=' +
//     'Va visiter ce lien http://127.0.0.1:8000/, actuellement il y a '+e+' migrants en France en 2023';
//     window.open(navUrl, '_blank');
// }

export function linkTelegram(e) {
    const navUrl = 'https://t.me/share/url?url=http://127.0.0.1:8000/&text='+e;
    window.open(navUrl, '_blank');
}

export function linkWhatsapp(e) {
    const navUrl = 'whatsapp://send?text='+e;
    window.open(navUrl, '_blank');
}
