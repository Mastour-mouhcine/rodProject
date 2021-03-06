let editor;
$(document).ready(function() {
    editor = new $.fn.dataTable.Editor({
      ajax: "serverSide/import_zoho_compte.php",
      table: "#Confirm_mail",
      idSrc:  'Account Name',
      fields: [
        {
          label: "Province (BE)",
          name: "Province (BE)",
        },
        {
          label: "Account Name",
          name: "Account Name",
        },
        {
          label: "Account Number",
          name: "Account Number",
        },
        {
          label: "Billing Street",
          name: "Billing Street",
        },
        {
          label: "Billing Code",
          name: "Billing Code",
        },
        {
          label: "Billing City",
          name: "Billing City",
        },
        {
          data: "Billing Province (BE)",
          name: "Billing Province (BE)",
        },
        {
          label: "Phone (Account)",
          name: "Phone (Account)",
        },
        {
          label: "Contact Owner",
          name: "Contact Owner",
        },
      ],
    });

    
    //Buton Edit
    /* $('#Confirm_mail').on('click', 'td.editor-edit', function (e) {
        e.preventDefault();
 
        editor.edit( $(this).closest('tr'), {
            title: 'Edit record',
            buttons: 'Update'
        } );
    } ); */
   
	 $("#Confirm_mail").DataTable({
     scrollX: true,
     processing: true,
     ajax: {
       url: "serverSide/import_zoho_compte.php",
       dataSrc: "",
     },
     columns: [
       {
         data: null,
         defaultContent: "",
         className: "select-checkbox",
         orderable: false,
       },
       { data: "Province (BE)" },
       { data: "Account Name" },
       { data: "Account Number" },
       { data: "Billing Street" },
       { data: "Billing Code" },
       { data: "Billing City" },
       { data: "Billing Province (BE)" },
       { data: "Phone (Account)" },
       { data: "Contact Owner" },
     ],
     select: {
       style: "os",
       selector: "td:first-child",
     },
     select: true,
     dom: "Bfrtip", 
     buttons: [
       {
         extend: "excel",
         title: "",
         filename: "import zoho compte",
         text: "EXCEL Import_Zoho_Compte",
       },
       {
         extend: "csv",
         title: "import zoho compte",
         text: "CSV Import_Zoho_Compte",
         fieldSeparator: ";",
       },
       { extend: "edit", editor: editor, text: 'Modifier',
        formTitle: "Modifier l'enregistrementfier ",
         formButtons: ["Modifier"], 
        },
       { extend: "remove", editor: editor, text: 'Supprimer', formTitle: "Supprimer l'enregistrement", formButtons: ["Supprimer"], formMessage:"Etes-vous s??r de vouloir supprimer la ligne" },
     ],
   });
   
 $('#Confirm_mail').on('draw.dt', function(){
     console.log("HERE");
    $('#Confirm_mail').Tabledit({
     url:'serverSide/ActionEditDelete.php',
     dataType:'json',
     columns:{
      identifier : [2, 'Account Name'],
      editable:[[1, 'Province (BE)'], [2, 'Account Name'],[3, 'Account Number'], [4, 'Billing Street'], [5, 'Billing Code'], [6, 'Billing City'], [7, 'Billing Province (BE)'], [8, 'Phone (Account)'], [9, 'Contact Owner']]
     },
     /* restoreButton:false,
     onSuccess:function(data, textStatus, jqXHR)
     {
      if(data.action == 'delete')
      {
       $('#' + data.id).remove();
       $('#Confirm_mail').DataTable().ajax.reload();
      }
     } */
    });
   });
  /*  $('#Confirm_mail').on( 'click', 'tbody td:not(:first-child)', function (e) {
    editor.inline( this, {
        submit: 'allIfChanged'
    } );
} ); */
} );