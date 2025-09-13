 <!-- Bootstrap core JavaScript-->
 <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

 <!-- Custom scripts for all pages-->
 <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

 <!-- Page level plugins -->
 <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

 <!-- Page level custom scripts -->
 <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <script>
     document.addEventListener('DOMContentLoaded', function() {
         document.querySelectorAll('.delete-archive').forEach(function(btn) {
             btn.addEventListener('click', function(e) {
                 e.preventDefault();
                 const form = this.closest('form');

                 Swal.fire({
                     title: 'Yakin hapus arsip ini?',
                     text: "Data yang dihapus tidak bisa dikembalikan!",
                     icon: 'warning',
                     showCancelButton: true,
                     confirmButtonColor: '#d33',
                     cancelButtonColor: '#3085d6',
                     confirmButtonText: 'Ya, hapus!',
                     cancelButtonText: 'Batal'
                 }).then((result) => {
                     if (result.isConfirmed) {
                         form.submit();
                     }
                 });
             });
         });
     });
 </script>

 <script>
     document.addEventListener('DOMContentLoaded', function() {
         document.querySelectorAll('.delete-category').forEach(function(btn) {
             btn.addEventListener('click', function(e) {
                 e.preventDefault();
                 const form = this.closest('form');

                 Swal.fire({
                     title: 'Yakin hapus kategori ini?',
                     text: "Data yang dihapus tidak bisa dikembalikan!",
                     icon: 'warning',
                     showCancelButton: true,
                     confirmButtonColor: '#d33',
                     cancelButtonColor: '#3085d6',
                     confirmButtonText: 'Ya, hapus!',
                     cancelButtonText: 'Batal'
                 }).then((result) => {
                     if (result.isConfirmed) {
                         form.submit();
                     }
                 });
             });
         });
     });
 </script>
