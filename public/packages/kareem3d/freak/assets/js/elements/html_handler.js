function HtmlSubmitter( modal )
{
    this.modal = modal;

    this.modal.dialog({
        autoOpen: false,
        modal: true
    });

    this.stepNo = 1;
}

HtmlSubmitter.prototype.startSubmitting = function()
{
    this.modal.dialog( 'open' );
}

HtmlSubmitter.prototype.addStep = function( form )
{
    var body = 'Submitting step ' + this.stepNo;

    this.modal.append('<p class="step">' + body + '</p>');

    this.stepNo ++;
}

HtmlSubmitter.prototype.stopSubmitting = function()
{
    this.stepNo = 1;

    this.modal.find('.step').remove();

    this.modal.dialog( 'close' );
}

HtmlSubmitter.prototype.showErrors = function( errors )
{
    var errorsString = errors.join('<br />');

    $("#main-content").prepend('<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a>' + errorsString +'</div>');

    window.scrollTo(0, 0);
}