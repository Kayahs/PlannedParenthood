$(document).ready(() => {
  let sectionArea = $('.section-list');
  if (sectionArea.length) {
    let headers = $('.content-container h2');
    for (let i = 0; i < headers.length; i++) {
      sectionArea.html(sectionArea.html() + '<li><strong>' + headers[i].innerHTML + '</strong></li>');
    }
  }
});