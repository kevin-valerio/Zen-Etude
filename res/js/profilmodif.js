$(document).ready(function(){
    $('select').formSelect();
});

$(document).on("click", "#mailmodal", function changeMail(e) {
    let modal = bootbox.dialog({
        message: $(".form-content-mail").html(),
        title: "Changer de mail",
        buttons: [
            {
                label: "Enregistrer",
                className: "btn btn-primary pull-left",
                callback: function() {
                    alert("Un mail de confirmation a été envoyé à l'adresse:\n" +
                        $('.bootbox-body .email').val());
                    let data = {"email": $('.bootbox-body .email').val()};
                    $.ajax({
                        url: 'res/phpAjax/emailUpdate.php',
                        type: 'POST',
                        async: false,
                        data: data
                    });
                    document.location.assign('index.php');
                    return true;
                }
            },
            {
                label: "Annuler",
                className: "btn btn-default pull-left",
            }
        ],
        show: false,
        onEscape: function() {
            modal.modal("hide");
        }
    });
    modal.modal("show");
});

$(document).on("click", "#paysmodal", function changePays(e) {
    let modal = bootbox.dialog({
        message: $(".form-content-pays").html(),
        title: "Changer de pays",
        buttons: [
            {
                label: "Enregistrer",
                className: "btn btn-primary pull-left",
                callback: function() {
                    alert("Votre pays a été changé en:\n" +
                        $('.bootbox-body .pays').val());
                    let data = {"pays": $('.bootbox-body .pays').val()};
                    $.ajax({
                        url: 'res/phpAjax/paysUpdate.php',
                        type: 'POST',
                        async: false,
                        data: data
                    });
                    document.location.assign('index.php');
                    return true;
                }
            },
            {
                label: "Annuler",
                className: "btn btn-default pull-left",
            }
        ],
        show: false,
        onEscape: function() {
            modal.modal("hide");
        }
    });
    modal.modal("show");
});

$(document).on("click", "#villemodal", function changeMail(e) {
    let modal = bootbox.dialog({
        message: $(".form-content-ville").html(),
        title: "Changer de ville",
        buttons: [
            {
                label: "Enregistrer",
                className: "btn btn-primary pull-left",
                callback: function() {

                    alert("Votre ville a bien été changé en:\n" +
                        $('.bootbox-body .ville').val());
                    let data = {"ville": $('.bootbox-body .ville').val()};
                    $.ajax({
                        url: 'res/phpAjax/villeUpdate.php',
                        type: 'POST',
                        async: false,
                        data: data
                    });
                    document.location.assign('index.php');
                    return true;
                }
            },
            {
                label: "Annuler",
                className: "btn btn-default pull-left",
            }
        ],
        show: false,
        onEscape: function() {
            modal.modal("hide");
        }
    });
    modal.modal("show");
});

$(document).on("click", "#codepostalmodal", function changeMail(e) {
    let modal = bootbox.dialog({
        message: $(".form-content-codepostal").html(),
        title: "Changer de codepostal",
        buttons: [
            {
                label: "Enregistrer",
                className: "btn btn-primary pull-left",
                callback: function() {
                    alert("Votre code postal a été modiffié:");
                    let data = {"codepostal": $('.bootbox-body .codepostal').val()};
                    $.ajax({
                        url: 'res/phpAjax/codepostalUpdate.php',
                        type: 'POST',
                        async: false,
                        data: data
                    });
                    document.location.assign('index.php');
                    return true;
                }
            },
            {
                label: "Annuler",
                className: "btn btn-default pull-left",
            }
        ],
        show: false,
        onEscape: function() {
            modal.modal("hide");
        }
    });
    modal.modal("show");
});

$(document).on("click", "#mdpmodal", function changeMail(e) {
    let modal = bootbox.dialog({
        message: $(".form-content-mdp").html(),
        title: "Changer de mot de passe",
        buttons: [
            {
                label: "Enregistrer",
                className: "btn btn-primary pull-left",
                callback: function() {
                    let res = false;
                    $.ajax({
                        url: "res/phpAjax/mdpVerif.php?mdp=" + $('.bootbox-body .oldmdp').val(),
                        type: 'GET',
                        async: false,
                        timeout: 30000,
                        error: function(){
                            return false;
                        },
                        success: function(OK){
                            if (OK["bool"]){
                                if ($('.bootbox-body .newmdp').val() == $('.bootbox-body .newmdpverif').val()){
                                    alert("Votre mot de passe a été modiffié:");
                                    res = true;
                                    return true;
                                }
                            }
                            alert("Les mots de passe rentrés sont incorectes:");
                            res = false;
                            return false;
                        }
                    });
                    if (res){
                        let data = {"pass": $('.bootbox-body .newmdp').val()};
                        $.ajax({
                            url: 'res/phpAjax/mdpUpdate.php',
                            type: 'POST',
                            data: data
                        });
                        document.location.assign('index.php');
                        return true
                    }
                    return false;
                }
            },
            {
                label: "Annuler",
                className: "btn btn-default pull-left",
            }
        ],
        show: false,
        onEscape: function() {
            modal.modal("hide");
        }
    });
    modal.modal("show");
});

$(document).on("click", "#telmodal", function changeMail(e) {
    let modal = bootbox.dialog({
        message: $(".form-content-tel").html(),
        title: "Changer de telephone",
        buttons: [
            {
                label: "Enregistrer",
                className: "btn btn-primary pull-left",
                callback: function() {
                    alert("Votre telephone a été modiffié:");
                    let data = {"tel": $('.bootbox-body .tel').val()};
                    $.ajax({
                        url: 'res/phpAjax/telUpdate.php',
                        type: 'POST',
                        async: false,
                        data: data
                    });
                    document.location.assign('index.php');
                    return true;
                }
            },
            {
                label: "Annuler",
                className: "btn btn-default pull-left",
            }
        ],
        show: false,
        onEscape: function() {
            modal.modal("hide");
        }
    });
    modal.modal("show");
});

$(document).on("click", "#mobilemodal", function changeMail(e) {
    let modal = bootbox.dialog({
        message: $(".form-content-mobile").html(),
        title: "Changer de telephone mobile",
        buttons: [
            {
                label: "Enregistrer",
                className: "btn btn-primary pull-left",
                callback: function() {
                    alert("Votre telephone mobile a été modiffié:");
                    let data = {"mobile": $('.bootbox-body .mobile').val()};
                    $.ajax({
                        url: 'res/phpAjax/mobileUpdate.php',
                        type: 'POST',
                        async: false,
                        data: data
                    });
                    document.location.assign('index.php');
                    return true;
                }
            },
            {
                label: "Annuler",
                className: "btn btn-default pull-left",
            }
        ],
        show: false,
        onEscape: function() {
            modal.modal("hide");
        }
    });
    modal.modal("show");
});