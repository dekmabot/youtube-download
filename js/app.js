function DownloadLink(container) {

    this.elementContainer = container.parents('form');
    this.elementButtonDownload = container;
    this.elementInputUrl = this.elementContainer.find('input[name=url]');
    this.elementAlert = this.elementContainer.find('.js__alert');
    this.elementLoading = this.elementContainer.find('.js__loading');
    this.elementReport = this.elementContainer.find('.js__report');

    this.urlApi = '/api.php';
    this.id = null;
    this.timer = null;

    this.elementButtonDownload.click({obj: this}, function (event) {
        let obj = event.data.obj;
        let url = obj.elementInputUrl.val();

        obj.hideAlert();
        obj.hideReport();

        obj.showLoading();

        $.post(obj.urlApi, {url: url}, function (data) {
            if ('failed' === data.result) {
                obj.showAlert(data.message);
                return false;
            } else if ('ok' === data.result) {
                obj.id = data.id;
                obj.startWaiting();
            }
        });
    });

    this.showAlert = function (text) {
        this.elementAlert.text(text);
        this.elementAlert.removeClass('d-none').addClass('d-block');
    };
    this.hideAlert = function () {
        this.elementAlert.removeClass('d-block').addClass('d-none');
    };

    this.showLoading = function () {
        this.elementButtonDownload.attr('disabled', 'disabled');
        this.elementLoading.removeClass('d-none').addClass('d-inline');
    };
    this.hideLoading = function () {
        this.elementButtonDownload.removeAttr('disabled');
        this.elementLoading.removeClass('d-inline').addClass('d-none');
    };

    this.showReport = function () {
        this.elementReport.removeClass('d-none').addClass('d-block');
    };
    this.hideReport = function () {
        this.elementReport.removeClass('d-block').addClass('d-none');
    };

    this.startWaiting = function () {
        this.timer = setInterval('btn.check()', 1000);
    };
    this.stopWaiting = function () {
        clearInterval(this.timer);
    };

    this.check = function () {
        console.log('check');
        $.get({
            url: this.urlApi,
            data: {'checkId': this.id},
            datatype: 'json',
            obj: this,
            success: function (data) {
                let obj = this.obj;
                if ('waiting' === data.result) {
                    return;
                }

                obj.stopWaiting();
                obj.hideLoading();

                obj.showLink(data.url);
            }
        });
    };

    this.showLink = function (url) {
        this.elementReport.find('a').attr('href', url);
        this.showReport();
    }
}

let btn;

$(function () {

    $('.js__download').each(function () {
        btn = new DownloadLink($(this));
    });

});