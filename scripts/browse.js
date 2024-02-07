let browseHTML = "";

olympicGames.forEach((olympicGame) => {
  browseHTML += `<a href="${olympicGame.a}" data-aos="${olympicGame.data_aos}"><div class="game-card" >
  <figure><img src="${olympicGame.image}" alt=""></figure>
  <p>${olympicGame.name}</p>
</div></a>`;
});

document.querySelector(".js-browse-games").innerHTML = browseHTML;
