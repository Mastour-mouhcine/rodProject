import common_consts from "./common/constants.js";
const {
  DATA_INPUT_HEADER,
} = common_consts;

//Alert management 
const JSalert = (status, message, type) => {
  Swal.fire(status, message, type);
};
//
const JSalertAfterValidate = (status, message, type) => {
  var url = '/rodProject/index_validmails.php';
  //var win = window.open('/nosnihcsdosCorp/index_validmails.php', '_blank');
  Swal.fire(status, message, type).then(function() {
    window.open(url,"_self");
    //window.open(url, '_blank'); new window
});

};

const onRowNumber = () => {
    $.ajax({
      url: "serverSide/NumberOfRows.php",
      success: function (result) {
        $('#id_rowNumber').empty();
        $('#id_rowNumber').append("Il y a  "+" "+result+" "+ "enregistrements actuellement dans la base");
      },
    });
};

const IfExistRowDataBase = () => {
       let nbr_row;
       $.ajax({
         url: "serverSide/NumberOfRows.php",
         success: function (result) { 
           nbr_row = result; 
           if(nbr_row != 0){
             document.getElementById('btn_validerMail').disabled=false;
           }
          },
      });
};
//auto close timer
const JSalertWait = (text) =>{
Swal.fire({
  title: 'Traitement en cours',
  html: text,
  //timerProgressBar: false,
  didOpen: () => {
    Swal.showLoading()
  },
})
};
// Convert for example 9 to 09
const addDigitBefore = (number) => {
  return ("0" + number).slice(-2);
};
// Convert Serial to Date
const excelDateToJSDate = (serial) => {
  const utc_days = Math.floor(serial - 25569);
  if (isNaN(utc_days)) {
    return serial;
  }
  const utc_value = utc_days * 86400;
  const date_info = new Date(utc_value * 1000);

  const fractional_day = serial - Math.floor(serial) + 0.0000001;

  let total_seconds = Math.floor(86400 * fractional_day);
  const seconds = total_seconds % 60;
  total_seconds -= seconds;

  const hours = addDigitBefore(Math.floor(total_seconds / (60 * 60)));
  const minutes = addDigitBefore(Math.floor(total_seconds / 60) % 60);
  return `${addDigitBefore(date_info.getDate())}/${addDigitBefore(
    date_info.getMonth()
  )}/${date_info.getFullYear()} ${hours}:${minutes}`;
};

const displayHeaderData = (sheet_data) => {
  const nbr_col = sheet_data[0].length;
  let header = "";
  for (let cell = 0; cell < nbr_col; cell++) {
    if(sheet_data[0][cell] === undefined){
      continue;
    }
    let cellName = sheet_data[0][cell].trim().toLowerCase().replace(/ /g,"_");
    if (sheet_data[0][cell].trim() === "Nom") {
      cellName = sheet_data[0][cell].trim();
    }
    header +=  `<th id=${cellName}>${DATA_INPUT_HEADER[cellName].header}</th>`;
  }
  return header;
};


const initiateTableDisplay = (sheet_data) => {
  let table_output =
    '<div id="imported_table" class="table-responsive">\n' +
    '<form id="data_import"> \n' +
    '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
  table_output += "<thead> \n";
  table_output += displayHeaderData(sheet_data);
  table_output +=
    "</thead> \n" +
    "<tbody> \n" +
    "</tbody> \n" +
    "</table>\n " +
    "</form>\n" +
    "</div>\n" +
    '<div class="card-footer" style="display: flex;">\n' +
    '<div style="display: flex; justify-content: flex-end; align-items: center">\n' +
    '<div style="display: flex;">\n' +
    '<span id = "id_rowNumber" >\n' +
    '</span>\n' +
    '<div style="">\n' +
    '<button id="submit" class="btn btn-success" >Enregistrer la liste</button>\n' +
    '<button id="btn_validerMail" disabled class="btn btn-success">Vérifier les emails</button>\n' +
    "</div>\n" +
    "</div>\n" +
    "</div>\n" +
    "</div>";
  document.getElementById("excel_data").innerHTML = table_output;
  onRowNumber();
  IfExistRowDataBase();
};

const displayContentData = (sheet_data) => {
  const nbr_col = sheet_data[0].length;
  let tableRows = "";
  for (let row = 1; row < sheet_data.length; row++) {
    tableRows += "<tr>";
    for (let cell = 0; cell < nbr_col; cell++) {
      if(sheet_data[0][cell] === undefined){
        continue;
      }
      let cellName = sheet_data[0][cell].trim().toLowerCase().replace(/ /g,"_");
      if (sheet_data[0][cell].trim() === "Nom") {
        cellName = sheet_data[0][cell].trim();
      }
      const cellDbName = DATA_INPUT_HEADER[cellName].dbname;
      if (sheet_data[row][cell] == null) {
        tableRows += `<td> <input value="" name="${cellDbName}[]"></td>`;
        continue;
      }
      if (cell === 10) {
        sheet_data[row][cell] = excelDateToJSDate(sheet_data[row][cell]);
      }
      tableRows += `<td> <input value="${sheet_data[row][cell]}" name="${cellDbName}[]"></td>`;
    }
    tableRows += "</tr>";
  }
  return tableRows;
};

const processCsvFile = (data, reader, isTypeUnknown) => {
  const { result, } = reader;
  //const result = reader.result
  try {
    data = new Uint16Array(result);
    if (isTypeUnknown) {
      data = new Uint8Array(result);
    }
  } catch (error) {
    data = new Uint8Array(result);
  }
  const work_book = XLSX.read(data, { type: "array" });
  const sheet_name = work_book.SheetNames;
  return XLSX.utils.sheet_to_json(work_book.Sheets[sheet_name[0]], {
    header: 1,
  });
};

const onSubmit = () => {
  $("#submit").click(function (e) {
    e.preventDefault();
      JSalertWait('Enregistrement de données');
      $.ajax({
        type: "post",
        url: "serverSide/insertDataBrut.php",
        data: $("#data_import").serialize(),
        success: (data) => {
          //console.log(data);      //Message Data enregistrer
          if(data.trim() === "New Records Created Successfully"){
            JSalert("Succès", "Les donnèes ont été bien enregistrées !","success");
            document.getElementById('btn_validerMail').disabled=false;
            onRowNumber();
          }
          else{
            JSalert("Erreur", "Une erreur est survenue lors de la sauvegarde !",'error');
            //JSalert("Succès", "Les donnèes ont été bien enregistrées !","success");
          }
        },
      });
  });
};
const onValiderMail = () => {
  $("#btn_validerMail").click(function (e) {
    e.preventDefault();
    JSalertWait('Vérification de données');
    
    $.ajax({
      url: "serverSide/ValidationMail.php",
      success: function (result) {
        if(result.trim() === "verification est bonne" ){ 
          //JSalert("Succès", "Les emails ont été bien vérifiés !","success");
          JSalertAfterValidate("Succès", "Les emails ont été bien vérifiés !","success");
       } else {
        JSalert("Erreur", "Une erreur est survenue lors de la vérificaiton des emails !", "error");
       };
      },
    });
  });
}; 
const addRowsToExistingTable = (sheet_data) => {
  const nbr_col = sheet_data[0].length;
  const table = $("#dataTable").DataTable();
  const headerItems = [];
  $("#dataTable thead tr th").each(function() {
    headerItems.push(DATA_INPUT_HEADER[this.id].dbname);
  });

  for (let row = 1; row < sheet_data.length; row++) {
    const tableRow = {};
    for (let cell = 0; cell < nbr_col; cell++) {
      if(sheet_data[0][cell] === undefined){
        continue;
      }
      let cellName = sheet_data[0][cell].trim().toLowerCase().replace(/ /g,"_");
      if (sheet_data[0][cell].trim() === "Nom") {
        cellName = sheet_data[0][cell].trim();
      }
      const dbKey = DATA_INPUT_HEADER[cellName].dbname;
      
      if (sheet_data[row][cell] == null) {
        tableRow[dbKey] = `<input value="" name="${dbKey}[]">`; 
        continue;
      }
      tableRow[dbKey] = `<input value="${sheet_data[row][cell]}" name="${dbKey}[]">`;
    }
    const orderedTable = headerItems.map((header) => tableRow[header]);
    table.row.add(orderedTable).draw();
  }
  
};

$(document).ready(function () {
  const excel_file = document.getElementById("excel_file");
  excel_file.addEventListener("change", (event) => {
    if (
      ![
        "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
        "application/vnd.ms-excel",
      ].includes(event.target.files[0].type)
    ) {
      document.getElementById("excel_data").innerHTML =
        '<div class="alert alert-danger">Only .xlsx or .xls file format are allowed</div>';
      excel_file.value = "";
      return false;
    }

    var reader = new FileReader();
    reader.readAsArrayBuffer(event.target.files[0]);
    reader.onload = function () {
      let data = reader.result;
      let sheet_data = processCsvFile(data, reader, false);
      if (sheet_data.length === 1) {
        sheet_data = processCsvFile(data, reader, true);
      }
      const doesTableExist = $("#imported_table").length;

      if (sheet_data.length > 0) {
        // Create table rows
        const tableRows = displayContentData(sheet_data);

        if (!doesTableExist) {
          // We draw table and display header
          initiateTableDisplay(sheet_data);
          // Display rows if initiate table for first time
          $("#imported_table tbody").append(tableRows);
          $("#dataTable").DataTable({
            scrollY: "400px",
            scrollCollapse: true,
            paging: true,
            scrollX: true,
            pageLength: 100,
            searching: true,
          });
          // Declare click evenlistener
          onSubmit();
          // Add convert enetlistener
          //onConvert();
          //Valider mails
          onValiderMail();
          // Download File Email
          //onDownloadEmail();  button download
          //Confirmer mail
          //onConfirm();    button vider table
        } else {
          // Display rows if table already exists
          addRowsToExistingTable(sheet_data);
        }
      }
    };
  });
});
