<?php
/**
 * Template Name: Privacy Policy Page
 * 
 * Privacy policy page template for WesCar Health
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
				<h1 class="page-hero__title"><?php esc_html_e( 'Privacy', 'wescarhealth' ); ?> <em><?php esc_html_e( 'Policy', 'wescarhealth' ); ?></em></h1>
				<p class="page-hero__description"><?php esc_html_e( 'How we collect, use, and protect your personal information.', 'wescarhealth' ); ?></p>
			</div>
		</div>
	</section>

	<!-- Privacy Policy Content -->
	<section class="section legal-content">
		<div class="container container--narrow">
			
			<div class="legal-content__meta animate-on-scroll">
				<p class="legal-content__updated"><?php esc_html_e( 'Effective Date: January 1, 2026', 'wescarhealth' ); ?></p>
			</div>

			<!-- Introduction -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Introduction', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'This Privacy Policy pertains to the operations of WesCar Health and its subsidiaries ("WesCar Health," "we," or "us"), encompassing our website and any potential present or future mobile applications associated with WesCar Health (collectively referred to as the "Platform"). Your use of the Platform, its components, associated content ("Content"), products/services offered by WesCar Health, and any affiliated sites, software, or applications owned or managed by WesCar Health (collectively including the Platform and Content, the "Service") is governed by this Privacy Policy, unless explicitly stated otherwise.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'We are dedicated to respecting user privacy while utilizing our Service. We have formulated this Privacy Policy to elucidate how WesCar Health collects, employs, and discloses information in the context of providing the Service.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'Upon establishing an account, registering, or logging in through the Service, or by accessing/utilizing the Service, you acknowledge the latest version of this Privacy Policy. If any modifications are made to our Privacy Policy, we will post the updated version and revise the "Last updated" date accordingly.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Usage Restrictions for Minors -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Usage Restrictions for Minors', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'Our Service is generally intended for use by individuals aged 18 years or older, or as stipulated by applicable state laws. The Service is not devised for, or aimed at, children under 13. If we become aware that we have gathered personal data from someone under 13, we will make reasonable efforts to cease further use of such information.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'If you are under 16, you (or your parent/legal guardian if under 13) may request the removal of content/information about you on the Platform by contacting us at our support email with "Removal of Minor Information" in the subject line.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Protected Health Information -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Protected Health Information', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'When creating a WesCar Health account, you establish a customer relationship granting access to Platform functions. You offer data like name, email, shipping, and transaction info, not classified as "protected health information" or "medical information."', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'In certain Service components, you might provide health/medical data protected under laws. WesCar Health is not a "covered entity" under HIPAA, though Labs, Pharmacies, or Medical Groups might be. Data governed by state laws ("Protected Information") follows applicable laws. Non-protected data is governed by this Privacy Policy.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Gathering of Personal Data -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Gathering of Personal Data', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'The personal information we amass is contingent upon your interactions with us, the services you utilize, and the choices you make. We procure details about you from diverse sources and through various methods when you engage with our services.', 'wescarhealth' ); ?></p>
				
				<h3 class="legal-content__subheading"><?php esc_html_e( 'Directly Provided Information', 'wescarhealth' ); ?></h3>
				<ul class="legal-content__list">
					<li><?php esc_html_e( 'Name and contact details, like your name, email address, phone number, billing and physical addresses.', 'wescarhealth' ); ?></li>
					<li><?php esc_html_e( 'Demographic data such as gender, date of birth, and zip code.', 'wescarhealth' ); ?></li>
					<li><?php esc_html_e( 'Payment information, such as credit card numbers, financial account details, and other payment particulars.', 'wescarhealth' ); ?></li>
					<li><?php esc_html_e( 'Content and files, including photos, videos, documents, and other uploads to our Service.', 'wescarhealth' ); ?></li>
				</ul>

				<h3 class="legal-content__subheading"><?php esc_html_e( 'Sensitive Personal Data', 'wescarhealth' ); ?></h3>
				<ul class="legal-content__list">
					<li><?php esc_html_e( 'Government-issued identification like driver\'s license, passport number, and social security numbers.', 'wescarhealth' ); ?></li>
					<li><?php esc_html_e( 'Account access details, such as usernames or account numbers combined with passwords, security/access codes, or other credentials.', 'wescarhealth' ); ?></li>
					<li><?php esc_html_e( 'Health-related data analyzed by us.', 'wescarhealth' ); ?></li>
					<li><?php esc_html_e( 'Biometric information that may be used for identity verification.', 'wescarhealth' ); ?></li>
				</ul>

				<h3 class="legal-content__subheading"><?php esc_html_e( 'Automatically Collected Information', 'wescarhealth' ); ?></h3>
				<ul class="legal-content__list">
					<li><?php esc_html_e( 'Identifiers and device data including IP address, device identifiers, device type, operating system, browser, and software details.', 'wescarhealth' ); ?></li>
					<li><?php esc_html_e( 'Geolocation data depending on device and app settings.', 'wescarhealth' ); ?></li>
					<li><?php esc_html_e( 'Usage data including source URL, viewed pages, time spent on pages, access times, and other actions on our website.', 'wescarhealth' ); ?></li>
					<li><?php esc_html_e( 'Generated information and inferences from collected data to deduce probable preferences or traits.', 'wescarhealth' ); ?></li>
				</ul>
			</div>

			<!-- Cookies and Similar Technologies -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Cookies, Mobile IDs, and Similar Technologies', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'We employ cookies, web beacons, mobile analytics, advertising IDs, and similar tech to operate our online services, collecting data like usage details, identifiers, and device information.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'Cookies are small files stored by your browser on your device, containing alphanumeric strings for identification. We and our partners utilize these technologies to gather personal data, track your activities, analyze website/app performance, deliver tailored advertising, combat fraud, and more.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'A variety of controls exist for managing cookies and related technologies through browsers, mobile OS, and other methods.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Usage of Collected Information -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Usage of Collected Information', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'We utilize the personal information we gather for the purposes outlined in this privacy statement. Below are some examples of how we use personal information:', 'wescarhealth' ); ?></p>
				<ul class="legal-content__list">
					<li><strong><?php esc_html_e( 'Product and Service Delivery:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Providing and delivering our services, including troubleshooting, ensuring smooth navigation, confirming your location, enhancing and personalizing the services.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Business Operations:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Operating our business, such as billing, processing payments, accounting, managing your account, enhancing internal operations, securing systems, detecting fraudulent activities, and meeting legal obligations.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Product Improvement:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Developing, testing, or improving the service, content, features, products, or services. Analyzing traffic and user behavior for insights.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Personalization:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Understanding user preferences to enhance the user experience and enjoyment of our services.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Customer Support:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Providing customer support, fulfilling requests, and responding to inquiries.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Communications:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Sending information related to WesCar Health, medical providers, pharmacies, and healthcare professionals including confirmations, invoices, technical notices, updates, and security alerts.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Marketing:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Communicating about new services, offers, promotions, rewards, contests, events, and other information regarding our services.', 'wescarhealth' ); ?></li>
				</ul>
			</div>

			<!-- Disclosure of Information -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Disclosure of Information', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'We may share personal data in the following circumstances:', 'wescarhealth' ); ?></p>
				<ul class="legal-content__list">
					<li><strong><?php esc_html_e( 'Service Providers:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'We share personal data with vendors or agents who work on our behalf to provide the services described in this statement.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Financial Services & Payment Processing:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'When you provide payment information, we disclose payment and transactional data to banks and relevant entities for payment processing, fraud prevention, and related financial services.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Medical Groups, Providers, Pharmacies, and Labs:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'We facilitate information sharing between you and these entities for service provision and payment collection.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Corporate Transactions:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Personal data may be disclosed in corporate transactions, such as mergers, acquisitions, bankruptcy, or sale of a portion of our business.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Legal and Law Enforcement:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'We might access, disclose, or preserve personal data if required by applicable law or legal process, including requests from law enforcement or government agencies.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Security and Safety:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Personal data could be disclosed to protect customers and prevent fraud, ensure the security of our services, and enforce agreements.', 'wescarhealth' ); ?></li>
				</ul>
			</div>

			<!-- Choice and Control -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Choice and Control of Personal Data', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'We offer various ways for you to control the personal data we possess, including choices about its use. If you wish to access, copy, correct, or delete your personal data held by us, you can do so by contacting us.', 'wescarhealth' ); ?></p>
				<p><?php esc_html_e( 'You can also opt out of promotional communications by following instructions in the message or contacting us. You can manage targeted advertising using browser and platform controls.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Data Retention -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Data Retention', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'We retain your information as long as necessary for various purposes, including legal compliance, dispute resolution, agreements enforcement, and service provision. Other parties with whom we share your information may have their own retention policies.', 'wescarhealth' ); ?></p>
			</div>

			<!-- California Residents -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'California Residents', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'If you are a California resident, you have rights under the California Consumer Privacy Act (CCPA), such as the right to know, correct, or delete your personal information. You can opt out of the sale or sharing of your personal information. We do not knowingly sell or share information of minors under 16.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Miscellaneous -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Miscellaneous', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'We take reasonable measures to protect information, but you are responsible for securing your account. We may update this Privacy Policy and will notify you of material changes.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Contact Us -->
			<div class="legal-content__section legal-content__section--highlight animate-on-scroll">
				<h3 class="legal-content__subheading"><?php esc_html_e( 'Contact Us', 'wescarhealth' ); ?></h3>
				<p><?php esc_html_e( 'If you have questions about this Privacy Policy, please contact us through our contact page or email our support team.', 'wescarhealth' ); ?></p>
			</div>

		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta">
		<div class="cta__container">
			<h2 class="cta__title"><?php esc_html_e( 'Have Questions?', 'wescarhealth' ); ?></h2>
			<p class="cta__description"><?php esc_html_e( 'If you have any questions about our privacy practices, please contact us.', 'wescarhealth' ); ?></p>
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
