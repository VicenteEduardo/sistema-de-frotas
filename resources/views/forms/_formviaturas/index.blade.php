
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom01" class="form-label">Modelo </label>
                <input type="text" class="form-control" id="validationCustom01"
                    value="{{ isset($viatura->modelo) ? $viatura->modelo : old('modelo') }}" required name="modelo">
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Matricula</label>
                <input value="{{ isset($viatura->matricula) ? $viatura->matricula : old('matricula') }}" type="text" class="form-control" id="validationCustom02"
               required name="matricula">
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="mb-3">
                <label for="validationCustom04" class="form-label">Quanto de carga (KG)</label>
                <input value="{{ isset($viatura->quantidade) ? $viatura->quantidade : old('quantidade') }}" name="quantidade" type="text" class="form-control" id="validationCustom04"
                     required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Descrição</label>
            <div class="mb-3">


                     <textarea width="500 class="form-control" id="billing-address"
                     rows="4" placeholder="Enter full address"
                     " name="descricao">
            {{ isset($viatura->quantidade) ? $viatura->quantidade : old('quantidade') }}
                    </textarea>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="imagem_viatura" class="form-label">Fotografia da viatura</label>
                <input name="imagem_viatura" type="file" class="form-control"
                   >
                <div class="invalid-feedback">

                </div>
            </div>
        </div>
    </div>



    <div>

    </div>

