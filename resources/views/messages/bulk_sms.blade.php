@extends('layouts.layout')
@section('content')
    <style type="text/css">
        #bulksms_btn{
            background-color:orange;
            color:white;
            pointer-events: none;
        }
    </style>

  	<h2 class="mt-30"> <i class="lnr lnr-alarm orange"></i>Bulk Message Service</h2>
  	<hr>
    <br><br>
    <div id="new_msg" class="well center">
        <form enctype="multipart/form-data" method="POST" action="/send_bulk_sms">
            @csrf
            <div class="container col-lg-7 lt-al"> 
                 
                <button class="btn btn-sm btn-outline-success" onclick="download()">
                    Download Theohz sample broadcast list here
                </button>
                <br><br>
                <label><h4>Upload broadcast list(.csv) file</h4></label>
                &nbsp;&nbsp;
                <input type="file" class="btn btn-sm btn-outline-danger" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="csv_upload" required>

                <script type="text/javascript">
                    function download(){
                        const rows = [
                            ["075xxxxxxx,"],
                            ["077XXXXXXX,"],
                            ["070XXXXXXX,"]
                        ];

                        let csvContent = "data:text/csv;charset=utf-8,";

                        rows.forEach(function(rowArray) {
                            let row = rowArray.join(",");
                            csvContent += row + "\r\n";
                        });

                        var encodedUri = encodeURI(csvContent);
                        var link = document.createElement("a");
                        link.setAttribute("href", encodedUri);
                        link.setAttribute("download", "theohz_sample_list.csv");
                        document.body.appendChild(link); // Required for FF

                        link.click(); 
                    }
                </script>
                <hr>
                <textarea placeholder="Message" type="textarea" class="form-control" name="message" value="post"autofocus required></textarea>
                <hr>
                <button type="submit" class="btn btn-lg btn-success px100">
                    <i class="glyphicon glyphicon-send">Send</i>
                </button>
            </div>            
        </form>
    </div>  	
@endsection