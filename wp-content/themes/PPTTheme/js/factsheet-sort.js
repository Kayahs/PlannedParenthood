$(document).ready(() => {
  console.log(red_vars.rest_url);
  let curPage = 2;
  $('.tag-list li').on('click', function() {
    $(this).toggleClass('selected');
    curPage = 1;
    clearPosts();
    getPosts();
  });
  $('.clear-filter').on('click', function() {
    $('.tag-list li').toggleClass('selected', false);
    curPage = 1;
    clearPosts();
    getPosts();
  });
  $('#orderSelector').on('change', function() {
    curPage = 1;
    clearPosts();
    getPosts();
  });
  $('.load-button').on('click', function() {
    getPosts();
  });

  function clearPosts() {
    $('.load-button').removeAttr("disabled");
    $('.right-container').html("");
  }

  function buildTagList(tagidarray) {
    let target = $('.tag-list li');
    let tagList = [];
    for (let i = 0; i < tagidarray.length; i++) {
      for (let j = 0; j < target.length; j++) {
        if (tagidarray[i] == target[j].attributes.tagid.value) {
          tagList.push(target[j].innerText);
        }
      }
    }
    return tagList;
  }
  function getPosts() {
    let tagList = "";
    let orderval = $('#orderSelector option:selected').val();
    let target = $('.tag-list li.selected');
    let orderby = "";
    let page = `&page=${curPage}`;
    switch(orderval) {
      case "a-z":
        orderby = "&orderby=title&order=asc";
        break;
      case "z-a":
        orderby = "&orderby=title&order=desc";
        break;
      case "earliest":
        orderby = "&orderby=date&order=asc";
        break;
      case "lastest":
        orderby = "&orderby=date&order=desc";
        break;
    }
    if (target.length) {
      tagList = "&facttag=";
      for (let i = 0; i < target.length - 1; i++) {
        tagList+= `${target[i].attributes.tagid.value},`;
      }
      tagList+= target[target.length-1].attributes.tagid.value;
    }
    $.ajax({
      method: "GET",
      url: `${red_vars.rest_url}wp/v2/fact?per_page=9${page}${orderby}${tagList}`
    }).done((result, textStatus, jqXHR) => {
      if (result.length) {
        console.log(result);
        console.log(result[0].link);
        let maxPages = jqXHR.getResponseHeader('X-WP-TotalPages');
        curPage++;
        if (curPage > maxPages) {
          $('.load-button').attr("disabled", "disabled");
        }
        let cardtags = "";
        for (let i = 0; i < result.length; i++) {
          cardtags = buildTagList(result[i].facttag).join(', ');
          $('.right-container').html($('.right-container').html() + 
            `<div class="card-container">
            <a href="${result[i].link}">
            <div class="card-title">
            ${result[i].title.rendered}
            </div>
            </a>  
            <div class="card-excerpt">
            ${result[i]._ppt_card_excerpt}
            </div>
            <div class="card-tags">
            ${cardtags}
            </div>
            </div>`);
        }
      }
    });
  }
});