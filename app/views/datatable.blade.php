<table class="table table-hover text-center  {{ $class = str_random(8) }}">
    <colgroup>
        @for ($i = 0; $i < count($columns); $i++)
        <col class="con{{ $i }}" />
        @endfor
    </colgroup>
    <thead>
    <tr class="danger">
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
    <tbody>
    @foreach($data as $d)
    <tr class="danger">
        @foreach($d as $dd)
        <td >{{ $dd }}</td>
        @endforeach
    </tr>
    @endforeach
    </tbody>
</table>
<script type="text/javascript">
    jQuery(document).ready(function(){
        // dynamic table
        jQuery('.{{ $class }}').dataTable({
            "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                  // Bold the grade for all 'A' grade browsers
                  if ( aData[0] == 3 )
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
    });
</script>

