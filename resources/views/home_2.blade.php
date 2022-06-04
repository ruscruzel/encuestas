@extends('layouts.master')

@section('title', 'PTU')

@section('content')

<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Sección 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" class="btn btn-default btn-circle btn_no" disabled="disabled">2</a>
                <p>Sección 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type=" button" class="btn btn-default btn-circle btn_no" disabled="disabled">3</a>
                <p>Sección 3</p>
            </div>
        </div>
    </div>
    <form role="form">
        <div class="row setup-content" id="step-1">
            <div class="col-12">
                <div class="col-md-12">
                    <h3>Sección 1</h3>
                    <div class="mb-3 form-group">
                        <label class="control-label">Nombre</label>
                        <input maxlength="100" type="text" required="required" class="form-control"
                            placeholder="Nombre" />
                    </div>
                    <div class="mb-3 form-group">
                        <label class="control-label">Empresa</label>
                        <input maxlength="100" type="text" required="required" class="form-control"
                            placeholder="Empresa" />
                    </div>
                    <div class="mb-3 form-group">
                        <p>1. Contestaré esta encuesta respecto a la experiencia de la empresa que represento:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                a. Acepto
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                b. No acepto
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-2" style="display: none;">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3>Sección 2</h3>
                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <input maxlength="200" type="text" required="required" class="form-control"
                            placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Company Address</label>
                        <input maxlength="200" type="text" required="required" class="form-control"
                            placeholder="Enter Company Address" />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-3" style="display: none;">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3>Sección 3</h3>
                    <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection