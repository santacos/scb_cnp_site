<div style="overflow:scroll;overflow-y:hidden;padding-bottom:2em;margin-left:1px;">
<table  class="table table-hover table-bordered text-center {{ $class = str_random(8) }}" >
    <colgroup>
        @for ($i = 0; $i < count($columns); $i++)
        <col class="con{{ $i }}" />
        @endfor
    </colgroup>
    
    <thead>
    <tr>
        @foreach($columns as $i => $c)
        <th align="center" valign="middle" class="head{{ $c }}" 
            @if ($c == 'checkbox')
                style="width:20px"
            @elseif ($c == 'Requisition ID')
                 width="5%"       
            @elseif ($c == 'Job Title')
                 width="15%"   
            @elseif ($c == 'Corporate Title')
                 width="10%"
            @elseif ($c == 'Location')
                 width="10%"      
            @elseif ($c == 'Status')
                 width="5%"       
            @elseif ($c == 'Require')
                 width="5%"
            @elseif ($c == 'SLA')
                 width="8%"
            @elseif ($c == 'Deadline')
                 width="12%"
            @elseif ($c == 'From')
                 width="10%"
            @elseif ($c == 'Note')
                 width="5%"
            @elseif ($c == 'Action')
                 width="10%"
            @elseif ($c == 'Sign')
                 width="5%"
            @elseif ($c == 'SLA Start')
                 width="5%"
            @elseif ($c == 'SLA End')
                 width="5%"
            @elseif ($c == 'Exceed')
                 width="2.5%"




            @endif
        >
            @if ($c == 'checkbox' && $hasCheckboxes = true)
                <input type="checkbox" class="selectAll"/>
            @else
                {{ $c }}
            @endif
        </th>
        @endforeach
    </tr>
    </thead>
    

    <tbody>
    @foreach($data as $d)
    <tr>
        @foreach($d as $dd)
        <td >{{ $dd }}</td>
        @endforeach
    </tr>

    @endforeach
    
   

    </tbody>
</table>
</div>
<script type="text/javascript">
    
    jQuery(document).ready(function(){
        // dynamic table
        function getFilterValue(column_number){
            alert(oTable.fnSettings().aoPreSearchCols[column_number].sSearch)
            }
        var oTable = jQuery('.{{ $class }}').dataTable({
             "dom": 'TC<"clear">lfrtip',
            tableTools: {
                "sSwfPath": "http://localhost/scb_cnp_site/public/swf/copy_csv_xls_pdf.swf",
                 "aButtons": [ "copy","xls", "pdf" ]
            }, 
            // columnDefs: [
            //     { visible: false, targets: 2 }
            // ],
            // colVis: {
            //     restore: "Restore",
            //     showAll: "Show all"
            // },
            "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                  // Bold the grade for all 'A' grade browsers

                  // if ( aData[2].indexOf("Staff 1") == 0 )
                  // { 
                  //   $( nRow).addClass('danger');
                  // }
                },
            "order": [[ 0, "asc" ]],
            // "bAutoWidth": false,            
            // @if (isset($hasCheckboxes) && $hasCheckboxes)
            // 'aaSorting': [['1', 'asc']],
            // // Disable sorting on the first column
            // "aoColumnDefs": [ {
            //     'bSortable': false,
            //     'aTargets': [ 0, {{ count($columns) - 1 }} ]                
            // } ],
            // @endif
            @foreach ($options as $k => $o)
            {{ json_encode($k) }}: {{ json_encode($o) }},
            @endforeach
            @foreach ($callbacks as $k => $o)
            {{ json_encode($k) }}: {{ $o }},
            @endforeach
            "fnDrawCallback": function(oSettings) {
                if (window.onDatatableReady) {
                    window.onDatatableReady();
                }
            }
        });
// .yadcf([
//    {column_number: 1,
// filter_type: "multi_select"}]);
 
    
         $('#reset').click( function (e) {
            e.preventDefault();
             
            oTable.colReorder.reset();
        } );
        $("tfoot input").keyup( function () {
            /* Filter on the column (the index) of this element */
            oTable.fnFilter( this.value, $("tfoot input").index(this) );
        } );

        /*
         * Support functions to provide a little bit of 'user friendlyness' to the textboxes in
         * the footer
         */
    // custom values are available via $values array
    } );
</script>

