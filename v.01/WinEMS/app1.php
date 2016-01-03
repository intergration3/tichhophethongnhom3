
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<!--
/**
 * WinEMS Suite
 * WinEMS Field Data Collection Tool
 * Copyright (C) 2006, 2007, 2008, 2009 WinEMS
 * 
 * WinEMS is licensed under the GNU General Public License
 * and the Apache License, Version 2.0, as follows:
 *
 * This program is free software; you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed WITHOUT ANY WARRANTY; without even the 
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 * See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
-->


<HTML>
<HEAD><TITLE>WinEMS - Field Data Collection</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">

<LINK media=all href="../rico/rico.css" type=text/css rel=Stylesheet>

<SCRIPT src="../rico/prototype.js" type=text/javascript></SCRIPT>
<SCRIPT src="../rico/rico112.js" type=text/javascript></SCRIPT>
<SCRIPT src="../rico/util.js" type=text/javascript></SCRIPT>


<LINK media=all href="../datepicker/datepicker.css" type=text/css rel=Stylesheet>
<script lang="javascript" src="../datepicker/datepicker.js"></script>


<META content="MSHTML 6.00.2800.1498" name=GENERATOR></HEAD>
<BODY onload=javascript:bodyOnLoad() style="background-color:linen">

<SCRIPT>
    // create array of all items to be initialized on load
	var onloads = new Array();
</SCRIPT>

<form id='pcrdata' target='_blank' action='' method='POST'>

<div class="roundNormal" style="PADDING-LEFT:0px; MARGIN-LEFT:0px; WIDTH: 100%; height:38px; BACKGROUND-COLOR: #1f669b;  COLOR: WHITE">
	<div class="header leftpadding"><span><b>WinEMS - Field Data Collection &copy;2006-2009 WinEMS</span> <span style="float:right">Ambulance: 4330-101</span></b></div>
	<div class="leftpadding">(click on title bars to open/close)</div>
</div>

<br/>
<div class="leftpadding;clear" style="margin-bottom: 12px; background-color: linen; width:100%">
<a class="button" href='javascript:openPanel(0)'><span>Dispatch</span></a>
<a class="button" href='javascript:openPanel(1)'><span>Demographics</span></a>
<a class="button" href='javascript:openPanel(2)'><span>Problem</span></a>
<a class="button" href='javascript:openPanel(3)'><span>Treatment</span></a>
<a class="button" href='javascript:openPanel(4)'><span>Disposition</span></a>
<a class="button" href='javascript:openPanel(5)'><span>Notes</span></a>

<a class="button" href='javascript:openPanel(6)'><span>Authorization</span></a>
<a class="button" href='javascript:openPanel(7)'><span>APCF</span></a>

<div style="xbackground-color:linen; FLOAT: left; MARGIN-LEFT: 2px; WIDTH: 10px; MARGIN-RIGHT: 4px; HEIGHT: 26px important"></div>

<a class="button" href="javascript:openPanels(1)"><span>Expand All</span></a> 
<a class="button" href="javascript:openPanels(2)"><span>Close All</span></a>

<div style="xbackground-color:linen; FLOAT: left; MARGIN-LEFT: 2px; WIDTH: 10px; MARGIN-RIGHT: 4px; HEIGHT: 26px important"></div>

<a class="button" href="javascript:saveRun(2)"><span>Generate PCR</span></a>

<div style="xbackground-color:linen; FLOAT: left; MARGIN-LEFT: 2px; WIDTH: 10px; MARGIN-RIGHT: 4px; HEIGHT: 26px important"></div>
<div style="xbackground-color:linen; FLOAT: left; MARGIN-LEFT: 2px; WIDTH: 10px; MARGIN-RIGHT: 4px; HEIGHT: 26px important"></div>

<a class="button" href='app1.knowledge\surgery\index.html' target=_blank><span>Reference</span></a>

</div>
<br/>
<div  xstyle="height:550px;overflow:scroll;margin-top:-10px">
<TABLE WIDTH=100% BORDER=1>
  <TBODY>
  <TR>
    <TD>
	    <DIV id=accordionExample style="BORDER-TOP: 0px solid; MARGIN-TOP: 0px; WIDTH: 100%; xHEIGHT: 500px;">
    
	      	<!-- PANEL ONE -->
	      	<DIV id=panel1 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>D i s p a t c h</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content >
			<!--
/**
 * WinEMS
 * Copyright (C) 2006, 2007, 2008, 2009 WinEMS
 * 
 * WinEMS is licensed under the GNU General Public License
 * and the Apache License, Version 2.0, as follows:
 *
 * This program is free software; you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed WITHOUT ANY WARRANTY; without even the 
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 * See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
-->
				<!-- CONTENT: BEGIN -->
				<table border=0 width=80%>
				    <tr style="display:none">
				    	<td>1</td> <td>a</td>
				    	<td>2</td> <td>b</td>
				    	<td>3</td> <td>c</td>
				    	<td>4</td> <td>d</td>
				    	<td>5</td> <td>e</td>
				    	<td>6</td> <td>f</td>
				    </tr>
					<tr>
						<td>Date</td>				<td><input name='emsDate'   id='emsDate'  class="date" onclick="displayDatePicker(this.name, this);"/></td>  
						<td>Run ID:</td>			<td name='emsSequence'  id='emsSequence'></td>  
						<td><!--Agency--></td>	    <td>

													</td>  
						<td>Veh. ID</td>			<td colspan=2><input name='emsVehicleID' id='emsVehicleID' /></td>
						
						<td colspan=2 rowspan=4 align=right>
							<table style="border:1px solid black">
								<tr><td colspan=2 align=center>Mileage</td></tr>
								<tr><td>Begin</td><td><input name="emsMileageBegin"  id="emsMileageBegin"  onchange="calcMileage()"/></td></tr>
								<tr><td>End</td><td><input name="emsMileageEnd" id="emsMileageEnd" onchange="calcMileage()"/></td></tr>
								<tr><td onclick="calcMileage()">Total</td><td><span name="calcMileage" id="calcMileage">0</span><input name="emsCalcMileage" id="emsCalcMileage" type="hidden" value=""/></td></tr>
							</table>
						</td>

					</tr>

					<tr>
						<td colspan=2>Agency Name</td>		

						<td colspan=4>
							<select name='dis.AgencyNumber' name='dis.AgencyName' onchange="applySelectText(this.name, 'dis.AgencyName')">
								<option>&lt;Select&gt;</option>
								<option value="001">Chevra Hatzoloh of Rockland County</option>
								<option value="002">Congers Valley Cottage Vol. Amb. Corps</option>
								<option value="003">Haverstraw Amb. Corps</option>
								<option value="004">Mobile Care</option>
								<option value="005">Nanuet Community Amb. Corps</option>
								<option value="006">New City Vol. Amb. Corps Rescue Squad Inc.</option>
								<option value="007">Nyack Community Amb. Corps</option>
								<option value="008">Pearl River Alumni Amb. Corp.</option>"
								<option value="009">Piermont Fire Department Amb.</option>"
								<option value="010">Ramapo Valley Amb. Corps</option>
								<option value="011">Sloatsburg Community Amb. Corps</option>
								<option value="012">South Orangetown Amb. Corps</option>
								<option value="013">Spring Hill Community Amb. Corps</option>
								<option value="014">Stony Point Amb. Corps</option>
								<option value="015">William Paul Faist Vol. Amb. Corps</option>"
							</select>
							<input style="display:none" name='dis.AgencyName' id='dis.AgencyName' />
						</td>


						<td colspan=2>Location</td>		<td>
														<select id='emsLocationCode' name='emsLocationCode' onchange="showLocationCode(this.name);applySelectText(this.name, 'emsLocationCodeName');">
															<option>&lt;Select&gt;</option>
															<option value="4338">Airmont</option>
															<option value="4335">Chestnut Ridge</option>
															<option value="4350">Clarkstown</option>
															<option value="4323">Grandview-on-Hudson</option>
															<option value="4351">Haverstraw</option>
															<option value="4327">Hillburn</option>
															<option value="4337">Kaser</option>
															<option value="7095">Kings County (all)</option>
															<option value="7093">Manhattan (Entire Borough)</option>
															<option value="4336">Montebello</option>
															<option value="4334">New Hempstead</option>
															<option value="4331">New Square</option>
															<option value="4324">Nyack</option>
															<option value="4352">Orangetown</option>
															<option value="4325">Piermont</option>
															<option value="4332">Pomona</option>
															<option value="4353">Ramapo</option>
															<option value="4330">Sloatsburg</option>
															<option value="4326">South Nyack</option>
															<option value="4328">Spring Valley</option>
															<option value="4354">Stony Point</option>
															<option value="4329">Suffern</option>
															<option value="4320">Upper Nyack</option>
															<option value="4333">Wesley Hills</option>
															<option value="4322">West Haverstraw</option>
														</select>
														<input style="display:none" name='emsLocationCodeName' id='emsLocationCodeName' />
														
													</td>
					</tr>


					<tr>
						<td colspan=2>Dispatch Info</td>	<td colspan=4><input name='emsDispatchInfo' class='wideInput'/></td>  
						<td colspan=2>L.Code</td><td><div id='dspLocationCode' style="display:none"></div></td>
						</td>
					</tr>


					<tr>
						<td colspan=2>Call Loc. &nbsp;&nbsp;&nbsp;<a href="javascript:gpsAddress()">[GPS]</a></td>	<td colspan=4><input name='emsCallLocation' class='wideInput'/></td>  
						<td colspan=2>L.Type</td>		<td>
														<select name='emsLocationType'>
															<option>&lt;Select&gt;</option>
															<option>Residence</option>
															<option>Health</option>
															<option>Farm</option>
															<option>Industrial</option>
															<option>Other Work</option>
															<option>Other Residence</option>
															<option>Road</option>
															<option>Other</option>
														</select>
													</td>
					</tr>


					<tr>
						<td valign=top colspan=2>Cross Street</td>			<td valign=top colspan=4><input name='emsCrossStreet' class='wideInput'/></td>  
						<td valign=top colspan=2>Care In Progress</td>		<td colspan=3>
																				<table width=100% style="border:1px solid black">
																					<tr>
																					<td align=left>
																						<input class='ckBox' name='emsCARE1' type='checkbox'/><span class='ckLabel'>None</span></input>
																						<input class='ckBox' name='emsCARE2' type='checkbox'/><span class='ckLabel'>Citizen</span></input>
																						<input class='ckBox' name='emsCARE3' type='checkbox' onClick='showOnCheck(this, "emsShld", "inline")'/><span class='ckLabel'>PD/FD</span></input>
																						<input class='ckBox' name='emsCARE5' type='checkbox'/><span class='ckLabel'>PAD Used</span></input>
																						<span class='ckLabel' id='emsCARE3V1' style="display:none">Shield#&nbsp;<input class='ckInputTiny' style="width:40px" name='emsShield' type='input'/></input></span>
																						
																					</td>
																					</tr>
																					<tr>
																					<td align=left>
																						<input class='ckBox' name='emsCareInProgress' type='checkbox' value='harry'/><span class='ckLabel'>Other First Responder</span></input>
																						<input class='ckBox' name='emsCARE4' type='checkbox' onClick='showOnCheck(this, "emsAgency", "inline")'><span class='ckLabel'>Other EMS</span></input>
																						<input class='ckBox' name='emsCareInProgress' type='checkbox' onclick='showOnCheck(this, "emsPhysName", "inline")'><span class='ckLabel'>Phys</span></input><input class='ckInputTiny' style="display:none;width:40px" name='emsPhysName' type='input'></input></span>																						
																						<span class='ckLabel' id='emsAgency' style="display:none">Agency&nbsp;<input class='ckInputTiny' style="width:80px" name='emsAgency' type='input'/></input></span>
																					</td>
																					</tr>
																				</table>
																				
																	</td>
					</tr>
					<tr>
						<td colspan=11>
																				<table width=100% style="border:1px solid black">
																					<tr>
																					  <td>Call Received</td>
																					  <td>On Route</td>
																					  <td>At Scene</td>
																					  <td>From Scene</td>
																					  <td>At Destination</td>
																					  <td>In Service</td>
																					  <td>In Quarters</td>
																					</tr>
																					<tr>
																					  <td><input name='emsReceived' id='emsCallTime'     class="date" onclick="pullTime(this)"/></td>
																					  <td><input name='emsOnRoute' id='emsBLSScene' class="date" onclick="pullTime(this)"/></td>
																					  <td><input name='emsAtScene' id='emsALSScene' class="date" onclick="pullTime(this)"/></td>
																					  <td><input name='emsFromScene' id='emsToHospital' class="date" onclick="pullTime(this)"/></td>
																					  <td><input name='emsAtDestination' id='emsAtHospital' class="date" onclick="pullTime(this)"/></td>
																					  <td><input name='emsInService' id='emsAtHospital' class="date" onclick="pullTime(this)"/></td>
																					  <td><input name='emsInQuarters' id='emsAtHospital' class="date" onclick="pullTime(this)"/></td>
																					</tr>
																				</table>
																	</td>
					</tr>

				</table>
				

					<div style="float:left;width:80%">

<!--
						<div class="contentHeader">
						 	<span class="inputLabel" style="width:13em">Call Received As:&nbsp;&nbsp;</span>
														<select id='emsCallReceived'>
															<option>&lt;Select&gt;</option>
															<option>Emergency</option>
															<option>Non Emergency</option>
															<option>Standby</option>
														</select>
						</div>
-->
						<div class="contentHeader">
						 	<span class="inputLabel" style="border:0px solid black;width:10em;margin-bottom:4px" >Call Received As:&nbsp;</span>
						 	<span class="inputLabel" style="border:0px solid black;width:20em;margin-bottom:4px" >
								<select name='emsCallType'>
									<option>&lt;Select&gt;</option>
									    <option value="001">Standby (001)</option>
										<option value="990">BLS (990)</option>
										<option value="995">BLS Emergency (995)</option>
										<option value="1000">ALS Level 1 (1000)</option>
										<option value="1005">ALS Level 1 Emergency (1005)</option>
										<option value="1010">ALS Level 2 (1010)</option>
										<option value="1015">Paramedic Intercept (1015)</option>
										<option value="1020">Specialty Care Transport (1020)</option>
										<option value="1025">Fixed Wing (Airplane) (1025)</option>
										<option value="1030">Rotary Wing (Helicopter) (1030)</option>
										<option value="B1">Body Removal (billing)</option>
										<option value="B2">Stand-by Chargeable (billing)</option>
										<option value="B3">Stand-by Non-chargeable (billing)</option>
										<option value="B4">Wheel Chair Transport (billing)</option>
										<option value="B5">Stretcher Transport (billing)</option>
										<option value="B6">Service Car Transport (billing)</option>
										<option value="4835">Refusal/No Transport (4835)</option>
										<option value="4840">No Transport-Treated and Release (4840)</option>
										<option value="4825">No Patient Found (4825)</option>
										<option value="-025">Not Applicable (-25)</option>
										<option value="-015">Not Reporting (-15)</option>
										<option value="-010">Not Known (-10)</option>
										<option value="-005">Not Available (-5)</option>
	
	
<!--	
										<option>ALS Non Emergency</option>
										<option>ALS Emergency</option>
										<option>ALS2</option>
										<option>BLS Non Emergency</option>
										<option>BLS Emergency</option>
										<option>SCT</option>
										<option>Paramedic Intercept</option>
										<option>Body Removal</option>
										<option>Stand By: Chargable</option>
										<option>Stand By: Non-Chargable</option>
										<option>Wheel Chair Transport</option>
										<option>Stretcher Tranport</option>
										<option>Service Car Transport</option>
										<option>Refusal � No Transport</option>
										<option>Treatment with no transport</option>
										<option>No Patient Found</option>
										<option>Stand Down</option>
										<option>Unknown</option>
-->
							</select>
							
						 </span>

						 <span class="inputLabel" style="border:0px solid black;width:10em;margin-bottom:4px" >&nbsp;&nbsp;Num. of Patients:</span><span class="inputLabel" style="border:0px solid black;width:20em;margin-bottom:4px" ><input class='narrowInput' name='emsNumPatients'/></span>
                            
						</div>		
							


						<div class="contentHeader" style="xborder:1px solid black">
						 	<span class="inputLabel" style="width:10em" >Dispatch Method:&nbsp;&nbsp;</span>
								<select name='emsDispatchMethod' id='emsDispatchMethod' onchange="checkDispatchMethod(this.name)">
									<option>&lt;Select&gt;</option>
									<option>911</option>
									<option>Emergency</option>
									<option>Walk-In</option>
									<option>Scheduled</option>
								</select>
						</div>

					</div>



					<div style="float:left;width:70%;">
						<div id=scheduledTransport  style="display:none; margin-left:1em; xborder:1px solid black">
							<div class="contentHeader">
							 	<span class="inputLabel" style="width:12em">Referring Physician:&nbsp;&nbsp;</span>
								<input class='wideInput' name='emsConditionCode'/>
							 	<span class="inputLabel" >UPIN:&nbsp;&nbsp;</span>
								<input class='mediumInput' name='emsUPIN'/>
							</div>
							<div class="contentHeader">
							 	<span class="inputLabel" style="width:18em">Certificate of Medical Necessity:&nbsp;&nbsp;</span>
								<input class='ckBox' name='emsProximity' type='radio' onchange="$('emsCOMN').value='TRUE'"><span class='ckLabel'>Yes</span></input>
								<input class='ckBox' name='emsProximity' type='radio' onchange="$('emsCOMN').value='FALSE'"><span class='ckLabel'>No</span></input>
								<input style="display:none" name="emsCOMN" id="emsCOMN"/>
							</div>
						</div>
					</div>





<!--				    <div class="contentHeader">
						 	<span class="inputLabel" style="width:13em">Condition Code:&nbsp;&nbsp;</span>
							<input class='inputMedium' name='emsConditionCode'/>
						</div>
-->
					
				

				<!-- CONTENT: END   -->

	      		</DIV>
	      	</DIV>
	      	
	      	<!-- PANEL TWO -->
	      	<DIV id=panel2 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>D e m o g r a p h i c s</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content>
			<!--
/**
 * WinEMS
 * Copyright (C) 2006, 2007, 2008, 2009 WinEMS
 * 
 * WinEMS is licensed under the GNU General Public License
 * and the Apache License, Version 2.0, as follows:
 *
 * This program is free software; you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed WITHOUT ANY WARRANTY; without even the 
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 * See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
-->
				<!-- CONTENT: BEGIN -->

				<table border=0 width=100%>
					<colgroup>
						<col width="10%"/>
						<col width="10%"/>
						<col width="10%"/>
						<col width="5%"/>
						<col width="5%"/>
						<col width="5%"/>
						<col width="5%"/>
						<col width="5%"/>
						<col width="5%"/>
						<col width="5%"/>
					</colgroup>
				    <tr style="display:none">
				    	<td>1</td> <td>2</td>
				    	<td>3</td> <td>4</td>
				    	<td>5</td> <td>6</td>			    	
				    	<td>7</td> <td>8</td>
				    	<td>9</td> <td>10</td>
				    </tr>

					<tr>
						<td colspan=1>First Name</td>	<td colspan=2><input name='emsFirstName' class='wideInput'/></td>  
						<td colspan=1>MI</td>	<td colspan=1><input name='emsMI' class='narrowInput'/></td>  
						<td colspan=2 align=right>Last Name</td>	<td colspan=4><input name='emsLastName'  class='wideInput'  style='width:70%'/></td>  
						<td/>
					</tr>
					
					<tr>
						<td colspan=1>Address &nbsp;&nbsp;&nbsp;<a href="javascript:locToDemog()">[Same]</a></td>		
						<td colspan=8><input id='emsAddress' name='emsAddress' class='wideInput' style='width:100%'/></td>  
						<td/>
					</tr>
					<tr>
						<td colspan=1>Apt/Unit #</td>	<td colspan=2><input name='emsApt'   class='wideInput'/></td>  
						<td/>
						<td colspan=1>Phone#1</td>	<td colspan=1>
						<input name='emsPhone1' id='emsPhone1' onKeyDown="javascript:return dFilter (event.keyCode, this, '(###)-###-####');" class='mediumInput'/></td>  
						<td/>
						<td colspan=1>Phone#2</td>	<td colspan=1>
						<input name='emsPhone2' onKeyDown="javascript:return dFilter (event.keyCode, this, '(###)-###-####');" class='mediumInput'/></td>  
						<td/>
					</tr>
					<tr>
						<td colspan=1>City</td>			<td colspan=2><input id='emsCity' name='emsCity' class='wideInput'/></td>  
						<td/>
						<td colspan=1>State</td>		
						<td colspan=1>
														<select id='emsState' name='emsState'>
															<option>&lt;Select&gt;</option>
															<OPTION VALUE="AL">Alabama</OPTION>
															<OPTION VALUE="AK">Alaska</OPTION>
															<OPTION VALUE="AZ">Arizona</OPTION>
															<OPTION VALUE="AR">Arkansas</OPTION>
															<OPTION VALUE="CA">California</OPTION>
															<OPTION VALUE="CO">Colorado</OPTION>
															<OPTION VALUE="CT">Connecticut</OPTION>
															<OPTION VALUE="DE">Delaware</OPTION>
															<OPTION VALUE="DC">District of Columbia</OPTION>
															<OPTION VALUE="FL">Florida</OPTION>
															<OPTION VALUE="GA">Georgia</OPTION>
															<OPTION VALUE="HI">Hawaii</OPTION>
															<OPTION VALUE="ID">Idaho</OPTION>
															<OPTION VALUE="IL">Illinois</OPTION>
															<OPTION VALUE="IN">Indiana</OPTION>
															<OPTION VALUE="IA">Iowa</OPTION>
															<OPTION VALUE="KS">Kansas</OPTION>
															<OPTION VALUE="KY">Kentucky</OPTION>
															<OPTION VALUE="LA">Louisiana</OPTION>
															<OPTION VALUE="ME">Maine</OPTION>
															<OPTION VALUE="MD">Maryland</OPTION>
															<OPTION VALUE="MA">Massachusetts</OPTION>
															<OPTION VALUE="MI">Michigan</OPTION>
															<OPTION VALUE="MN">Minnesota</OPTION>
															<OPTION VALUE="MS">Mississippi</OPTION>
															<OPTION VALUE="MO">Missouri</OPTION>
															<OPTION VALUE="MT">Montana</OPTION>
															<OPTION VALUE="NE">Nebraska</OPTION>
															<OPTION VALUE="NV">Nevada</OPTION>
															<OPTION VALUE="NH">New Hampshire</OPTION>
															<OPTION VALUE="NJ">New Jersey</OPTION>
															<OPTION VALUE="NM">New Mexico</OPTION>
															<OPTION VALUE="NY" selected>New York</OPTION>
															<OPTION VALUE="NC">North Carolina</OPTION>
															<OPTION VALUE="ND">North Dakota</OPTION>
															<OPTION VALUE="OH">Ohio</OPTION>
															<OPTION VALUE="OK">Oklahoma</OPTION>
															<OPTION VALUE="OR">Oregon</OPTION>
															<OPTION VALUE="PA">Pennsylvania</OPTION>
															<OPTION VALUE="PR">Puerto Rico</OPTION>
															<OPTION VALUE="RI">Rhode Island</OPTION>
															<OPTION VALUE="SC">South Carolina</OPTION>
															<OPTION VALUE="SD">South Dakota</OPTION>
															<OPTION VALUE="TN">Tennessee</OPTION>
															<OPTION VALUE="TX">Texas</OPTION>
															<OPTION VALUE="UT">Utah</OPTION>
															<OPTION VALUE="VT">Vermont</OPTION>
															<OPTION VALUE="VA">Virginia</OPTION>
															<OPTION VALUE="WA">Washington</OPTION>
															<OPTION VALUE="WV">West Virginia</OPTION>
															<OPTION VALUE="WI">Wisconsin</OPTION>
															<OPTION VALUE="WY">Wyoming</OPTION>
															<OPTION VALUE="VI">Virgin Islands</OPTION>
															<OPTION VALUE="AS">American Samoa</OPTION>
															<OPTION VALUE="GU">Guam</OPTION>
														</select>
						</td>
						<td/>
						<td colspan=1>Zip</td>			<td colspan=2><input id='emsZip' name='emsZip' onKeyDown="javascript:return dFilter (event.keyCode, this, '#####-####');"	 class='mediumInput'/></td>

					</tr>

					<tr>
						<td colspan=1>DOB</td>	<td colspan=1><input name='emsDOB' onKeyDown="javascript:return dFilter (event.keyCode, this, '##/##/####');"    class='date'/></td>
						<td>Age &nbsp; &nbsp <input name='emsAge' class='narrowInput' onchange='setAge(this)'/></td>
						<td/>
						<td colspan=1>Gender</td>			
						<td colspan=1>
														<select name='emsGender'>
															<option>&lt;Select&gt;</option>
															<option value="0">Female</option>
															<option value="1">Male</option>
															<option value="3">Unknown</option>
														</select>
						</td>
						<td/>
						<td colspan=1>SS#</td>				<td colspan=1><input name='emsSS'  onKeyDown="javascript:return dFilter (event.keyCode, this, '###-##-####');" 	  class='mediumInput'/></td>
						<td/>
					</tr>

					<tr>
						<td colspan=2>Emergency Contact</td>		<td colspan=5><input id='emsEmergencyContact' name='emsEmergencyContact' class='wideInput' style='width:100%'/></td>
																	<td colspan=1>Phone#</td>	<td colspan=1><input name='emsEmergencyPhone' onKeyDown="javascript:return dFilter (event.keyCode, this, '(###)-###-####');" class='mediumInput'/></td>  
						<td/>
					</tr>

					<tr>
						<td colspan=2>Physician Contact</td>		<td colspan=5><input name='emsPhysicianContact'  class='wideInput' style='width:100%'/></td>  
																	<td colspan=1>Phone#</td>	<td colspan=1><input name='emsPhysicianPhone' onKeyDown="javascript:return dFilter (event.keyCode, this, '(###)-###-####');" class='mediumInput'/></td>  
						<td/>
					</tr>


				</table>

				<a href="javascript:toggleInsurance('emsInsuranceInfo')">Insurance Information</a>
				
				<div id='emsInsuranceInfo' style="display:none">
					<hr/>

					<table border=0 width=100%>
					<colgroup>
						<col width="50%"/>
						<col width="50%"/>
					</colgroup>
					<tr>
						<td>Primary Insurance Policy</td>  <td>Secondary Insurance Policy</td>
					</tr>
					<tr>
						<td>
							<select name='emsPrimaryInsuranceType'>
								<option>&lt;Select&gt;</option>
								<option>Auto Insurance</option>
								<option>Commercial</option>
								<option>Group</option>
								<option>Health Maintenance Organization</option>
								<option>Individual</option>
								<option>Litigation</option>
								<option>Long-term Disability</option>
								<option>Medicaid</option>
								<option>Medicare Conditionally Primary</option>
								<option>Medicare Part B</option>
								<option>Medicare Primary</option>
								<option>Medicare Sec. Black Lung</option>
								<option>Medicare Sec. Disabled Ben. Under Age 65 w/large Grp Plan</option>
								<option>Medicare Sec. End Stage renal Disease</option>
								<option>Medicare Sec. No-Fault Ins. Incl. Auto is Primary</option>
								<option>Medicare Sec. Other Liability Insurance is Primary</option>
								<option>Medicare Sec. Pub. Health Svc. (PHS) or Other Fed. Agency</option>
								<option>Medicare Sec. Veterans Administration</option>
								<option>Medicare Sec. Workers Compensation</option>
								<option>Medicare Sec. Working Age Beneficiary</option>
								<option>Medigap (3051)</option>
								<option>Medigap Part B</option>
								<option>Personal Payment (Cash � No Insurance)</option>
								<option>Supplemental</option>
								<option>Workers Compensation (3051)</option>
								<option>Other</option>
							</select>						
						</td>
						<td>
							<select name='emsSecondaryInsuranceType'>
								<option>&lt;Select&gt;</option>
								<option>Auto Insurance</option>
								<option>Commercial</option>
								<option>Group</option>
								<option>Health Maintenance Organization</option>
								<option>Individual</option>
								<option>Litigation</option>
								<option>Long-term Disability</option>
								<option>Medicaid</option>
								<option>Medicare Conditionally Primary</option>
								<option>Medicare Part B</option>
								<option>Medicare Primary</option>
								<option>Medicare Sec. Black Lung</option>
								<option>Medicare Sec. Disabled Ben. Under Age 65 w/large Grp Plan</option>
								<option>Medicare Sec. End Stage renal Disease</option>
								<option>Medicare Sec. No-Fault Ins. Incl. Auto is Primary</option>
								<option>Medicare Sec. Other Liability Insurance is Primary</option>
								<option>Medicare Sec. Pub. Health Svc. (PHS) or Other Fed. Agency</option>
								<option>Medicare Sec. Veterans Administration</option>
								<option>Medicare Sec. Workers Compensation</option>
								<option>Medicare Sec. Working Age Beneficiary</option>
								<option>Medigap (3051)</option>
								<option>Medigap Part B</option>
								<option>Personal Payment (Cash � No Insurance)</option>
								<option>Supplemental</option>
								<option>Workers Compensation (3051)</option>
								<option>Other</option>
							</select>						
						</td>
					</tr>
					<tr>
						<td>
								<div class="contentHeader">
								 	<span class="inputLabel" style="width:8em">Company:&nbsp;&nbsp;</span>
									<input class='wideInput' name='emsPrimaryInsCompany'/>

								 	<span class="inputLabel" style="width:8em">Address:&nbsp;&nbsp;</span>
									<input class='widiumInput' name='emsPrimaryInsCompany'/><br/>

								 	<span class="inputLabel" style="width:4em">Phone:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany' onKeyDown="javascript:return dFilter (event.keyCode, this, '(###)-###-####');"/>

								 	<span class="inputLabel" style="width:4em">Group#:&nbsp</span>
									<input class='mediumInput' name='emsPrimaryInsCompany'/><br/>

								 	<span class="inputLabel" style="width:4em">Policy:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany'/>

								 	<span class="inputLabel" style="width:8em">Policy Holder:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany'/>

								 	<span class="inputLabel" style="width:4em">SS#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany' onKeyDown="javascript:return dFilter (event.keyCode, this, '###-##-####');"/>

								 	<span class="inputLabel" style="width:4em">DOB:&nbsp;&nbsp;</span>
									<input name='emsPICDOB'  class="date" onclick="displayDatePicker(this.name, this);"/><br/>

								 	<span class="inputLabel" style="width:4em">Medicare#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsMedicare'/>

								 	<span class="inputLabel" style="width:4em">Medicaid#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsMedicaid'/>

								 	<span class="inputLabel" style="width:4em">Claim#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsClaim'/>							
								</div>					
						</td>
						
						<td>
								<div class="contentHeader">
								 	<span class="inputLabel" style="width:8em">Company:&nbsp;&nbsp;</span>
									<input class='wideInput' name='emsPrimaryInsCompany'/>

								 	<span class="inputLabel" style="width:8em">Address:&nbsp;&nbsp;</span>
									<input class='widiumInput' name='emsPrimaryInsCompany'/><br/>

								 	<span class="inputLabel" style="width:4em">Phone:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany' onKeyDown="javascript:return dFilter (event.keyCode, this, '(###)-###-####');"/>

								 	<span class="inputLabel" style="width:4em">Group#:&nbsp</span>
									<input class='mediumInput' name='emsPrimaryInsCompany'/><br/>

								 	<span class="inputLabel" style="width:4em">Policy:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany'/>

								 	<span class="inputLabel" style="width:8em">Policy Holder:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany'/>

								 	<span class="inputLabel" style="width:4em">SS#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany' onKeyDown="javascript:return dFilter (event.keyCode, this, '###-##-####');"/>

								 	<span class="inputLabel" style="width:4em">DOB:&nbsp;&nbsp;</span>
									<input name='emsPICDOB'  class="date" onclick="displayDatePicker(this.name, this);"/><br/>

								 	<span class="inputLabel" style="width:4em">Medicare#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsMedicare'/>

								 	<span class="inputLabel" style="width:4em">Medicaid#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsMedicaid'/>

								 	<span class="inputLabel" style="width:4em">Claim#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsClaim'/>							
								</div>					
						</td>
					</tr>
					
					</table>
				</div>
				
<br/><br/>



				<!-- CONTENT: END   -->
	      		</DIV>
	      	</DIV>

	      	<!-- PANEL THREE -->
	      	<DIV id=panel3 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>P r e s e n t i n g&nbsp;&nbsp;P r o b l e m</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content style="overflow:scroll">
			<!--
/**
 * WinEMS
 * Copyright (C) 2006, 2007, 2008, 2009 WinEMS
 * 
 * WinEMS is licensed under the GNU General Public License
 * and the Apache License, Version 2.0, as follows:
 *
 * This program is free software; you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed WITHOUT ANY WARRANTY; without even the 
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 * See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
-->
				<!-- CONTENT: BEGIN -->
				
				<table border=0>
				<tr>
					<td><input class='ckBox' name='emsIsTrauma'   onclick='toggleTrauma(this)' type='checkbox'/><span class='ckLabel'>Trauma</input></span></td>
					<td><input class='ckBox' name='emsAlsOnScene' onclick='toggleALS(this)' type='checkbox'/><span class='ckLabel'>ALS On Scene</input></span></td>
				</tr>
				</table>
				
				<table id='emsComplaintTrauma' border=0 width=100%>
					<tr>
						<td>Chief Complaint - Trauma:</td>
					</tr>
					<tr>
						<td><textarea name="emsChiefComplaintTrauma" style="width:100%" rows=5></textarea></td>
					</tr>
				</table>
				
				<table id='emsComplaintMedical' border=0 width=100%>
					<tr>
						<td>Chief Complaint - Medical:</td>
					</tr>
					<tr>
						<td><textarea name="emsChiefComplaintMedical" style="width:100%" rows=5></textarea></td>
					</tr>
				</table>

				<table id='emsInjuryMechanism' border=0 width=100%>
					<tr>
						<td>Mechanism of Injury</td>
					</tr>
					<tr>
						<td valign=top style="xborder: solid thin rgb(0,0,0); border:1px solid black">
							<table width=100%>
								<tr>
								<td align=left>
									<input class='ckBox' name='emsMI1' type='checkbox'/><span class='ckLabel'>MVA</span></input></span>
									<input class='ckBox' name='emsMI5' type='checkbox'/><span class='ckLabel'>GSW</span></input></span>
									<input class='ckBox' name='emsMI6' type='checkbox'/><span class='ckLabel'>Knife</span></input></span>
									<input class='ckBox' name='emsMI4' type='checkbox'/><span class='ckLabel'>Unarmed Assault</input></span>
								</td>
								</tr>
								<tr>
								<td align=left>
									<input class='ckBox' name='emsMI2' type='checkbox'/><span class='ckLabel'>Struck By Vehicle</span></input></span>
									<input class='ckBox' name='emsMI7' type='checkbox'/><span class='ckLabel'>Machinery</input></span>
									<br/><input class='ckBox' name='emsMI3' type='checkbox'/><span class='ckLabel'>Fall of</input></span><input name="emsMI3V1" class="tinyInput" onkeyup="toCheck('emsMI3', this.value)" onchange="toCheck('emsMI7', this.value)"/><span class='ckLabel'>&nbsp;feet</input></span>
									<input class='ckBox' name='emsMI8' type='checkbox'/><span class='ckLabel'>Other:</input></span><input name="emsMI8V1" class="mediumInput" onkeyup="toCheck('emsMI8', this.value)" onchange="toCheck('emsMI8', this.value)"/><span class='ckLabel'></input></span>
								</td>
								</tr>
							</table>
						</td>

						<td  rowspan=1 valign=top style="border:1px solid black">
							<table width=100% height=100% >
								<tr>
								<td align=left>
									<input class='ckBox' name='emsMI9' type='checkbox'/><span class='ckLabel'>Extrication Req.</input></span><!--<input class="tinyInput"/><span class='ckLabel'>&nbsp;minutes</input></span>-->
								</td>
								</tr>
								<tr>
								<td align=left>
									<input name="emsMI9V1" class="tinyInput" onkeyup="toCheck('emsExtricationRequired', this.value)" onchange="toCheck('emsExtricationRequired', this.value)"/><span class='ckLabel'>&nbsp;minutes</input></span>
								</td>
								</tr>
							</table>
						</td>

						<td rowspan=1 valign=top style="border:1px solid black">
							<table width=100%>
								<tr>
								<td align=left>
									Seat Belt Used?&nbsp;&nbsp;
									<input class='ckBox' name='emsSeatBeltUsed' type='radio'><span class='ckLabel'>Yes</span></input>
									<input class='ckBox' name='emsSeatBeltUsed' type='radio'><span class='ckLabel'>No</span></input>
									<input class='ckBox' name='emsSeatBeltUsed' type='radio' checked><span class='ckLabel'>Unknown</span></input>
								</td>
								</tr>
								<tr>
								<td align=left>
									Belt Use Rep. By&nbsp;&nbsp;
									<input class='ckBox' name='emsMI11' type='checkbox'><span class='ckLabel'>Crew</span></input>
									<input class='ckBox' name='emsMI13' type='checkbox'><span class='ckLabel'>Patient</input></span>
									<input class='ckBox' name='emsMI12' type='checkbox'><span class='ckLabel'>Police</span></input>
									<input class='ckBox' name='emsMI14' type='checkbox'><span class='ckLabel'>Other</input></span>
								</td>
								</tr>
							</table>
						</td>

					</tr>

					<tr>
						<td>Presenting Problem</td>
					</tr>
					<tr>
						<td colspan=3 valign=top>
						<div id=presentingProblems name=presentingProblems style="width:150%;height:100px;border:0px solid black">

							<div class="columnList" style="width:15em">
								<ul>
										<li><input class='ckBox' name='emsPP1' type='checkbox'/><span class='ckLabel'>Airway&nbsp;Obstruction</span></input></span></li>
										<li><input class='ckBox' name='emsPP2' type='checkbox'/><span class='ckLabel'>Resp.&nbsp;Arrest</span></input></span></li>
										<li><input class='ckBox' name='emsPP3' type='checkbox'/><span class='ckLabel'>Resp.&nbsp;Distress</span></input></span></li>
										<li><input class='ckBox' name='emsPP4' type='checkbox'/><span class='ckLabel'>Cardiac&nbsp;Related</span></input></span></li>
										<li><input class='ckBox' name='emsPP5' type='checkbox'/><span class='ckLabel'>Cardiac&nbsp;Arrest</span></input></span></li>
								</ul>
							</div>

							<div class="columnList" style="width:15em">
								<ul>
										<li><input class='ckBox' name='emsPP6' type='checkbox'/><span class='ckLabel'>Alergic&nbsp;Reaction</span></input></span></li>
										<li><input class='ckBox' name='emsPP7' type='checkbox'/><span class='ckLabel'>Syncope</span></input></span></li>
										<li><input class='ckBox' name='emsPP8' type='checkbox'/><span class='ckLabel'>Stroke/CVA</span></input></span></li>
										<li><input class='ckBox' name='emsPP14' type='checkbox'/><span class='ckLabel'>Seizure</span></input></span></li>
										<li><input class='ckBox' name='emsPP18' type='checkbox'/><span class='ckLabel'>Shock</span></input></span></li>
								</ul>
							</div>
							<div class="columnList" style="width:15em">
								<ul>
										<li><input class='ckBox' name='emsPP9' type='checkbox'/><span class='ckLabel'>Gen.&nbsp;Illness/Malaise</span></input></span></li>
										<li><input class='ckBox' name='emsPP10' type='checkbox'/><span class='ckLabel'>Gastro.&nbsp;Distress</span></input></span></li>
										<li><input class='ckBox' name='emsPP11' type='checkbox'/><span class='ckLabel'>Diabetic&nbsp;Related</span></input></span></li>
										<li><input class='ckBox' name='emsPP13' type='checkbox'/><span class='ckLabel'>Uncons./Unresp.</span></input></span></li>
										<li><input class='ckBox' name='emsPP15' type='checkbox'/><span class='ckLabel'>Behavioral&nbsp;Disorder</span></input></span></li>
								</ul>
							</div>
							<div class="columnList" style="width:15em">
								<ul>
										<li><input class='ckBox' name='emsPP16' type='checkbox'/><span class='ckLabel'>Substance&nbsp;Abuse</span></input></span></li>
										<li><input class='ckBox' name='emsPP17' type='checkbox'/><span class='ckLabel'>Poisoning</span></input></span></li>
										<li><input class='ckBox' name='emsPP19' type='checkbox'/><span class='ckLabel'>Head&nbsp;Injury</span></input></span></li>
										<li><input class='ckBox' name='emsPP20' type='checkbox'/><span class='ckLabel'>Spinal&nbsp;Injury</span></input></span></li>
										<li><input class='ckBox' name='emsPP21' type='checkbox'/><span class='ckLabel'>Fracture/Disloc.</span></input></span></li>
								</ul>
							</div>
							<div class="columnList" style="width:15em">
								<ul>
										<li><input class='ckBox' name='emsPP22' type='checkbox'/><span class='ckLabel'>Amputation</span></input></span></li>
										<li><input class='ckBox' name='emsPP23' type='checkbox'/><span class='ckLabel'>Major&nbsp;Trauma:</span></input></span></li>
										<li><input class='ckBox' name='emsPP24' type='checkbox'/><span class='ckLabel'>-Blunt</span></input></span></li>
										<li><input class='ckBox' name='emsPP25' type='checkbox'/><span class='ckLabel'>-Penetrating</span></input></span></li>
										<li><input class='ckBox' name='emsPP26' type='checkbox'/><span class='ckLabel'>Soft&nbsp;Tissue&nbsp;Injury</span></input></span></li>
								</ul>
							</div>
							<div class="columnList" style="width:15em">
								<ul>
										<li><input class='ckBox' name='emsPP27' type='checkbox'/><span class='ckLabel'>Bleeding/Hemm.</span></input></span></li>
										<li><input class='ckBox' name='emsPP28' type='checkbox'/><span class='ckLabel'>OB/GYN</span></input></span></li>
										<li><input class='ckBox' id='emsBurnChk' name='emsBurnChk' type='checkbox'/><span class='ckLabel'>Burns:</span></input>
											<input class="narrowInput" id='emsBurnPct' name='emsBurnPct'></input>										
										</li>
										<li><input class='ckBox' name='emsPP34' type='checkbox'/><span class='ckLabel'>Other:</span></input></span></li>
										<li><input class="mediumInput" name="emsPP34V1" onkeyup="toCheck('emsOther', this.value)" onchange="toCheck('emsOther', this.value)"/></li>
								</ul>
							</div>
						</div>
						</td>
					</tr>
					
				</table>
				<div style="width:100%;clear:left">

<div id="miscMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: General</span></DIV>
<select size="20" id="miscMapListBox" onchange="mapSelect('miscMapListBox','traumaMapItems', 'General: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="ABN CLINICAL FINDING NEC">ABN CLINICAL FINDING NEC</option>
					<option value="ALCOHOL ABUSE*">ALCOHOL ABUSE*</option>
					<option value="ANAPHYLACTIC SHOCK">ANAPHYLACTIC SHOCK</option>
					<option value="BACTERIAL INFECTION NOS">BACTERIAL INFECTION NOS</option>
					<option value="CVA">CVA</option>
					<option value="DERMATITIS NOS">DERMATITIS NOS</option>
					<option value="DROWNING/NONFATAL SUBMER">DROWNING/NONFATAL SUBMER</option>
					<option value="EFFECT REDUCED TEMP NOS">EFFECT REDUCED TEMP NOS</option>
					<option value="EFFECTS ELECTRIC CURRENT">EFFECTS ELECTRIC CURRENT</option>
					<option value="EFFECTS OF LIGHTNING">EFFECTS OF LIGHTNING</option>
					<option value="FRACTURE NOS-CLOSED">FRACTURE NOS-CLOSED</option>
					<option value="HEAT CRAMPS">HEAT CRAMPS</option>
					<option value="HEAT EXHAUSTION NOS">HEAT EXHAUSTION NOS</option>
					<option value="HEMORRHAGE NOS">HEMORRHAGE NOS</option>
					<option value="HYPERHIDROSIS">HYPERHIDROSIS</option>
					<option value="HYPOTHERMIA">HYPOTHERMIA</option>
					<option value="IMPAIRED FASTING GLUCOSE">IMPAIRED FASTING GLUCOSE</option>
					<option value="INJURY MLT SITE/SITE NEC">INJURY MLT SITE/SITE NEC</option>
					<option value="JOINT PAIN-MULT JTS">JOINT PAIN-MULT JTS</option>
					<option value="JOINT PAIN-PELVIS">JOINT PAIN-PELVIS</option>
					<option value="LATE EFF SPINAL CORD INJ">LATE EFF SPINAL CORD INJ</option>
					<option value="MALFUNC CARD DEV/GRF NOS">MALFUNC CARD DEV/GRF NOS</option>
					<option value="MALFUNC GU DEV/GRAFT NOS">MALFUNC GU DEV/GRAFT NOS</option>
					<option value="OPEN WOUND SITE NOS">OPEN WOUND SITE NOS</option>
					<option value="OTHER CONVULSIONS">OTHER CONVULSIONS</option>
					<option value="OTHER GENERAL SYMPTOMS">OTHER GENERAL SYMPTOMS</option>
					<option value="POISON-ALCOHOL DETERRENT">POISON-ALCOHOL DETERRENT</option>
					<option value="POST TRAUM PULM INSUFFIC">POST TRAUM PULM INSUFFIC</option>
					<option value="SECONDARY/RECUR HEMORR">SECONDARY/RECUR HEMORR</option>
					<option value="SEPTICEMIA NOS">SEPTICEMIA NOS</option>
					<option value="SEXUAL ASSAULT">SEXUAL ASSAULT</option>
					<option value="SURGICAL COMPLICAT NOS">SURGICAL COMPLICAT NOS</option>
					<option value="TOXIC EFF GAS/VAPOR NOS">TOXIC EFF GAS/VAPOR NOS</option>
					<option value="TOXIC EFFECT VENOM">TOXIC EFFECT VENOM</option>
					<option value="UNSPECIFIED DRUG OR MEDICINAL SUBSTANCE">UNSPEC. DRUG OR MED. SUBSTANCE</option>
</select>
</div>

<div id="headMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Head</span></DIV>
<select size="16" id="headMapListBox" onchange="mapSelect('headMapListBox','traumaMapItems', 'Head: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="ACUTE DELIRIUM">ACUTE DELIRIUM</option>
					<option value="CEREBROVASC DISEASE NOS">CEREBROVASC DISEASE NOS</option>
					<option value="COMA">COMA</option>
					<option value="CONTUSION OF EYE NOS">CONTUSION OF EYE NOS</option>
					<option value="DRUG MENTAL DISORDER NOS">DRUG MENTAL DISORDER NOS</option>
					<option value="EYE DISORDER NOS">EYE DISORDER NOS</option>
					<option value="LACK OF COORDINATION">LACK OF COORDINATION</option>
					<option value="MENINGOCOCCAL INFECT NOS">MENINGOCOCCAL INFECT NOS</option>
					<option value="PSYCHOSIS NOS">PSYCHOSIS NOS</option>
					<option value="PSYCHOSIS NOS">PSYCHOSIS NOS</option>
					<option value="REACT PSYCHOSIS NEC/NOS">REACT PSYCHOSIS NEC/NOS</option>
					<option value="SUBACUTE DELIRIUM">SUBACUTE DELIRIUM</option>
					<option value="TRANS ALTER AWARENESS">TRANS ALTER AWARENESS</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

<div id="neckMapList" style="position:absolute; z-index:10; PADDING-RIGHT:1px; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Neck</span></DIV>
<select size="5" id="neckMapListBox" onchange="mapSelect('neckMapListBox','traumaMapItems', 'Neck: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="CHR AIRWAY OBSTRUCT NEC">CHR AIRWAY OBSTRUCT NEC</option>
					<option value="SYMP INVOL HEAD/NECK NEC">SYMP INVOL HEAD/NECK NEC</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

<div id="thoraxMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Thorax</span></DIV>
<select size="19" id="thoraxMapListBox" onchange="mapSelect('thoraxMapListBox','traumaMapItems', 'Thorax: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="BACK DISORDER NOS">BACK DISORDER NOS</option>
					<option value="BACKACHE NOS">BACKACHE NOS</option>
					<option value="CARDIAC ARREST">CARDIAC ARREST</option>
					<option value="CARDIAC DYSRHYTHMIA NOS">CARDIAC DYSRHYTHMIA NOS</option>
					<option value="CHEST PAIN NOS">CHEST PAIN NOS</option>
					<option value="EMPHYSEMA NEC">EMPHYSEMA NEC</option>
					<option value="HEART FAILURE NOS">HEART FAILURE NOS</option>
					<option value="INTERNAL INJ NOS-CLOSED">INTERNAL INJ NOS-CLOSED</option>
					<option value="INTERNAL INJURY NOS-OPEN">INTERNAL INJURY NOS-OPEN</option>
					<option value="OTHER LUNG DISEASE NEC">OTHER LUNG DISEASE NEC</option>
					<option value="PALPITATIONS">PALPITATIONS</option>
					<option value="PERSISTENT VOMITING">PERSISTENT VOMITING</option>
					<option value="RESPIRATORY ABNORM NEC">RESPIRATORY ABNORM NEC</option>
					<option value="RESPIRATORY ARREST">RESPIRATORY ARREST</option>
					<option value="RESPIRATORY FAILURE">RESPIRATORY FAILURE</option>
					<option value="SHORTNESS OF BREATH">SHORTNESS OF BREATH</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

<div id="abdomenMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Abdomen</span></DIV>
<select size="7" id="abdomenMapListBox" onchange="mapSelect('abdomenMapListBox','traumaMapItems', 'Abdomen: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="ABDMNAL PAIN UNSPCF SITE">ABDMNAL PAIN UNSPCF SITE</option>
					<option value="GASTRITIS/DUODENITIS NOS*">GASTRITIS/DUODENITIS NOS*</option>
					<option value="NAUSEA WITH VOMITING">NAUSEA WITH VOMITING</option>
					<option value="NORMAL DELIVERY">NORMAL DELIVERY</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

<div id="groinMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Groin</span></DIV>
<select size="7" id="groinMapListBox" onchange="mapSelect('groinMapListBox','traumaMapItems', 'Groin: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="ABDMNAL PAIN UNSPCF SITE">ABDMNAL PAIN UNSPCF SITE</option>
					<option value="GASTRITIS/DUODENITIS NOS*">GASTRITIS/DUODENITIS NOS*</option>
					<option value="NAUSEA WITH VOMITING">NAUSEA WITH VOMITING</option>
					<option value="NORMAL DELIVERY">NORMAL DELIVERY</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

<div id="armMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Arm</span></DIV>
<select size="6" id="armMapListBox" onchange="mapSelect('armMapListBox','traumaMapItems', 'Arm: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="AMPUTAT">AMPUTAT</option>
					<option value="AMPUTATION FINGER">AMPUTATION FINGER</option>
					<option value="OPEN WOUND OF SHOULDER">OPEN WOUND OF SHOULDER</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

<div id="legMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:900px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Leg</span></DIV>
<select size="5" id="legMapListBox" onchange="mapSelect('legMapListBox','traumaMapItems', 'Leg: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="AMPUTAT LEG UNILAT NOS">AMPUTAT LEG UNILAT NOS</option>
					<option value="AMPUTATION TOE">AMPUTATION TOE</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

				<table id='emsBodyMaps' border=1>
				<tr> 
					<td rowspan=4>
						<img style="display:none" onclick="mapClearLists()" id="ron1" usemap="#ronmap1" alt="Image Map" ismap src="../media/ron1.gif"/>
						<img style="display:none" onclick="mapClearLists()" id="ron2" usemap="#ronmap2" alt="Image Map" ismap src="../media/ron2.gif"/>
					</td> 
					<td rowspan=4 valign=top><textarea onclick="mapClearLists()" style="width:250px" id=traumaMapItems  rows=33></textarea></td>
				</tr>
				</table>
				</div>

				<map name="ronmap1">
				  <area name="head" shape="circle" coords="117,50,35" href="javascript:mapShow('headMapList')"  alt="Head" OnMouseOver="window.status='Head'; return true" OnMouseOut="window.status=''; return true">
				  <area name="head" shape="circle" coords="369,36,31" href="javascript:mapShow('headMapList')"  alt="Head" OnMouseOver="window.status='Head'; return true" OnMouseOut="window.status=''; return true">
				  <area name="neck" shape="rect" coords="89,79,144,98" href="javascript:mapShow('neckMapList')"  alt="Neck" OnMouseOver="window.status='Neck'; return true" OnMouseOut="window.status=''; return true">
				  <area name="neck" shape="rect" coords="349,62,390,81" href="javascript:mapShow('neckMapList')"  alt="Neck" OnMouseOver="window.status='Neck'; return true" OnMouseOut="window.status=''; return true">
				  <area name="thorax" shape="poly" coords="89,94,69,102,77,120,78,138,83,159,151,159,155,141,156,116,160,99,134,91" href="javascript:mapShow('thoraxMapList')"  alt="Thorax" OnMouseOver="window.status='Thorax'; return true" OnMouseOut="window.status=''; return true">
				  <area name="thorax" shape="poly" coords="350,79,338,90,324,97,329,131,336,157,400,157,406,136,410,101,413,92,385,80" href="javascript:mapShow('thoraxMapList')"  alt="Thorax" OnMouseOver="window.status='Thorax'; return true" OnMouseOut="window.status=''; return true">
				  <area name="abdomen" shape="poly" coords="337,156,338,170,330,192,330,206,404,206,403,189,397,171,400,157" href="javascript:mapShow('abdomenMapList')"  alt="Abdomen" OnMouseOver="window.status='Abdomen'; return true" OnMouseOut="window.status=''; return true">
				  <area name="arm" shape="poly" coords="66,103,58,113,54,136,52,161,42,181,34,206,29,224,2,235,16,237,5,257,14,251,9,267,21,258,19,270,27,258,31,265,39,233,71,184,76,145" href="javascript:mapShow('armMapList')"  alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
				  <area name="arm" shape="poly" coords="164,101,177,127,184,167,198,198,215,224,235,234,222,237,238,257,223,253,229,268,212,258,207,266,199,232,163,185,155,148,155,145" href="javascript:mapShow('armMapList')"  alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
				  <area name="arm" shape="poly" coords="320,97,311,114,307,150,294,182,281,216,267,222,253,233,265,234,252,255,268,249,265,262,277,259,280,249,285,257,292,229,321,184,331,146" href="javascript:mapShow('armMapList')"  alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
				  <area name="arm" shape="poly" coords="415,94,429,134,430,157,446,197,456,223,478,235,471,238,480,256,468,253,474,267,465,267,458,254,452,270,442,230,418,188,403,142" href="javascript:mapShow('armMapList')"  alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
				  <area name="leg" shape="poly" coords="75,219,79,294,82,310,77,350,79,399,74,434,72,445,85,458,94,447,96,413,99,380,105,357,105,337,116,250,103,224,103,223" href="javascript:mapShow('legMapList')"  alt="Leg" OnMouseOver="window.status='Leg'; return true" OnMouseOut="window.status=''; return true">
				  <area name="leg" shape="poly" coords="125,254,132,321,138,336,136,358,141,388,140,420,143,445,165,444,159,416,161,351,160,297,163,265,155,213,134,222" href="javascript:mapShow('legMapList')"  alt="Leg" OnMouseOver="window.status='Leg'; return true" OnMouseOut="window.status=''; return true">
				  <area name="abdomen" shape="poly" coords="82,159,84,180,77,217,91,217,104,224,130,222,133,222,156,212,149,187,152,160" href="javascript:mapShow('abdomenMapList')"  alt="Abdomen" OnMouseOver="window.status='Abdomen'; return true" OnMouseOut="window.status=''; return true">
				  <area name="groin" shape="poly" coords="111,224,134,220,127,252,116,253,105,227" href="javascript:mapShow('groinMapList')"  alt="Groin" OnMouseOver="window.status='Groin'; return true" OnMouseOut="window.status=''; return true">
				  <area name="leg" shape="poly" coords="331,207,324,233,326,264,330,293,333,312,331,334,326,349,332,387,329,426,327,445,342,457,351,443,347,427,352,414,348,403,358,332,368,246,370,241,386,329,387,369,391,411,397,433,403,460,423,443,409,407,415,352,407,319,409,276,410,231,405,207" href="javascript:mapShow('legMapList')"  alt="Leg" OnMouseOver="window.status='Leg'; return true" OnMouseOut="window.status=''; return true">
				</map>


				<map name="ronmap2">
				  <area name="head" shape="poly" coords="264,16,288,41,291,79,285,103,260,117,218,104,182,97,168,87,173,69,179,37,205,11,242,9,268,18" href="javascript:mapShow('headMapList')"  alt="Head" OnMouseOver="window.status='Head'; return true" OnMouseOut="window.status=''; return true">
				  <area name="thorax" shape="poly" coords="186,99,186,120,258,127,254,114,189,97" href="javascript:mapShow('thoraxMapList')"  alt="Thorax" OnMouseOver="window.status='Thorax'; return true" OnMouseOut="window.status=''; return true">
				  <area name="arm" shape="poly" coords="184,114,172,114,110,138,61,134,41,121,22,128,26,153,56,154,110,166,150,154,167,136,186,119" href="javascript:mapShow('armMapList')"  alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
				  <area name="arm" shape="poly" coords="263,122,279,134,317,186,353,205,384,203,401,217,386,234,361,229,356,224,299,207,271,178,267,151,258,125" href="javascript:mapShow('armMapList')"  alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
				  <area name="leg" shape="poly" coords="153,245,143,267,96,315,102,383,101,397,69,413,91,429,112,418,132,414,129,394,135,334,132,327,173,306,154,246" href="javascript:mapShow('legMapList')"  alt="Leg" OnMouseOver="window.status='Leg'; return true" OnMouseOut="window.status=''; return true">
				  <area name="thorax" shape="poly" coords="187,122,150,155,142,203,265,220,271,180,263,141,255,125,186,119" href="javascript:mapShow('thoraxMapList')"  alt="Thorax" OnMouseOver="window.status='Thorax'; return true" OnMouseOut="window.status=''; return true">
				  <area name="abdomen" shape="poly" coords="144,202,263,219,257,242,245,257,205,300,199,280,187,277,178,280,171,286,169,298,154,248,144,217,143,202,143,203" href="javascript:mapShow('abdomenMapList')"  alt="Abdomen" OnMouseOver="window.status='Abdomen'; return true" OnMouseOut="window.status=''; return true">
				  <area name="groin" shape="circle" coords="188,296,16" href="javascript:mapShow('groinMapList')"  alt="Groin" OnMouseOver="window.status='Groin'; return true" OnMouseOut="window.status=''; return true">
				  <area name="leg" shape="poly" coords="247,269,258,305,255,337,255,358,221,413,237,437,229,443,201,430,189,422,198,398,207,365,218,354,211,320,196,301,245,262" href="javascript:mapShow('legMapList')"  alt="Leg" OnMouseOver="window.status='Leg'; return true" OnMouseOut="window.status=''; return true">
				</map>
				
				<!-- CONTENT: END   -->

				
				
								<!-- CONTENT: BEGIN -->

				<div style="width:100%;border:0px solid black">



					<div class=contentHeader>Past Medical History</div>
					<div class=contentTable style="width:95%;xheight:50px;border:1px solid black">						
						<div style="width:100%;">
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>None</span></input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>Hypertension</span></input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>Seizures</input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>Stroke</input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>Diabetes</input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>COPD</input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>Cardiac</input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>Asthma</input></span>
						</div>

					<br/><span class='ckLabel'>Medications: </span><textarea id=currMeds style="width:100%" rows=3></textarea>

						<div style="width:100%;">
													<input class='ckBox' id='emsAllergicTo' type='checkbox'/><span class='ckLabel'>Allergy to:</span></input></span><input class="mediumInput" onkeyup="toCheck('emsAllergicTo', this.value)" onchange="toCheck('emsAllergicTo', this.value)"/>
													<input class='ckBox' id='emsOther' type='checkbox'/><span class='ckLabel'>Other:</input></span></input></span><input class="wideInput" onkeyup="toCheck('emsOther', this.value)" onchange="toCheck('emsOther', this.value)"/>
						</div>
					</div>

					<div class=contentTable style="width:80%;xheight:140px;border:0px solid black">			
								
						<table border=0 width=100%>
							<tr>
								<td>Vital Signs <span class="hrefButton"><a href="javascript:addVitalRow()">[add]</a><a href="javascript:minusVitalRow()">[drop]</a></span></td>
							</tr>
							<tr>
								<td valign=top style="border:1px solid black">
									<table id="vitalTable" class=colTable width=100%>
									    <colgroup>
									      <col width=5%/>
									      <col width=10%/>
									      <col width=5%/>
									      <col width=7%/>
									      <col width=10%/>
									      <col width=10%/>
									      <col width=3%/>
									    </colgroup>
									    <thead>
										<tr>
											<th>Time</th>									
											<th>Respiration</th>									
											<th>Pulse/BP</th>									
											<th>Level of Conscousness</th>									
											<th>Pupils</th>									
											<th>Skin</th>									
											<th>Status</th>									
										</tr>
										</thead>





										<tbody id="vitalBody">
										<!------>
										<tr>
											<td align=left valign=top>
												<div class="columnList" style="width:6em;border:none">
													<input id=hour1.@ class="tinyInput"/>:<input id=minute1.@ class="tinyInput"/>
													<br/>
													<center><a href="javascript:setVitalTime('@')">[Now]</a></center>
												</div>
											</td>
											
											<td align=left>
												<div id="resp" class="columnList" style="width:7em;border:none">
													<ul>
														<li>Rate:<input class="tinyInput"/></li>
														<li><input class='ckBox' id='a' name='emsResp1.@' type='radio' checked><span class='ckLabel'>Regular</span></input></li>
														<li><input class='ckBox' id='b' name='emsResp1.@' type='radio'><span class='ckLabel'>Shallow</span></input></li>
														<li><input class='ckBox' id='c' name='emsResp1.@' type='radio'><span class='ckLabel'>Labored</span></input></li>
														<li>SP02:<input class="tinyInput"/></li>
													</ul>
												</div>
											</td>
											
											<td align=left>
												<div id="pulse" class="columnList" style="width:9em;border:none">
													<ul>
														<li>Rate:<input class="tinyInput"/></li>
														<li><input class='ckBox' id='a' name='emsResp2.@' type='radio' checked><span class='ckLabel'>Regular</span></input></li>
														<li><input class='ckBox' id='b' name='emsResp2.@' type='radio'><span class='ckLabel'>Irregular</span></input></li>
														<li/>
														<li>BP:<input class="tinyInput" name='emsResp2'/>/<input class="tinyInput"/></li>
													</ul>
												</div>
											</td>
											
											<td align=left>
												<div id="consciousness" class="columnList" style="width:8em;border:none;margin-top:10px">
													<ul>
														<li><input class='ckBox' id='a' name='emsResp3.@' type='radio' checked><span class='ckLabel'>Alert</span></input></li>
														<li><input class='ckBox' id='b' name='emsResp3.@' type='radio'><span class='ckLabel'>Voice</span></input></li>
														<li><input class='ckBox' id='c' name='emsResp3.@' type='radio'><span class='ckLabel'>Pain</span></input></li>
														<li><input class='ckBox' id='d' name='emsResp3.@' type='radio'><span class='ckLabel'>Unresponsive</span></input></li>
													</ul>
												</div>
											</td>
	
											<td align=left>
												<div id="pupils" class="columnList" style="width:10em;border:none">
													<ul style="text-align:center;">
														<li>Right<span class='ckLabel' style="border:0px solid black;width:30px"></span> Left
														<li><input class='ckBox' id='a' name='emsResp4a.@' type='radio' checked ></input>	<span class='ckLabel' style="border:0px solid black;width:70px">Normal</span> 	    	<input class='ckBox' id='a' name='emsResp4b.@' type='radio' checked ></input></li>
														<li><input class='ckBox' id='b' name='emsResp4a.@' type='radio'></input>			<span class='ckLabel' style="border:0px solid black;width:70px">Dilated</span>			<input class='ckBox' id='b' name='emsResp4b.@' type='radio'></input></li>
														<li><input class='ckBox' id='c' name='emsResp4a.@' type='radio'></input>			<span class='ckLabel' style="border:0px solid black;width:70px">Constricted</span>		<input class='ckBox' id='c' name='emsResp4b.@' type='radio' /></li>
														<li><input class='ckBox' id='d' name='emsResp4a.@' type='radio'></input>			<span class='ckLabel' style="border:0px solid black;width:70px">Sluggish</span>			<input class='ckBox' id='d' name='emsResp4b.@' type='radio' /></li>
														<li><input class='ckBox' id='e' name='emsResp4a.@' type='radio'></input>			<span class='ckLabel' style="border:0px solid black;width:70px">No Reaction</span>		<input class='ckBox' id='e' name='emsResp4b.@' type='radio' /></li>
													</ul>
												</div>
											</td>
	
											<td align=left>
												<div id="skin" class="columnList" style="width:12em;border:none">
													<div style="text-align:center"><input class='ckBox' name='emsResp5.@' type='radio' checked></input><span class='ckLabel'>Unremarkable</span></div>
													<ul>
	
														<li>
															<input class='ckBox' id='a' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel' style="border:0px solid black;width:40px">Cool</span>
															<input class='ckBox' id='b' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel'>Pale</span>
														</li>
														<li>
															<input class='ckBox' id='c' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel' style="border:0px solid black;width:40px">Warm</span>
															<input class='ckBox' id='d' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel'>Cyanotic</span>
														</li>
														<li>
															<input class='ckBox' id='e' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel' style="border:0px solid black;width:40px">Moist</span>
															<input class='ckBox' id='f' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel'>Flushed</span>
														</li>
														<li>
															<input class='ckBox' id='g' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel' style="border:0px solid black;width:40px">Dry</span>
															<input class='ckBox' id='h' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel'>Jaund.</span>
														</li>
	
													</ul>
												</div>
											</td>
	
											<td align=left>
												<div id="status" class="columnList" style="width:5em;border:none">
													<ul>
														<li><input class='ckBox' id='a' name='emsResp6.@' type='radio'><span class='ckLabel'>C</span></input></li>
														<li><input class='ckBox' id='b' name='emsResp6.@' type='radio'><span class='ckLabel'>U</span></input></li>
														<li><input class='ckBox' id='c' name='emsResp6.@' type='radio'><span class='ckLabel'>P</span></input></li>
														<li><input class='ckBox' id='d' name='emsResp6.@' type='radio'><span class='ckLabel'>S</span></input></li>
													</ul>
												</div>
											</td>
										</tr>
									</tbody>
									<!------>



	
									</table>
								</td>
							</tr>
						</table>				
					</div>

				</div>




				<!-- CONTENT: END   -->
	      		</DIV>
	      	</DIV>





	      	<!-- PANEL SIX -->
	      	<DIV id=panel6 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>T r e a t m e n t&nbsp;&nbsp;G i v e n</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content >
			<!--
/**
 * WinEMS
 * Copyright (C) 2006, 2007, 2008, 2009 WinEMS
 * 
 * WinEMS is licensed under the GNU General Public License
 * and the Apache License, Version 2.0, as follows:
 *
 * This program is free software; you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed WITHOUT ANY WARRANTY; without even the 
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 * See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
-->
				<!-- CONTENT: BEGIN -->
				<div style="width:100%;border:0px solid black">

					<div class=contentHeader>Treatment Given &nbsp;&nbsp;<a href="javascript:showMeds(1);">[Meds]</a> </div>
					<div class=contentTable style="width:100%;xheight:140px;border:0px solid black">			
								
						<table border=0 width=100%>
<!--
							<tr>
								<td>Treatment</td>
							</tr>
-->
							<tr>
								<td valign=top style="border:0px solid black">
									<table id="vitalTable" class=colTable width=100%>
									    <colgroup>
									      <col width=50%/>
									      <col width=50%/>
									    </colgroup>
<!--
									    <thead>
										<tr>
											<th>C1</th>									
											<th>C2</th>									
										</tr>
										</thead>
-->

										<tbody id="tbody">
										<tr>
											
											<td align=left xstyle="border:none">
												<div id="c1" class="columnList" style="width:100%;border:none">
	
													<span>Advanced Life Support (ALS)</span>

													<ul>

													<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>ET Tube</span></li>
													<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>NG Tube</span></li>
													<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Needle Cricothyroidotomy</span></li>

													<li><input class='ckBox' name='emsALS1' type='checkbox'/><span class='ckLabel'>EndoTracheal Tube (E/T)</span></input></li>

													<li><input class='ckBox' name='emsALS2' type='checkbox'/><span class='ckLabel'>EKG Monitored [Rythm(s):<input name="emsALS2V1" class="ckInputMedium" style="width:160px"/>]</span></li>


													<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Cardioversion No. Times&nbsp;<input id=defibNo class="ckInputTiny"/></span>
															<input class='ckBox ckControl' name='emsDefibType' type='radio'><span class='ckLabel'>Manual</span></input>
															<input class='ckBox ckControl' name='emsDefibType' type='radio'><span class='ckLabel'>Semi-auto.</span></input>
													</li>

													<li><input class='ckBox' name='emsALS3' type='checkbox'><span class='ckLabel'>Medication Administred</span></input></li>
													<li><input class='ckBox' name='emsALS4' type='checkbox'><span class='ckLabel'>IV Established Fluid&nbsp;<input id='emsALS4V1' class="ckInputMedium"/>&nbsp;Cath. Gauge:&nbsp;<input id='emsALS4V2a' class="ckInputTiny"/>:<input id='emsALS4V2b' class="ckInputTiny"/></span></li>

													<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>12 Lead</span></li>

													<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>I.V.&nbsp;&nbsp;<input id=iv class="ckInputMedium"/></span></li>
													<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>I.O.</span></li>
													<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Saline Lock</span></li>

													<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Monitor</span></li>


													<br/><br/><span>Basic Life Support (BLS)</span>

														<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Abdominal/Chest Thrust</span></li>
														<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>HyperExtension</span></li>
														<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Modified Jaw Thrust</span></li>

														<li><input class='ckBox' name='emsBLS1' type='checkbox'/><span class='ckLabel'>Airway Cleared</span></li>
														<li><input class='ckBox' name='emsBLS2' type='checkbox'/><span class='ckLabel'>Oral/Nasal Airway</span></li>
														<li><input class='ckBox' name='emsBLS3' type='checkbox'/><span class='ckLabel'>Esophageal Obturator/Gastric-Tube Airway (EOA/EGTAL)</span></li>
														<li><input class='ckBox' name='emsBLS4' type='checkbox'/><span class='ckLabel'>O2 Admin. @&nbsp;<input name="emsBLS4V1a" class="ckInputTiny"/>:<input name="emsBLS4V1b" class="ckInputTiny"/>&nbsp;L.P.M. Method:<input name="emsBLS4V2" class="ckInputMedium"/></span></li>

														<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Bag Valve Mask w/O2</span></li>
														<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Nasal Cannula</span></li>
														<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Nebulizer</span></li>

													</ul>
												</div>
											</td>
											
											<td align=left xstyle="border:none">
												<div id="c2" class="columnList" style="width:100%;border:none">
													<ul>

														<span>Basic Life Support (BLS)</span>
															
														<li><input class='ckBox' name='emsBLS5' type='checkbox'/><span class='ckLabel'>Suction Used</span></li>

														<li><input class='ckBox' name='emsBLS6' type='checkbox'/><span class='ckLabel'>Artificial Ventilation Method:<input name="emsBLS6V1" class="ckInputMedium" style="width:160px"/></span></li>
														<li><input class='ckBox' name='emsBLS7' type='checkbox'/><span class='ckLabel'>C.P.R. in progress on arrival by:<br/></span>
																<input class='ckBox ckControl' name='emsBLS7A' type='radio'><span class='ckLabel'>Citizen</span></input>
																<input class='ckBox ckControl' name='emsBLS7A' type='radio'><span class='ckLabel'>PD/FD/Other First Responder</span></input>
																<input class='ckBox ckControl' name='emsBLS7A' type='radio'><span class='ckLabel'>Other</span></input>
														</li>
														<li><input class='ckBox' name='emsBLS8' type='checkbox'/>
														<span class='ckLabel'>C.P.R. started @&nbsp;
														<input name="emsBLS8V1a" class="ckInputTiny"/>:<input name="emsBLS8V1b" class="ckInputTiny"/>&nbsp;&nbsp;Time from Arrest til CPR:&nbsp;<input name="emsBLS8V2a" class="ckInputTiny"/>:<input name="emsBLS8V2b" class="ckInputTiny"/>&nbsp;</span></li>

														<li><input class='ckBox' name='emsBLS9' type='checkbox'/><span class='ckLabel'>Defibrillation No. Times&nbsp;<input name="emsBLS9V1" class="ckInputTiny"/></span>
																<input class='ckBox ckControl' name='emsBLS9A' type='radio'><span class='ckLabel'>Manual</span></input>
																<input class='ckBox ckControl' name='emsBLS9A' type='radio'><span class='ckLabel'>Semi-auto.</span></input>
														</li>



														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Epi-Pen</span></li>
														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Insta-Glucose</span></li>
														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Irrigation</span></li>

														<li><input class='ckBox' name='emsBLS10' type='checkbox'/><span class='ckLabel'>Mast Inflated @&nbsp;<input name="emsBLS10V1a" class="ckInputTiny"/>:<input name="emsBLS10V1b" class="ckInputTiny"/></span></li>
														<li><input class='ckBox' name='emsBLS11' type='checkbox'/><span class='ckLabel'>Bleeding/Hemorrhage Controlled (Method:&nbsp;<input name="emsBLS11V1" class="ckInputMedium"/>)</span></li>
														<li><input class='ckBox' name='emsBLS12' type='checkbox'/><span class='ckLabel'>Spinal Immobilization Neck and Back</span></li>
														<li><input class='ckBox' name='emsBLS13' type='checkbox'/><span class='ckLabel'>Limb Immobilized by&nbsp;</span>
																<input class='ckBox ckControl' name='emsBLS13A' type='radio'><span class='ckLabel'>Fixation</span></input>
																<input class='ckBox ckControl' name='emsBLS13A' type='radio'><span class='ckLabel'>Traction</span></input>
														</li>
														
														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Backboard Immobil.:&nbsp;</span>
																<input class='ckBox ckControl' name='emsImmobType' type='radio'><span class='ckLabel'>Long</span></input>
																<input class='ckBox ckControl' name='emsImmobType' type='radio'><span class='ckLabel'>Short</span></input>
																<input class='ckBox ckControl' name='emsImmobType' type='radio'><span class='ckLabel'>Cervical Collar</span></input>
																<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<input class='ckBox ckControl' name='emsImmobType' type='radio'><span class='ckLabel'>Head Immobilizer</span></input>
																<input class='ckBox ckControl' name='emsImmobType' type='radio'><span class='ckLabel'>KED</span></input>
																<input class='ckBox ckControl' name='emsImmobType' type='radio'><span class='ckLabel'>Pediatric Immobilizer</span></input>
														</li>

														<li><input class='ckBox' name='emsBLS14' type='checkbox'/><span class='ckLabel'>Heat or Cold Applied</span></li>
														<li><input class='ckBox' name='emsBLS15' type='checkbox'/><span class='ckLabel'>Vomiting Induced @&nbsp;<input name="emsBLS15V1a" class="ckInputTiny"/>:<input name="emsBLS15V1b" class="ckInputTiny"/>&nbsp;Method:&nbsp;<input name="emsBLS15V2" class="ckInputMedium"/></span></li>
														<li><input class='ckBox' name='emsBLS16' type='checkbox'/><span class='ckLabel'>Restraints Applied:&nbsp;<input name="emsBLS16V1" class="ckInputMeduim" style="width:200px"/></span></li>
														<li><input class='ckBox' name='emsBLS17' type='checkbox'/><span class='ckLabel'>Baby Delivered @&nbsp;<input name="emsBLS17V1a" class="ckInputTiny"/>:<input name="emsBLS17V1b" class="ckInputTiny"/>&nbsp;In County:&nbsp;<input name="emsBLS17V2" class="ckInputMedium"/></span><br/>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<input class='ckBox ckControl' name='emsBLS17A' type='radio'><span class='ckLabel'>Alive</span></input>
																<input class='ckBox ckControl' name='emsBLS17A' type='radio'><span class='ckLabel'>Stillborn</span></input>

																<input class='ckBox ckControl' name='emsBLS17B' type='radio'><span class='ckLabel'>Male</span></input>
																<input class='ckBox ckControl' name='emsBLS17B' type='radio'><span class='ckLabel'>Female</span></input>
														</li>

														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>AED; #shocks:<input id=shocks class="ckInputTiny"/></span></li>
														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Bandaging</span></li>


														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Other:<input id=other class="ckInputWide" style="width:250px"/></span></li>


													</ul>
												</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>

					</div>


<div id="MedsList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Medication Info</span> &nbsp;&nbsp&nbsp <span><a href="javascript:showMeds(0)">[close]</a></span></DIV>
<table border="1" cellspacing="0">
<colgroup>
  <col style="display:none"/>
  <col/>
  <col/>
  <col/>
  <col/>
  <col/>
  <col/>
  <col/>
  <col/>
  <col/>
</colgroup>
<tr valign="bottom">
  <th width="22" bgcolor="#B0B0B0">�</th>
  <th width="213" nowrap="nowrap" align="center" bgcolor="#B0B0B0"><b>Medications</b></th>
  <th width="65" nowrap="nowrap" align="center" bgcolor="#B0B0B0"><b>Dosage Options</b></th>
  <th width="55" nowrap="nowrap" align="center" ><b></b></th>
  <th width="58" nowrap="nowrap" align="center" ><b></b></th>
  <th width="55" nowrap="nowrap" align="center" ><b></b></th>
  <th width="31" nowrap="nowrap" align="center" ><b></b></th>
  <th width="37" nowrap="nowrap" align="center" ><b></b></th>
  <th width="21" nowrap="nowrap" align="center" ><b></b></th>
  <th width="147" nowrap="nowrap" align="center" bgcolor="#B0B0B0"><b>IV Fluids</b></th></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>2</b></th>
  <td nowrap="nowrap">Narcan (Naloxone)</td>
  <td nowrap="nowrap" bgcolor="#969696">2mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Normal Saline (NS 0.9%)</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>3</b></th>
  <td nowrap="nowrap">Valium (Diazepam)</td>
  <td nowrap="nowrap" bgcolor="#969696">5mg</td>
  <td nowrap="nowrap" bgcolor="#969696">6mg</td>
  <td nowrap="nowrap" bgcolor="#969696">7mg</td>
  <td nowrap="nowrap" bgcolor="#969696">8mg</td>
  <td nowrap="nowrap" bgcolor="#969696">9mg</td>
  <td nowrap="nowrap" bgcolor="#969696">10mg</td>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">D5W</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>4</b></th>
  <td nowrap="nowrap">Versed (Midazolam)</td>
  <td nowrap="nowrap" bgcolor="#969696">1mg</td>
  <td nowrap="nowrap" bgcolor="#969696">2mg</td>
  <td nowrap="nowrap" bgcolor="#969696">10mgIM</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Ringers Lactate</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>5</b></th>
  <td nowrap="nowrap">Etomidate</td>
  <td nowrap="nowrap" bgcolor="#969696">.3mg/kg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>6�</b></th>
  <td nowrap="nowrap">Vasopressin</td>
  <td nowrap="nowrap" bgcolor="#969696">40 
  U</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0"><b>IV catheter guage</b></td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>7</b></th>
  <td nowrap="nowrap">Epi 1:1000</td>
  <td nowrap="nowrap" bgcolor="#969696">0.3mg</td>
  <td nowrap="nowrap" bgcolor="#969696">2mg 
  (ET)</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">8g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>8</b></th>
  <td nowrap="nowrap">Epi 1:10,000</td>
  <td nowrap="nowrap" bgcolor="#969696">1mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">10g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>9</b></th>
  <td nowrap="nowrap">Epi Drip</td>
  <td nowrap="nowrap" bgcolor="#969696">1ug/min</td>
  <td nowrap="nowrap" bgcolor="#969696">2ug/min</td>
  <td nowrap="nowrap" bgcolor="#969696">3ug/min</td>
  <td nowrap="nowrap" bgcolor="#969696">4ug/min</td>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">14g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>10</b></th>
  <td nowrap="nowrap">Amiodarone</td>
  <td nowrap="nowrap" bgcolor="#969696">300mg</td>
  <td nowrap="nowrap" bgcolor="#969696">150mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">16g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>11</b></th>
  <td nowrap="nowrap">Sodium Bicarb</td>
  <td nowrap="nowrap" bgcolor="#969696">44meq</td>
  <td nowrap="nowrap" bgcolor="#969696">88meq</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0"18g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>12</b></th>
  <td nowrap="nowrap">Magnisium Sulfate</td>
  <td nowrap="nowrap" bgcolor="#969696">2gm</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">20g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>13</b></th>
  <td nowrap="nowrap">Calcium Chloride (CaCl2)</td>
  <td nowrap="nowrap" bgcolor="#969696">1gm</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">22g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>14</b></th>
  <td nowrap="nowrap">Atropine Sulfate</td>
  <td nowrap="nowrap" bgcolor="#969696">0.5mg</td>
  <td nowrap="nowrap" bgcolor="#969696">1mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">24g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>15</b></th>
  <td nowrap="nowrap">NTG (nitroglycerin) 
  Tablets</td>
  <td nowrap="nowrap" bgcolor="#969696">1/150gr.</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>16�</b></th>
  <td nowrap="nowrap">NTG (nitroglycerin) 
  Spray</td>
  <td nowrap="nowrap" bgcolor="#969696">0.4mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0"><b>Positions</b></td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>17</b></th>
  <td nowrap="nowrap">Lidocaine</td>
  <td nowrap="nowrap" bgcolor="#969696">1.5mg/kg</td>
  <td nowrap="nowrap" bgcolor="#969696">75mg/kg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Standing</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>18</b></th>
  <td nowrap="nowrap">Lidocaine Drip</td>
  <td nowrap="nowrap" bgcolor="#969696">1mg/min</td>
  <td nowrap="nowrap" bgcolor="#969696">2mg/min</td>
  <td nowrap="nowrap" bgcolor="#969696">3mg/min</td>
  <td nowrap="nowrap" bgcolor="#969696">4mg/min</td>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Sitting</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>19</b></th>
  <td nowrap="nowrap">Dopamine</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Supine</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>20</b></th>
  <td nowrap="nowrap">Adenosine</td>
  <td nowrap="nowrap" bgcolor="#969696">6mg</td>
  <td nowrap="nowrap" bgcolor="#969696">12mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Prone</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>21</b></th>
  <td nowrap="nowrap">Cardizem (Diltiazem)</td>
  <td nowrap="nowrap" bgcolor="#969696">0.25mg/kg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Left Latarel Recumbant</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>22</b></th>
  <td nowrap="nowrap">Lasix (Furosemide)</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>23�</b></th>
  <td nowrap="nowrap">Morphine Sulfate</td>
  <td nowrap="nowrap" bgcolor="#969696">2mg</td>
  <td nowrap="nowrap" bgcolor="#969696">3mg</td>
  <td nowrap="nowrap" bgcolor="#969696">4mg</td>
  <td nowrap="nowrap" bgcolor="#969696">5mg</td>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>24�</b></th>
  <td nowrap="nowrap">Albuterol Sulfate</td>
  <td nowrap="nowrap" bgcolor="#969696">00.08%</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>25�</b></th>
  <td nowrap="nowrap">Metaproterenol</td>
  <td nowrap="nowrap" bgcolor="#969696">05%</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>26�</b></th>
  <td nowrap="nowrap">Solumedrol (Methylprednisolone)</td>
  <td nowrap="nowrap" bgcolor="#969696">125mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>27�</b></th>
  <td nowrap="nowrap">Decadron (Dexamethazone)</td>
  <td nowrap="nowrap" bgcolor="#969696">12mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>28�</b></th>
  <td nowrap="nowrap">Benadryl (Diphenhydramine)</td>
  <td nowrap="nowrap" bgcolor="#969696">50mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>29�</b></th>
  <td nowrap="nowrap">Dextrose</td>
  <td nowrap="nowrap" bgcolor="#969696">25gm</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>30�</b></th>
  <td nowrap="nowrap">Thiamine</td>
  <td nowrap="nowrap" bgcolor="#969696">100mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>31�</b></th>
  <td nowrap="nowrap">Ativan (Lorazepam)</td>
  <td nowrap="nowrap" bgcolor="#969696">2mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>32�</b></th>
  <td nowrap="nowrap">Tetracaine (Proparacaine 
  Hcl) 0.5%</td>
  <td nowrap="nowrap" bgcolor="#969696">1gtt</td>
  <td nowrap="nowrap" bgcolor="#969696">2gtt</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0"><b>33�</b></th>
  <td nowrap="nowrap">Oxytocin (Pitocin)</td>
  <td nowrap="nowrap" bgcolor="#969696">20U</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
</table>
</div>



<div id="MedsList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Medication Info</span> &nbsp;&nbsp&nbsp <span><a href="javascript:showMeds(0)">[close]</a></span></DIV>
</div>


<div id="MedsList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Medication Info</span> &nbsp;&nbsp&nbsp <span><a href="javascript:showMeds(0)">[close]</a></span></DIV>
</div>



<div id="MedsList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Medication Info</span> &nbsp;&nbsp&nbsp <span><a href="javascript:showMeds(0)">[close]</a></span></DIV>
</div>



				</div>
				<!-- CONTENT: END   -->
	      		</DIV>
	      	</DIV>



	      	<!-- PANEL SEVEN -->
	      	<DIV id=panel7 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>D i s p o s i t i o n</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content >
							<!-- CONTENT: BEGIN -->
				<div style="width:100%;border:0px solid black">

<div style="margin-top:10px"></div>

					<div style="width:100%">
					<input type=checkbox class=ckBox name='emsTransportedALS'><span class=contentHeader>Transported as ALS</span></input><br/>
					</div>
					
					<div class=contentHeader style="float:left;width:45%;height:200px;xborder:5px solid black"> Disposition Code:&nbsp;<input id=dispCode></input><br/>
						<span class='inputLabel'>Destination (Hospital/Non-Hospital)</span>
						<select rows="20" name='emsDestination' id='emsDestination' onchange="setDisposition(this.name)">
							<option>&lt;Select&gt;</option>
							<OPTGROUP LABEL="Hospitals">										
								<option value="926 (93)">Beth Israel Medical Center - Kings Highway Division</option>
								<option value="902 (41)">Brookdale Hospital Medical Center</option>
								<option value="923 (91)">Brooklyn Hopsital Caledonian Division</option>
								<option value="929 (95)">Brooklyn Hospital Center - Downtown</option>
								<option value="921 (42)">Coney Island Hospital</option>
								<option value="431">Good Samaritan of Suffern</option>
								<option value="437">Helen Hayes Hospital</option>
								<option value="916 (55)">Interfaith Medical Center - St. Johns</option>
								<option value="910 (46)">Interfaith Medical Center Jewish Hosp. Medical Center of Brooklyn</option>
								<option value="672 (48)">Kings County Hospital Center</option>
								<option value="934 (49)">Long Island College Hospital</option>
								<option value="913 (51)">Lutheran Medical Center</option>
								<option value="914 (53)">Maimonides Medical Center</option>
								<option value="905 (92)">New York Community Hospital of Brooklyn</option>
								<option value="915 (54)">New York Methodist Hospital</option>
								<option value="436">Nyack Hospital</option>
								<option value="917 (56)">St. Mary's Hospital of Brooklyn</option>
								<option value="438">Summit Park Hosp. - Rockland County Infirmary</option>
								<option value="671 (44)">University Hospial of Brooklyn</option>
								<option value="925 (90)">Veteran's Administration Hospital</option>
								<option value="920 (94)">Victory Memorial Hospital</option>
								<option value="903 (45)">Woodhull Medical and Mental Health Center</option>
								<option value="935 (58)">Wyckoff Heights Hospital</option>
							<OPTGROUP/">										
							<OPTGROUP LABEL="Non-Hospital Disposition">
								<option value="001">Nursing Home</option>
								<option value="002">Other Medical Facility</option>
								<option value="003">Residence</option>
								<option value="004">Treated by this unit and transported by another unit</option>
								<option value="005">Refused Medical Aid and/or Transport</option>
								<option value="006">Call Cancelled</option>
								<option value="007">Stand By Only</option>
								<option value="008">No Patient Found</option>
							<OPTGROUP/>
						</select>

						<div class="contentHeader" style="width:100%;xborder:0px solid black">
						 	<span class="inputLabel" style="width:10em">Proximity:&nbsp;&nbsp;</span>
							<input class='ckBox' name='emsProximity' type='radio'><span class='ckLabel'>In Area</span></input>
							<input class='ckBox' name='emsProximity' type='radio'><span class='ckLabel'>Out Of Area</span></input>
						</div>				
					
						<div class="contentHeader" style="width:100%; xborder:1px solid black;">
						 	<span class="inputLabel" style="width:8em;margin-bottom:4px" >Purpose:&nbsp;</span>
								<select name='emsTransportPurpose' style="xwidth:12em%">
									<option>&lt;Select&gt;</option>
									<option>Transferred to rehabilitation facility</option>
									<option>Transport for benefit of physician</option>
									<option>Transported for care of specialist</option>
									<option>Transported for nearness of family members</option>
									<option>Transported to nearest facility</option>
								</select>
							</span>
						</div>

						<div class="contentHeader" style="width:100%; xborder:1px solid black;">
						 	<span class="inputLabel" style="width:8em;margin-bottom:4px" >Ambulance Requested By:&nbsp;</span>
								<select name='' style="xwidth:12em%">
									<option>&lt;Select&gt;</option>
									<option>Patient</option>
									<option>Friend</option>
									<option>Family</option>
									<option>Hospital/Clinic/SNF</option>
									<option>Physician</option>
									<option>Police</option>
									<option>Renal Dialysis</option>
									<option>Witness</option>
								</select>
							</span>
						</div>
						

						<div id="c1" class="contentHeader" style="width:100%;xheight:100px;border:none">
							<span class='inputLabel' style="width:12em"><b>Type of Transport:</b></span>
								<select name='' style="xwidth:12em%">
									<option>&lt;Select&gt;</option>
									<option>Initial</option>
									<option>Return</option>
									<option>Family</option>
									<option>Transfer</option>
									<option>Round Trip</option>
								</select>
						</div>
						
						<div id="c1" class="contentHeader" style="width:100%;xheight:100px;border:none">
							<br/><span class='inputLabel' style="width:12em">Weight of Patient:</span><input id=other xclass="ckInputMedium"/>
							<br/><span class='inputLabel' style="width:12em">Purpose of Round Trip:</span><input id=other xclass="ckInputWide" style="width:70%"/>
							<br/><span class='inputLabel' style="width:12em">Reason for Stretcher:</span><input id=other xclass="ckInputWide"  style="width:70%"/>
						</div>					

					</div>  

					<div class=contentHeader style="float:left;width:45%;height:200px;xborder:5px solid black">						
						<div id="c1" class="columnList" style="width:30%;xheight:100px;border:none">
							<ul>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>DOA</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Obvious Death</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Cancelled</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Helicopter</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>RMA/AMA</span></li>
							</ul>
						</div>					
						<div id="c1" class="columnList" style="width:50%;xheight:100px;border:none">
							<ul>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>DNR</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Unfounded</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>MIA</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Transported by:<input id=transportBy class="ckInputMedium"/></span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Other:<input id=other class="ckInputWide"/></span></li>
							</ul>
						</div>					
					</div>


					<div class=contentHeader style="clear:both; width:100%">Transportation</div>
					
					<div class=contentTable style="width:100%;height:200px;border:1px solid black">						
						<div id="c1" class="columnList" style="width:20%;height:100px;border:none">
							<ul>
								<li><input class='ckBox' name='emsTRANS1' type='checkbox'/><span class='ckLabel'>Moved to ambulance on stretcher/backboard</span></li>
								<li><input class='ckBox' name='emsTRANS2' type='checkbox'/><span class='ckLabel'>Moved to ambulance on stair chair</span></li>
								<li><input class='ckBox' name='emsTRANS3' type='checkbox'/><span class='ckLabel'>Moved to ambulance on scoop</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Carried to ambulance</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Walked to ambulance</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Met at ambulance</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Restrained during transportation</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>In shock during transportation</span></li>
								<li/>
							</ul>
						</div>					
						<div id="c1" class="columnList" style="width:20%;height:100px;border:none">
							<ul>
								<li><input class='ckBox' name='emsTRANS4' type='checkbox'/><span class='ckLabel'>Transported in Trendelenburg position</span></li>
								<li><input class='ckBox' name='emsTRANS5' type='checkbox'/><span class='ckLabel'>Transported in left lateral recumbent position</span></li>
								<li><input class='ckBox' name='emsTRANS6' type='checkbox'/><span class='ckLabel'>Transported with head elevated</span></li>								
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Transported in position of comfort </span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Transported in prone position</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Transported in sitting position</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Transported in supine position</span></li>
								<li><input class='ckBox' name='emsTRANS7' type='checkbox'/><span class='ckLabel'>Other:&nbsp;<input name="emsTRANS7V1" class="ckInputMedium"/></span></li>
							</ul>
						</div>	

						<div id="c1" class="columnList" style="width:25%;height:100px;border:none">
							<ul>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient bed confined before transport</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient bed confined after transport</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient moved by stretcher</span></li>								
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient unconscious or in shock </span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient required physical restraints</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient visibly hemorrhaging</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Transport was medically necessary</span></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>

						
						<div id="c1" class="columnList" style="width:20%;height:100px;border:none">
							<ul>
								<li><span class='ckLabel' style="font-weight:bold">Facility Transport:</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT1' type='checkbox' /><span class='ckLabel'>Nearest Facility</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>For the benefit of the preferred provider</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>For the nearness of family</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Equipment or specialist not available at 1<sup>st</sup> facility</span></li>
							</ul>
							<ul>
								<li><span class='ckLabel' style="font-weight:bold">Hospital to Hospital transports:</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient was discharged from 1<sup>st</sup> hospital</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient admitted to facility</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Transported to nearest facility</span></li>
							</ul>
						</div>	
										
					</div>
					
					<div class=contentHeader style="clear:both">Names of Crew</div>
					<div class=contentTable style="width:100%;height:100px;border:0px solid black">						

						<table border=0 width=100% style="border:1px solid black">
							<tr>
								<td valign=top style="border:0px solid black">
									<table border=1 id="vitalTable" class=colTable width=100%>
									    <colgroup>
									      <col width=25%/>
									      <col width=25%/>
									      <col width=25%/>
									      <col width=25%/>
									    </colgroup>

									    <thead>
											<tr>
												<th>In Charge:&nbsp;<input id=inCharge style="width:60%"></th>									
												<th>Driver:&nbsp;<input id=driver style="width:60%"></th>									
												<th>Other:&nbsp;<input id=crew1 style="width:60%"></th>									
												<th>Other:&nbsp;<input id=crew2 style="width:60%"></th>									
											</tr>
										</thead>
										
										<tbody id="tbody">
										<tr>
											<td align=left style="border:none">
													<div id="c1" class="columnList" xstyle="width:5em;border:none">
														<ul>
															<li><input class='ckBox ckControl' name='emsInCharge' type='radio'><span class='ckLabel'>EMT</span></input></li>
															<li><input class='ckBox ckControl' name='emsInCharge' type='radio'><span class='ckLabel'>AEMT#</span></input></li>
															<li></li>
														</ul>
													</div>
													<div id="c2" class="columnList" xstyle="width:13em;border:none;vertical-align:middle;">
														#&nbsp;<input id=emsInChargeNumber/>
													</div>
											</td>

											<td align=left style="border:none">
													<div id="c1" class="columnList" xstyle="width:5em;border:none">
														<ul>
															<li><input class='ckBox ckControl' name='emsDriver' type='radio'><span class='ckLabel'>CFR</span></input></li>
															<li><input class='ckBox ckControl' name='emsDriver' type='radio'><span class='ckLabel'>EMT</span></input></li>
															<li><input class='ckBox ckControl' name='emsDriver' type='radio'><span class='ckLabel'>AEMT#</span></input></li>
														</ul>
													</div>
													<div id="c2" class="columnList" xstyle="width:13em;border:none">
														#&nbsp;<input id=emsDriverNumber/>
													</div>
											</td>

											<td align=left style="border:none">
													<div id="c1" class="columnList" xstyle="width:5em;border:none">
														<ul>
															<li><input class='ckBox ckControl' name='emsOther1' type='radio'><span class='ckLabel'>CFR</span></input></li>
															<li><input class='ckBox ckControl' name='emsOther1' type='radio'><span class='ckLabel'>EMT</span></input></li>
															<li><input class='ckBox ckControl' name='emsOther1' type='radio'><span class='ckLabel'>AEMT#</span></input></li>
														</ul>
													</div>
													<div id="c2" class="columnList" xstyle="width:13em;border:none">
														#&nbsp;<input id=emsOther1Number/>
													</div>
											</td>

											<td align=left style="border:none">
													<div id="c1" class="columnList" xstyle="width:5em;border:none">
														<ul>
															<li><input class='ckBox ckControl' name='emsOther2' type='radio'><span class='ckLabel'>CFR</span></input></li>
															<li><input class='ckBox ckControl' name='emsOther2' type='radio'><span class='ckLabel'>EMT</span></input></li>
															<li><input class='ckBox ckControl' name='emsOther2' type='radio'><span class='ckLabel'>AEMT#</span></input></li>
														</ul>
													</div>
													<div id="c2" class="columnList" xstyle="width:13em;border:none">
														#&nbsp;<input id=emsOther2Number/>
													</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>

					</div>
				</div>
				<!-- CONTENT: END   -->
	      		</DIV>
	      	</DIV>


	      	<!-- PANEL EIGHT -->
	      	<DIV id=panel8 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>N a r r a t i v e &nbsp;N o t e s</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content >
			﻿<!--
/**
 * WinEMS
 * Copyright (C) 2006, 2007, 2008, 2009 WinEMS
 * 
 * WinEMS is licensed under the GNU General Public License
 * and the Apache License, Version 2.0, as follows:
 *
 * This program is free software; you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed WITHOUT ANY WARRANTY; without even the 
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 * See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
-->
				<!-- CONTENT: BEGIN -->
				<div style="width:100%;border:0px solid black">

					<div class=contentHeader></div>
					<div class=contentTable style="width:100%;height:50px;border:1px solid black">						
						<div style="width:100%;">
							<input type=button id=refreshNotes onclick="refreshNotes()" value="Refresh Notes"/>
							<input type=button id=refreshNotes onclick="alert('development is in progress')" value="Clear Signature"/>
							<textarea id=narNotes style="width:100%" rows=10></textarea>
						</div>
						<div style="width:100%">Signature:</div>
						<div style="width:100%;border:1px solid black;padding:2px;margin:2px">
							<!-- begin Flash code -->
							<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="flash_object" width="100%" height="111">
								<param id="movieName" name="movie" value="../media/drawing.swf">
								<param name="quality" value="high">
								<param name="scale" value="noborder">
								<param name="bgcolor" value="#ffffff">
								<embed src="../media/drawing.swf" quality="high" scale="noborder" bgcolor="#ffffff" width="400" height="100" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed> 
							</object>
							<!-- end Flash code -->
						</div>

<hr/>
						<div style="width:100%;">
							<!--<img alt="" usemap="" src="../media/refuse2.gif" width=730/>-->

<input class="languagebutton" type="button" value="English" onclick="javascript:refuselanguage('refuse.english');"/>
<input class="languagebutton" type="button" value="Spanish" onclick="javascript:refuselanguage('refuse.spanish');"/>
<input class="languagebutton" type="button" value="Portugese" onclick="javascript:refuselanguage('refuse.portugese');"/>
<input class="languagebutton" type="button" value="Russian" onclick="javascript:refuselanguage('refuse.russian');"/>
<input class="languagebutton" type="button" value="German" onclick="javascript:refuselanguage('refuse.german');"/>
<input class="languagebutton" type="button" value="Arabic" onclick="javascript:refuselanguage('refuse.arabic');"/>
<input class="languagebutton" type="button" value="Italian" onclick="javascript:refuselanguage('refuse.italian');"/>
<input class="languagebutton" type="button" value="Dutch" onclick="javascript:refuselanguage('refuse.dutch');"/>
							
<h2>
<div id="refusetext">
<div id="refuse.english">
I hereby refuse emergency medical treatment and/or transportation to the nearest emergency medical facility.
I acknowledge that such treatment was advised by the ambulance technician or physician.
I hereby release such persons from liability for respecting my wishes and following my express directions.						
</div>

<div id="refuse.spanish" style="display:none">
Por la presente se niegan tratamiento médico de emergencia y / o transporte a la instalación médica de emergencia más cercana.
Reconozco que ese tratamiento fue aconsejado por el técnico de ambulancia o médico.
Por la presente, la liberación de esas personas de la responsabilidad por el respeto de mis deseos y mis expresar siguientes direcciones.
</div>

<div id="refuse.russian" style="display:none">
Настоящим отказать чрезвычайной медицинской помощи и / или транспортировку до ближайшего аварийного медицинское учреждение.
Я признаю, что такое обращение было сообщено на скорой помощи техник или врач.
Настоящим освободить таких лиц от ответственности за соблюдение моих пожеланий и после моей выразить направлениях.
</div>

<div id="refuse.arabic" dir="rtl" style="display:none">
أقدم هنا رفض العلاج الطبي في حالات الطوارئ و / او النقل الى اقرب مرفق طبي للطوارئ.
اني اعترف ان هذه المعامله ينصح بها الطبيب او فني اسعاف.
أقدم هنا الافراج عن هؤلاء الاشخاص من المسؤولية عن احترام امنياتي والتعبير عن الاتجاهات التالية بلادي.
</div>

<div id="refuse.italian" style="display:none">
Io qui rifiutare il trattamento medico di emergenza e / o il trasporto alla più vicina struttura medica di emergenza.
Riconosco che tale trattamento è stato consigliato dal medico o tecnico ambulanza.
Con la presente versione da tali persone responsabilità per il rispetto e la mia voglia esprimere la mia seguenti direzioni.
</div>

<div id="refuse.portugese" style="display:none">
I decide recusar tratamento médico de urgência e / ou de transporte para o médico de urgência mais próximo facilidade.
Reconheço que tal tratamento foi advertido pela ambulância técnico ou médico.
I decide libertar essas pessoas de responsabilidade por respeitando meus desejos e expressar a minha seguintes direções.
</div>

<div id="refuse.dutch" style="display:none">
Ik weiger dringende medische behandeling en / of vervoer naar de dichtstbijzijnde medische faciliteit.
Ik erken dat een dergelijke behandeling is geadviseerd door de ambulance technicus of arts.
Ik vrijlating van deze personen van de aansprakelijkheid voor het respecteren van mijn wensen en na mijn uitdrukkelijke richtingen.
</div>

<div id="refuse.german" style="display:none">
Ich hiermit verweigern Notfall medizinische Behandlung und / oder den Transport zum nächstgelegenen Notfall medizinische Einrichtung.
Ich anerkenne, dass sich eine solche Behandlung empfohlen wurde von der Ambulanz Techniker oder Arzt.
Ich hiermit die solche Personen von der Haftung für die Einhaltung meine Wünsche und meine ausdrückliche folgenden Richtungen.
</div>
</div>

</h2>
						</div>
						<div style="width:100%">Patient Signature:</div>
						<div style="width:100%;border:1px solid black;padding:2px;margin:2px">
							<!-- begin Flash code -->
							<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="flash_object" width="100%" height="111">
								<param id="movieName" name="movie" value="../media/drawing.swf">
								<param name="quality" value="high">
								<param name="scale" value="noborder">
								<param name="bgcolor" value="#ffffff">
								<embed src="../media/drawing.swf" quality="high" scale="noborder" bgcolor="#ffffff" width="400" height="100" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed> 
							</object>
							<!-- end Flash code -->
						</div>

					</div>

				</div>
				<!-- CONTENT: END   -->
	      		</DIV>
	      	</DIV>

	      	<!-- PANEL NINE -->
	      	<DIV id=panel9 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>A u t h o r i z a t i o n</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content >
			﻿<!--
/**
 * WinEMS
 * Copyright (C) 2006, 2007, 2008, 2009 WinEMS
 * 
 * WinEMS is licensed under the GNU General Public License
 * and the Apache License, Version 2.0, as follows:
 *
 * This program is free software; you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed WITHOUT ANY WARRANTY; without even the 
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 * See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
-->
				<!-- CONTENT: BEGIN -->
				<div style="width:100%;border:0px solid black">

					<div class=contentHeader></div>
					<div class=contentTable style="width:100%;height:50px;border:1px solid black">						

						<div style="font-weight:normal">
						I request that payment of authorized Medicare, Medicaid, or any other insurance benefits be made on my behalf to Senior Care EMS for any services provided to me by Senior Care now or in the future.  I understand that I am financially responsible for the services provided to me by Senior Care MES regardless of my insurance coverage, and in some cases, may be responsible for an amount in addition to that which was paid by my insurance.  I agree to immediately remit to Senior Care EMS amy payments that I receive directly from insurance or any source whatsoever for the services provided to me and I assign all rights to such payments to Senior Care EMS.  I authorize Senior Care EMS to to appeal payment denials or other adverse decisions on my behalf without further authorization.  I authorize and direct any holder of medical information or documentation about me to release such information to Senior Care EMS and its billing agents, and/or the Centers for Medicare andMedicaid Services and its carriers and agents, and/or any other payers or insurers as may be necessary to determine these or other benefits payable for any services provided to me by Senior Care EMS, now or in the future.  A copy of this form is as valid as an original.
						</div>
						<br/>
						<span><b>Privacy Practices Acknowledgment: </b></span><span style="font-weight:normal">by signing below, I acknowledge that I have received Senior Care EMS Notice of Privacy Practices.</span>
						<hr/>
						<center>
						<div  style="font-size:10pt">SIGNATURE SECTION: One of the following three sections MUST be completed.</div>
						</center>

						<div class=contentTable style="border:1px solid black">
						<div style="font-size:10pt">SECTION I - PATIENT SIGNATURE</div>
						<br/>
						<span style="font-weight:normal">The patient must sign here unless the patient is physically or mentally incapable of signing:</span>
						<br/>
											<div style="width:100%">Patient Signature or Mark:</div>
												<div style="width:100%;border:1px solid black;padding:2px;margin:2px">
													<!-- begin Flash code -->
													<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="flash_object" width="100%" height="111">
														<param id="movieName" name="movie" value="../media/drawing.swf">
														<param name="quality" value="high">
														<param name="scale" value="noborder">
														<param name="bgcolor" value="#ffffff">
														<embed src="../media/drawing.swf" quality="high" scale="noborder" bgcolor="#ffffff" width="400" height="100" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed> 
													</object>
													<!-- end Flash code -->
												</div>
						<br/>
						<span style="font-weight:normal">If the patient signs with an "X" or other mark, it is recommended that someone sign below as a witness:</span>
						<br/>
											<div style="width:100%">Witness Signature:</div>
												<div style="width:100%;border:1px solid black;padding:2px;margin:2px">
													<!-- begin Flash code -->
													<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="flash_object" width="100%" height="111">
														<param id="movieName" name="movie" value="../media/drawing.swf">
														<param name="quality" value="high">
														<param name="scale" value="noborder">
														<param name="bgcolor" value="#ffffff">
														<embed src="../media/drawing.swf" quality="high" scale="noborder" bgcolor="#ffffff" width="400" height="100" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed> 
													</object>
													<!-- end Flash code -->
												</div>
											<div style="width:100%">Witness Printed Name: <input class='wideInput'/></div>
						<br/>
						<span style="font-weight:bold">If patient is physically or mentally incapable of signing, Section II must be completed.</span>
						<br/>
						</div>						

						<br/>
						
						<div class=contentTable style="border:1px solid black">
						<div style="font-size:10pt">SECTION II - AUTHORIZED REPRESENTATIVE SIGNATURE</div>
						<br/>
						<div style="font-weight:normal">Complete this section <b><u>only</u></b> if patient is physically or mentally incapable of signing.</div>
						<div style="font-weight:normal">Reason the patient is physically or mentally incapable of signing:<input class='wideInput'/></div>

						<div style="font-weight:normal">Authorized representatives include <b><u>only</u></b> the following individuals (check one):</div>
							<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Patient's Legal Guardian</span>
							<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Patient's Health Care Power of Attorney</span>
							<br/>
							<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Relative or other person who receives government benefits on behalf of patient</span>
							<br/>
							<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Relative or other person who arranges treatment or handles the patient's affairs</span>
							<br/>
							<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Representative of an agency or institution that furnished care, services or assistance to the patient.</span>

						<div style="font-weight:normal"><i>I am signing on behalf of the patient.  I recognize that signing on behalf of the patient is not an acceptance of financial responsibility for the services rendered.</i></div>
						
											<div style="width:100%">Representative's Signature:</div>
												<div style="width:100%;border:1px solid black;padding:2px;margin:2px">
													<!-- begin Flash code -->
													<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="flash_object" width="100%" height="111">
														<param id="movieName" name="movie" value="../media/drawing.swf">
														<param name="quality" value="high">
														<param name="scale" value="noborder">
														<param name="bgcolor" value="#ffffff">
														<embed src="../media/drawing.swf" quality="high" scale="noborder" bgcolor="#ffffff" width="400" height="100" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed> 
													</object>
													<!-- end Flash code -->
												</div>
											<div style="width:100%">Representatives Printed Name: <input class='wideInput'/></div>

						</div>						
						
						<br/>
						
						<div class=contentTable style="border:1px solid black">
						<div style="font-size:10pt">SECTION III - EMERGENCIES ONLY - AMBULANCE CREW AND FACILITY REPRESENTATIVE SIGNATURES</div>
						<br/>
						<div style="font-weight:normal">Complete this section <b><u>only</u></b> for emergency ambulance transports, if patient was physically or mentally incapable of signing, <b><u>and</u></b> no authorized representative (as listed in Section II) was available or willing to sign on behalf of the patient at the time of service.</div>
						<br/>
						<div>A. Ambulance Crew Member Statement (must be completed by crew member at time of transport)</div>
						<div style="font-weight:normal">My signature below indicates that, at the time of service, the patient named above was physically or mentally incapable of signing, and that none of the authorized representatives listed in Section II of this form were available or willing to sign on the patient's behalf.</div>
											<span style="font-weight:normal">Reason patient incapable of signing: <input class='wideInput'/></span>
											<span style="font-weight:normal">Name and Location of Receiving Facility: <input class='wideInput'/></span>
											<br/>
											<span style="font-weight:normal">Time at Receiving Facility: <input class='mediumInput'/></span>
											
											<div style="width:100%">Signature of Crewmember:</div>
												<div style="width:100%;border:1px solid black;padding:2px;margin:2px">
													<!-- begin Flash code -->
													<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="flash_object" width="100%" height="111">
														<param id="movieName" name="movie" value="../media/drawing.swf">
														<param name="quality" value="high">
														<param name="scale" value="noborder">
														<param name="bgcolor" value="#ffffff">
														<embed src="../media/drawing.swf" quality="high" scale="noborder" bgcolor="#ffffff" width="400" height="100" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed> 
													</object>
													<!-- end Flash code -->
												</div>
											<div style="width:100%">Printed Name of Crewmember: <input class='wideInput'/></div>
						
						<br/>
						<br/>
						
						<div>B. Receiving Facility Representative Signature</div>
						<div style="font-weight:normal">The above-named patient was received by this facility at the date and time indicated above.</div>

												<div style="width:100%">Signature of Receiving Facility Representative:</div>
												<div style="width:100%;border:1px solid black;padding:2px;margin:2px">
													<!-- begin Flash code -->
													<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="flash_object" width="100%" height="111">
														<param id="movieName" name="movie" value="../media/drawing.swf">
														<param name="quality" value="high">
														<param name="scale" value="noborder">
														<param name="bgcolor" value="#ffffff">
														<embed src="../media/drawing.swf" quality="high" scale="noborder" bgcolor="#ffffff" width="400" height="100" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed> 
													</object>
													<!-- end Flash code -->
												</div>
											<div style="width:100%">Printed Name of Receiving Facility Representative: <input class='wideInput'/></div>

						<br/>
						<br/>
						<div>C. Secondary Documentation</div>
						<div style="font-weight:normal">If no facility representative signature is obtained, the ambulance crew should attempt to obtain one or more of the following forms of documentation from the receiving facility that indicates that the patient was transported to that facility by ambulance on the date and time indicated above.  The release of this information by the hospital to the ambulance service is expressly permitted by Section 164.506(c) of HIPAA.</div>

							<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel' style="width:40%">Patient Care Report (signed by representative of facility)</span>
							<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel' style="width:40%">Facility Face Sheet/Admissions Record</span>
							<br/>
							<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel' style="width:40%">Patient Medical Record</span>
							<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel' style="width:40%">Hospital Log or Other Similar Facility Record</span>
						

						</div>						
						
						

					</div>

				</div>
				<!-- CONTENT: END   -->
	      		</DIV>
	      	</DIV>

	      	<!-- PANEL TEN -->
	      	<DIV id=panel10 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>A. P. C. F.</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content >
			<!--
/**
 * WinEMS
 * Copyright (C) 2006, 2007, 2008, 2009 WinEMS
 * 
 * WinEMS is licensed under the GNU General Public License
 * and the Apache License, Version 2.0, as follows:
 *
 * This program is free software; you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed WITHOUT ANY WARRANTY; without even the 
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 * See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
-->
				<!-- CONTENT: BEGIN -->
				<div style="width:100%;border:0px solid black">

					<div class=contentTable style="width:100%;xheight:140px;border:0px solid black">			
								
						<table border=0 width=100%>
<!--
							<tr>
								<td>Treatment</td>
							</tr>
-->
							<tr>
								<td valign=top style="border:0px solid black">
									<table id="vitalTable" class=colTable width=100%>
									    <colgroup>
									      <col width=50%/>
									      <col width=50%/>
									    </colgroup>

										<tbody id="tbody">
										<tr>
											
											<td colspan=2 align=left xstyle="border:none">
												<div id="c1" class="columnList" style="width:100%;border:none">
	
													<div>Scheduled Appointment For:</div>

													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Radiation Tx</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Dialysis Tx</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>MRI Scan</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>CT Scan</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Endoscopy</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Angiography</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Out-Patient / Ambulatory Surgery</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Caridac Catheterization</span>
													<br/>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Lymphatic / Venous Procedures</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Wound Care</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Other:</span><input id=other class="ckInputWide"/>

													<br/>
													<hr/>
													
													<div>Physicians Certification Statement -&nbsp;</span><span style="font-weight:normal; font-style:italic">Required by 42 CFR 410.40 (D) for all Non-Emergent transports.</div>
													<div style="font-weight:normal; font-style:normal">In my professional opinion, this patient's medical condition requires transport by Ambulance and the level of care that implies and other means of transport are contraindicated based on the patient's health and safety.</div>

													<br/>
													<input class='ckBox' type='checkbox'/><span style="font-weight:normal; font-style:normal"><b>&nbsp;Patient Bed Confined</b>&nbspand is Unable to get up or out of bed without assistance <b>AND</b> Unable to ambulate <b>AND</b> Unable to sit in a Wheel chair or chair because:
													<br/>

													<div style="padding-left:15px;font-weight:normal;font-style:normal">Note: The term applies to individuals who are unable to tolerate any activity out of bed.  This term is <b><i>not</i></b> synonymous with "Bed Rest", or "Non-Ambulatory", or "Stretcher Bound".  All three components <b><i>must</i></b> be met in order for the patient to meet the requirements of the definition of "Bed Confined".</div>

													<hr/>

													<table>
														<colgroup>
														  <col width=50%/>
														  <col width=50%/>
														</colgroup>
														<tr>
															<td valign="top" style="border:none">
																	<div style="border:none">Requires an Ambulance because:</div>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Unable to hold self in w/c due to:</span><input id=other class="ckInputMedium"/>
																	<br/>

																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Bilateral AKA</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>AKA and opposite BKA</span>
																	<br/>
																	
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Unable to sit for duration of transport due to:</span><input id=other class="ckInputMedium"/>
																	<br/>

																	<br/>
																	<span><b>Decubitus Ulcer of:</b></span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Sacrum</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Buttocks</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Coccyx</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Hip</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Lower Extremity</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Other:</span><input id=other class="ckInputMedium"/>
																	<br/>
																	
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel' style="font-weight:bold">Overall Wasting, too weak to sit up due to:</span><input id=other class="ckInputMedium"/>
																	<br/>
																	
																	<br/>
																	<span><b>Paralysis:</b></span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Hemi</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Semi</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Quadriplegic</span>
																	<br/>
																	
																	<br/>
																	<span><b>Fracture of:</b></span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Neck</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Spine</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Hip</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Leg</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Knee</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Other Fracture:</span><input id=other class="ckInputMedium"/>
																	<br/>

																	<br/>
																	<span><b>Contractures or Abnormal Stiffness or Rigidity of:</b></span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Upper R/L</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Lower R/L Extremities</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Severe Pain due to:</span><input id=other class="ckInputMedium"/>
																	<br/>
																	
																	<br/>
																	<span><b>Psychiatric Issues:</b></span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Danger to Self</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Danger to Others</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Flight Risk</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Chemical or Physical Restraints</span>
																	
																</td>

															<td valign="top" style="border:none">
																	<div style="border:none">Patient Requires Medical Monitoring:</div>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Airway / Suctioning</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Ventilator Dependent</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Seizure Precautions</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>IV / Rx Infusion</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Cardiac Monitoring</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Unable to self-administer Oxygen needed</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Comatose / LOC</span>
																	<br/>
																	
																	<br/>
																	<div style="border:none">Isolation due to:</div>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>MRSA</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>VRE</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>C-DIFF</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>TB</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Meningitis</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Other:</span><input id=other class="ckInputMedium"/>

																	<br/>
																	<br/>
																	<div style="border:none">Other (Describe what or why):</div>
																	<textarea id=narNotes style="width:100%" rows=4></textarea>

															</td>
														</tr>
													</table>
													
													<hr/>
													
													<div style="border:none"><span style="font-weight:normal">I certify the above information is true and correct based on my evaluation of this patient.  I understand that the information herin shall be used by the Department of Health and Human Services to support the determination of Medical Necessity for Ambulance transportation.  This does not guarantee or assure payment shall be made for services rendered to your patient.</span>

													<div><b>Physician or Designee Name (print):</b><input class='ckInputWide' style='width:25%'/>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>MD</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>PA</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>RN</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>SW</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>DP</span>
													</div>
									
													
													<div style="float:left"><b>Physician or Designee Signature:</b></div>
													<div style="float:right">Date:<input class='date'/></div>

													<br/><br/>
													<div style="width:100%;border:1px solid black;padding:2px;margin:2px">
														<!-- begin Flash code -->
														<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="flash_object" width="100%" height="111">
															<param id="movieName" name="movie" value="../media/drawing.swf">
															<param name="quality" value="high">
															<param name="scale" value="noborder">
															<param name="bgcolor" value="#ffffff">
															<embed src="../media/drawing.swf" quality="high" scale="noborder" bgcolor="#ffffff" width="400" height="100" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed> 
														</object>
														<!-- end Flash code -->
													</div>

													<div><b>Senior Care Emergency Medical Services Inc EMT Name:</b><input class='ckInputWide' style='width:25%'/>
													
												</div>
											</td>
										</tr>
									</table>
									
								</td>
							</tr>
						</table>

					</div>

				</div>
				<!-- CONTENT: END   -->
	      		</DIV>
	      	</DIV>

		</DIV>
		
    </TD>
  </TR>
  </TBODY>
</TABLE>
</div>    
<SCRIPT> 

    var totalBurns = 0;
    var c = $('emsDate')
	var today = new Date();
	var Year = today.getFullYear();
	var Month = leadingZero(today.getMonth()+1);
	var Day = leadingZero(today.getDate());
    c.value = Month + "/" + Day + "/" + Year  

	c = $('emsSequence')
	//c.innerHTML = newGuid()
	t = new Date()
	
	c.innerHTML = '4330' + '.' + '101' + '.' + t.getFullYear() + t.getMonth() + t.getDate() + '[' + t.getHours() + ':' + t.getMinutes() + ':' + t.getSeconds() + ']' + '.' + '0001'

	setAge($('emsAge'))

	var mouseX
	var mouseY
	var scrollX
	var scrollY
	document.onmousemove = getMouseXY;

	function getMouseXY(e) 
	{
	    mouseX = event.clientX
	    scrollX = document.body.scrollLeft
	    mouseY = event.clientY
	    scrollY = document.body.scrollTop
	}  
	
	function newGuid()
	{
	    var g = "";
	    for(var i = 0; i < 32; i++)
	    g += Math.floor(Math.random() * 0xF).toString(0xF) + (i == 8 || i == 12 || i == 16 || i == 20 ? "-" : "")
	    return g + "";
	}
	
	function leadingZero(nr)
	{
		if (nr < 10) nr = "0" + nr;
		return nr;
	}
	
	function toCheck(ctrl, currValue)
	{
		if (currValue.toString().length > 0)
			$(ctrl).checked = true
		else
			$(ctrl).checked = false
	}

	// register init for: accordian
	onloads.push( accord ); 
	
	var mainAccordion;
	
	function accord()
	{ 	
		mainAccordion = new Rico.Accordion( 'accordionExample', 
			{
				xpanelHeight:178, 
				xpanelHeights:[178,200,300], 
				onLoadShowTab:0 //2
			} ); 
	} 

	// register init for: rounding
	onloads.push( rounds );
	function rounds()
	{
		new Rico.Effect.Round( null, 'roundNormal' );
		new Rico.Effect.Round( null, 'roundCompact', {compact:true} );
	}

    // perform all necessary inits
	function bodyOnLoad() 
	{
	  for ( var i = 0 ; i < onloads.length ; i++ )
	     onloads[i]();
	}

	showMenuContext()    

    var boolCheckedDispatchMethod = false
    
    function calcMileage()
    {
    	var e = $('emsMileageEnd')
    	var b = $('emsMileageBegin')
    	e = e.value
    	b = b.value
    	   	   	
    	var t = e - b
    	if (t < 0)
    	  t = "##"
    	
    	c = $('calcMileage')
    	c.innerHTML = t
		
    	c = $('emsCalcMileage')
    	c.value = t
    }
    
    function gpsAddress()
    {
    	c = $('emsCallLocation')
    	c.value = "237 Route 59, Suffern, NY; 10901"
    }
    
    function locToDemog()
    {    	
    	c = $('emsAddress')
    	c.value = "237 Route 59, Suffern, NY; 10901"
    	c = $('emsCity')
    	c.value = "Suffern"
    	c = $('emsState')
    	c.value = "NY"
    	c = $('emsZip')
    	c.value = "10901"
    }
    
    function showOnCheck(chk, ctrlName, displayType)
    {
   		c = $(ctrlName)
   		//alert(c)
    	if (chk.checked == true)
    		c.style.display=displayType
		else
		    c.style.display="none"    	  
    }

    function showLocationCode(n)
    {
    	s = getOptionValue(n)
    	if (s != null)
    	{
    	  c = $('dspLocationCode')
    	  c.innerHTML = s
    	  c.style.display="block"
    	}
    	else
    	  c.style.display="none"
    }
    
    function checkDispatchMethod(n)
    {
    	if (getOption(n) == "Scheduled")
    	{
    		$(scheduledTransport).style.display="block"
    		if (!boolCheckedDispatchMethod)
    		{
    			alterTabHeight(0, 50)
    			boolCheckedDispatchMethod = true
    		}
    	}
    	else
    		$(scheduledTransport).style.display="none"
    }

	function setDisposition(n)
	{
    	s = getOptionValue(n)
    	if (s != null)
    	{
    	  c = $('dispCode')
    	  c.value = s
    	  c.style.display="inline"
    	}
	}
	
	function toggleInsurance(insDivName, isShow)
	{
		var insDiv = $(insDivName)
		if (insDiv.style.display == "none")
		{
			alterTabHeight(1, 200)
			insDiv.style.display="block"
		}
		else
		{
			alterTabHeight(1, -200)
			insDiv.style.display="none"
		}
	}

	function toggleTrauma(chk)
	{
   		var c1 = $('emsComplaintTrauma')
		var c2 = $('emsComplaintMedical')
		var c3 = $('emsInjuryMechanism')
		var c4 = $('emsBodyMaps')
		
    	if (chk.checked == true)
		{
    		c1.style.display="block"
			c2.style.display="none"
			c3.style.display="block"
			c4.style.display="block"
			alterTabHeight(2, 700)
		}
		else
		{
			c1.style.display="none"
			c2.style.display="block"
			c3.style.display="none"
			c4.style.display="none"
			alterTabHeight(2, -700)
		}
	}

	toggleTrauma($('emsIsTrauma'))



	function serializeNodeNames(serial, currentElement, depth)
	{
		if (currentElement)
		{
		    var j;
		    var tagName=currentElement.tagName;

			var tagID = nr.innerHTML.replace(/@/g, serial)

			
		    if (tagName == 'INPUT')
				alert(currentElement.innerHTML)
				
		    // Traverse the tree
		    var i=0;
		    var currentElementChild=currentElement.childNodes[i];
		    while (currentElementChild)
		    {
		      // Recursively traverse the tree structure of the child node
		      serializeNodeNames(serial, currentElementChild, depth+1);
		      i++;
		      currentElementChild=currentElement.childNodes[i];
		    }
		}
	}


	function setVitalTime(sectionID)
	{
		var txtHour = $("hour1." + sectionID)
		var txtMin  = $("minute1." + sectionID)
		
		var t = new Date();
		
		txtHour.value = leadingZero(t.getHours());
		txtMin.value  = leadingZero(t.getMinutes());

	}

	
	function addVitalRow()
	{
		var tb = $("vitalTable")
		var vb = $("vitalBody")
		var vr = vb.rows[0]
		var nr = vr.cloneNode(true)

		var sectionID = vb.rows.length
			
		vb.appendChild(nr)

		var allElements = nr.getElementsByTagName("input")
		for (var i = 0; i < allElements.length; i++)
		{
			var newHTML = allElements[i].outerHTML.replace(/@/g, sectionID)
			allElements[i].outerHTML = newHTML
		}
		
		var allElements = nr.getElementsByTagName("a")
		for (var i = 0; i < allElements.length; i++)
		{
			var newHTML = allElements[i].outerHTML.replace(/@/g, sectionID)
			allElements[i].outerHTML = newHTML
		}
		
		alterTabHeight(2, 100)

		}  

	function minusVitalRow()
	{
		var vb = $("vitalBody")
	    var dr = vb.rows.length-1
	    if (dr > 0)
	    {
			vb.deleteRow(dr)
			alterTabHeight(2, -100)
		}
	}  

	function alterTabHeight(tabNo, amount)
	{
		tab = mainAccordion.accordionTabs[tabNo]
		var newHeight = tab.tabHeight + amount
		tab.tabHeight = newHeight
		tab.content.style.height = newHeight + "px"
	}

	function applySelectText(selectCtrl, textCtrl)
	{
		var tc = $(textCtrl);
		tc.value = getOption(selectCtrl);
	}

	function getText(name)
	{
		var c = $(name)
		var r = c.value
	
		if (r == null)
			return ("<" + c.name + ">")
		else if (r.length == 0)
			return ("<" + c.name + ">")
		else
			return r
	}
	
	function getOption(name)
	{
		var c = $(name)
		if (c.selectedIndex == 0)
			return ("<" + c.name + ">")
		else
			return (c.options[c.selectedIndex].text)
	}
	
	function getOptionValue(name)
	{
		var c = $(name)
		if (c.selectedIndex == 0)
			return (null)
		else
			return (c.options[c.selectedIndex].value)
	}


	function getListOptionValue(name)
	{
		var c = $(name)
    	return (c.options[c.selectedIndex].value)
	}

	function getListOptionIndex(name)
	{
		var c = $(name)
    	return (c.selectedIndex)
	}

	function getRadioIndex(radioArray)
	{

		for (i=0; i<radioArray.length; i++)
			if (radioArray[i].checked == true)
				return(i);
		return(-1);
	}
	
	function setALS()
	{
		a = document.all.emsIsALS

		if ( (getOptionValue("alsList1") == null) && (getOptionValue("alsList2") == null) && (getOptionValue("alsList3") == null) )
		{
			//alert('off als')
			//off als
			a[0].checked = false
			a[1].checked = false
			if ( (getOptionValue("blsList1") == null) && (getOptionValue("blsList2") == null) && (getOptionValue("blsList3") == null) )
			{
				//alert('off bls')
				a[1].checked = false
			}
			else
			{
				//alert('on bls')
				a[1].checked = true
			}
		}
		else
		{
			//alert('on als')
			//force als
			a[0].checked = true
			a[1].checked = false
		}
	
	}
		
	function refreshNotes()
	{
		
	 	nn = $("narNotes")
		sCallType = getOptionValue("emsCallType")
		
		callIsALS = (sCallType == "1000" || sCallType == "1005" || sCallType == "1010") ? true : false
		a = document.all.emsIsALS
		diagIsALS = a[0].checked

		var s = ""
		var prefix = ""
	
		if ( callIsALS && !diagIsALS )
		  prefix = "C6 - "

		s = s + prefix
		s = s + "Call was received on "
		s = s + getText("emsDate") + ".\n"
		s = s + "u/a age in years\n"
		s = s + "gender\n"
		s = s + "found on/ in"
		
		nn.value = s
	
	}


	function openPanels(action)
	{
		tabs = mainAccordion.accordionTabs
		if (action == 1)
			for (i=0; i<tabs.length; i++)
				mainAccordion.showTab2(tabs[i], false)
		else if (action == 2)
			for (i=0; i<tabs.length; i++)
				mainAccordion.unShowTab2(tabs[i], false)
		else
			alert("?")
	}

	
	function openPanel(panelNumber)
	{
		openPanels(2) //close them all
		tabs = mainAccordion.accordionTabs
		mainAccordion.showTab2(tabs[panelNumber], false)
	}
	
	function showMedsPage(num)
	{
		for (t=1; t<=3; t++)
		{
			thePage = $("MedsPage" + t)
			if ( (t == num) || (num == 0) )
				thePage.style.display="inline"
			else
				thePage.style.display="none"
		}
	}

	function showConditionsPage(num)
	{
		for (t=1; t<=13; t++)
		{
			thePage = $("ConditionsPage" + t)
			if (t == num)
				thePage.style.display="inline"
			else
				thePage.style.display="none"
		}
	}


// [dFilter] - A Numerical Input Mask for JavaScript
// Written By Dwayne Forehand - March 27th, 2003
// Please reuse & redistribute while keeping this notice.

var dFilterStep

function dFilterStrip (dFilterTemp, dFilterMask)
{
    dFilterMask = replace(dFilterMask,'#','');
    for (dFilterStep = 0; dFilterStep < dFilterMask.length++; dFilterStep++)
		{
		    dFilterTemp = replace(dFilterTemp,dFilterMask.substring(dFilterStep,dFilterStep+1),'');
		}
		return dFilterTemp;
}

function dFilterMax (dFilterMask)
{
 		dFilterTemp = dFilterMask;
    for (dFilterStep = 0; dFilterStep < (dFilterMask.length+1); dFilterStep++)
		{
		 		if (dFilterMask.charAt(dFilterStep)!='#')
				{
		        dFilterTemp = replace(dFilterTemp,dFilterMask.charAt(dFilterStep),'');
				}
		}
		return dFilterTemp.length;
}

function dFilter (key, textbox, dFilterMask)
{
		dFilterNum = dFilterStrip(textbox.value, dFilterMask);
		

		if (key==9)
		{
		    return true;
		}
		else if (key==8&&dFilterNum.length!=0)
		{
		 	 	dFilterNum = dFilterNum.substring(0,dFilterNum.length-1);
		}
 	  else if ( ((key>47&&key<58)||(key>95&&key<106)) && dFilterNum.length<dFilterMax(dFilterMask) )
		{
        dFilterNum=dFilterNum+String.fromCharCode(key);
		}

		var dFilterFinal='';
    for (dFilterStep = 0; dFilterStep < dFilterMask.length; dFilterStep++)
		{
        if (dFilterMask.charAt(dFilterStep)=='#')
				{
					  if (dFilterNum.length!=0)
					  {
				        dFilterFinal = dFilterFinal + dFilterNum.charAt(0);
					      dFilterNum = dFilterNum.substring(1,dFilterNum.length);
					  }
				    else
				    {
				        dFilterFinal = dFilterFinal + "";
				    }
				}
		 		else if (dFilterMask.charAt(dFilterStep)!='#')
				{
				    dFilterFinal = dFilterFinal + dFilterMask.charAt(dFilterStep); 			
				}
//		    dFilterTemp = replace(dFilterTemp,dFilterMask.substring(dFilterStep,dFilterStep+1),'');
		}


		textbox.value = dFilterFinal;
    return false;
}

function replace(fullString,text,by) {
// Replaces text with by in string
    var strLength = fullString.length, txtLength = text.length;
    if ((strLength == 0) || (txtLength == 0)) return fullString;

    var i = fullString.indexOf(text);
    if ((!i) && (text != fullString.substring(0,txtLength))) return fullString;
    if (i == -1) return fullString;

    var newstr = fullString.substring(0,i) + by;

    if (i+txtLength < strLength)
        newstr += replace(fullString.substring(i+txtLength,strLength),text,by);

    return newstr;
}


function mapClearLists()
{
	$("headMapList").style.display="none"
	$("neckMapList").style.display="none"
	$("thoraxMapList").style.display="none"
	$("abdomenMapList").style.display="none"
	$("armMapList").style.display="none"
	$("legMapList").style.display="none"
	$("miscMapList").style.display="none"
	$("groinMapList").style.display="none"
}


function showMeds(s)
{
	win = $('MedsList')
	//win.style.width = w;
	//win.style.height = h;
	win.style.top =  10  //mouseY - scrollY;
	win.style.left = 10  //mouseX - scrollX;
	win.style.display= (s == 1) ? "" : "none";
}

function mapShow(listName)
{
	mapClearLists();

    var w, h, l, t;
    w = 120;
    h = 100;
    t = $("ron1").style.top + 350  //+ ($("ron1").style.bottom + $("ron1").style.top)/2;
    l = $("ron1").style.left + 150//+ ($("ron1").style.right + $("ron1").style.left)/2;

	win = $(listName)
	win.style.width = w;
	//win.style.height = h;
	win.style.top =  t  //mouseY - scrollY;
	win.style.left = l  //mouseX - scrollX;
	win.style.display="";
	
}

var generalModifier = ''

function mapSelect(listName, boxName, prefix)
{
	if (prefix == null)
	  prefix = ''
	  
	if (prefix == 'General: ')
	  prefix = generalModifier

	v = getListOptionValue(listName);
	c = $(boxName);
	s = c.value;
	if (v == "OTHER")
	{
	  generalModifier = prefix
	  mapShow('miscMapList')
	  // clear it out for next time
	  $(listName).selectedIndex = -1
	  return;
	}
	
	v = prefix + v
		  
	if ((s == null) || (s.length == 0))
	  s = v
	else
	  s = s + "\n" + v
	c.value = s
	mapClearLists();

    n = $(listName).selectedIndex
	
    if (n < 2)  // 0,1 = burns
    {
    	$('emsBurnChk').checked = true
		$('emsBurnPct').value = calcBurns(listName) + "%"
    }
    
    $(listName).selectedIndex = -1
}


function calcBurns(location)
{
	age = $('emsAge').value
	switch (location)
	{
		case 'headMapListBox':
		  totalBurns += (age < 18) ? 18 : 4.5
		  break;
		case 'neckMapListBox':
		  totalBurns += (age < 18) ? 2 : 1
		  break;
		case 'armMapListBox':
		  totalBurns += (age < 18) ? 9 : 5
		  break;
		case 'legMapListBox':
		  totalBurns += (age < 18) ? 13.5 : 9
		  break;
		case 'thoraxMapListBox':
		  totalBurns += (age < 18) ? 18 : 18
		  break;
		case 'abdomenMapListBox':
		  totalBurns += (age < 18) ? 18 : 18
		  break;
		case 'groinMapListBox':
		  totalBurns += (age < 18) ? 1 : 1
		  break;
		default:
		  totalBurns += 1
	}
	return totalBurns;
}

function setAge(ctrl)
{
	try
	{
		age = $(ctrl).value
	}
	catch(e)
	{
		age = 45
	}

	if (age < 18)
	{
	  $('ron2').style.display=''
	  $('ron1').style.display='none'
	}
	else
	{
	  $('ron1').style.display=''
	  $('ron2').style.display='none'
	}
	  
}

function wait(msecs)
{
	var start = new Date().getTime();
	var cur = start
	while(cur - start < msecs)
	{
		cur = new Date().getTime();
	}
}

function saveRun(saveType)
{

	// process remaining data...
	setTreatments();
	
	frm = $('pcrdata')
	seq = $('emsSequence')
	frm.action = "/saveRunRemote.php?st=" + saveType + "&xid=" + seq.innerHTML
	frm.submit()
	
	if (saveType == 7)
	{
		var w = window.open ("about:blank","PCR","menubar=1,resizable=1,width=1000,height=700");
		frm.target = "PCR"
		//wait(2000)
		//w.close()
	}
}

function leadingZero(nr)
{
	if (nr < 10) nr = "0" + nr;
	return nr;
}

function pullTime(theCtrl)
{
	t = new Date();
	theCtrl.value = leadingZero(t.getHours()) + ":" + leadingZero(t.getMinutes());
}

function refuselanguage(lang)
{

	var langset = $("refusetext")
	//alert(langset)
	
	var langdivs = langset.childNodes
	//alert(langdivs.length)
	
	for (var i = 0; i < langdivs.length; i++)
	{
		langdivs[i].style.display='none'
	}
	
	langdiv = $(lang)
	langdiv.style.display=''
	
}

function setPhone1(phone1)
{
	//alert(1);
	var phStr = phone1.value;
	//alert(phStr);

	//(555) 222-3333
	//alert(phStr.substring(1,4));
	//alert(phStr.substring(6,9));
	//alert(phStr.substring(10,14));

	$("emsPhone1a").value = phStr.substring(1,4);
	$("emsPhone1b").value = phStr.substring(6,9);
	$("emsPhone1c").value = phStr.substring(10);
	
}

function addHiddenValue(elName, elValue) 
{
  var frm = $('pcrdata');
  hv = $(elName);
  if (hv == null)
  {
	  var hv = document.createElement('input');
	  hv.setAttribute('name', elName);
	  hv.setAttribute('type', 'hidden');
	  hv.value = elValue;
	  frm.appendChild(hv);
  }
  else
	  hv.value = elValue;
}


function addHiddenCheck(elName, elSource)
{
  var frm = $('pcrdata');
  hv = $(elName);
  if (hv == null)
  {
	  var hv = document.createElement('input');
	  hv.setAttribute('name', elName);
	  hv.setAttribute('type', 'hidden');
	  hv.value = $(elSource).checked ? "Yes" : "Off";
	  frm.appendChild(hv);
  }
  else
  {
	  hv.value =  $(elSource).checked ? "Yes" : "Off";
  }
}


function pullTreatment(emsID, hiddenID)
{
	
	$(hiddenID).value = $(emsID).checked ? "Yes" : "Off";
}


function getCallType()
{
	var ct = getOptionValue("emsCallType");
	
	if ((ct == "995") || (ct == "1005"))
		return("0"); //emergency

	if ((ct == "B2") || (ct == "B3") || (ct == "001"))
		return("2"); //standby
		
	return("1"); //non emergency
}

function getSeatBelts()
{
	var su = getRadioIndex(document.all.emsSeatBeltUsed);
	if (su == 0)
		return ("Y");
	if (su == 1)
		return ("N");
	if (su == 2)
		return ("?");
}

function setTreatments()
{

	// (123) 678-0123
	addHiddenValue("emsPhone1a", $("emsPhone1").value.substring(1,4));
	addHiddenValue("emsPhone1b", $("emsPhone1").value.substring(6,9));
	addHiddenValue("emsPhone1c", $("emsPhone1").value.substring(10));

	// 01/34/6789
	addHiddenValue("emsDOBa", $("emsDOB").value.substring(0,2));
	addHiddenValue("emsDOBb", $("emsDOB").value.substring(3,5));
	addHiddenValue("emsDOBc", $("emsDOB").value.substring(6));

    addHiddenValue("callReceived", getCallType());
	
	//addHiddenValue("callLocation", getOptionValue("emsLocationType"));
	addHiddenValue("callLocation", $("emsLocationType").selectedIndex);

	addHiddenValue("emsChiefComplaint", $("emsIsTrauma").checked ? $("emsChiefComplaintTrauma").value : $("emsChiefComplaintMedical").value );

	addHiddenCheck("MI1", "emsMI1");
	addHiddenValue("MI1V1", getSeatBelts());

	addHiddenCheck("MI2", "emsMI2");

	addHiddenCheck("MI3", "emsMI3");
	addHiddenValue("MI3V1", $("emsMI3V1").value);

	addHiddenCheck("MI4", "emsMI4");

	addHiddenCheck("MI5", "emsMI5");

	addHiddenCheck("MI6", "emsMI6");

	addHiddenCheck("MI7", "emsMI7");

	addHiddenCheck("MI8", "emsMI8");
	addHiddenValue("MI8V1", $("emsMI8V1").value);

	addHiddenCheck("MI9", "emsMI9");
	addHiddenValue("MI9V1", $("emsMI9V1").value);

	addHiddenValue("MI10A", getRadioIndex(document.all.emsSeatBeltUsed));
	
	addHiddenCheck("MI11", "emsMI11");
	addHiddenCheck("MI12", "emsMI12");
	addHiddenCheck("MI13", "emsMI13");
	addHiddenCheck("MI14", "emsMI14");

	addHiddenCheck("CARE1", "emsCARE1");
	addHiddenCheck("CARE2", "emsCARE2");
	addHiddenCheck("CARE3", "emsCARE3");
	addHiddenCheck("CARE3V1", "emsCARE3V1");
	addHiddenCheck("CARE4", "emsCARE4");
	addHiddenCheck("CARE5", "emsCARE5");


	addHiddenCheck("PP1", "emsPP1");
	addHiddenCheck("PP2", "emsPP2");
	addHiddenCheck("PP3", "emsPP3");
	addHiddenCheck("PP4", "emsPP4");
	addHiddenCheck("PP5", "emsPP5");
	addHiddenCheck("PP6", "emsPP6");
	addHiddenCheck("PP7", "emsPP7");
	addHiddenCheck("PP8", "emsPP8");
	addHiddenCheck("PP9", "emsPP9");
	addHiddenCheck("PP10", "emsPP10");
	addHiddenCheck("PP11", "emsPP11");
	addHiddenCheck("PP13", "emsPP13");
	addHiddenCheck("PP14", "emsPP14");
	addHiddenCheck("PP15", "emsPP15");
	addHiddenCheck("PP16", "emsPP16");
	addHiddenCheck("PP17", "emsPP17");
	addHiddenCheck("PP18", "emsPP18");
	addHiddenCheck("PP19", "emsPP19");
	addHiddenCheck("PP20", "emsPP20");
	addHiddenCheck("PP21", "emsPP21");
	addHiddenCheck("PP22", "emsPP22");
	addHiddenCheck("PP23", "emsPP23");
	addHiddenCheck("PP24", "emsPP24");
	addHiddenCheck("PP25", "emsPP25");
	addHiddenCheck("PP26", "emsPP26");
	addHiddenCheck("PP27", "emsPP27");
	addHiddenCheck("PP28", "emsPP28");
	addHiddenCheck("PP29", "emsBurnChk");
	addHiddenValue("PP29V1", $("emsBurnChk").checked ? "(" + $("emsBurnPct").value + "%)" : "" );




	
	addHiddenCheck("ALS1", "emsALS1");

	addHiddenCheck("ALS2", "emsALS2");
	addHiddenValue("ALS2V1", $("emsALS2V1").value);

	addHiddenCheck("ALS3", "emsALS3");

	addHiddenCheck("ALS4", "emsALS4");
	addHiddenValue("ALS4V1", $("emsALS4V1").value);
	addHiddenValue("ALS4V2", $("emsALS4V2a").value + ":" + $("emsALS4V2b").value);

	addHiddenCheck("BLS1", "emsBLS1");
	
	addHiddenCheck("BLS2", "emsBLS2");
	
	addHiddenCheck("BLS3", "emsBLS3");

	addHiddenCheck("BLS4", "emsBLS4");
	addHiddenValue("BLS4V1", $("emsBLS4V1a").value + ":" + $("emsBLS4V1b").value);
	addHiddenValue("BLS4V2", $("emsBLS4V2").value);

	addHiddenCheck("BLS5", "emsBLS5");

	addHiddenCheck("BLS6", "emsBLS6");
	addHiddenValue("BLS6V1", $("emsBLS6V1").value);

	addHiddenCheck("BLS7", "emsBLS7");
	addHiddenValue("BLS7A", getRadioIndex(document.all.emsBLS7A));
	
	addHiddenCheck("BLS8", "emsBLS8");
	addHiddenValue("BLS8V1", $("emsBLS8V1a").value + ":" + $("emsBLS8V1b").value);
	addHiddenValue("BLS8V2", $("emsBLS8V2a").value + ":" + $("emsBLS8V2b").value);

	addHiddenCheck("BLS9", "emsBLS9");
	addHiddenValue("BLS9V1", $("emsBLS9V1").value);
	addHiddenValue("BLS9A", getRadioIndex(document.all.emsBLS9A));
	
	addHiddenCheck("BLS10", "emsBLS10");
	addHiddenValue("BLS10V1", $("emsBLS10V1a").value + ":" + $("emsBLS10V1b").value);

	addHiddenCheck("BLS11", "emsBLS11");
	addHiddenValue("BLS11V1", $("emsBLS11V1").value);

	addHiddenCheck("BLS12", "emsBLS12");

	addHiddenCheck("BLS13", "emsBLS13");
	addHiddenValue("BLS13A", getRadioIndex(document.all.emsBLS13A));

	addHiddenCheck("BLS14", "emsBLS14");

	addHiddenCheck("BLS15", "emsBLS15");
	addHiddenValue("BLS15V1", $("emsBLS15V1a").value + ":" + $("emsBLS15V1b").value);
	addHiddenValue("BLS15V2", $("emsBLS15V2").value);

	addHiddenCheck("BLS16", "emsBLS16");

	addHiddenCheck("BLS17", "emsBLS17");
	addHiddenValue("BLS17V1", $("emsBLS17V1a").value + ":" + $("emsBLS17V1b").value);
	addHiddenValue("BLS17V2", $("emsBLS17V2").value);
	addHiddenValue("BLS17A", getRadioIndex(document.all.emsBLS17A));
	addHiddenValue("BLS17B", getRadioIndex(document.all.emsBLS17B));

	addHiddenCheck("TRANS1", "emsTRANS1");

	addHiddenCheck("TRANS2", "emsTRANS2");

	addHiddenCheck("TRANS3", "emsTRANS3");

	addHiddenCheck("TRANS4", "emsTRANS4");

	addHiddenCheck("TRANS5", "emsTRANS5");

	addHiddenCheck("TRANS6", "emsTRANS6");

	addHiddenCheck("TRANS7", "emsTRANS7");
	addHiddenValue("TRANS7V1", $("emsTRANS7V1").value);
	
}

</SCRIPT>

</SCRIPT>


<div id="floatwindow" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;"> 
</form>   
</BODY>

</HTML>

