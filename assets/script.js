$(document).ready(function(){

  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });


  $(function () {
    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );




  });



      

// Validacao de CPF & CNPJ
  $("#tipo" ).change(function() {

      $selecionado = $('#tipo').val();

      if( $selecionado == "F" ){
        $("#labelregistro").text("Registro (CPF):");
        $('.registro').cpfcnpj({
                mask: true,
                validate: 'cpf',
                event: 'change',
                handler: '',
                ifValid: function (input) { input.removeClass("error"); $('.btnNovoCliente').removeClass("disabled"); },
                ifInvalid: function (input) { input.addClass("error"); $('.btnNovoCliente').addClass("disabled"); }
            });
      }else if( $selecionado == "J"){
        $("#labelregistro").text("Registro (CNPJ):");
        $('.registro').cpfcnpj({
                mask: true,
                validate: 'cnpj',
                event: 'change',
                handler: '',
                ifValid: function (input) { input.removeClass("error"); $('.btnNovoCliente').removeClass("disabled");  },
                ifInvalid: function (input) { input.addClass("error");  $('.btnNovoCliente').addClass("disabled"); }
            });
      }else{
        $(".label1").text("Registro (CPF/CNPJ): ");
      }

  });//tipooo
// Fim Validacao de CPF & CNPJ

// mascaras no cadastro de clientes
  $('.telefone').mask('(00) 0000-0000');
  $('.celular').mask('(00) 0 0000-0000');
// FIM mascaras cadastro de clientes

// cadastro de servico
  $('.acrescimo').mask("#.##0,00", {reverse: true});
  $('.desconto').mask("#.##0,00", {reverse: true});
// FIM cadastro de servico

// valor de servico
  $('.valor').mask("#.##0,00", {reverse: true});
// FIM valor de servico



});//geral do Script