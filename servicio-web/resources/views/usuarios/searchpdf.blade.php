<form class="form-group" method="GET" action="/pdf" enctype="multipart/form-data">
<div class="form-group">
	<div class="input-group">
        <div class="form-group">
            <label for="rango_in" class="col-md-4 col-form-label text-md-right">{{ __('Rango inicial') }}</label>
            <input type="date" name="rango_in" placeholder="">
        </div>

        <div class="form-group">
            <label for="rango_fn" class="col-md-4 col-form-label text-md-right">{{ __('Rango final') }}</label>
            <input type="date" name="rango_fn" placeholder="">
        </div>

        <div class="form-group">
            <center><button class="btn btn-success" type="submit">Generar PDF</button>            
        </div>
	</div>
</div>
</form>