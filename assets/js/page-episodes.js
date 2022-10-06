// Universal Shortcuts
const c = (el) => document.querySelector(el);
const cs = (el) => document.querySelectorAll(el);

// Episodes
window.episodesAb = [];

// Fetch: Aventura Bíblica
const getEpisodesAb = async () => {
    return await fetch("assets/json/abEpisodes.json").then((data) =>
        data.json()
    );
};

getEpisodesAb().then((episodesAb) => {
    window.episodesAb = episodesAb;
});

window.episodesAb.forEach((item, index) => {
    console.log(item);
});
