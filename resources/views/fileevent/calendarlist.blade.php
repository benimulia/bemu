<div class="form-group text-right">Bulan : 
  <select class="form-control-sm" style=" display: inline-block !important;" id="months">
	  	<?php 
	  		$month = date('m');
	  		for ($i=$month; $i <= 12 ; $i++) { 
	  			echo "<option id='". (int)$i ."'>".date('F',strtotime("01-".$i."-2019"))."</option>";
	  		}
	  	 ?>
  		<script type="text/javascript">
  			window.onload = function(){
  				
  				function printEvents(month)
  				{
  					var a = new Date();
			        var weekdays = new Array(7);
			        weekdays[0] = "Minggu";
			        weekdays[1] = "Senin";
			        weekdays[2] = "Selasa";
			        weekdays[3] = "Rabu";
			        weekdays[4] = "Kamis";
			        weekdays[5] = "Jumat";
			        weekdays[6] = "Sabtu";
			        var months = new Array(12);
			        months[0] = "Desember";
			        months[1] = "Januari";
			        months[2] = "Februari";
			        months[3] = "Maret";
			        months[4] = "April";
			        months[5] = "Mei";
			        months[6] = "Juni";
			        months[7] = "Juli";
			        months[8] = "Agustus";
			        months[9] = "September";
			        months[10] = "Oktober";
			        months[11] = "November";
  						var html="";
			//   		var ajaxAllMhs = new XMLHttpRequest();
			//   		ajaxAllMhs.open( "GET" , "json.blade.php" , true );
			//   		ajaxAllMhs.onreadystatechange = function () {
			// 			if ( this.readyState == 4 && this.status == 200 ) {
							var listTanggal = {!! json_encode($events->toArray(), JSON_HEX_TAG) !!};
							listTanggal.forEach(function(item){

								if ( month !=  Number(item.tanggalAkhir.substring(5,7)) &&  month != Number(item.tanggalAwal.substring(5,7)) )
									return;
								var check = item.tanggalAwal != item.tanggalAkhir;
								if (check){
									html +="<div class='col-2 text-center'><h1 class='display-5'><span class='badge badge-secondary'>" + item.tanggalAwal.substring(8,10) +"</span></h1><h4>" + months[item.tanggalAwal.substring(5,7)%12].substring(0,3) + "</h4></div>";
									html+="<div class='col-2 text-center'><h1 class='display-5'><span class='badge badge-secondary'>" + item.tanggalAkhir.substring(8,10) +"</span></h1><h4>" + months[item.tanggalAkhir.substring(5,7)%12].substring(0,3) + "</h4></div>";
								}
								else{
									html+="<div class='col-4 text-right'><h1 class='display-5'><span class='badge badge-secondary'>" + item.tanggalAkhir.substring(8,10) +"</span></h1><h4>" + months[item.tanggalAkhir.substring(5,7)%12].substring(0,3)+ "</h4></div>";	
								}
								if ( item.nama.length>16){
									item.nama = item.nama.substring(0,16);
									item.nama += "...";
								}
								html+="<div class='col-8'><h5 class='text-uppercase'><strong>" + item.nama + "</strong></h5><ul class='list-inline'><li class='list-inline-item'><i class='fa fa-calendar-o' aria-hidden='true'></i> " ;
								if ( check)
								{
									html+=weekdays[item.tanggalAwal.substring(8,10)%7].substring(0,3) + " - " + weekdays[item.tanggalAkhir.substring(8,10)%7].substring(0,3);
								}
								else
								{
									html +=weekdays[item.tanggalAwal.substring(8,10)%7].substring(0,3);
								}
								html+="</li><li class='list-inline-item'><i class='fa fa-clock-o' aria-hidden='true'></i> " + item.jamAwal+":"+item.menitAwal + " - ";
								if ( item.jamAkhir == null || item.menitAkhir == null)
								{
									html+="Selesai";
								}

								else
								{
									html+=item.jamAkhir+":"+item.menitAkhir;
								}
								html+="</li></ul>";

								if ( item.deskripsi != null)
								{
									html+="<p class='d-none' id='"  + item.id +  "'>" + item.deskripsi + "</p>"
									html+= "<p><a onclick=\"document.getElementById('" + item.id+  "').classList.remove('d-none'); this.style.display='none'\">Read more</a></p>";
								}
								html+="</div>"
							})
			// 			}	
						document.getElementById('ev').innerHTML = html;
			// 		};
					
			// 		ajaxAllMhs.send();
  	// 			}


			

           
        }
        	var select = document.getElementById('months');
            // printEvents(select.options[select.selectedIndex].id);

			select.onchange = function() {
     		   printEvents(this.options[this.selectedIndex].id);
    		}
    }
  		</script>
  		 
  </select>
</div>
<div class="container">
		
		<div class="row row-striped" id="ev">
			
		</div>
		
</div>