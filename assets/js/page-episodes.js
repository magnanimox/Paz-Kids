// Universal Shortcuts
const c = (el) => document.querySelector(el);
const cs = (el) => document.querySelectorAll(el);

// Shortcuts
window.episodesAb = [];

// Fetch: Aventura Bíblica
const getEpisodesAb = async () => {
    return await fetch("assets/json/abEpisodes.json").then((data) =>
        data.json()
    );
};

getEpisodesAb().then((episodesAb) => {
    window.episodesAb = episodesAb;

    const episodesToShow = getEpisodesToPage(episodesAb);

    renderEpisodeAb(episodesToShow);
});

// Render: Aventura Bíblica
function renderEpisodeAb(data, type = ".aventura-biblica") {
    // check
    if (data == null) return;

    c(type + " #number-ep").innerHTML = data.id;
    c(type + " .episode-title h4").innerHTML = data.name;
    c(type + " .thumbnail img").src = data.img;
    c(type + " .bt-download.item-1 a").href = data.download;
    c(type + " .bt-material.item-2 a").href = data.materiais;
}

function getEpisodesToPage(episodesAb) {
    return episodesAb.filter((episodeAb) => {
        const episodeMonth = episodeAb.showAt;
        let showThisEpisode = false;

        // Check episode's month
        if (episodeMonth === month) {
            showThisEpisode = true;
        }
        return showThisEpisode;
    })[0];
}
