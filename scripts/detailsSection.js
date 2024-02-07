let detailsHTML = "";

gameDetail.forEach((detail) => {
  detailsHTML += `<div class="${detail.wide}" style="background-image: url('${detail.image}');" data-aos="${detail.anim}">
  <h2>${detail.name}</h2>

  <a href="#">Discover</a>
</div>
<div class="${detail.square}"  style="background-image: url('${detail.image2}');" data-aos="${detail.anim}">
  <h2>${detail.name2}</h2>

  <a href="#">Discover</a>  
</div>`;
});

document.querySelector(".js-game-details").innerHTML = detailsHTML;
