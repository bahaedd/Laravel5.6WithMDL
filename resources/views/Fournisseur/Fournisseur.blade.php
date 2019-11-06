<!doctype html>
	<html lang>
		@include('Fournisseur/include/head')
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
				@include('Fournisseur/include/headerFornisseur')
			     @include('Fournisseur/include/sidebarFornisseur')
	<main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content mdl-shadow--8dp" style="margin : 100px; margin-bottom : 10px; padding: 10px;">
          <div class="mdl-info-box-with-button mdl-cell mdl-cell--3-col-desktop mdl-shadow--8dp mdl-color--deep-orange" style="height: 100px;">
              <div class="info-box-icon  mdl-color-text--white" style="height: 100%;width: 80px;display:flex;-webkit-flex-flow: row wrap;justify-content: space-around;font-size: 50px;color: #fff !important;">
              <i class="material-icons" style="display: flex;align-items: center;font-size: 30px;">email</i>
              
              <div class="ib-body mdl-color-text--white" style="padding: 15px 10px 2px 10px;position: absolute;left: 80px; right: 0;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;color: #fff !important; display: block;">
              <span style="font-size: 14px; font-weight: 400; line-height: 20px;">Messages</span>
              <div class="ib-subtitle" style="font-size: 25px;padding: 5px 0px 5px 0px; white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">1,255</div>
              </div>
            </div>
          </div>
           <div class="mdl-info-box-with-button mdl-cell mdl-cell--3-col-desktop mdl-shadow--8dp mdl-color--red" style="height: 100px;">
              <div class="info-box-icon  mdl-color-text--white" style="height: 100%;width: 80px;display:flex;-webkit-flex-flow: row wrap;justify-content: space-around;font-size: 50px;color: #fff !important;">
              <i class="material-icons" style="display: flex;align-items: center;font-size: 30px;">comment</i>
              
              <div class="ib-body mdl-color-text--white" style="padding: 15px 10px 2px 10px;position: absolute;left: 80px; right: 0;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;color: #fff !important; display: block;">
              <span style="font-size: 14px; font-weight: 400; line-height: 20px;">Comments</span>
              <div class="ib-subtitle" style="font-size: 25px;padding: 5px 0px 5px 0px; white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">2,256</div>
              </div>
            </div>
          </div>
            <div class="mdl-info-box-with-button mdl-cell mdl-cell--3-col-desktop mdl-shadow--8dp mdl-color--blue" style="height: 100px;">
              <div class="info-box-icon  mdl-color-text--white" style="height: 100%;width: 80px;display:flex;-webkit-flex-flow: row wrap;justify-content: space-around;font-size: 50px;color: #fff !important;">
              <i class="material-icons" style="display: flex;align-items: center;font-size: 30px;">thumb_up</i>
              
              <div class="ib-body mdl-color-text--white" style="padding: 15px 10px 2px 10px;position: absolute;left: 80px; right: 0;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;color: #fff !important; display: block;">
              <span style="font-size: 14px; font-weight: 400; line-height: 20px;">Likes</span>
              <div class="ib-subtitle" style="font-size: 25px;padding: 5px 0px 5px 0px; white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">2,000</div>
              </div>
            </div>
          </div>
            <div class="mdl-info-box-with-button mdl-cell mdl-cell--3-col-desktop mdl-shadow--8dp mdl-color--blue" style="height: 100px;">
              <div class="info-box-icon  mdl-color-text--white" style="height: 100%;width: 80px;display:flex;-webkit-flex-flow: row wrap;justify-content: space-around;font-size: 50px;color: #fff !important;">
              <i class="material-icons" style="display: flex;align-items: center;font-size: 30px;">notifications</i>
              
              <div class="ib-body mdl-color-text--white" style="padding: 15px 10px 2px 10px;position: absolute;left: 80px; right: 0;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;color: #fff !important; display: block;">
              <span style="font-size: 14px; font-weight: 400; line-height: 20px;">Notifications</span>
              <div class="ib-subtitle" style="font-size: 25px;padding: 5px 0px 5px 0px; white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">50</div>
              </div>
            </div>
          </div></div>
            <div class="mdl-grid demo-content mdl-shadow--8dp" style="margin-top 10px; margin-bottom 120px; margin-left:100px; margin-right:100px;">
            	<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp hb-full-width hb-data-table hb-data-table--center hb-data-table--middle">
										
                                        <thead>
                                            <caption>Revenues</caption>
                                        </thead>
                                        <tbody>
                                            
                                    	<tr>
                                        	<td>Last Day</td>
                                        	<td>0.00$</td>
                                        	
                                    	</tr>
                                            <tr>
                                        	<td>Last Month</td>
                                        	<td>0.00$</td>
                                        	
                                    	</tr>
                                            <tr>
                                        	<td>Last Week</td>
                                        	<td>0.00$</td>
                                            </tr>
										<tr>
                                        	<td>Last Year</td>
                                        	<td>0.00$</td>
                                            </tr>
                                        </tbody>
                                     
                </table></div>
          
        
          
     
        
      </main>
					
					@include('Fournisseur/include/footerFornisseur')
				
			</div>
			<script src="{{ asset('js/theme.min.js') }}"></script>
		</body>
	</html>