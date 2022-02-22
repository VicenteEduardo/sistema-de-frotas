<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
 $("input[name=bi]").on("focusout", function(e) {
     let tid = $("select[name=tid]");
     let bi = $(this);
     let url = $("#url").data("url")
     let message = bi.parent().find("#bi-message");

     message.removeAttr("class");
     message.text("A carregar...")

     resetFields();

     if (bi.val().length > 5) {

         $.ajax({
             type: "GET",
             enctype: "multipart/form-data",
             dataType: "json",
             url: "https://api.gov.ao/consultarBI/v2/?bi=" + bi.val(),
             // https://api.gov.ao/consultarBI/v2/?bi=
             processData: false,
             contentType: false,
             cache: false,
             // timeout: 600000,
             success: function(response) {
                 if (response.length > 0) {
                     //console.log(response[0]);
                     fiilUserFields(response[0]);
                 }
             },
         });
     }
 })

 function fiilUserFields(data) {

     let fullName = $("input[name=fullName]");
     let pai = $("input[name=pai]");
     let mae = $("input[name=mae]");
     let birthDate = $("input[name=birthDate]");
     let sexo = $("input[name=sexo]");
     let naturalidade = $("input[name=naturalidade]");
     let mun = $("input[name=mun]");
     let estadoCivil = $("input[name=estadoCivil]");

     fullName.val(data.FIRST_NAME  +" "+data.LAST_NAME);
     pai.val(data.FATHER_FIRST_NAME + " "+data.FATHER_LAST_NAME);
     mae.val(data.MOTHER_FIRST_NAME + " "+data.MOTHER_LAST_NAME);
     birthDate.val(data.BIRTH_DATE);
     sexo.val(data.GENDER_NAME);
     naturalidade.val(data.BIRTH_PROVINCE_NAME);
     mun.val(data.BIRTH_MUNICIPALITY_NAME);
     estadoCivil.val(data.MARITAL_STATUS_NAME);


    // sobre_nome.val(data.LAST_NAME);
    // genero.val(data.GENDER_NAME);
    // estado_civil.val(data.MARITAL_STATUS_NAME);
     // telefone.val(data.telefone);
     // email.val(data.email);

 }

 function resetFields() {
     $("input[name=fullName]").val("");
     $("input[name=telefone]").val("");
     $("input[name=email]").val("");
 }

 //console.log(document.getElementById("sexo").value) ;


