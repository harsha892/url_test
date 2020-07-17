// $('.loading-container').delay(1000).fadeOut();

// if (window.location.href.indexOf('.html') !== -1 && location.pathname != 'index.html') {
//   window.location.href = location.origin + window.location.href.split(location.origin)[1].split('.')[0];
// } else if (window.location.href == 'https://www.workruit.com/index') {
//   window.location.href = location.origin
// }

document.addEventListener('contextmenu', event => event.preventDefault());
// console.log = function () {};

$(window).ready(function () {
  var urlParams = new URLSearchParams(window.location.search);
  var type = urlParams.get('type'); // "lorem"
  var path = urlParams.get('path'); // "lorem"
  var deviceType = urlParams.get('deviceType'); // "lorem"
  var shareName = urlParams.get('shareName'); // "lorem"
  var shareParameter = window.location.href.split(location.origin + "/")[1];
  // console.log({
  //   type,
  //   path
  // });
  if (type && path) {
    $('.mainView').remove();
    $('.resume-pdf-view').removeClass('d-none');
    let isMobile = window.matchMedia("only screen and (max-width: 780px)").matches;
    // debugger;
    if (!isMobile) {
      // console.log(path);
      fetch(window.location.search.split('?type=url&path=')[1]).then(res => res.blob()).then(blob => {
        var reader = new FileReader();
        reader.readAsDataURL(blob);
        reader.onloadend = function () {
          document.getElementById("pdfViewer").src = window.location.search.split('?type=url&path=')[1];
          $('#pdfViewer').removeClass('d-none');
          $('.loading-container').delay(3000).fadeOut();
        }
      });
    } else {
      setTimeout(function () {
        previewUrl = window.location.search.split('?type=url&path=')[1];
        renderPDF(previewUrl, document.getElementById('pdfPreview'));
        $('#pdfPreview').removeClass('d-none');
        $('.loading-container').delay(3000).fadeOut();
      }, 2000);
    }
  } else {
    if (!shareParameter) {
      $('.loading-container').delay(1000).fadeOut();
    } else if (shareName && deviceType) {
      $('.loading-container,.mainView').remove();
      $('.processor-loading-container').removeClass('d-none');
    }
  }
  var origin = window.origin;
  // console.log(shareParameter);
  if (shareParameter && (shareParameter.indexOf('#') !== -1 && shareParameter.length > 4)) {
    $('.loading-container').remove();
    // debugger;
    document.title = 'Workruit - Resume';
    $('.mainView').remove();
    $('.resume-pdf-view').removeClass('d-none');
    var googleDocsUrl = "https://docs.google.com/viewer?url=";
    // var baseUrl = "https://devapi.workruit.com/api/user/getShareFile?name=" + shareParameter.slice(1)
    // debugger;
    if (window.location.origin == 'https://dev.workruit.com') {
      var baseApiUrl = "https://devapi.workruit.com/api/";
      var baseWebsite = "https://devresume.workruit.com";
    } else if (window.location.origin == 'https://stage.workruit.com') {
      var baseApiUrl = "https://stageapi.workruit.com/api/";
      var baseWebsite = "https://stageresume.workruit.com";

    } else if (window.location.origin == "https://www.workruit.com" || window.location.origin == "https://workruit.com") {
      var baseApiUrl = "https://apiv2.workruit.com/api/";
      var baseWebsite = "https://resume.workruit.com";

    } else {
      var baseApiUrl = "https://devapi.workruit.com/api/";
      var baseWebsite = "https://devresume.workruit.com";

    }
    $('.wir-resume').attr("href", baseWebsite)
    // console.log(baseWebsite);

    var baseUrl = baseApiUrl + "user/getShareFile?name=" + shareParameter.slice(1)
    shareParameter ? true : window.location = location.origin + '/404.html'
    // console.log(shareParameter ? true : false);
    $.get(baseUrl, function (data) {
      // debugger;

      if (data.status === "failed") {
        if (data.msg.title == "Page not found" || data.msg.title == 'Alert Message') {
          $('#resume-un-available-error-view').load(location.origin + '/includes/na-pdf-error.html');
          setTimeout(function () {
            $('.create-resume-text .title').text(data.msg.title);
            $('.create-resume-text .description').text(data.msg.description);
            $('.back_button').removeClass('d-none');
            $('#resume-un-available-error-view').removeClass('d-none');
            $('.loading-container').delay(1000).fadeOut();
          }, 1000)
        } else {
          $('#resume-error-view p').text(data.msg.description);
          $('#resume-error-view').removeClass('d-none');
        }
      } else {
        // var pdfViewUrl = googleDocsUrl + data.data + "&embedded=true";
        // console.log(pdfViewUrl);
        // $('#pdfPreview').removeClass('d-none');
        // var previewUrl = data.data;
        // console.log("previewUrl", previewUrl);
        // setTimeout(function () {
        //   renderPDF(previewUrl, document.getElementById('pdfPreview'));
        // }, 2000);
        let isMobile = window.matchMedia("only screen and (max-width: 780px)").matches;
        // debugger;
        if (!isMobile) {
          $('.loading-container').fadeIn();
          fetch(data.data).then(res => res.blob()).then(blob => {
            // debugger;
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function () {
              // console.log("::: reader.result :::",reader.result)
              document.getElementById("pdfViewer").src = data.data;
              $('#pdfViewer').removeClass('d-none');
              $('.loading-container').delay(2000).fadeOut();
              // console.log(base64data);
            }
          });
          //Conditional script here
          // $('#pdfViewer').addClass('d-none');
          // alert('Conditional script here');
        } else {
          // debugger;
          // $('#pdfViewer').addClass('d-none');
          // alert('Conditional script here');
          $('.loading-container').remove();
          $('.processor-loading-container').removeClass('d-none');
          setTimeout(function () {
            previewUrl = data.data;
            renderPDF(previewUrl, document.getElementById('pdfPreview'));
            $('#pdfPreview').removeClass('d-none');
          }, 2000);
        }
      }
    });
    // window.location.href = origin == "http://127.0.0.1:5501" ? origin +
    //     '/workruit-site/resume/resume-preview.html?@' +
    //     shareParameter : origin + '/resume-preview.html?@' +
    //     shareParameter
  } else if (!type && !path) {
    $('.resume-pdf-view').remove();
    $('.loading-container').delay(1000).fadeOut();
  }
});
// Mobile Navigation
function togNav() {
  var nav = document.getElementById("sidenav");
  if (nav.style.width == '100vw') {
    nav.style.width = '0';
    nav.style.opacity = 0;
    $("#header").removeClass("-opened");
  } else {
    nav.style.width = "100vw";
    nav.style.opacity = 1;
    $("#header").addClass("-opened");
  }
}


//Show Menu on Scroll
var topBlock = 50;
$(window).scroll(function () {
  if (($(window).scrollTop() > topBlock)) {
    $("#header").addClass("on-scroll");
  } else {
    $("#header").removeClass("on-scroll");
  }
});

$(".select_plan_id").click(function () {
  alert("hi")
})


setTimeout(function () {
  if (location.origin === "https://dev.workruit.com") {
    location_live = "https://devresume.workruit.com"
  } else if (location.origin === "https://stage.workruit.com") {
    location_live = "https://stageresume.workruit.com"
  } else {
    location_live = "https://resume.workruit.com"
  }
  $('.resume_path').attr('href', location_live)
  $('.pricing_resume').attr("href", location_live + "/#/signup")
  // console.log("location_live::::::", location_live)
}, 1000)


setTimeout(function () {
  if (location.origin === "https://dev.workruit.com") {
    location_live = "https://devresume.workruit.com"
  } else if (location.origin === "https://stage.workruit.com") {
    location_live = "https://stageresume.workruit.com"
  } else {
    location_live = "https://resume.workruit.com"
  }
  $('.business_resume_path').attr('href', location_live + "/business.html")
  // $('.pricing_resume').attr("href", location_live + "/#/signup")
  // console.log("location_live::::::", location_live)
}, 1000)


/** On hover change job function data */

$('.Side_hover .nav-link').hover(function () {
  $(this).addClass('active').siblings().removeClass('active')
  var tabId = $(this).attr('href');
  $('#v-hover-tabContent ' + tabId + '.tab-pane').addClass('show active').siblings().removeClass('show active');
})

/**Footer employer login link  */

setTimeout(function () {
  $('.emp_login').attr('href', location.origin === 'https://dev.workruit.com' ? 'https://devapp.workruit.com' : 'https://app.workruit.com')
}, 1000)

setTimeout(function () {
  $('.emp_singup').attr('href', location.origin === 'https://dev.workruit.com' ? 'https://devapp.workruit.com/#/signup' : 'https://app.workruit.com/#/signup')
}, 1000)




if ($(window).width() <= 768) {
  $('#Side_hover_desktop').addClass("d-none");
} else {
  $('#Side_hover_mobile').addClass("d-none");
}


if ($(window).width() > 600) {
  if (typeof InstallTrigger !== 'undefined') {
    $(".layout-hero__a").css("padding-bottom", "11em");
    $(".layout_structure").css("margin-top", "0");
  } else if (!!window.chrome) {
    $(".layout-hero__a").css("padding-bottom", "76em");
    $(".layout_structure").css("margin-top", "-68em");
  }

}
var userAgent = navigator.userAgent;

// var safariAgent  = navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1 ? true : true;
if (userAgent.match(/Safari/i) && userAgent.match(/Chrome/i) == null) {
  // console.log("userAgent match",userAgent.match(/Safari/i));
  // debugger;
  $('.layout-hero__a').css({
    "padding-top": "104em"
  });
  $('.safari_css_container').css({
    "margin-top": "-97em"
  });
  $('.layout_structure').css({
    "margin-top": "-68em"
  })
}


if ($(window).width() < 1024) {
  $(".control-side").addClass("d-none");
}


$(".social-phone").keypress(function (e) {
  if (e.key != '+' && e.key != ' ' && (isNaN(Number(e.key)) || e.key === null)) {
    e.preventDefault();
    return false;
  }

  return true;
});
$('body').on('paste', '.social-phone', function (event) {
  // console.log(!event.originalEvent.clipboardData.getData('Text').match(/^\d+$/));
  if (!event.originalEvent.clipboardData.getData('Text').match(/^\d+$/)) {
    $(this).text('')
    event.preventDefault();
  }
  if ($(this).text().length > 15) {
    $(this).text($(this).text().slice(0, 15));
  }
  // console.log($(this).text().length > 15);
});
