function renderPDF(url, canvasContainer, options) {
    var options = options || {
        scale: 5
    };

    function renderPage(page) {
        // console.log({
        //     options
        // });
        var viewport = page.getViewport(options.scale);
        var canvas = document.createElement('canvas');
        var ctx = canvas.getContext('2d');
        var renderContext = {
            canvasContext: ctx,
            viewport: viewport
        };
        // console.log(viewport.width + 'x'+viewport.height);
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        canvasContainer.appendChild(canvas);

        page.render(renderContext).then(function () {
            console.log("FINISHED RENDERING!");
          $('.processor-loading-container').css('display', 'none');
        }, function () {
            console.log("ERROR");
        });;
        $('.loading-container').delay(3000).fadeOut();
    }

    function renderPages(pdfDoc) {
        for (var num = 1; num <= pdfDoc.numPages; num++)
            pdfDoc.getPage(num).then(renderPage);
    }

    PDFJS.disableWorker = true;
    PDFJS.getDocument(url).then(renderPages);

}