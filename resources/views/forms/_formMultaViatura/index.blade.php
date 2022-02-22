
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom01" class="form-label">Modelo da viatura</label>
                <select name="level" class="form-select" id="validationCustom03" required>
                    <option selected disabled value="">Escolha uma opção...</option>
                    @foreach ($viaturas as $item )
                    <option value="{{ $item->id }}">{{ $item->modelo }}</option>
                    @endforeach


                </select>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom01" class="form-label">Número da matricula</label>
                <select name="fk_viaturas" class="form-select" id="validationCustom03" required>
                    <option selected disabled value="">Escolha uma opção...</option>
                    @foreach ($viaturas as $item )
                    <option value="{{ $item->id }}">{{ $item->modelo }}</option>
                    @endforeach


                </select>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Motoristas</label>
                <select name="fk_user" class="form-select" id="validationCustom03" required>
                    <option selected disabled value="">Escolha uma opção...</option>
                    @foreach ($motoristas as $item )
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Valor Gasto</label>
                <input type="text" class="form-control" id="validationCustom01"
                placeholder="digite o valor Gasto" value="" required name="valorMulta">
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom04" class="form-label">Detalhes da Multa</label>
            <div class="mb-3">


                     <textarea width="300
                     " name="detalhes">dfs</textarea>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
        </div>
    </div>





    <div>

    </div>

