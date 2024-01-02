<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.js"></script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
   $('#data-table').DataTable({
      dom: 'Bfrtip',
      buttons: [{
            extend: 'excel',
            text: 'Export to Excel',
            exportOptions: {
               columns: ':not(.no-export)'
            }
         },
         {
            extend: 'pdf',
            text: 'Export to PDF',
            exportOptions: {
               columns: ':not(.no-export)'
            },
            customize: function(doc) {
               doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
               doc.defaultStyle.alignment = 'center';
               doc.styles.tableHeader.alignment = 'center';
            }
         }
      ]
   });
});
</script>
</body>

</html>