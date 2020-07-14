$(window).ready(function () {
    var urlParams = new URLSearchParams(window.location.search);
    var shareName = urlParams.get('shareName'); // "lorem"
    var shareParameter = window.location.href.split(location.origin + "/")[1];
    if (window.location.origin == 'https://dev.workruit.com') {
        var baseApiUrl = "https://devapi.workruit.com/api/";
    } else if (window.location.origin == 'https://stage.workruit.com') {
        var baseApiUrl = "https://stageapi.workruit.com/api/";

    } else if (window.location.origin == "https://www.workruit.com" || window.location.origin == "https://workruit.com") {
        var baseApiUrl = "https://apiv2.workruit.com/api/";

    } else {
        var baseApiUrl = "https://devapi.workruit.com/api/";
    }

    var baseUrl = baseApiUrl + "user/getShareFile?name=" + shareName;
    shareParameter ? true : window.location = location.origin + '/404.html';
    $.get(baseUrl, function (data) {
        console.log("data",data)
        debugger;
        if (data.status === "failed") {
            if (data.msg.title == "Page not found" || data.msg.title == 'Alert Message') {
                $('#resume-un-available-error-view').load(location.origin + '/includes/na-pdf-error.html');
                setTimeout(function () {
                    $('.create-resume-text .title').text(data.msg.title);
                    $('.create-resume-text .description').text(data.msg.description);
                    $('.back_button').removeClass('d-none');
                    $('#resume-un-available-error-view').removeClass('d-none');
                    $('.processor-loading-container').css('display', 'none');
                }, 1000);
            } else {
                $('#resume-error-view p').text(data.msg.description);
                $('#resume-error-view').removeClass('d-none');
            }
        } else {
            setTimeout(function () {
                $('.resume-pdf-view').remove();
                previewUrl = data.data;
                renderPDF(previewUrl, document.getElementById('pdfPreview'));
                $('#pdfPreview').removeClass('d-none');
                $('#pdfPreview').removeClass('d-none');
            }, 2000);
        }
    });
});