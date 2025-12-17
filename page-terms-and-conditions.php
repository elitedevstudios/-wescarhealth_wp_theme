<?php
/**
 * Template Name: Terms and Conditions Page
 * 
 * Terms and conditions page template for WesCar Health
 *
 * @package    WescarHealth
 * @subpackage Templates
 */

declare(strict_types=1);

get_header();
?>

<main id="primary" class="site-main">

	<!-- Page Hero -->
	<section class="page-hero">
		<div class="container">
			<div class="page-hero__content">
				<span class="section__badge"><?php esc_html_e( 'Legal', 'wescarhealth' ); ?></span>
				<h1 class="page-hero__title"><?php esc_html_e( 'Terms and', 'wescarhealth' ); ?> <em><?php esc_html_e( 'Conditions', 'wescarhealth' ); ?></em></h1>
				<p class="page-hero__description"><?php esc_html_e( 'Terms of use for WesCar Health services.', 'wescarhealth' ); ?></p>
			</div>
		</div>
	</section>

	<!-- Terms Content -->
	<section class="section legal-content">
		<div class="container container--narrow">
			
			<div class="legal-content__meta animate-on-scroll">
				<p class="legal-content__updated"><?php esc_html_e( 'Effective Date: January 1, 2026', 'wescarhealth' ); ?></p>
			</div>

			<!-- Agreement Notice -->
			<div class="legal-content__notice legal-content__notice--warning animate-on-scroll">
				<p><?php esc_html_e( 'By selecting "I Agree," checking a relevant box to indicate your acceptance, utilizing any other acceptance process presented through the service, or otherwise confirming your acceptance of these terms and conditions, you acknowledge that you have read, understood, and consent to abide by this agreement. If you do not concur with these terms and conditions, refrain from creating an account or using the service.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Arbitration Alert -->
			<div class="legal-content__notice legal-content__notice--emergency animate-on-scroll">
				<p><strong><?php esc_html_e( 'ARBITRATION ALERT: Unless you opt out of arbitration as outlined in this agreement, you agree that any disputes between you and us will be resolved through binding individual arbitration. By agreeing, you waive your right to a jury trial and to participate in a class action lawsuit.', 'wescarhealth' ); ?></strong></p>
			</div>

			<!-- Emergency Notice -->
			<div class="legal-content__section animate-on-scroll">
				<p><strong><?php esc_html_e( 'In the case of a medical emergency, immediately seek in-person emergency care or dial 911. The service is not suitable for all medical conditions or concerns.', 'wescarhealth' ); ?></strong></p>
			</div>

			<!-- Introduction -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Introduction', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'WesCar Health and/or its subsidiaries (referred to as "WesCar Health," "we," or "us") own and manage the website and may in the future own and/or operate a mobile application (collectively known as the "Platform"). Your access to and use of the Platform, any of its components, or any associated elements, including its content ("Content"), any products or services provided through the Platform or otherwise by WesCar Health, and any affiliated websites, software, or applications owned or operated by WesCar Health (collectively including the Platform and the Content, the "Service") are regulated by these Terms and Conditions.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'Throughout this Agreement, the terms "you" and "yours" refer to the individual utilizing the Service. The Service is not intended for individuals under thirteen (13) years of age, and those under thirteen (13) are prohibited from using any aspect of the Service.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Acceptance of Terms -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Acceptance of Terms and Conditions', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'Your use of the Service is subject to this Agreement, as well as relevant laws and regulations. If you do not fully agree to and accept this Agreement, you are strictly prohibited from accessing, registering with, and/or using the Service. The Service is continuously evolving, and we retain the right to revise or eliminate any part of this Agreement or the Service at our sole discretion without prior notification.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Your Relationship with Us -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Your Relationship with Us', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'We offer products and services from WesCar Health as well as those from third-party medical providers, pharmacies, or vendors through our Service to individuals who register as users ("Users"). Our Service provides access to prescription fulfillment services offered by pharmacies.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'Additionally, the Service may offer laboratory services from laboratories. You may gain access to healthcare provided through the Platform by one or more medical groups (referred to as the "Medical Groups"). These Medical Groups employ or contract with healthcare professionals (referred to as "Providers") who offer services through the Platform.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'By accepting this Agreement, you acknowledge that WesCar Health is not a healthcare provider. We do not oversee the practice of medicine by the Medical Groups or Providers, each of whom is solely accountable for directing the medical care or treatment provided to you.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Financial Responsibility -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Notice Regarding Your Financial Responsibility', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'WesCar Health and the Medical Groups are not registered with, nor do they participate as providers in, any federal or state healthcare programs (such as Medicare or Medicaid) for delivering healthcare services or supplies.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'By opting to use the Service, you are expressly choosing to acquire services and products on a cash basis outside of federal or state healthcare programs. As a result, you bear full financial responsibility for all services or products received.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Subscription Products -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Subscription Products and Services', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'Certain products and services accessible via the Service necessitate purchasing via an automatically renewing subscription model. For such subscription-based items, your designated payment method will be automatically charged at specified intervals, as outlined during the checkout process. This cycle continues until you cancel the subscription.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'You can terminate a subscription by contacting support to request cancellation, or through your online account. Cancellation will take effect at the end of the current subscription period. The subscription will renew automatically unless you cancel at least two (2) days prior to the renewal processing date.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Prescription Products -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Prescription Products', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'Certain products offered through the Platform require a valid prescription from a licensed healthcare provider. Prescription products necessitate completion of a consultation with a Provider, who assesses your suitability for the prescription and then provides it if deemed appropriate.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'Upon receiving a prescription, you will receive guidance on how to fill it. Some prescriptions can be fulfilled via our pharmacy partners using the Platform, or you can choose to fill the prescription at any other pharmacy.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Limited Use and Availability -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Limited Use and Availability', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'The Service is currently accessible only to individuals in states where it is offered. Users must be at least eighteen (18) years old or the legal age of majority in their jurisdiction.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'By accessing and using the Service, you (a) assert you meet the age requirements, (b) confirm your location aligns with the shipping address, (c) pledge to adhere to all applicable laws, and (d) commit to lawful use.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'In some instances, the Service may not be the most suitable channel for medical or mental health care and treatment. Certain medical conditions may necessitate in-person procedures or different healthcare providers.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Privacy Policy -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Privacy Policy', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'WesCar Health acknowledges the significance of safeguarding the confidentiality and privacy of your personal information. Please refer to our Privacy Policy for details on how we collect, use, and disclose your personal information.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Registration and User Accounts -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Registration; User Accounts, Passwords, and Security', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'To access the Service, you must register and create an account on the Platform. You commit to keeping your information accurate and up-to-date. Failure to do so or submitting false, incomplete, or inaccurate information may lead to the suspension or termination of your account.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'Notify WesCar Health promptly of any unauthorized use or security breach related to your account. Safeguard the confidentiality of your username and password, and remember to log out after each session. Using someone else\'s account is strictly prohibited.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Use and Ownership -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Use and Ownership of the Service', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'The Service and its information and Content are protected by global copyright laws. Subject to this Agreement, you are granted a limited, non-transferable, revocable license to access and use the Service for personal use.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'All rights in the Service and Content are reserved by WesCar Health unless stated otherwise. WesCar Health and its suppliers retain ownership of all rights, including computer code, themes, images, product descriptions, and more.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Third-Party Products -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Third-Party Products and Services', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'Services or products offered on the Service by parties other than WesCar Health, such as Labs, Pharmacies, Medical Groups, and Providers (collectively referred to as "Third Parties"), are collectively referred to as "Third-Party Products and Services."', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'Any interactions, transactions, or engagements with Third Parties, including payments, product deliveries, and other terms, are solely between you and the respective Third Parties. You acknowledge that WesCar Health is not liable for any losses or damages arising from your use of the Service, including interactions with Third Parties.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Terms of Purchase -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Terms of Purchase', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'All products available for purchase from WesCar Health are subject to availability, and we retain the right to impose limits on quantities or reject any part of an order. Product prices are subject to change at our discretion.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'You are responsible for any applicable taxes, fees, levies, or duties imposed by authorities for your purchases through the Service. Only valid payment methods accepted by us can be used for purchases.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Termination -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Termination', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'WesCar Health may terminate your access to the Service or its features at any time and for any reason, without prior notice. This includes instances where you violate this Agreement or where agreements between WesCar Health and Third Parties cease or when the Service is discontinued.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Binding Arbitration -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Binding Arbitration and Class Waiver', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'Both you and WesCar Health agree that any legal claims, disputes, or controversies between you and our group relating to WesCar Health, the platform, content, service, goods, services, or advertising, that are not resolved through informal dispute resolution, shall be resolved through confidential binding arbitration.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'By agreeing to this arbitration, you acknowledge that you are voluntarily and knowingly waiving your right to a trial by jury and to initiate a lawsuit in state or federal court, except as provided in this agreement.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'Class, collective, and representative actions are not allowed, and claims of multiple customers or users cannot be consolidated. This agreement aims to resolve Disputes on an individual basis.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'Opting out of this arbitration agreement is possible within 30 days of agreeing to these terms by providing written notice of your intent to opt out.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Governing Law -->
			<div class="legal-content__section legal-content__section--highlight animate-on-scroll">
				<h3 class="legal-content__subheading"><?php esc_html_e( 'Governing Law', 'wescarhealth' ); ?></h3>
				<p><?php esc_html_e( 'This agreement is governed by applicable state and federal laws. If any part of this agreement is found to be invalid, the remainder of the agreement will still be in effect.', 'wescarhealth' ); ?></p>
			</div>

		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta">
		<div class="cta__container">
			<h2 class="cta__title"><?php esc_html_e( 'Have Questions?', 'wescarhealth' ); ?></h2>
			<p class="cta__description"><?php esc_html_e( 'If you have any questions about our terms and conditions, please contact us.', 'wescarhealth' ); ?></p>
			<div class="cta__actions">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button button--accent button--lg">
					<span class="button__text"><?php esc_html_e( 'Contact Us', 'wescarhealth' ); ?></span>
					<span class="button__arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></span>
				</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
