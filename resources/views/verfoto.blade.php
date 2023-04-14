<h1>Foto</h1>
<?php $prom=preg_replace('([^A-Za-z0-9 ])', '', $img)?>
<div><img src="../../resources/img/<?php echo strtolower($prom) ?>.jpg" alt="" style="margin:0 auto;max-height:100px !important;"></div>

<a href="{{url('startPage')}}">Volver</a>