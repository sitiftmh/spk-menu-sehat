@extends('layout.mastercode_user')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 mt-4">
                    <br><br><h2 class="m-0">Masukkan Detail Dibawah Untuk Mendapatkan Hasil Perhitungan BMR</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form method="get" action="{{ route('index_user') }}">

                        <div class="form-group mb-2">
                            <label for="age">Umur:</label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="gender">Jenis Kelamin:</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                <option value="male">Laki-Laki</option>
                                <option value="female">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group mb-2">
                            <label for="weight">Berat (kg):</label>
                            <input type="number" class="form-control" id="weight" name="weight" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="height">Tinggi (cm):</label>
                            <input type="number" class="form-control" id="height" name="height" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" id="calculate" class="btn btn-primary">Calculate</button>
                        </div>
                        <input type="text" id="bmr" name="bmr" readonly hidden>
                        <input type="text" id="bmi" name="bmi" readonly hidden>
                        <input type="text" id="bmi_category" name="bmi_category" readonly hidden>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('form').on('submit', function (event) {
                event.preventDefault();

                let age = $('#age').val();
                let gender = $('#gender').val();
                let weight = $('#weight').val();
                let height = $('#height').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '{{ route('bmr') }}',
                    method: 'POST',
                    data: {
                        age: age,
                        gender: gender,
                        weight: weight,
                        height: height
                    },
                    success: function (response) {

                        $('#bmr').val(response['bmr']);
                        $('#bmi').val(response['bmi']);
                        $('#bmi_category').val(response['bmi_category']);

                        $('form').off('submit').submit();
                    },
                    error: function (xhr, status, error) {
                        console.log(error)
                    }
                });
            });
        });
    </script>
@endpush
