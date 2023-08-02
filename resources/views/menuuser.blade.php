@extends('layout.mastercode_user')
@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-12">
				<br><br><h2 class="m-0">DAFTAR MENU</h2>
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
						<div class="card-body table-responsive p-0" style="height: 550px;">
							<table class="table table-bordered table-head-fixed text-nowrap">
							<thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Menu</th>
                                        <th>Karbohidrat</th>
                                        <th>Gula</th>
                                        <th>Lemak</th>
                                        <th>Protein</th>
                                        <th>Kalori</th>
                                        <th>Kategori Menu</th>
                                    </tr>
                                </thead>
                                @foreach($menu as $index => $m)
                                <tr>
                                    <td>{{$index + $menu->firstitem()}}</td>
                                    <td>{{$m->daftar_menu}}</td>
                                    <td>{{$m->karbohidrat}} gr</td>
                                    <td>{{$m->gula}} gr</td>
                                    <td>{{$m->lemak}} gr</td>
                                    <td>{{$m->protein}} gr</td>
                                    <td>{{$m->kalori}} Kkal</td>
                                    <td>{{$m->id_kategorimenu}}</td>
								@endforeach
							</table>
							<div class="card-footer">
								{{ $menu->links() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection