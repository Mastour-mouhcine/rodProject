let editor;
$(document).ready(function() {
    // EDIT OT DELETE
    editor = new $.fn.dataTable.Editor({
      
      //ajax: "serverSide/ActionEditDelete.php",
      ajax: "serverSide/staff.php",
      table: "#Confirm_mail",
      idstr = 'id',
      fields: [{
            label: "id",
            name: "id",
            type:"hidden"
          },{
          label: "Province (BE)",
          name: "Province_BE"
        },{
          label: "Account Name",
          name: "Account_Name"
        },{
          label: "Account Number",
          name: "Account_Number"
        },{
          label: "Billing Street",
          name: "Billing_Street"
        },{
          label: "Billing Code",
          name: "Billing_Code"
        },{
          label: "Billing City",
          name: "Billing_City"
        },{
          label: "Billing Province (BE)",
          name: "Billing_Province_BE"
        },{
          label: "Phone Account",
          name: "Phone_Account"
        },{
          label: "Contact Owner",
          name: "Contact_Owner"
        }
      ]
    });
    // GET DATA
    let myTable = $("#Confirm_mail").DataTable({
      scrollX: true,
      processing: true,
      ajax: {
        url: "serverSide/Import_Zoho_Compte.php",
       //url: "serverSide/staff.php",
        dataSrc: "",
      },
      columns: [
        {
          data: null,
          defaultContent: "",
          className: "select-checkbox",
          orderable: false,
        },
        { data: "Province_BE" },
        { data: "Account_Name" },
        { data: "Account_Number" },
        { data: "Billing_Street" },
        { data: "Billing_Code" },
        { data: "Billing_City" },
        { data: "Billing_Province_BE" },
        { data: "Phone_Account" },
        { data: "Contact_Owner" }
      ],
      select: {
        style: "os",
        selector: "td:first-child",
      },
      //select: true,
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
        {
          extend: "edit",
          editor: editor,
          text: "Modifier",
          formTitle: "Modifier l'enregistrementfier ",
          formButtons: ["Modifier"],
        },
        {
          extend: "remove",
          editor: editor,
          text: "Supprimer",
          formTitle: "Supprimer l'enregistrement",
          formButtons: ["Supprimer"],
          formMessage: "Etes-vous s??r de vouloir supprimer la ligne",
        },
      ],
    });
} );