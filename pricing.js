// var localUserData = localStorage.getItem(encrypt('userData', atob(localStorage.getItem(btoa('sessionId_' + window.location.origin))))) ? JSON.parse(decrypt(localStorage.getItem(encrypt('userData', atob(localStorage.getItem(btoa('sessionId_' + window.location.origin))))), atob(localStorage.getItem(btoa('sessionId_' + window.location.origin))))) : false;
// var localPlansEncrypt = encrypt('plans', authToken);
// console.log('localPlansEncrypt', localPlansEncrypt)
// var localPlansDecrypt = decrypt('plans', authToken);

// if (localUserData) {
//     $('#load-auth-header').load('app/includes/user-auth-header.html');
//     $(".auth-header").removeClass('d-none');
//     $(".header").addClass('d-none');
// }
$("body").on("click", ".dismiss-pricing-modal", function () {
    if (window.parent) {
        window.parent.postMessage({
            type: "CLOSE__MODAL"
        });
    }
});
// if (!localStorage.getItem(encrypt('plans', authToken))) {
//     getResumePlans();
// } else {
//     console.log('JSON.parse(atob(localStorage.getItem(localPlansDecrypt)))', atob(localStorage.getItem(encrypt('plans', authToken))));
//     PricingTemplate(JSON.parse(atob(localStorage.getItem(encrypt('plans', authToken)))));
// }
// var userPlansInfo = localUserData ? localUserData.planDetails : null;

function getResumePlans(id, className) {
    var plansEndPoint;
    if (getUserId()) {
        plansEndPoint = baseResumeApiUrl + 'user/' + getUserId() + '/' + resumeServiceUrls.get.getResumePlans;
    } else {
        plansEndPoint = baseResumeApiUrl + resumeServiceUrls.get.getResumePlans;
    }
    doGetWithOutAuth(plansEndPoint).then(presponse => {
        // localStorage.getItem(localPlansEncrypt) && localStorage.removeItem(localPlansEncrypt);
        // localStorage.setItem(localPlansEncrypt, btoa(JSON.stringify(response)));
        console.log({presponse});
        // if (getUserId()) {
        //     doGetWithEncrypt(apiUrl + "/user/" + getUserId() + "/getResumeAccountInfo").then(response => {
        //         localUserData = response.data;
        //         PricingTemplate(presponse, id, className);
        //     });
        // } else {
        //     PricingTemplate(presponse, id, className);
        // }
        // if (id && className) {
        //     $('' + id + ' ' + className + '').empty();
        // }
        // localUserData = presponse;
        PricingTemplate(presponse, id, className);
    });
}
// var localUserData;
var shareParameter = window.location.href.split(location.origin + "/")[1];
if (window.location.pathname == '/pricing.html' || window.location.pathname == '/' || window.location.pathname == '/index.html') {
    // // console.log("!shareParameter", !shareParameter);
    if (!shareParameter || shareParameter === "pricing.html" || shareParameter === "index.html") {
        // console.log("!shareParameter", !shareParameter);
        getResumePlans();
    }
}
$("body").on("click", ".price-action-modal", function (e) {
    console.log("clickced ds");
    $('body .modal-backdrop.fade.in').css("opacity", '0');
    $('#price-action-modal').modal('show');
    $('#pricing-modal').css('z-index', '2999');
});
$("body").on("click", ".price-action-verify-modal", function (e) {
    console.log("clickced ds");
    $('body .modal-backdrop.fade.in').css("opacity", '0');
    $('#price-action-verify-modal').modal('show');
    $('#pricing-modal,body .modal-backdrop.fade.show').css('z-index', '2999');
});
$('.close-free-plan-modal').click(function () {
    $('body .modal-backdrop.fade.in').css('opacity', '1');
    $('#price-action-modal').modal('hide');
    $('#price-action-verify-modal').modal('hide');
    // $('body .modal-backdrop.fade.in').remove();
    // $("body").append('<div class="modal-backdrop fade in"></div>');
    $('#pricing-modal').css({
        'z-index': '4000',
        "opacity": 1,
        "overflow-x": "hidden",
        "overflow-y": "auto"
    });

});

function PricingTemplate(item, id, className) {
    item.map((item, index) => {
        console.log({
            item
        });
        var pId = btoa(JSON.stringify(item));
        // item.price = item.price == 0 ? 'Free' : '&#8377; ' + item.price;
        var redirectAction = 'app/order/cart.html?' + pId;
        var event_key = '1';
        switch (item.planId) {
            case 1:
                event_key = window.location.pathname == '/' || window.location.pathname == '/index.html' || window.location.pathname == "/pricing.html" ? 'wirw_plana_w' : 'wirw_plana';
                break;
            case 2:
                event_key = window.location.pathname == '/' || window.location.pathname == '/index.html' || window.location.pathname == "/pricing.html" ? 'wirw_planb_w' : 'wirw_planb';
                break;
            case 4:
                event_key = window.location.pathname == '/' || window.location.pathname == '/index.html' || window.location.pathname == "/pricing.html" ? 'wirw_planc_w' : 'wirw_planc';
                break;
            default:
                break;
        }
        // console.log(localUserData);
        item.redirectUrl = item.planDetails ?
            redirectAction : '#signup';
        var urlStatus = window.location.pathname == '/' || window.location.pathname == '/index.html' ? item.planDetails ? true : false : true;
        var pricing_template_view = `<div class="has-3 p1  pricing">
            <div class="highlight plan">
                <div class="detail plan-1">
                    <h4><span class="amount"> ${item.timePeriod} </span></h4>
                    <h3>
                        <span class="title" style="font-display: normal">
                            <span class="rupee_symbole">₹</span>${item.price}</span>
                    </h3>
                    ${
                        item.planId === 1 ? `<div class="plan_dates">
                        <span class="" data-content="planTitle">Free Plan is valid for 7 days.</span>
                    </div>`:`<div class="plan_dates"><span class="" data-content="planTitle">
                    </span>
                </div>`
                    }
                    
                </div>

                <div class="features">
                <ul>
                <li class="item-row">
                    <span class="item-mobile">
                        <img src="${location.origin + '/assets/images/app/icons/like-green.svg'}" alt="like-green" style="margin-right: 10px;"> <span>${item.description.template} </span>
                    </span>
                </li>
                <li class="item-row">
                    <span class="item-mobile">
                        <img src="${location.origin + '/assets/images/app/icons/like-green.svg'}" alt="like-green" style="margin-right: 10px;"> <span data-content="description.styles">${item.description.styles}</span>
                    </span>
                </li>
                <li class="item-row">
                    <span class="item-mobile">
                    <img src="${location.origin + '/assets/images/app/icons/like-green.svg'}" alt="like-green" style="margin-right: 10px;"> <span data-content="description.download">${item.description.download}</span>
                    </span>
                </li>
                <li class="item-row">
                    <span class="item-mobile">
                        <img src="${location.origin + '/assets/images/app/icons/like-green.svg'}" alt="like-green" style="margin-right: 10px;"> <span data-content="description.sharing">${item.description.sharing}</span>
                    </span>
                </li>
                <li class="item-row">
                    <span class="item-mobile">
                    ${ item.description.branding ? 
                    `<img src="${location.origin + '/assets/images/app/icons/like-green.svg'}" alt="like-green" style="margin-right: 10px;"> <span data-content="description.branding">${item.description.branding}</span>` :
                    `<img src="" alt="" style="margin-right: 10px;"> <span data-content="description.branding"></span>`
                    }
                        
                    </span>
                </li>
            </ul>
                </div>
                <div class="form-group mt-4">
                ${ item.planDetails ?
                    (item.planDetails && item.planDetails.emailVerified) ? 
                    item.planId==1 && (item.planDetails && item.planDetails.planId) ? 
                    `<button class="btn btn-default border btn-lg btn-block button_w select_plan cursor_no_drop button_large" disabled>BUILD RESUME</button>` 
                    :
                    item.planId == 1?
                    `<button onclick="loadPage('${item.redirectUrl}',${urlStatus})" class="btn btn-primary btn-lg button_large btn-block button_w select_plan freePlan" data-event="${event_key}">BUILD RESUME</button>`:
                    `<button onclick="loadPage('${item.redirectUrl}',${urlStatus})" target="_parent" class="btn btn-primary btn-lg button_large btn-block button_w select_plan" data-event="${event_key}">BUILD RESUME</button>`:
                    item.planId == 1? 
                    `<button class="btn btn-primary btn-lg button_large btn-block button_w select_plan price-action-verify-modal freePlan" data-event="${event_key}">BUILD RESUME</button>`: 
                    `<button class="btn btn-primary btn-lg button_large btn-block button_w select_plan price-action-verify-modal" data-event="${event_key}">BUILD RESUME</button>`:
                    item.planId == 1? 
                    `<button onclick="loadPage('${item.redirectUrl}',${urlStatus})" class="btn btn-primary btn-lg button_large button_w btn-block select_plan freePlan" data-event="${event_key}">BUILD RESUME</button>`:
                     `<button onclick="loadPage('${item.redirectUrl}',${urlStatus})" class="btn btn-primary btn-lg button_large btn-block button_w select_plan" data-event="${event_key}">BUILD RESUME</button>`}
                </div>
            </div>
        </div>`
        $('.pricing_template').append(pricing_template_view);
    });

    if (id && className) {
        $(id).show();
    }
}

function freePlanAction() {
    if (localUserData && localUserData.planDetails.planId === 1 && localUserData.planDetails.msg.description.indexOf(
            "Your free plan is expired.")) {
        $('#price-action-modal .modal-title').text("Oops, you're already in free plan.");
        $('#price-action-modal .line-1').text('Upgrade with a paid plan')
        $('#price-action-modal .line-2').text('to access all the features.');
    } else {
        $('#price-action-modal .modal-title').text("Oops, You can't choose.");
        $('#price-action-modal .line-1').text('upgrade with a paid plan');
        $('#price-action-modal .line-2').text('today to access all features.');
    }
    $('#price-action-modal').modal('show');
    if ($('.modal-backdrop.fade.in').length > 1) {
        $('body .modal-backdrop.fade.in:eq(1)').css('opacity', '0');
    }
}
$(document).click(function (e) {
    setTimeout(function () {
        if ($('#pricing-modal').hasClass('in')) {
            if (!$('body').hasClass('modal-open')) {
                $("#price-action-modal").hasClass('in');
                if (!$("#price-action-modal").hasClass('in')) {
                    $("body").addClass('modal-open')
                }
                console.log(
                    $("#price-action-modal").hasClass('in')
                );
            }
        }
    }, 500);
});