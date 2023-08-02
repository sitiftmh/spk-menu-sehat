@extends('layout.mastercode_user')
@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-12 mt-4">
				<h2 class="m-0">PILIH KATEGORI MENU </h2>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-primary">
					<div class="card-body">
						<div class="card-body table-responsive p-0" style="height: 500px;">
							<form action="/jawaban/proses1" method="GET" enctype="multipart/form-data">
								@csrf
								<div class="card-body">
									<div class="form-group">
										<label>Kategori Menu</label>
										<select class="form-control select2" name="id_kategorimenu" id="id_kategorimenu">
											<option selected="selected">kategori menu</option>
											@foreach ($km as $e=>$ju)
											<option value="{{$ju->kategori_menu}}">{{$ju->kategori_menu}}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group">
										<div class="card-footer" >
											<button type="submit" name="submit" class="btn btn-success btn-sm float-right" style="width: 100%;">PILIH KATEGORI MENU</button>
											<a href="/user-data"></a>
										</div>
									</div>
                                    <input type="hidden" name="bmr" value="{{ $bmr }}">
                                    <input type="hidden" id="bmi" name="bmi" value="{{$bmi}}">
                                    <input type="hidden" id="bmi_category" name="bmi_category" value="{{$bmi_category}}">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
