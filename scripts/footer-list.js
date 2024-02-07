let footerHTML = "";

games.forEach((game) => {
  footerHTML += `<div class="${game.class}">
  <h4>${game.header}</h4>
  <ul>
    <li><a href="#">${game.footerList.li1}</a></li>
    <li><a href="#">${game.footerList.li2}</a></li>
    <li><a href="#">${game.footerList.li3}</a></li>
    <li><a href="#">${game.footerList.li4}</a></li>
  </ul>
</div>`;
});

document.querySelector("#js-footer-list").innerHTML = footerHTML;
