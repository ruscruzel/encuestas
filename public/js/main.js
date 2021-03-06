var next_click = document.querySelectorAll(".next_button");
var main_form = document.querySelectorAll(".main");
var step_list = document.querySelectorAll(".progress-bar li");
var num = document.querySelector(".step-number");
let formnumber = 0;
var divSection2_show = 0;
var check_list_utilidades_mayor = [];
var check_list_utilidades_menor = [];
var check_list_no_utilidades = [];

next_click.forEach(function (next_click_form) {
    next_click_form.addEventListener("click", function () {
        if (!validateform()) {
            return false;
        }

        if (formnumber == 0) {
            if ($("#flexRadioDefault2").is(":checked")) {
                formnumber = 3;
            }
            if ($("#ardioUlt1").is(":checked")) {
                formnumber = 1;
            } else if ($("#ardioUlt2").is(":checked")) {
                formnumber = 2;
            }
        } else {
            formnumber++;
        }

        updateform();
    });
});

var back_click = document.querySelectorAll(".back_button");
back_click.forEach(function (back_click_form) {
    back_click_form.addEventListener("click", function () {
        formnumber--;
        updateform();
    });
});

function updateform() {
    main_form.forEach(function (mainform_number) {
        mainform_number.classList.remove("active");
    });
    main_form[formnumber].classList.add("active");
}

function progress_backward() {
    var form_num = formnumber + 1;
    step_list[form_num].classList.remove("active");
    num.innerHTML = form_num;
}

var step_num_content = document.querySelectorAll(".step-number-content");

function validateform() {
    validate = true;
    let bNoAcepto = true;
    if ($("#flexRadioDefault2").is(":checked")) {
        bNoAcepto = false;
    }
    var validate_inputs = document.querySelectorAll(".main.active input");
    validate_inputs.forEach(function (vaildate_input) {
        vaildate_input.classList.remove("warning");
        if (vaildate_input.hasAttribute("require")) {
            if (vaildate_input.value.length == 0) {
                validate = false;
                vaildate_input.classList.add("warning");
            }
        }
    });

    if (bNoAcepto) {
        if ($('input[name="radioDefault"]').is(":checked")) {
            $("#msg_radioDefault").html("");
            $("#msg_radioDefault").addClass("d-none");
        } else {
            validate = false;
            $("#msg_radioDefault").html("Selecciona una opci??n");
            $("#msg_radioDefault").removeClass("d-none");
        }

        if ($('input[name="radioNumEmpleados"]').is(":checked")) {
            $("#msg_num_emp").html("");
            $("#msg_num_emp").addClass("d-none");
        } else {
            validate = false;
            $("#msg_num_emp").html("Selecciona una opci??n");
            $("#msg_num_emp").removeClass("d-none");
        }

        if ($('input[name="radioUtilidades"]').is(":checked")) {
            $("#msg_radio_utilidades").html("");
            $("#msg_radio_utilidades").addClass("d-none");
        } else {
            validate = false;
            $("#msg_radio_utilidades").html("Selecciona una opci??n");
            $("#msg_radio_utilidades").removeClass("d-none");
        }

        var resultSector = $('input[name="sector_empresa"]:checked');
        if (resultSector.length <= 0) {
            validate = false;
            $("#msg_sector_empresa").html("Selecciona al menos una opci??n");
            $("#msg_sector_empresa").removeClass("d-none");
        } else {
            $("#msg_sector_empresa").html("");
            $("#msg_sector_empresa").addClass("d-none");
        }

        if (formnumber == 1) {
            if ($('input[name="radioMonto"]').is(":checked")) {
                $("#msg_monto_ptu").html("");
                $("#msg_monto_ptu").addClass("d-none");
            } else {
                validate = false;
                $("#msg_monto_ptu").html("Selecciona una opci??n");
                $("#msg_monto_ptu").removeClass("d-none");
            }

            var chekRMonto = $("#radioMonto2").is(":checked");
            if (divSection2_show == 1 && !chekRMonto) {
                if ($('input[name="ckeckUtilidadMayor"]').is(":checked")) {
                    $("#msg_utilidades_mayor").html("");
                    $("#msg_utilidades_mayor").addClass("d-none");
                } else {
                    validate = false;
                    $("#msg_utilidades_mayor").html("Selecciona una opci??n");
                    $("#msg_utilidades_mayor").removeClass("d-none");
                }
            } else if (divSection2_show == 2) {
                if ($('input[name="ckeckMenorUtilidades"]').is(":checked")) {
                    $("#msg_utilidades_menor").html("");
                    $("#msg_utilidades_menor").addClass("d-none");
                } else {
                    validate = false;
                    $("#msg_utilidades_menor").html("Selecciona una opci??n");
                    $("#msg_utilidades_menor").removeClass("d-none");
                }
            }
        }
    }

    return validate;
}

$(document).ready(function () {
    var base_url = $("#base_url").val();

    $("#radioMonto1").change(function () {
        divSection2_show = 1;
        $("#divSec2_one").removeClass("d-none");
        $("#divSec2_two").addClass("d-none");
    });

    $("#radioMonto2").change(function () {
        $("#divSec2_one").addClass("d-none");
        $("#divSec2_two").addClass("d-none");
    });

    $("#radioMonto3").change(function () {
        divSection2_show = 2;
        $("#divSec2_two").removeClass("d-none");
        $("#divSec2_one").addClass("d-none");
    });

    $("#btn_enviar").off("click");
    $("#btn_enviar").on("click", function () {
        var username = document.querySelector("#user_name");
        var shownname = document.querySelector(".shown_name");
        var empresa = document.querySelector("#empresa");
        var radioAcepto = $('input[name="radioDefault"]:checked').val();
        var sectorEmpresa = $('input[name="sector_empresa"]:checked').val();
        var radioNumEmpleados = $(
            'input[name="radioNumEmpleados"]:checked'
        ).val();
        var radioUtilidades = $('input[name="radioUtilidades"]:checked').val();
        var radioMonto = $('input[name="radioMonto"]:checked').val();
        $.each($("input[name='ckeckUtilidadMayor']:checked"), function () {
            check_list_utilidades_mayor.push($(this).val());
        });
        check_list_utilidades_mayor.join(", ");
        $.each($("input[name='ckeckMenorUtilidades']:checked"), function () {
            check_list_utilidades_menor.push($(this).val());
        });
        check_list_utilidades_menor.join(", ");
        var dias_de_salario = $("#dias_de_salario").val();
        $.each($("input[name='ckeckNoHuboUtilidades']:checked"), function () {
            check_list_no_utilidades.push($(this).val());
        });
        check_list_no_utilidades.join(", ");
        var radioAnioAnt1 = $('input[name="radioanio_anterior"]:checked').val();

        var data = {
            nombre: username.value,
            empresa: empresa.value,
            radioAcepto: radioAcepto,
            sectorEmpresa: sectorEmpresa,
            radioNumEmpleados: radioNumEmpleados,
            radioUtilidades: radioUtilidades,
            radioMonto: radioMonto,
            ckeckUtilidadMayor: check_list_utilidades_mayor,
            ckeckMenorUtilidades: check_list_utilidades_menor,
            dias_de_salario: dias_de_salario,
            ckeckNoHuboUtilidades: check_list_no_utilidades,
            anio_anterior_ptu: radioAnioAnt1,
        };

        var laravelToken = document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content");

        axios
            .post("/sendEncuesta", data)
            .then(function (response) {
                if (response.status == 200) {
                    console.log("Mostrar mensaje ??xito...");
                    //toastr.success("Mensaje enviado!");
                } else {
                    console.log("Error mensaje");
                    //toastr.warning("El mensaje no pudo enviarse.");
                }
            })
            .catch(function (error) {
                console.log(error);
                //toastr.error("El mensaje no se pudo enviar.");
            });

        shownname.innerHTML = username.value;
        formnumber++;
        updateform();
    });
});
