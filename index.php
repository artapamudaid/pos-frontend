<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/851712c570.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/datepicker/datepicker.min.css">

    <title>POS Frontend</title>
</head>

<body>
    <section class="content-data">
        <div class="px-4 py-4">
            <div class="col-md-8">
                <div class="row mb-3">
                    <label for="NamaPelanggan" class="col-md-4 col-form-label">Nama Pelanggan</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="NamaPelanggan">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row mb-3">
                            <label for="Tanggal" class="col-md-6 col-form-label">Tanggal</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <input type="text" class="form-control" id="Tanggal">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row mb-3">
                            <label for="Jam" class="col-md-4 col-form-label">Jam</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="Jam">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-transaction">
        <div class="px-4 py-4">
            <div class="col-md-12">
                <div class="row mb-3">
                    <label for="ItemDijual" class="col-md-3 col-form-label">Item yang Dijual</label>
                    <div class="col-md-9">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Qty</th>
                                    <th>Harga Satuan</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="p_scents_item">
                                <tr></tr>
                            </tbody>
                        </table>
                        <h6><a href="#" id="addScnt_item"><i class="fa fa-plus"></i><b> Tambah Baris</b></a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-action float-right">
        <div class="px-4 py-4">
            <div class="col-md-12">
                <div class="row mb-3">
                    <label for="Total" class="col-md-4 col-form-label">Total</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="Total" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="BayarTunai" class="col-md-4 col-form-label">Bayar Tunai</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="BayarTunai">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Kembali" class="col-md-4 col-form-label">Kembali</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="Kembali" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <button class="btn">Cancel</button>
                        <button class="btn btn-info">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


    <script type="text/javascript" src="assets/jquery-migrate.min.js"></script>
    <script src="assets/datepicker/datepicker.min.js"></script>

    <script>
        $(function() {
            var scntDiv = $('#p_scents_item');
            var i = $('#p_scents_item p').size() + 1;

            $("#addScnt_item").click(function() {
                $('<tr><td><input type="text" class="form-control" id="Item[]"></td><td><input type="text" class="form-control" id="Qty[]"></td><td><input type="text" class="form-control" id="Harga[]"></td><td><input type="text" class="form-control" id="Subtotal[]" readonly></td><td><button class="btn btn-md remScnt_item"><i class="fa fa-trash"></i></button></td></tr>').appendTo(scntDiv);
                i++;
                return false;
            });

            $(document).on("click", ".remScnt_item", function() {
                if (i > 1) {
                    $(this).parents('tr').remove();
                    i--;
                }
                return false;
            });
        });
    </script>

    <script>
        $("#Tanggal").datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });
    </script>


</body>

</html>