<?PHP
include($_SERVER['DOCUMENT_ROOT'].'/cookie.php');
include('../../php_uploads/connect_to_database.php');

// MOD: Rick Kehret rkehret@camna.com 1/14/14.  Add logic to optionally query for part numbers.
$query = false;
if(isset($_GET['id'])){
	$id		 = dunderscore($_GET['id']);
	$query	 = "SELECT * FROM products_june WHERE Master_Item_Part_No='$id'";
}

$result = mysql_query($query); // Run the query.

while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
	extract($row);
	$id = $ItemID;
}

if($Short_Description != ''){
	$in = $Short_Description;
}else{
	$in = $item;
}

DEFINE('PAGE', clean($in).' '.$Manufacturer.' '.$Product_Group.' '.$item);
DEFINE('PAGETITLE', PAGE.' - Industrial Adhesive and Sealant Dispensing');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/main.dwt.php" codeOutsideHTMLIsLocked="false" -->
	<head>
		<!-- InstanceBeginEditable name="doctitle" -->
		<title><?PHP echo PAGETITLE; ?></title>
		<!-- InstanceEndEditable -->
		<meta content="text/html; charset=iso-8859-1" />
		<link href="/hkaps.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/cm(wgkxt2).css" media="all" />
		<link rel="stylesheet" type="text/css" href="/css/main.css" media="all" />
		<link rel="stylesheet" type="text/css" href="/css/print(v2wja2).css" media="print" />
		<script language="JavaScript" src="/js/cm(wgkxt2).js" type="text/javascript"></script>
		<script language="JavaScript" src="/js/cm(j1o8o2).js" type="text/javascript"></script>
		<script language="JavaScript" src="/js/rpc(0hkxt2).js" type="text/javascript"></script>
		<!-- InstanceBeginEditable name="head" -->
		<meta name="Description" content="<?PHP echo PAGETITLE; ?>" />
		<!-- InstanceEndEditable --><!-- InstanceParam name="rfq_button" type="boolean" value="false" --><!-- InstanceParam name="Selector" type="boolean" value="false" -->
	</head>
	<body id="ctl00_ctl03_Body1" class="privacy-policy_default " onload="MM_CheckFlashVersion('8,0,0,0', 'Content on this page requires a newer version of Adobe Flash Player. Do you want to download it now?');">
		<a name="top"></a>
		<div id="tableless">
			<div id="container">
				<div id="banner"><div 
						class="inner"><div class="bannernavigation"><span class="inner"><a href="/index.php">Home</a><a href="/about-us/default.php">About Us</a><a href="/products/default.php">Products</a><a href="/services/default.php">Services</a><a href="/industries-served/default.php">&nbsp;Industries Served&nbsp;</a><a href="/faq/default.php">&nbsp;FAQ&nbsp;</a><a href="/contact-us/default.php">Contact Us</a><a href="/case-studies/default.php">Case Studies</a></span></div><div style="clear:both"></div> <span><img src="/images/spacer(8hkxt2).gif"
																																																		width="720" height="10" /></span><a href="/index.php"><img alt="" class="cmx-FloatLeft logo" src="/images/logo(ss5sr2).jpg" width="218" height="122" /></a><span class="marketing-message-bucket"><span class="marketing-message-sub"><a href="/index.php">Industrial Adhesive and<br />Sealant Dispensing</a></span><span class="tag-line-sub"><a href="/index.php">Precision Systems for Meter, <br />Mix and Dispense Applications</a></span><div style="clear:both"></div> <span class="print-address"><p>Kirkco Corporation<br />P.O. Box 509<br />Monroe, NC 28111<br /><br />Phone: (704) 289-7090<br />Fax: (704) 289-7091</p></span></span>
						<span class="blue-header" style="margin-top:45px"></span></div></div><div style="clear:both"></div> <div id="left"><div 
						class="inner"><div id="leftcontent"><span class="left-bucket"><span class="products"><span class="left-header"><a href="/products/default.php">Products by Category</a></span><div style="clear:both"></div> <img alt="" src="/images/left-nav-divider(btqr72).gif" width="200" height="3" class="left-navigation-divider" /><div style="clear:both"></div> <span class="product-links"><ul>
											<li><a href="/products/single-component-systems/default.php">Single Component Systems </a></li>
											<li><a href="/products/two-component-systems/default.php">Two Component Systems </a></li>
											<li><a href="/products/spraying-and-coating/default.php">Spraying and Coating </a></li>
											<li><a href="/products/hot-melt-adhesive-technology/default.php">Hot Melt Adhesive Technology</a> </li>
											<li><a href="/products/cold-glue-adhesive-systems/default.php">Cold Glue Adhesive Systems</a></li></ul></span></span><span class="left-navigation"><span class="left-header"><a href="/services/default.php">Services</a></span><span class="left-navigation-text"><p>Factory Trained Service Assistance, Training and Repairs.</p>
										<ul>
											<li><a href="/services/in-field-installation/default.php">In Field Installation </a>
												<li><a href="/services/training-and-education/default.php">Training &amp; Education </a>
													<li><a href="/services/rebuild-and-repair/default.php">Rebuild &amp; Repair </a></li></ul></span></span><span class="left-navigation"><span class="left-header"><a href="/approved-vendors/default.php">Approved Vendors</a></span><p>Leading Manufacturers of Hot and Cold, Single or Plural Component Adhesive Metering and Dispensing Units.</p>
														<ul><li><a href="/approved-vendors/abb-robotics/default.php">ABB Robotics</a> </li>
															<li><a href="/approved-vendors/hilger-u-kern-dopag-group/default.php">Hilger u Kern / Dopag Group</a> 
																<li><a href="/approved-vendors/graco/default.php">Graco</a> 
																	<li><a href="/approved-vendors/itw-dynatec/default.php">ITW-Dynatec</a> 
																		<li><a href="/approved-vendors/walther-pilot/default.php">Walther Pilot </a>
																			<li><a href="/approved-vendors/wagner-group/default.php">Wagner Group</a> </li>
																			</ul></span><span class="left-navigation"><span class="left-header"><a href="/industries-served/default.php">Industries Served</a></span><p>We have application experience in most all manufacturing fields. Success in serving the industrial, automotive, medical, electronics and other manufacturing markets with precision metering mixing and dispensing equipment. </p>
																				<ul>
																					<li><a href="/industries-served/default.php">Learn More</a></li></ul></span><span class="left-navigation"><span class="left-header"><a href="/case-studies/default.php">Case Studies</a></span><p>Whether you need a consistent bond, accurate electronic encapsulation, proportioning or transferring of adhesives, sealants or lubricants, metering and dispensing of hot melt materials, our equipment offers dependable and lasting performance!</p>
																				<ul>
																					<li><a href="/case-studies/default.php">Learn More</a></li></ul></span></span></div></div></div><div id="main"><div 
																					class="inner"><div id="maincontent">
																						<!-- InstanceBeginEditable name="content" -->
																						<?php if(isset($Product_Group)){ ?>
																							<span class="breadcrumbs"><a href="/index.php"><nobr>Home</nobr></a> > <nobr><a href="/catalog2/default.php">Catalog</a></nobr> > <nobr><?PHP echo '<a href="/catalog2/subdetail.php?s1='.underscore($Product_Group).'&c='.underscore($System).'">'.$Product_Group.'</a>'; ?></nobr> >  <?PHP echo $in; ?></span>
																							<br />
																							&nbsp;<br />
																							<h1 style="clear:both;"><?PHP echo ucwords(clean($in)); ?></h1>
																							<span class="content">

																								<table>
																									<?php
//$id=$_GET['id'];
// MOD: $id set above
																									$query		 = "SELECT * FROM products_june WHERE ItemID='$id'";
																									$result		 = mysql_query($query); // Run the query.
																									$num_rows	 = mysql_num_rows($result);

																									while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
																										if($row['Photo'] != ''){
																											$thisimage = imagename($row['Photo']);
																											echo '<div><img src="/images/catalog_250/'.$thisimage.'" alt="'.depipe($row['Short_Description']).'"/></div>';
																										}
																										foreach($row as $K => $A){

																											switch($K){
																												case 'ItemID':
																												case 'CategoryID':
																												case 'Master_Item':
																												case 'URL_Fragment':
																												case 'Active':
																												case 'Photo':
																												case 'Short_Description':
																												case 'Component':
																												case 'Part':

																													break;
																												case 'Subone':
																													if($A != ''){
																														echo '<tr valign="top"><td><strong>Subcategory</strong>:</td><td> '.depipe($A).'<br /></td></tr>';
																													}

																													break;

																												case 'Subtwo':
																													if($A != ''){
																														echo '<tr valign="top"><td><strong>Subcategory 2</strong>:</td><td> '.depipe($A).'<br /></td></tr>';
																													}

																													break;
																												case 'Master_Item_Part_No':
																													if($A != ''){
																														echo '<tr valign="top"><td><strong>Part No.</strong>:</td><td> '.depipe($A).'<br /></td></tr>';
																													}

																													break;


																												default:
																													if($A != ''){
																														echo '<tr valign="top"><td><strong>'.ucwords(dunderscore($K)).'</strong>:</td><td> '.depipe(optionFormat($A)).'<br /></td></tr>';
																													}

																													break;
																											}
																										}
																									}
																									?>
																								</table>
																								<div align="center"><a href="/request-quote/default.php?id=<?PHP echo $ItemID; ?>" title="Request Quote on <?PHP echo $in; ?>"><img src="/images/rfqbutton.jpg" alt="Request Quote on <?PHP echo $in; ?>" /></a></div>

																							</span>
																						<?php }else{ ?>
																							<div style="padding:10px;margin-top:30px;">
																								<?php echo "<h1>Part number not found</h1>"; ?>
																							</div>
																						<?php } ?>
																						<!-- InstanceEndEditable -->

																					</div></div></div><div id="footer"><div 
																					class="inner"><div class="footerlinks">
																						<a href="/index.php">Industrial Adhesives Home</a> | 
																						<a href="/about-us/default.php">About Us</a> | 
																						<a href="/products/default.php">Products</a> | 
																						<a href="/services/default.php">Services</a> | 
																						<a href="/industries-served/default.php">Industries Served</a> | 
																						<a href="/approved-vendors/default.php">Approved Vendors</a> | 
																						<a href="/case-studies/default.php">Case Studies</a><br />
																						<a href="/engineering-request/default.php">Engineering Request</a> | 
																						<a href="/contact-us/default.php">Contact Us</a> | 
																						<a href="/approved-vendors/default.php">Approved Vendors</a> | 
																						<a href="/careers/default.php">Careers</a> | 
																						<a href="/site-map/default.php">Site Map</a> | 
																						<a href="/privacy-policy/default.php">Privacy Policy</a>
																					</div><span class="copyrightnotice"><span class="copyright">&copy;&nbsp;<?PHP echo date('Y'); ?> </span><span>Kirkco Corporation, P.O. Box 509, Monroe, NC 28111</span></span>By Networks Marketing Group: <a href="http://www.networksmarketinggroup.com/">Charlotte NC Internet Marketing</a></div></div><div style="clear:both"></div> <div id="right"><div 
																					class="inner"><div id="rightcontent"><span class="rightcontent">

																							<div style="position:relative;right:210px;top:45px">
																								<div class="search-home">
																									<h2>Search:</h2>
																									<form method="get" action="/search/search.php">
																										<input type="hidden" value="1" name="search" />
																										<input type="text" name="query" class="search" /> <input type="submit" name="Search" value="Go" />
																									</form>
																								</div>
																								<!--
																									<h2 style="padding-top:5px;margin-top:5px">Part Number Search:</h2><span>
																									<?// MOD: Rick Kehret rkehret@camna.com 1/14/14. Change to part number search ?>
																									<form name="frmSearchBox" action="/catalog2/detail.php" method="get">	
																										<?// MOD RK change query_string to query ?>
																									<input type="text" name="partnum"/>
																									<input type="submit" value="Go"/><br />&nbsp;
																								  </form></span>
																								-->
																							</div>  
																							<div class="cmxvspace" style="height:11px"></div><div style="clear:both"></div> 
																							<span class="calls-to-action" style="position:absolute;top:45px;"><ul>

																									<li><a href="/catalog2/default.php">View Product Catalog </a></li>
																									<li>Call Us: 704-289-7090 </li>
																									<li><a href="/contact-us/default.php">Contact Us </a></li>
																									<li><a href="/engineering-request/default.php">Engineering Request</a></li></ul></span><div style="clear:both"></div> <a href="javascript:cmxPrint()"><img alt="" src="/images/print-icon(aqjd82).gif" width="15" height="15" class="print-icon" /></a><span class="print-text"><a href="javascript:cmxPrint()">View Printable Version</a></span></span></div>
																				</div></div>
																			</div>
																			</div>

																			<!-- Google Analytics Code START -->
																			<script type="text/javascript">

																				var _gaq=_gaq||[];
																				_gaq.push(['_setAccount', 'UA-29710441-1']);
																				if(typeof formViewed!='undefined'){
																					_gaq.push(['_setCustomVar', 1, 'Form Viewed', 'Yes', 2]);
																				}
																				if(typeof formSubmitted!='undefined'){
																					_gaq.push(['_setCustomVar', 2, 'Form Submitted', 'Yes', 2]);
																				}
																				_gaq.push(['_trackPageview']);

																				(function (){
																					var ga=document.createElement('script');
																					ga.type='text/javascript';
																					ga.async=true;
																					ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';
																					var s=document.getElementsByTagName('script')[0];
																					s.parentNode.insertBefore(ga, s);
																				})();

																			</script>
																			<!-- Google Analytics Code END -->


																			</body>
																			<!-- InstanceEnd --></html>