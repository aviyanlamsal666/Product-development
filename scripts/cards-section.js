let sectionHTML = "";

cards.map((card) => {
  sectionHTML += `
  <div class="cards-section-content">
              <figure class="tournament-logo"><img src="images/${card.logo}.png" alt="" style="${card.styles}"></figure>

              <div class="cards-btn">
                <button>Explore <i class='bx bx-right-arrow-alt' style="font-size: 24px; vertical-align: middle;"></i></button>
              </div>
            </div>
  `;
});

document.querySelector("#js-cards-section").innerHTML = sectionHTML;
