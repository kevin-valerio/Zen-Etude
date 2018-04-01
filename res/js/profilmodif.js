$(document).on("click", "#mailmodal", function(e) {
    var modal = bootbox.dialog({
        message: $(".form-content").html(),
        title: "Your awesome modal",
        buttons: [
            {
                label: "Save",
                className: "btn btn-primary pull-left",
                callback: function() {

                    alert($('form #email').val());

                    return false;
                }
            },
            {
                label: "Close",
                className: "btn btn-default pull-left",
                callback: function() {
                    console.log("just do something on close");
                }
            }
        ],
        show: false,
        onEscape: function() {
            modal.modal("hide");
        }
    });

    modal.modal("show");
});