<div class="widgetcontent">	

<form class="stdform" method="GET" action="/pdf" enctype="multipart/form-data">

        <p >
            <label for="rango_in">{{ __('Rango inicial') }}</label>
            <input type="date" name="rango_in" class="input-large" placeholder="" required>
        </p>

        <p>
            <label for="rango_fn">{{ __('Rango final') }}</label>
            <div class="col-md-4"><input type="date" name="rango_fn" class="input-large" placeholder="" required></div> 
            
        </p>
        
        <p align="center" ><button class="btn btn-success" type="submit">Generar PDF</button></p>
         
  
</form>
</div>