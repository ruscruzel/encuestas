@extends('layouts.master')

@section('title', 'PTU')

@section('content')

<div class="container">
    <div class="card">
        <h3 class="text-center pt-2">Encuesta PTU </h3>
        <div class="form">
            <div class="right-side">
                <div class="main active">
                    <div class="text">
                        <h2>Sección 1</h2>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-12 col-sm-6">
                            <label for="user_name" class="form-label">Nombre *</label>
                            <input type="text" class="form-control" required require id="user_name" name="user_name">
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="empresa" class="form-label">Empresa *</label>
                            <input type="text" class="form-control" id="empresa" name="empresa" required require>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col">
                            <p>1. Contestaré esta encuesta respecto a la experiencia de la empresa que represento:</p>
                            <p id="msg_radioDefault" class="text-danger d-none"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="flexRadioDefault1"
                                    required require value="a. Acepto">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    a. Acepto
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="flexRadioDefault2"
                                    value="b. No acepto">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    b. No acepto
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col">
                            <p>2. ¿A qué sector se dedica la empresa?</p>
                            <p id="msg_sector_empresa" class="text-danger d-none"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="a. Agricultura, cría y explotación de animales, aprovechamiento forestal, pesca y
                                    caza" name="sector_empresa" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    a. Agricultura, cría y explotación de animales, aprovechamiento forestal, pesca y
                                    caza
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="b. Minería" name="sector_empresa"
                                    id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    b. Minería
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="c. Generación, transmisión, distribución y comercialización de energía eléctrica,
                                    suministro de agua y de gas natural por ductos al consumidor final"
                                    name="sector_empresa" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck3">
                                    c. Generación, transmisión, distribución y comercialización de energía eléctrica,
                                    suministro de agua y de gas natural por ductos al consumidor final
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="d. Construcción"
                                    name="sector_empresa" id="defaultCheck4">
                                <label class="form-check-label" for="defaultCheck4">
                                    d. Construcción
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="e. Industrias manufactureras"
                                    name="sector_empresa" id="defaultCheck5">
                                <label class="form-check-label" for="defaultCheck5">
                                    e. Industrias manufactureras
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="f. Comercio al por mayor"
                                    name="sector_empresa" id="defaultCheck6">
                                <label class="form-check-label" for="defaultCheck6">
                                    f. Comercio al por mayor
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="g. Comercio al por menor"
                                    name="sector_empresa" id="defaultCheck7">
                                <label class="form-check-label" for="defaultCheck7">
                                    g. Comercio al por menor
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    value="h. Transportes, correos y almacenamiento" name="sector_empresa"
                                    id="defaultCheck8">
                                <label class="form-check-label" for="defaultCheck8">
                                    h. Transportes, correos y almacenamiento
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="i. Información en medios masivos"
                                    name="sector_empresa" id="defaultCheck9">
                                <label class="form-check-label" for="defaultCheck9">
                                    i. Información en medios masivos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    value="j. Servicios financieros y de seguros" name="sector_empresa"
                                    id="defaultCheck10">
                                <label class="form-check-label" for="defaultCheck10">
                                    j. Servicios financieros y de seguros
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    value="k. Servicios inmobiliarios y de alquiler de bienes muebles e intangibles"
                                    name="sector_empresa" id="defaultCheck11">
                                <label class="form-check-label" for="defaultCheck11">
                                    k. Servicios inmobiliarios y de alquiler de bienes muebles e intangibles
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    value="l. Servicios profesionales, científicos y técnicos" name="sector_empresa"
                                    id="defaultCheck12">
                                <label class="form-check-label" for="defaultCheck12">
                                    l. Servicios profesionales, científicos y técnicos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="m. Corporativos"
                                    name="sector_empresa" id="defaultCheck13">
                                <label class="form-check-label" for="defaultCheck13">
                                    m. Corporativos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="n. Servicios de apoyo a los negocios y manejo de residuos, y servicios de
                                    remediación" name="sector_empresa" id="defaultCheck14">
                                <label class="form-check-label" for="defaultCheck14">
                                    n. Servicios de apoyo a los negocios y manejo de residuos, y servicios de
                                    remediación
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="o. Servicios educativos"
                                    name="sector_empresa" id="defaultCheck15">
                                <label class="form-check-label" for="defaultCheck15">
                                    o. Servicios educativos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    value="p. Servicios de salud y de asistencia social" name="sector_empresa"
                                    id="defaultCheck16">
                                <label class="form-check-label" for="defaultCheck16">
                                    p. Servicios de salud y de asistencia social
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    value="q. Servicios de esparcimiento culturales y deportivos, y otros servicios recreativos"
                                    name="sector_empresa" id="defaultCheck17">
                                <label class="form-check-label" for="defaultCheck17">
                                    q. Servicios de esparcimiento culturales y deportivos, y otros servicios recreativos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    value="r. Servicios de alojamiento temporal y de preparación de alimentos y bebidas"
                                    name="sector_empresa" id="defaultCheck18">
                                <label class="form-check-label" for="defaultCheck18">
                                    r. Servicios de alojamiento temporal y de preparación de alimentos y bebidas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    value="s. Otros servicios excepto actividades gubernamentales" name="sector_empresa"
                                    id="defaultCheck19">
                                <label class="form-check-label" for="defaultCheck19">
                                    s. Otros servicios excepto actividades gubernamentales
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col">
                            <p>3. Número de empleados:</p>
                            <p id="msg_num_emp" class="text-danger d-none"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioNumEmpleados" id="radioNumEmp1"
                                    required require value="a. 1 a 10">
                                <label class="form-check-label" for="radioNumEmp1">
                                    a. 1 a 10
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioNumEmpleados" id="radioNumEmp2"
                                    value="b. 11 a 50">
                                <label class="form-check-label" for="radioNumEmp2">
                                    b. 11 a 50
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioNumEmpleados" id="radioNumEmp3"
                                    value="c. 51 a 250">
                                <label class="form-check-label" for="radioNumEmp3">
                                    c. 51 a 250
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioNumEmpleados" id="radioNumEmp4"
                                    value="d. 251 o más">
                                <label class="form-check-label" for="radioNumEmp4">
                                    d. 251 o más
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col">
                            <p>4. ¿Este año habrá entrega de reparto de utilidades?</p>
                            <p id="msg_radio_utilidades" class="text-danger d-none"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioUtilidades" id="ardioUlt1"
                                    required require value="a. Sí">
                                <label class="form-check-label" for="ardioUlt1">
                                    a. Sí
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioUtilidades" id="ardioUlt2"
                                    value="b. No">
                                <label class="form-check-label" for="ardioUlt2">
                                    b. No
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="buttons">
                        <button class="next_button">Siguiente</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h2>Sección 2</h2>
                    </div>

                    <div class="mb-3 row">
                        <div class="col">
                            <p>5. En comparación con el año anterior ¿Cómo será el monto repartido de PTU?</p>
                            <p id="msg_monto_ptu" class="text-danger d-none"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioMonto" id="radioMonto1" required
                                    require value="a. Mayor">
                                <label class="form-check-label" for="radioMonto1">
                                    a. Mayor
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioMonto" id="radioMonto2"
                                    value="b. Igual">
                                <label class="form-check-label" for="radioMonto2">
                                    b. Igual
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioMonto" id="radioMonto3"
                                    value="c. Menor">
                                <label class="form-check-label" for="radioMonto3">
                                    c. Menor
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row d-none" id="divSec2_one">
                        <div class="col">
                            <p>5.1 ¿Cuáles fueron las razones por las que el monto de reparto de utilidades fue mayor?
                            </p>
                            <p id="msg_utilidades_mayor" class="text-danger d-none"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="a. Aumento en la productividad de las y los colaboradores"
                                    name="ckeckUtilidadMayor" id="ckeckUtilidadMayor1">
                                <label class="form-check-label" for="ckeckUtilidadMayor1">
                                    a. Aumento en la productividad de las y los colaboradores
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="b. Aumento de ventas"
                                    name="ckeckUtilidadMayor" id="ckeckUtilidadMayor2">
                                <label class="form-check-label" for="ckeckUtilidadMayor2">
                                    b. Aumento de ventas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="c. Entorno económico favorable"
                                    name="ckeckUtilidadMayor" id="ckeckUtilidadMayor3">
                                <label class="form-check-label" for="ckeckUtilidadMayor3">
                                    c. Entorno económico favorable
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="d. Nuevas oportunidades de negocio" name="ckeckUtilidadMayor"
                                    id="ckeckUtilidadMayor4">
                                <label class="form-check-label" for="ckeckUtilidadMayor4">
                                    d. Nuevas oportunidades de negocio
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row d-none" id="divSec2_two">
                        <div class="col">
                            <p>5.2 ¿Cuáles fueron las razones por las que habrá menor reparto de utilidades? </p>
                            <p id="msg_utilidades_menor" class="text-danger d-none"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="a. Disminución en la productividad de las y los colaboradores"
                                    name="ckeckMenorUtilidades" id="ckeckMenorUtilidades1">
                                <label class="form-check-label" for="ckeckMenorUtilidades1">
                                    a. Disminución en la productividad de las y los colaboradores
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="b. Afectaciones por inseguridad"
                                    name="ckeckMenorUtilidades" id="ckeckMenorUtilidades2">
                                <label class="form-check-label" for="ckeckMenorUtilidades2">
                                    b. Afectaciones por inseguridad
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="c. Afectaciones por el entorno político y económico"
                                    name="ckeckMenorUtilidades" id="ckeckMenorUtilidades3">
                                <label class="form-check-label" for="ckeckMenorUtilidades3">
                                    c. Afectaciones por el entorno político y económico
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="d. Continuación de la pandemia COVID-19" name="ckeckMenorUtilidades"
                                    id="ckeckMenorUtilidades4">
                                <label class="form-check-label" for="ckeckMenorUtilidades4">
                                    d. Continuación de la pandemia COVID-19
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="e. Problemas para mejorar la innovación y los procesos al interior de la empresa"
                                    name="ckeckMenorUtilidades" id="ckeckMenorUtilidades5">
                                <label class="form-check-label" for="ckeckMenorUtilidades5">
                                    e. Problemas para mejorar la innovación y los procesos al interior de la empresa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="f. Complicaciones por la inflación" name="ckeckMenorUtilidades"
                                    id="ckeckMenorUtilidades6">
                                <label class="form-check-label" for="ckeckMenorUtilidades6">
                                    f. Complicaciones por la inflación
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="g. Pregunta abierta (condicionado a número decimal)"
                                    name="ckeckMenorUtilidades" id="ckeckMenorUtilidades7">
                                <label class="form-check-label" for="ckeckMenorUtilidades7">
                                    g. Pregunta abierta (condicionado a número decimal)
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col">
                            <p>6. Días de salario estimado a pagar por PTU ejercicio 2021</p>
                            <input type="text" class="form-control" id="dias_de_salario" name="dias_de_salario" required
                                require>
                        </div>
                    </div>

                    <div class="buttons button_space">
                        <!-- <button class="back_button">Back</button> -->
                        <button class="next_button">Siguiente</button>
                    </div>
                </div>
                <div class="main">
                    <div class="text">
                        <h2>Sección 3</h2>
                    </div>

                    <div class="mb-3 row">
                        <div class="col">
                            <p>7. ¿Cuáles fueron las razones por las que no hubo reparto de utilidades?</p>
                            <p id="msg_no_utilidades" class="text-danger d-none"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="a. Disminución en la productividad de las y los colaboradores"
                                    name="ckeckNoHuboUtilidades" id="ckeckNoHuboUtilidades1">
                                <label class="form-check-label" for="ckeckNoHuboUtilidades1">
                                    a. Disminución en la productividad de las y los colaboradores
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="b. Afectaciones por inseguridad"
                                    name="ckeckNoHuboUtilidades" id="ckeckNoHuboUtilidades2">
                                <label class="form-check-label" for="ckeckNoHuboUtilidades2">
                                    b. Afectaciones por inseguridad
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="c. Afectaciones por el entorno político y económico"
                                    name="ckeckNoHuboUtilidades" id="ckeckNoHuboUtilidades3">
                                <label class="form-check-label" for="ckeckNoHuboUtilidades3">
                                    c. Afectaciones por el entorno político y económico
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="d. Continuación de la pandemia COVID-19" name="ckeckNoHuboUtilidades"
                                    id="ckeckNoHuboUtilidades4">
                                <label class="form-check-label" for="ckeckNoHuboUtilidades4">
                                    d. Continuación de la pandemia COVID-19
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="e. Problemas para mejorar la innovación y los procesos al interior de la empresa"
                                    name="ckeckNoHuboUtilidades" id="ckeckNoHuboUtilidades5">
                                <label class="form-check-label" for="ckeckNoHuboUtilidades5">
                                    e. Problemas para mejorar la innovación y los procesos al interior de la empresa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="f. Complicaciones por la inflación" name="ckeckNoHuboUtilidades"
                                    id="ckeckNoHuboUtilidades5">
                                <label class="form-check-label" for="ckeckNoHuboUtilidades5">
                                    f. Complicaciones por la inflación
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col">
                            <p>8. El año anterior, ¿hubo reparto de PTU?</p>
                            <p id="msg_anio_anterior" class="text-danger d-none"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioanio_anterior"
                                    id="radioAnioAnt1" required require value="a. Sí">
                                <label class="form-check-label" for="radioAnioAnt1">
                                    a. Sí
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioanio_anterior"
                                    id="radioAnioAnt2" value="b. No">
                                <label class="form-check-label" for="radioAnioAnt2">
                                    b. No
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="buttons button_space">
                        <!-- <button class="back_button">Back</button> -->
                        <a id="btn_enviar" class="btn btn-primary">Enviar</a>
                    </div>
                </div>

                <div class="main">
                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                    </svg>

                    <div class="text congrats">
                        <h2>Gracias!</h2>
                        <p><span class="shown_name"></span> su información fue enviada.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection