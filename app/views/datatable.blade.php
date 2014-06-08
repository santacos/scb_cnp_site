<table  class="table table-hover text-center {{ $class = str_random(8) }}" >
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
                 width="10%"   
            @elseif ($c == 'Corporate Title')
                 width="5%"
            @elseif ($c == 'Location')
                 width="10%"      
            @elseif ($c == 'Status')
                 width="5%"       
            @elseif ($c == 'SLA')
                 width="10%"
            @elseif ($c == 'Date Order')
                 width="10%"  
            @elseif ($c == 'Deadline')
                 width="10%"
            @elseif ($c == 'Note')
                 width="5%"
            @elseif ($c == 'Progress')
                 width="10%"                               
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
    <tfoot>
        <tr>
            @foreach($columns as $i => $c)
            <th align="center" valign="middle" class="head{{ $i }}">
                <input type="text" name="{{$c}}" placeholder="{{$c}}" class="search_init" style="width:100%"  >
            </th>
            @endforeach
        </tr>
    </tfoot>

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
<script type="text/javascript">
        
    function filterGlobal () {
    jQuery('.{{ $class }}').DataTable().search(
        $('#global_filter').val()
    ).draw();
    }
     
    function filterColumn ( i ) {
        jQuery('.{{ $class }}').DataTable().column( i ).search(
            $('#col'+i+'_filter').val()
        ).draw();
    }
    jQuery(document).ready(function(){
        // dynamic table
        var oTable = jQuery('.{{ $class }}').dataTable({
            "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                  // Bold the grade for all 'A' grade browsers

                  if ( aData[2].indexOf("Staff 1") == 0 )
                  { 
                    $( nRow).addClass('danger');
                  }
                },

            "bAutoWidth": false,            
            @if (isset($hasCheckboxes) && $hasCheckboxes)
            'aaSorting': [['1', 'asc']],
            // Disable sorting on the first column
            "aoColumnDefs": [ {
                'bSortable': false,
                'aTargets': [ 0, {{ count($columns) - 1 }} ]                
            } ],
            @endif
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
        
        
        $('input.global_filter').on( 'keyup click', function () {
            filterGlobal();
        } );
     
        $('input.column_filter').on( 'keyup click', function () {
            filterColumn( $(this).parents('tr').attr('data-column') );
        } );
        $("tfoot input").keyup( function () {
            /* Filter on the column (the index) of this element */
            oTable.fnFilter( this.value, $("tfoot input").index(this) );
        } );
        // $("tfoot input").keyup( function () {
        //      Filter on the column (the index) of this element 
        //     oTable.fnFilter( this.value, $("tfoot input").index(this) );
        // } );

        /*
         * Support functions to provide a little bit of 'user friendlyness' to the textboxes in
         * the footer
         */
        // $("tfoot input").each( function (i) {
        //     asInitVals[i] = this.value;
        // } );

        // $("tfoot input").focus( function () {
        //     if ( this.className == "search_init" )
        //     {
        //         this.className = "";
        //         this.value = "";
        //     }
        // } );

        // $("tfoot input").blur( function (i) {
        //     if ( this.value == "" )
        //     {
        //         this.className = "search_init";
        //         this.value = asInitVals[$("tfoot input").index(this)];
        //     }
        // } );
    // custom values are available via $values array
    });
</script>

