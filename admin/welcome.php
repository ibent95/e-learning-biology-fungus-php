<div class="row">
                    <div class="col-md-12">
                     <h2>Online Examination Learning App</h2>   
                        <h5>Welcome administrator , Love to see you back. </h5> 
                    </div>
                </div>
				<br/>
				
<?php echo"<div class='row'>
                <div class='col-md-3 col-sm-6 col-xs-6'>           
			<div class='panel panel-back noti-box'>
                <span class='icon-box bg-color-red set-icon'>
                    <i class='fa fa-envelope-o'></i>
                </span>";
				$jmlsoal=mysql_num_rows(mysql_query("select * from tabel_soal"));
				echo"<div class='text-box' >
                    <p class='main-text'>$jmlsoal Issues</p>
                    <p class='text-muted'>Soal</p>
                </div>
             </div>
		     </div>
                    <div class='col-md-3 col-sm-6 col-xs-6'>           
			<div class='panel panel-back noti-box'>
                <span class='icon-box bg-color-green set-icon'>
                    <i class='fa fa-bars'></i>
                </span>";
				$jmluser=mysql_num_rows(mysql_query("select * from tabel_user"));
				echo"
                <div class='text-box' >
                    <p class='main-text'>$jmluser Users</p>
                    <p class='text-muted'>All Student</p>
                </div>
             </div>
		     </div>
                    <div class='col-md-3 col-sm-6 col-xs-6'>           
			<div class='panel panel-back noti-box'>
                <span class='icon-box bg-color-blue set-icon'>
                    <i class='fa fa-bell-o'></i>
                </span>";
				$jmlnilai=mysql_num_rows(mysql_query("select * from tabel_nilai"));
				echo"
                <div class='text-box' >
                    <p class='main-text'>$jmlnilai Nilai</p>
                    <p class='text-muted'>Grade Publish</p>
                </div>
             </div>
		     </div>
                    <div class='col-md-3 col-sm-6 col-xs-6'>           
			<div class='panel panel-back noti-box'>
                <span class='icon-box bg-color-brown set-icon'>
                    <i class='fa fa-rocket'></i>
                </span>";
				$jmladmin=mysql_num_rows(mysql_query("select * from admin"));
				echo"
                <div class='text-box' >
                    <p class='main-text'>$jmladmin Admin</p>
                    <p class='text-muted'>Administrator</p>
                </div>
             </div>
		     </div>
			</div>"; ?>				
				
				
			
              

	<p class="main-text">52 Important Issues to Fix </p>
                    
                    <p class="text-muted">
                          <span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                          </span>
                    </p>
					
					<p class="text-muted">
                          <span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                          </span>
                    </p>
					
					<p class="text-muted">
                          <span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                          </span>
                    </p>