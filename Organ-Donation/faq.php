<?php 
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
session_start(); 
$userID = $_SESSION['userID'];  
$username = $_SESSION['username']; 
$databaseTitle = $_SESSION['title']; 
$databaseUserType = $_SESSION['userType']; 
$datebasePatientFlag = $_SESSION['patientFlag']; 
?>
<!DOCTYPE html>
<html>
<head> 
	<title>Organ Donation</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
<div id="nav">
    <div id="nav_wrapper">
        <ul>
			<li><a href="index.php"><img src = "mainlogo.jpg" width = "40" height = "40" alt = "heart and hands"  /></a></li>
            <li><a href="index.php">Home</a></li>
            <li> <a href="about.php">About Us</a></li>
            <li> <a href="faq.php">FAQ</a></li>
			<?php 
			if(!$userID)
			{
			echo "<li> <a href='register.php'>Register</a>"; 
				echo "<ul>"; 
					echo "<li><a href='register.php'>Donor/Recipient</a></li>"; 
					echo "<li><a href='staffregister.php'>Doctor/Staff</a></li>"; 
                echo "</ul>"; 
			}
			?>
            <li> <a href="profile.php">Account</a>
                <ul>
				<?php
					if(!$username)
						echo "<li><a href='login.php'>Login</a></li>"; 
					else
						echo "<li><a href ='profile.php'>{$username}'s Profile</a></li>";
					?>
				<?php
					if($userID && $databaseUserType != "0") 
					{ echo "<li><a href='reports.php'>Reports</a></li>"; 
					}
					if($userID && ($databaseUserType == "1"))
					{
						echo "<li><a href='matching.php'>Matching</a></li>";
					}
					?>
					<?php
					if($userID && ($databaseUserType == "2"))
					{?>
					<li><a href="scheduler.php">Scheduler</a></li>
					<?php
					}
					?>
					<?php
					if($userID)
					{ ?>
						<li><a href='POA_Management.php'>Power Of Attorney Management</a></li>
						<li><a href='logout.php'>Logout</a></li> 
					<?php }
					?>
                </ul>
            </li>
			<?php
				if($userID)
				{
					echo "<li> <a href='profile.php'>Hello, {$username}</a>"; 
				}
			?>
        </ul>
    </div>
    <!-- Nav wrapper end -->
</div>
<!-- Nav end -->
	<p>&nbsp;</p> 
	<div class = "priority" align="center">
		<h2 class="title"><font face= "Brush Script MT" size = 13px>Know Organ Donation</font></h2>
		<p>&nbsp;</p>
	
	<div class="container page-container">
		<div class="row text-center">
		<div class="col-md-12">
			<div class="accordion">
			<div class="item">
				<div class="heading"><strong>What is Organ Donation? </strong></div>
				<div class="content">
				<p class="p1">Organ donation is the entire practice of retrieving a human organ from a living or deceased person, who is referred to as a Donor, and transplanting it into a recipient. The recipient will be a patient who is suffering from organ failure and who will not survive unless she/he receives an organ replacement. The process of recovering organs is called Retrieval.</p>
				<h4>What is Tissue Donation?</h4>
				<p class="p1">Tissue Donation is the process of Retrieving or Procuring tissues from a living or deceased persons, called a Donor, and transplanted into the Recipient who needs it.</p>
				<p class="p1">Medical Science has made tremendous progress in recent times in the field of organ donation and transplantation, with organ donation from one person capable of saving up to 9 lives and improving the lives of many others.</p>
				<p class="p1">However, due to the prevalence of myths about organ donation, and the lack of awareness about the topic in India, a majority of people do not take up this noble cause for the benefit of others.</p>
				<h4>Which Organs Can Be Donated?</h4>
				<p class="p1">Let’s take a closer look at the different organs that can be donated by a person after death and while the person is still alive. There are eight organs that can be donated and transplanted:</p>
				<ol>
				<li>Kidneys: Both kidneys can be donated by a deceased donor. On average the lifespan of a transplanted kidney is around nine years, but it varies from individual to individual. Of all organs in the human body, the demand for kidneys is the highest, and kidneys are the most frequently donated organs. A kidney disease most likely affects both kidneys at the same time. A living donor can easily donate one kidney to someone and function well for the rest of their lives.</li>
				<li>Liver: The liver is an important organ with primary functions of bile production &amp; excretion; excretion of bilirubin, cholesterol, hormones, and drugs; metabolism of fats, proteins and carbohydrates; enzyme activation; storage of glycogen, vitamins and minerals; synthesis of plasma proteins; blood detoxification and purification. The liver is the only organ in the human body that can grow cells and regenerate. A donated liver from someone who has died (a deceased donor) can further be split into two pieces and transplanted into two different people to save their lives. A living donor can have a portion of her/his liver removed to donate to someone, and the remaining portion will regenerate to almost its full previous size.</li>
				<li>Heart: A heart is a muscular organ which pumps blood through the human body. In a person’s life, the heart will beat around 2.5 billion times on average and keep the blood running in the body. After being retrieved from the donor, a heart can survive for 4-6 hours only.</li>
				<li>Lungs: Single or double-lung transplants can be performed from deceased donors. Additionally, living donors can donate a single lobe from the lungs, though it will not regenerate.</li>
				<li>Pancreas: A deceased donor pancreas can be transplanted into an ailing patient. A living donor can also donate a portion of the pancreas and still retain pancreas functionality.</li>
				<li>Intestine: After death, a donor can donate their intestine. Although quite rare, a living donor can donate a portion of the intestine.</li>
				</ol>
				<p class="p1">In addition to organs, you can also donate tissues such as corneas, skin, bones, ligaments, heart valves etc.</p>
				<p>&nbsp;</p>
				<h4>Which Tissues Can Be Donated?</h4>
				<p class="p1">Layers of cells that function together to serve a specific purpose are called Tissues. Most Tissues should be donated within 6 hours of the donor’s death.</p>
				<ol>
				<li>Cornea: Cornea donation or eye donation is the most common tissue donation. The Cornea is a transparent covering over the eye. It is also the eye’s primary focusing element. Recipients who suffer from corneal blindness can gain their sight again after a corneal transplant. These patients are those who may have been blinded by an accident, infection or disease. Either the entire Cornea can be transplanted or it can be transplanted in parts. A Corneal Transplant is does not need any anti-rejection drugs in the recipient. Corneas from all ages of recipients are effective as long as the Doctors as they are healthy.</li>
				<li>Bones: Bones from deceased donors are used to replace bones of recipients whose bones are cancerous. A Bone transplant can be done instead of amputating the cancerous arm.</li>
				<li>Skin: Skin can be used as grafting for burn victims, acid attack victims or for post-mastectomy breast reconstruction, amongst other things.</li>
				<li>Veins: Donated veins are commonly used in surgeries for cardiac bypass.</li>
				</ol>
				<p class="p1">Apart from these, other tissues that can be donated are muscles, tendons, ligaments, cartilage and heart valves.</p>
				</div>
				</div>
				<div class="item">
				<div class="heading"><strong>Types of Organ Donations</strong></div>
				<div class="content">
				<p class="p1">There are two types of organ donations – Living Organ Donations &amp; Deceased Organ Donations.</p>
				<p class="p1"><strong>Living Organ Donation:</strong> This is when you retrieve an organ from a healthy living person and transplant it into the body of someone who is suffering from end-stage organ failure. This is commonly done in the case of a liver or a kidney failure (because the liver can grow back to its normal size and a donor can survive on one kidney).</p>
				<p class="p1">Living donors are classified as either a near relative or a distant relative/friends etc.</p>
				<p class="p1">A near-relative is spouse, son/daughter, brother/sister, parents, grandparents and grandchildren.</p>
				<p class="p1">Those other than near-relative can be distant relatives and friends who will need the permission of the State Authorization Committee to donate organs. If the hospital refuses to entertain such cases, the patient may send a legal notice to the hospital for not following the Transplant Act.</p>
				<p class="p1"><strong>Deceased Organ Donation:</strong> When we talk about pledging your organs for donation or about organ donation after death, we are talking about Deceased Organ Donation. This is an organ donation from a person who has been declared brain stem dead by a team of authorized doctors at a hospital. A person is said to be brain stem dead when there is an irreversible loss of consciousness, absence of brain stem reflexes and irreversible loss of the capacity to breathe.</p>
				<p class="p1">A lot of people think that whenever and however they die, their organs can be donated. That is not true. In India, organ donation after death is only possible in the case of Brain stem death.</p>
				<p class="p1">Donation after cardiac death is common in the West, but in India it is rare for donations to take place after cardiac death.</p>
				<p class="p1">Although it is possible for organs such as the liver and the kidney to be easily donated from a living donor to a recipient, we should work towards an environment where everyone donates their organs after their deaths (if they can), so no living person should have to donate an organ to another.</p>
				<h4>What Organs Can Be Donated After Death?</h4>
				<p class="p1">All organs and tissues that are viable can be donated after a person dies.</p>
				</div>
				</div>
				<div class="item">
				<div class="heading"><strong>What is the process of Organ Donation?</strong></div>
				<div class="content">
				<h4>The Living Donation Process</h4>
				<ol>
				<li>The living donor needs to undergo some medical tests and evaluations to check and confirm her/his her medical compatibility with the recipient.</li>
				<li>The living donor’s medical compatibility is confirmed by a doctor. Only after all the tests have positively confirmed that the donor is compatible with the recipient, can the transplant take place.</li>
				<li>The living donor’s organs are retrieved surgically by doctors. They will be stored in special chemical solutions briefly until they are transplanted into the recipient.</li>
				<li>The living donor will need to remain under medical care for a few days or weeks after organ retrieval until she/he is fit to go home.</li>
				</ol>
				<h4>The Deceased Donation Process</h4>
				<ol>
				<li>A deceased donor is often someone who has suffered a fatal injury to the head or had Brain Haemorrhage. She/He is declared brain stem dead by a group of medical experts in a hospital.</li>
				<li>The donor’s family has to give consent for the donation before the process of organ retrieval can be carried out. Meanwhile, the donor is kept on life-support with Doctors looking after all her/his needs until the retrieval of the organs is allowed to move forward.</li>
				<li>Suitable recipients for all the organs are identified from a waiting list. They are notified and asked to reach their respective hospitals.</li>
				<li>After retrieval, the body of the donor is respectfully handed over to the family.</li>
				</ol>
				</div>
				</div>
				<div class="item">
				<div class="heading"><strong>How long can an organ survive inside and outside the body in a Deceased Organ Donation?</strong></div>
				<div class="content">
				<p class="p1">A deceased organ donor is kept on a ventilator after she/he has been declared brain-dead. They will remain on the ventilator until necessary approvals are taken and the organs can be retrieved. A Brain stem Dead person’s organs may stay alive for a period of time that may range from a few days to a few weeks. The longer it takes to retrieve the organs, the more they will deteriorate inside the body. Therefore, the entire process of taking counselling of the family, taking permissions etc. should be quickly taken care of. For this to happen, families need to be able to make their decision soon after the brain death has been declared.</p>
				<p class="p1">Once the organs have been retrieved, they cannot be kept outside the body for very long and need to be transplanted fast.</p>
				<table>
				<tbody>
				<tr>
				<td><strong>Heart &amp; Lungs</strong></td>
				<td>4-6 hours</td>
				</tr>
				<tr>
				<td><strong>Liver</strong></td>
				<td>6-12 hours</td>
				</tr>
				<tr>
				<td><strong>Kidneys</strong></td>
				<td>Up to 30 hours</td>
				</tr>
				<tr>
				<td><strong>Intestine</strong></td>
				<td>6 hours</td>
				</tr>
				<tr>
				<td><strong>Pancreas</strong></td>
				<td>6 hours</td>
				</tr>
				</tbody>
				</table>
				<p class="p1">The family of the donor will not receive anything, and the recipient is not charged for the organs. The recipients however will have to pay the costs of transplantation to the hospital where they are being operated. After the donor family gives consent for organ donation, all costs relating to the donor are borne by the hospital.</p>
				</div>
				</div>
				<div class="item">
				<div class="heading"><strong>Organ Allocation Process in India</strong></div>
				<div class="content">
				<p class="p1">Health is a State subject in India and owing to the importance of organ donation, each state has its own Nodal Agency in charge of the allocation of human organs. Each Nodal Agency is connected to all the Transplant Hospitals in the State. All hospitals are required to have their own website linked to the State Nodal Agency so that the hospital waiting lists for all organs is automatically linked to the State Nodal Agency. State Nodal Agency needs to be linked to the concerned Regional Organ &amp; Tissue Transplant Organisation (ROTTO) and that ROTTO lists in turn are to be linked to the National Organ &amp; Tissue Transplant Organisation (NOTTO). This will form the National Waiting-List Registry.</p>
				<p class="p1">In the event of a brain stem death, once the family has agreed to organ donation, the hospital informs its own Nodal Officer in charge of organ donation about the death and the willingness of the family to donate. Of the paired organs such as kidney and lungs, one each is used by the hospital for its own patients on the waiting list and the other is given to the common pool and will be allocated by the Nodal Agency to one of the patients in the other hospitals.</p>
				<p class="p1">The rest of the organs (heart, liver, intestines, and pancreas) can be used by the donor hospital if the hospital is registered to perform those particular transplants and if they have patients on the waiting list. If they do not, then the organs are also given to the common pool and the Nodal Agency will decide their distribution. It is extremely rare to have all recipients in the same hospital, and the organs are usually put in the common pool and allocated accordingly.</p>
				<p class="p1">As per the government’s allocation policy, if organs are retrieved from a government hospital and put into the common pool, then they will be offered to a government hospital first and then to a private hospital in case there are no takers in the government hospital. If the organs are retrieved from a private hospital, then they will be offered to a private hospital first.</p>
				<p class="p1">In the event of a trans-state allocation, the concerned ROTTO as well as NOTTO will be informed and they will oversee the allocation of the organs. For policy related further details, please visit <a href="https://www.notto.gov.in/" rel="nofollow">www.notto.gov.in</a></p>
				<p class="p1">
				</div>
				</div>
				<div class="item">
				<div class="heading"><strong>What potential organ recipients need to know</strong></div>
				<div class="content">
				<p class="p1">The entire process should be clear to patients who need organ transplants. Some basic organ donation information for recipients is given below.</p>
				<ol>
				<li>The patient is recognized by a transplant center/hospital as somebody who is in need of an organ transplant.</li>
				<li>The recipient’s medical profile and details are verified by the Transplant Coordinator and the recipient undergoes the required tests.</li>
				<li>Once the recipient is deemed fit for transplant, he/she is placed on a waiting list of the hospital in which they are seeking treatment. This will be a Hospital which has a license to conduct transplants. They will then wait until they are called by the Hospital in case an organ becomes available. A suitable donor is identified based on medical compatibility with the recipient.</li>
				</ol>
				<p class="p1">Anyone looking for Transplant Hospitals in India can visit our Pan-India Transplant Guide for more information on the following link <a href="https://www.organindia.org/transplant-guide-directory">Organ Transplant Hospitals in India</a></p>
				<p class="p1">There are a few things that organ recipients need to be aware of while going through the transplant process. They should fully conform with the request of the hospital for all information that they may need; hesitation or lack of inclination in sharing information with the hospital could delay the entire process. A constructive and optimistic attitude will also help recipients endure the time spent on the list waiting for a transplant.</p>
				<p class="p1">Unfortunately, the waiting time is long in India due to lack of deceased organ donors. This time-period may vary, from a few months to a few years.</p>
				</div>
				</div>
				<div class="item">
				<div class="heading"><strong>Pledging your organs and becoming an organ donor</strong></div>
				<div class="content">
				<p class="p1">If you want to pledge your organs, you can fill out this form on our Website <a href="https://www.organindia.org/claim-your-donor-card/">Click here</a></p>
				<p class="p1">An important point to note once you register as a donor is that your donor card is not a legal entity or an official document. It is merely an expression of your wish to be a donor. The card that we will send you does not carry any legal weight. But do keep it with you and make sure you let all your friends and family know about your intended choice.</p>
				<h4>Should Organ Donors Talk to Their Families?</h4>
				<p class="p1">Yes! In India it’s more important to talk to your family about your decision than it is to pledge your organs and get a donor card. It is one of the most important conversations that a donor will have during their lifetime. By law In India, organ and tissue donation cannot take place without the written consent of the donor’s family. Therefore, donors should help their families understand the reason behind their decision to be an organ donor. For instance, if they have been inspired by another donor’s or recipient’s story, they could narrate this story to their family so that they understand the sentiment behind this decision. This will make the family more likely to go along with the donor’s decision, if need arises.</p>
				<p class="p1">In India, legally, it is the next of kin of the donor who will decide whether to donate their organs or not. Even if you have pledged your organs, no donation will happen unless the next of kin signs the forms. Therefore, when you do register anywhere to be an organ donor, it’s very important that you discuss your wish to donate with your family. This is to enable your family to carry out your wishes in case the need arises.</p>
				<h4>Can anyone donate organs? Are there any conditions under which organ donation is not possible?</h4>
				<p class="p1">Generally, there is no bar to organ donation and one or the other organ or tissues can be donated at any age. The only people who cannot donate organs are those have/had cancer, HIV or disease-causing bacteria in the bloodstream or body tissues. However even this is not a hard and fast rule. There have been instances where one HIV positive person has donated to another HIV positive patient.</p>
				<p class="p1">However, it is important to do some essential virology screening before accepting the donor. All potential donors will require a virology screen to prevent possible transmission of disease from donor to the recipient. The next of kin should be made aware that this is necessary; if there are any objections by the doctors to the donation, these should be respected.</p>
				<p class="p1">Decisions about an organ’s usability are made at the donor’s time of death or, in the case of living donors, during the pre-transplant screening stage.</p>
				<p class="p1">Know more about <a href="https://www.organindia.org/myths-and-facts/">organ donation facts</a></p>
				</div>
				</div>
				<div class="item">
				<div class="heading"><strong>Situation in India &amp; Data</strong></div>
				<div class="content">
				<p class="p1">Unfortunately, mostly due to unawareness and prejudices, there is a huge shortage of organs that are needed for transplants. It has been seen in umpteen situations that relatives are hesitant and unwilling to donate the organs of their loved ones who have been declared brain dead.</p>
				<p class="p1">Normally the transplant coordinator will approach the relatives with information about organ donation and explain that even in their time of loss, they can help another person to live. It is tough for the relatives at this point to come to a decision especially if they are not familiar with the concept of organ donation. This is the main reason why it is important for the public to know about organ donation, before they are suddenly faced with the possibility at some point in their lives.</p>
				<p class="p1">It is estimated that the total number of brain stem deaths due to accidents in India is nearly 1.5 lakhs annually. Other causes of brain stem death would potentially add many more numbers. However, our organ donation rate is 0.86 per million population. The total number of deceased donors in India in 2017 was only 905.</p>
				<p class="p1">Contrast that to the demand for human organ donation. There is a need of approximately 5 lakh organs annually. Barely 2-3 percent of the demand is met, and many people die of organ failure every year across India.</p>
				<p class="p1">For Deceased Organ Donation data in India please visit the following link to <a href="https://www.organindia.org/deceased-organ-donation-data/">Deceased Organ Donation Data</a></p>
				<h4>Government Agencies</h4>
				<p class="p1"><strong>NOTTO – National Organ and Tissue Transplant Organization</strong></p>
				<p class="p1">The National Organ and Tissue Transplant Organization (NOTTO) is a National level organization. The establishment of NOTTO is mandated as per the Transplantation of human Organs and Tissues (Amendment) Act of 2011. It has been set up under Directorate General of Health Services, Ministry of Health and Family Welfare, Government of India. Their offices are located on the 4th and 5th Floor of the Institute of Pathology (ICMR) Building in Safdarjung Hospital New Delhi.</p>
				<p class="p1">NOTTO functions as the apex centre for All India activities of coordination and networking for procurement and distribution of Organs and Tissues and registry of Organs and Tissues Donation and Transplantation in the country. In addition to its national role, NOTTO is also the nodal networking agency for Delhi and the National Capital Region, and network for Procurement Allocation and Distribution of Organs and Tissues in Delhi and the National Capital Region.</p>
				<p class="p1"><strong>ROTTO – Regional Organ and Tissue Transplant Organisation</strong></p>
				<p class="p1">The Regional Organ &amp; Tissue Transplant Organisation (ROTTO) is the regional government organisation. There are five ROTTOs in India. They function as separate regional branches that ensure protocol amongst the state organisations enlisted under each of them. They are all based in a Government Hospital in the region. Each ROTTO manages about 5-7 States currently and is responsible for activities of coordination as well as networking for procurement, distribution and transplantation of organs and tissues between their respective State Organisations.</p>
				<p class="p1">For more information on this please visit the following <a href="https://www.organindia.org/deceased-organ-donation-data/">link</a></p>
				</div>
				</div>
				</div>
		</div>	
	</div>
	</div>
	<script type="text/javascript">
		$('.accordion .item .heading').click(function() {

		

			var a = $(this).closest('.item');

			var b = $(a).hasClass('open');

			var c = $(a).closest('.accordion').find('.open');

				

			if(b != true) {

				$(c).find('.content').slideUp(200);

				$(c).removeClass('open');

			}



			$(a).toggleClass('open');

			$(a).find('.content').slideToggle(200);



			});

	</script>
</body>
</html>