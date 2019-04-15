$(document).ready(() => {
  console.log(red_vars.rest_url);
  let jobCurPage = 2;
  $('.job-tag-list li').on('click', function() {
    $(this).toggleClass('selected');
    jobCurPage = 1;
    clearJobs();
    getJobs();
  });
  $('.job-clear-filter').on('click', function() {
    $('.job-tag-list li').toggleClass('selected', false);
    jobCurPage = 1;
    clearJobs();
    getJobs();
  });
  $('#orderJobSelector').on('change', function() {
    jobCurPage = 1;
    clearJobs();
    getJobs();
  });
  $('.job-load-button').on('click', function() {
    getJobs();
  });

  function clearJobs() {
    $('.job-load-button').removeAttr("disabled");
    $('.job-right-container-section').html("");
  }

  function buildJobTagList(tagidarray) {
    let target = $('.job-tag-list li');
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
  function getJobs() {
    let tagList = "";
    let orderval = $('#orderJobSelector option:selected').val();
    let target = $('.job-tag-list li.selected');
    let orderby = "";
    let page = `&page=${jobCurPage}`;
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
    console.log(target.length);
    if (target.length) {
      tagList = "&jobtag=";
      for (let i = 0; i < target.length; i++) {
        tagList+= `${target[i].attributes.tagid.value},`;
      }
      tagList+= target[target.length-1].attributes.tagid.value;
    }
    $.ajax({
      method: "GET",
      url: `${red_vars.rest_url}wp/v2/job?per_page=9${page}${orderby}${tagList}`
    }).done((result, textStatus, jqXHR) => {
      if (result.length) {
        console.log(result);
        console.log(result[0].link);
        let maxPages = jqXHR.getResponseHeader('X-WP-TotalPages');
        jobCurPage++;
        if (jobCurPage > maxPages) {
          $('.job-load-button').attr("disabled", "disabled");
        }
        let cardtags = "";
        for (let i = 0; i < result.length; i++) {
          cardtags = buildJobTagList(result[i].jobtag).join(', ');
          // jobcat 29 closed, jobcat 30 open
          if (result[i].jobcat==30) {
          $('.job-open-section').html($('.job-open-section').html() + 
            `<div class="card-container">
            <a href="${result[i].link}">
            <div class="card-title">
            ${result[i].title.rendered}
            </div>
            </a>  
            <div class="card-excerpt">
            ${result[i].excerpt.rendered}
            </div>
            <div class="card-tags">
            ${cardtags}
            </div>
            </div>`);
          }
          if (result[i].jobcat==29) {
          $('.job-closed-section').html($('.job-closed-section').html() + 
            `<div class="card-container">
            <a href="${result[i].link}">
            <div class="card-title">
            ${result[i].title.rendered}
            </div>
            </a>  
            <div class="card-excerpt">
            ${result[i].excerpt.rendered}
            </div>
            <div class="card-tags">
            ${cardtags}
            </div>
            </div>`);
          }
        }
      }
    });
  }
});